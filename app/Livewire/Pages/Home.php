<?php

namespace App\Livewire\Pages;

use App\Models\Printer;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;

#[Title('Can Print')]
class Home extends Component
{

    public function render()
    {
        $user = Auth::user();

        return view('livewire.pages.home', compact('user'))->extends('layouts.app')->section('content');
    }
}
