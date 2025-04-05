<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('reservas', App\Http\Controllers\ReservaController::class)->middleware('auth');

Route::resource('clientes', App\Http\Controllers\ClienteController::class)->middleware('auth');

Route::resource('servicios', App\Http\Controllers\ServicioController::class)->middleware('auth');

Route::resource('trabajadores', App\Http\Controllers\TrabajadoreController::class)->middleware('auth');
