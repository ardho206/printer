<?php

namespace App\Livewire\Pages;

use App\Models\Laptop as ModelsLaptop;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Laptop extends Component
{
    public function render()
    {
        $user = Auth::user();
        $laptop = ModelsLaptop::latest()->paginate(5);

        return view('livewire.pages.laptop', ['laptop' => $laptop, 'user'])->extends('livewire.dashboard')->section('content');
    }
}
