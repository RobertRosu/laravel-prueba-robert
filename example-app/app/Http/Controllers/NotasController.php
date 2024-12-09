<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Models\Notas;

class NotasController extends Controller
{
    public function index(){
        $notasList = Notas::all();
        return view('notas.index', compact('notasList'));
    }

    public function crear(){
        return view('notas.crear');
    }

    public function guardar(Request $request): RedirectResponse{
        $nota = new Notas;
        $nota->title = $request->title;
        $nota->description = $request->description;
        $nota->save();
        return redirect()->route('notas.index');
    }

    public function editar(Notas $nota){
        return view('notas.editar', compact('nota'));
    }

    public function cambiar(Request $request, Notas $nota){
        DB::table('notas')
        ->where('id', $nota->id)
        ->update([
            'title' => $request->title, 
            'description' => $request->description
        ]);
        return redirect()->route('notas.index');
    }

    public function eliminar(Notas $nota){
        DB::table('notas')
        ->where('id', $nota->id)
        ->delete();
        return redirect()->route('notas.index');
    }
}
