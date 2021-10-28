<?php

namespace App\Http\Controllers;

use App\Veiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class VeiculosController extends Controller
{
    public function cadastrar(){
        $dado = DB::select('SELECT * FROM moradores_models');
       return view('Veiculos.Cadastraveiculos',['dado'=>$dado]);
    }

    public function exibir(){
      $dado = DB::select('SELECT a.id,a.modelo,a.placa,a.obs,b.nome FROM veiculos a inner join moradores_models b on b.id = a.id_morador ');

        return view('Veiculos.Exibeveiculos',['dado'=>$dado]);
     }
     public function salvar(Request $request){
        $veiculos = new Veiculos();
        $veiculos->fill($request->all());
        $veiculos->save();
        return redirect('/Veiculos');
     }
     public function delete(Request $request){
      $veiculos = Veiculos::find($request->input('id'));
      $veiculos->delete();
      return redirect('/Veiculos');
   }
}
