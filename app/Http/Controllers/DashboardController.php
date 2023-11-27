<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view("livewire.dashboard", compact("user"));
    }

    public function laptop()
    {
        $user = Auth::user();
        $laptop = Laptop::latest()->paginate(5);

        return view("livewire.pages.laptop", compact("user", "laptop"));
    }
}
