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


</section>
    
@endsection
