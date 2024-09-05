<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

Route::get('/', function () {
    return view('portada'); // Página de inicio de sesión
});

Route::view('/privada', 'secret')->name('privada'); // Página a la que se redirige después de iniciar sesión

Route::post('/validar_registro', [InicioController::class, 'register'])->name('validar_registro');
