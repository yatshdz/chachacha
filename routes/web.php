<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

// Dashboard principal en /home
Route::get('/home', [HomeController::class, 'index'])
    ->name('home')
    ->middleware('auth');

Route::resource('reservas', App\Http\Controllers\ReservaController::class)->middleware('auth');

Route::resource('clientes', App\Http\Controllers\ClienteController::class)->middleware('auth');

Route::resource('servicios', App\Http\Controllers\ServicioController::class)->middleware('auth');

Route::resource('trabajadores', App\Http\Controllers\TrabajadoreController::class)->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
