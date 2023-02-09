<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlantaController;

Route::get('/', function () {
    return view('index');
})->name("/");

Route::get('empleados/planta',[PlantaController::class,'index'] )->name('planta');

Route::get('contratista', function () {
    return view('empleados.contratista');
})->name("contratista");