<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notas;

class NotasController extends Controller
{
    public function index(){
        $notasList = Notas::all();
        return view('notas.index', compact('notasList'));
    }
}
