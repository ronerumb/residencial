<?php

namespace App\Http\Controllers;

use App\Visitante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class VisitanteController extends Controller
{
     public function cadastro()
    {
        $dado = DB::select('SELECT * FROM moradores_models');
        return view('Visitantes.Cadastrovisitante',['dado'=>$dado]);
    }

    public function save(Request $request){
        $visitante = new Visitante();
        $visitante->fill($request->all());
        $visitante->save();
        redirect('Visitante/Cadastro');

    }

    public function exibir()
    {
        $dado = DB::select('SELECT * FROM visitantes');
        return view('Visitantes.Exibevisitante',['dado'=>$dado]);
    }
   
}
