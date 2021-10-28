<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MoradoresModel;
use Illuminate\Support\Facades\DB;

class MoradorController extends Controller
{
   public function index()
   {
   
    return view('Moradores.moradores');
   }

   public function salvar(Request $request){
      $morador = new MoradoresModel();
      $morador->fill($request->all());
      $morador->save();
      return redirect('/Morador/Exibir');
   }

   public function exibir(){
      $dado = DB::select('SELECT * FROM moradores_models');
      return view('Moradores.Exibemoradores', ['dado' => $dado]);
   }

   public function update(Request $request){
      $morador = MoradoresModel::find($request->input('id'));
      $update = $morador->update($request->all());
      return redirect('/Morador/Exibir');

   }

   public function delete(Request $request){
      $morador = MoradoresModel::find($request->input('id'));
      $update = $morador->delete();
      return redirect('/Morador/Exibir');

   }
}
