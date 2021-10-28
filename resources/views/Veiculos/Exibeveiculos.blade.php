@extends('estrutura')

@section('conteudo')
<br>
<section>
    <form class="container" action="/Veiculos/Cadastrar">
        <input type="submit" value="Cadastrar Veiculo" class="btn-dark ">

    </form>

    <table class="table table-hover container">
        <tr class="table-active" >
            <td>Modelo</td>
            <td>Placa</td> 
            <td>Obs</td>
            <td>Morador</td>
            <td>Editar/Excluir</td>
           
        </tr>
        @foreach ($dado as $dados)
    <tr>
       
        <td>{{$dados->modelo}}</td>
        <td>{{$dados->placa}}</td>
        <td>{{$dados->obs}}</td>
        <td>{{$dados->nome}}</td>
        <td><button type="button" class="btn btn-danger"data-toggle="modal" data-target="#DeleteModal" data-whatever="{{$dados->id}}"   >Deletar</button></td>
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
              <form method="post" action="/Veiculos/Deletar">
                  @csrf
             Deseja deletar o veiculo ?
               
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
  
  
      
        $('#DeleteModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipientid = button.data('whatever')
        
  
         
          var modal = $(this)
          modal.find('.modal-title').text('ID ' + recipientid)
        
  
          
          modal.find('#id').val(recipientid)
      
        })
      
      </script>

</section>
    
@endsection
