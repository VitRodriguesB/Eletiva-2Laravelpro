<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    public function formExercicio1(){
        return view('exercicio1'); // nome do arquivo da view
    }

    public function resultadoExercicio1(Request $request)
    {
        $n1 = $request->input('numero1');
        $n2 = $request->input('numero2');
        $soma = $n1 + $n2;
        return view('exercicio1_resultado', compact('soma', 'n1', 'n2'));   
    }
}
