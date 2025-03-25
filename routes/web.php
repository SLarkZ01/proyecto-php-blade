<?php

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

/* 
|--------------------------------------------------------------------------
| Rutas del Proyecto - Presentado por Thomas Montoya Magon
|--------------------------------------------------------------------------
|
| /bienvenida - Muestra la página de bienvenida principal
| /ejemplos   - Demuestra diferentes usos del bucle foreach en Laravel
| /contacto   - Muestra la página de información de contacto
|
*/

// Ruta que carga la vista de bienvenida usando una función anónima (closure)
Route::get('/bienvenida', function () {
    return view('bienvenida');
});

// Ruta que utiliza el controlador EjemploForEachController para mostrar
// ejemplos de bucles foreach con diferentes tipos de datos (arrays y objetos)
Route::get('/ejemplos', [App\Http\Controllers\EjemploForEachController::class, 'ejemploForEach']);

// Ruta que carga la vista de contacto usando una función anónima (closure)
Route::get('/contacto', function () {
    return view('contacto');
});