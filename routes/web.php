<?php

use Illuminate\Support\Facades\Route;

// Cualquier ruta web devuelve la SPA (welcome)
// Vue Router se encarga del resto en el navegador
Route::get('/{any?}', function () {
    return view('welcome');
})->where('any', '.*');
