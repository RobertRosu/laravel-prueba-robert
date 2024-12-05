<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes', [NotasController::class, 'index']);
