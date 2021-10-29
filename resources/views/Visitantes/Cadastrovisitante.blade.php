@extends('estrutura')
@section('conteudo')
<section>
    <section class="container">
        <form method="POST" action="/Visitante/Save">
          @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome">
              </div>
              <div class="form-group col-md-6">
                <label for="documento">Documento</label>
                <input type="text" class="form-control" name="documento" placeholder="Digite o nro do documento">
              </div>
            </div>
            <div class="form-group">
              <label for="obs">Observacao</label>
              <input type="text" class="form-control" id="obs" name="obs" placeholder="Observação">
            </div>
            <div class="form-group">
              <label for="morador">Morador</label>
              <select name="morador" id="morador" class="form-select">
                  @foreach ($dado as $dados)
                  <option value="{{$dados->nome}}">{{$dados->nome}}</option>
                  @endforeach
                 
              </select>
              </div>      
            <button type="submit" class="btn btn-primary">Gravar</button>
          </form>
    
</section>
    
@endsection