@extends('estrutura')

@section('conteudo')

<section>
    <br>
    <form action="/Morador" class="container">
    <input type="submit" value="Novo morador" class="btn btn-primary">
 
</form>
<br>
    <table class="table table-hover container">
        <tr class="table-active" >
            <td>Nome</td>
            <td>Sobrenome</td> 
            <td>Endereco</td>
            <td>Exclur/Editar</td>
           
        </tr>
        @foreach ($dado as $dados)
    <tr>
       
        <td>{{$dados->nome}}</td>
        <td>{{$dados->sobrenome}}</td>
        <td>{{$dados->endereco}}</td>
        <td><button type="button" class="btn btn-primary"data-toggle="modal" data-target="#EditarModal" data-whatever="{{$dados->id}}"
            data-whatevernome="{{$dados->nome}}" data-whateversobrenome="{{$dados->sobrenome}}" data-whateverendereco="{{$dados->endereco}}"  >Editar</button>
            <button type="button" class="btn btn-danger"data-toggle="modal" data-target="#DeleteModal" data-whatever="{{$dados->id}}" data-whatevernome="{{$dados->nome}}"  >Deletar</button></td>
    </tr>
      
  
</tr>
@endforeach

<div class="modal fade" id="EditarModal" tabindex="-1" role="dialog" aria-labelledby="EditarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="EditarModalLabel">Deletar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="/Morador/Update">
            @csrf
            <div class="form-group">
              <label for="nome" class="col-form-label">Nome:</label>
              <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="form-group">
                <label for="sobrenome" class="col-form-label">Sobrenome:</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome">
              </div>
              <div class="form-group">
                <label for="endereco" class="col-form-label">Endereco:</label>
                <input type="text" class="form-control" id="endereco" name="endereco">
              </div>
           
            <input type="hidden" name="id" id="id">
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary">Editar</button>
            </div>
          </form>
        </div>          
      </div>
    </div>
  </div>


  <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="DeleteModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="EditarModalLabel">Deletar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="/Morador/Deletar">
                @csrf
              <div class="form-group">
                <label for="nome" class="col-form-label">Deletar o morador:</label>
                <input type="text" class="form-control" id="nome" name="nome">
              </div>
             
              <input type="hidden" name="id" id="id">
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Deletar</button>
              </div>
            </form>
          </div>          
        </div>
      </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  
  
  <script>
$('#EditarModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipientid = button.data('whatever')
    var recipientnome = button.data('whatevernome')
    var recipientsobrenome = button.data('whateversobrenome')
    var recipientendereco = button.data('whateverendereco')
    var modal = $(this)
    modal.find('.modal-title').text('ID ' + recipientid)
    modal.find('#nome').val(recipientnome)
    modal.find('#sobrenome').val(recipientsobrenome)
    modal.find('#endereco').val(recipientendereco)
    modal.find('#id').val(recipientid)
    

  })

    
      $('#DeleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipientid = button.data('whatever')
        var recipientnome = button.data('whatevernome')

       
        var modal = $(this)
        modal.find('.modal-title').text('ID ' + recipientid)
        modal.find('#nome').val(recipientnome)

        
        modal.find('#id').val(recipientid)
    
      })
    
    </script>
   
    
</Table>
</section>
    
@endsection