<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('perfiles', App\Http\Controllers\PerfileController::class)->middleware('auth');
Route::resource('reservas', App\Http\Controllers\ReservaController::class)->middleware('auth');
Route::resource('resenas', App\Http\Controllers\ResenaController::class)->middleware('auth');
Route::resource('pagos', App\Http\Controllers\PagoController::class)->middleware('auth');
Route::resource('notificaciones', App\Http\Controllers\NotificacioneController::class)->middleware('auth');
Route::resource('roles', App\Http\Controllers\RoleController::class)->middleware('auth');
