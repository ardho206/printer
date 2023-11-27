<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->file("foto")) {
            $file = $request->file("foto");
            $filename = time() .".". $file->getClientOriginalExtension();
            $file->storeAs("/images", $filename);
        }

        Laptop::create([
            'nama'=> $request->nama,
            'harga'=> $request->harga,
            'spesifikasi'=> $request->spesifikasi,
            'jenis'=> $request->jenis,
            'foto'=> $filename,
        ]);

        return redirect()->route("dashboard.laptop")->with("success","product add successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Laptop $laptop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laptop $laptop)
    {
        $imageName = '';
        if ($request->hasFile('foto')) {
            $file = $request->file("foto");
            $imageName = time() .".". $file->getClientOriginalExtension();
            $file->storeAs("/images", $imageName);
            if ($laptop->foto) {
                Storage::delete('images/' . $laptop->foto);
            }
        } else {
            $imageName = $laptop->foto;
        }

        $laptop->update([
            'nama'=> $request->nama,
            'harga'=> $request->harga,
            'spesifikasi'=> $request->spesifikasi,
            'jenis'=> $request->jenis,
            'foto'=> $imageName
        ]);

        return redirect()->route('dashboard.laptop')->with('success','Product Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Laptop::find($id)->delete();
    }
}
