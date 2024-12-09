<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notas', [NotasController::class, 'index'])->name('notas.index');
Route::get('/notas/crear', [NotasController::class, 'crear'])->name('notas.crear');
Route::post('/notas/guardar', [NotasController::class, 'guardar'])->name('notas.guardar');
Route::get('/notas/editar/{nota}', [NotasController::class, 'editar'])->name('notas.editar');
Route::put('/notas/cambiar/{nota}', [NotasController::class, 'cambiar'])->name('notas.cambiar');
Route::get('/notas/eliminar/{nota}', [NotasController::class, 'eliminar'])->name('notas.eliminar');
