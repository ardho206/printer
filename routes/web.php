<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaptopController;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\Laptop;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Home::class)->name('home');


Route::middleware('auth')->as('dashboard')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dashboard/laptop', [DashboardController::class, 'laptop'])->name('.laptop');
    Route::post('/dashboard/laptop/add', [LaptopController::class, 'store'])->name('.laptop.store');
    Route::post('/dashboard/laptop/edit/{id}', [LaptopController::class, 'update'])->name('.laptop.update');
    Route::delete('/dashboard/laptop/delete/{id}', [LaptopController::class, 'destroy'])->name('.laptop.destroy');
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login')->middleware('guest');
    Route::post('/regist', 'registration')->middleware('guest');
    Route::post('/logout', 'logout')->middleware('auth');
});
