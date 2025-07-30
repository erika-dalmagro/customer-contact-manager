@extends('layout')
@extends('topnav')
@section('content')
<div class="space">
   <h1 class="ui center aligned header"> Listagem de Clientes </h1>
   <div class="ui container">
      <div class="ul list-group">
         @if($cliente->count() > 0)
         <table class="table">
            <thead>
               <tr>
                  <th>Nome Fantasia</th>
                  <th>Tipo de Pessoa</th>
                  <th>Status</th>
                  <th>
                     <i class="fa fa-cog centralizar"></i>
                  </th>
               </tr>
            </thead>
            <tbody>
               @foreach ($cliente as $cliente)
               <tr>
                  <td>{{ $cliente->nome_fantasia }}</td>
                  <td>{{ $cliente->tipo_pessoa }}</td>
                  <td>{{ $cliente->status }}</td>
                  <td class="centralizar">
                     <a href="{{ route('cliente.detalhar', $cliente->id) }}" class="btn center aligned btn-outline-primary ui button">
                        Detalhes
                     </a>
                     <a href="{{ route('cliente.excluir', $cliente->id) }}" class="btn center aligned btn-outline-primary ui button" onclick="return confirm('Tem certeza que deseja excluir?')">
                        Excluir
                     </a>

                  </td>
               </tr>
               @endforeach
               @else
               <h3 class="ui center aligned header"> Nenhum cliente cadastrado!</h3>
               @endif
            </tbody>
         </table>

      </div>
      <br>
      <div class="centro">
         <a class="btn btn-outline-primary ui button" href="{{ route('cliente.adicionar') }}"> Cadastrar Cliente</a>
      </div>
   </div>
</div>
@endsection