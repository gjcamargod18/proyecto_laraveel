<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlantaController;

use App\Http\Controllers\EmpleadosController;

Route::get('/', function () {
    return view('index');
})->name("/");

Route::get('contratista', function () {
    return view('empleados.contratista');
})->name("contratista");

Route::get('planta', function () {
    return view('empleados.planta');
})->name("planta");

Route::resource('empleados/',EmpleadosController::class);

Route::get('empleados/create_empleado',[EmpleadosController::class, 'index'])->name('create');

Route::post('empleados/',[EmpleadosController::class, 'store'])->name('store');

Route::delete('empleados/{empleado}',[EmpleadosController::class, 'destroy'])->name('delete');

Route::patch('empleados/{empleado}/',[EmpleadosController::class, 'update'])->name('update');

Route::get('empleados/{empleado}/edit',[EmpleadosController::class, 'edit'])->name('edit');






