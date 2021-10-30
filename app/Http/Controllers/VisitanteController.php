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
      return  redirect('/Visitante');

    }

    public function exibir()
    {
        $dado = DB::select('SELECT * FROM visitantes');
        return view('Visitantes.Exibevisitante',['dado'=>$dado]);
    }

    public function delete(Request $request){
        
        $visitante= Visitante::find($request->input('id'));
        $visitante->delete();
        return  redirect('/Visitante');
        
    }

    
    public function saida(Request $request){
        
        $visitante= Visitante::find($request->input('id'));
        $visitante->saida = '1';
        $visitante->save();
        return  redirect('/Visitante');
        
    }
   
}
