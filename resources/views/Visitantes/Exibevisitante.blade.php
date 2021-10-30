@extends('estrutura')
@section('conteudo')

<section>

    <br>
<section>
    <form class="container" action="/Visitante/Cadastro">
        <input type="submit" value="Cadastra Visitante" class="btn btn-primary">

    </form>
<br>
    <table class="table table-hover container">
        <tr class="table-active" >
            <td>Nome</td>
            <td>Documento</td> 
            <td>Morador</td>
            <td>Entrada</td>
            <td>Saida</td>
            <td>Confirmar Saida/Deletar</td>
            
        </tr>
        @foreach ($dado as $dados)
    <tr>
       
        <td>{{$dados->nome}}</td>
        <td>{{$dados->documento}}</td>
        <td>{{$dados->morador}}</td>
        <td>{{$dados->created_at}}</td>
        <td>@if ($dados->saida != '1')
            Saida não confirmada
            @else
            {{$dados->updated_at}}
     
          
     
          
      @endif</td>
        <td>
          @if ($dados->saida != 1)
              
          <button type="button" class="btn btn-success"data-toggle="modal" data-target="#SaidaModal" data-whatever="{{$dados->id}}" data-whatevernome="{{$dados->nome}}"  >Confirmar saida</button>
          @endif
        <button type="button" class="btn btn-danger"data-toggle="modal" data-target="#DeleteModal" data-whatever="{{$dados->id}}" data-whatevernome="{{$dados->nome}}" >Deletar</button></td>
    </tr>
        
    </tr>
          
    @endforeach
    </table>

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
              <form method="post" action="/Visitante/Deletar">
                  @csrf
                  <div class="form-group">
                    <label for="nome" class="col-form-label">Deletar o visitante:</label>
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

      
    <div class="modal fade" id="SaidaModal" tabindex="-1" role="dialog" aria-labelledby="SaidaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SaidaModalLabel">Confirmar saida</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="/Visitante/Saida">
                  @csrf
                  <div class="form-group">
                    <label for="nome" class="col-form-label">Confirmar a saida do visitante:</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                  </div>
               
                <input type="hidden" name="id" id="id">
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-success">Confirmar</button>
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
        $('#DeleteModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipientid = button.data('whatever')
          var recipientnome = button.data('whatevernome')
        
  
         
          var modal = $(this)
          modal.find('.modal-title').text('ID ' + recipientid)
        
  
          
          modal.find('#id').val(recipientid)
          modal.find('#nome').val(recipientnome)
      
        })
        $('#SaidaModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipientid = button.data('whatever')
          var recipientnome = button.data('whatevernome')
        
  
         
          var modal = $(this)
          modal.find('.modal-title').text('ID ' + recipientid)
        
  
          
          modal.find('#id').val(recipientid)
          modal.find('#nome').val(recipientnome)
      
        })
      
      </script>

</section>
    
@endsection