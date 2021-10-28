@extends('estrutura')
@section('conteudo')

    <section>
        <section class="container">
            <form method="POST" action="/Veiculos/Salvar">
              @csrf
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="modelo">Modelo</label>
                    <input type="text" class="form-control" name="modelo" placeholder="Modelo">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="placa">Placa</label>
                    <input type="text" class="form-control" name="placa" placeholder="Placa">
                  </div>
                </div>
                <div class="form-group">
                  <label for="obs">Observação</label>
                  <input type="text" class="form-control" id="obs" name="obs" placeholder="Observação">
                </div>
                <div class="form-group">
                  <select name="id_morador" id="id_morador" class="form-select">
                      @foreach ($dado as $dados)
                      <option value="{{$dados->id}}">{{$dados->nome}}</option>
                      @endforeach
                     
                  </select>
                  </div>
              
              
                <button type="submit" class="btn btn-primary">Gravar</button>
              </form>
        
    </section>
@endsection