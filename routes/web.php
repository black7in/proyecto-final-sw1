<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::get('restaurante', [\App\Http\Controllers\RestauranteController::class, 'show'])->name('restaurante.show');
    Route::put('restaurante', [\App\Http\Controllers\RestauranteController::class, 'update'])->name('restaurante.update');

    Route::resource('unidades', \App\Http\Controllers\UnidadMedidaController::class);
    Route::resource('proveedores', \App\Http\Controllers\ProveedorController::class);

    Route::resource('categorias', \App\Http\Controllers\CategoriaController::class);
    Route::resource('insumos', \App\Http\Controllers\InsumoController::class);
    Route::resource('movimientos', \App\Http\Controllers\MovimientoInventarioController::class);
});
