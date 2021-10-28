@extends('estrutura')

@section('conteudo')

<section class="container">
    <form method="POST" action="./Morador/Salvar">
      @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNome">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome">
          </div>
          <div class="form-group col-md-6">
            <label for="inputSobrenome">Sobrenome</label>
            <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEndereco">Endereço</label>
          <input type="text" class="form-control" id="inputEndereco" name="endereco" placeholder="Rua dos Bobos, nº 0">
        </div>
        <div class="form-group">
          <label for="inputComplemento">Complemento</label>
          <input type="text" class="form-control" id="inputComplemento" name="complemento" placeholder="Apartamento, hotel, casa, etc.">
        </div>   
      
        <button type="submit" class="btn btn-primary">Gravar</button>
      </form>


</section>
    
@endsection