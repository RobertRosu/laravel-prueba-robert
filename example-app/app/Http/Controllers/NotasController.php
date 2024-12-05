<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notas;

class NotasController extends Controller
{
    public function index(){
        return "<h1>Hola mundo</h1>";
    }
}
