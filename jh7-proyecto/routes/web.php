<?php

use Illuminate\Support\Facades\Route;

// Página de inicio
Route::get('/', function () {
    return view('inicio');
});

// Página de servicios
Route::get('/servicios', function () {
    return view('servicios');
});

// Página de contacto
Route::get('/contacto', function () {
    return view('contacto');
});
