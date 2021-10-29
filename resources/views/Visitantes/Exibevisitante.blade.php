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
            
        </tr>
        @foreach ($dado as $dados)
    <tr>
       
        <td>{{$dados->nome}}</td>
        <td>{{$dados->documento}}</td>
        <td>{{$dados->morador}}</td>
     
        <td><button type="button" class="btn btn-danger"data-toggle="modal" data-target="#DeleteModal"  >Deletar</button></td>
    </tr>
        
    </tr>
          
    @endforeach
    </table>
</section>
    
@endsection