@extends('layout')
@extends('topnav')
@section('content')
<div class="space">
    <h1 class="ui center aligned header"> Detalhes </h1>
    <div class="ui container">
        <table class="table ui celled center aligned">
            <thead>
                <tr>
                    <th> Razão Social </th>
                    <th> Nome Fantasia </th>
                    <th> Tipo Pessoa</th>
                    <th> Documento </th>
                    <th> Estado </th>
                    <th> Cidade </th>
                    <th> E-mail </th>
                    <th> Telefone </th>
                    <th> Endereço </th>
                    <th> Status </th>
                    <th> Ações </th>
                </tr>
            <tbody>

                <tr>
                    <td> {{ $cliente -> razao_social }} </td>
                    <td> {{ $cliente -> nome_fantasia }} </td>
                    <td> {{ $cliente -> tipo_pessoa }} </td>
                    <td> {{ $cliente -> documento }} </td>
                    <td> {{ $cliente -> estado }} </td>
                    <td> {{ $cliente -> cidade }} </td>
                    <td> {{ $cliente -> email }} </td>
                    <td> {{ $cliente -> telefone }} </td>
                    <td> {{ $cliente -> endereco }} </td>
                    <td> {{ $cliente -> status  }} </td>
                    <td>
                        <a class="btn button" href="{{ route('cliente.editar', $cliente->id) }}">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <a class="btn button" onclick="return confirm('Tem certeza que deseja excluir?')" href="{{ route('cliente.excluir', $cliente->id) }}">
                            <i class="fa fa-times"></i>
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>

        <h1 class="ui center aligned header"> Contato </h1>


        @if($contato->count() > 0)
        <table class="table ui celled center aligned">
            <thead>
                <tr>
                    <th> Nome </th>
                    <th> E-mail </th>
                    <th> Telefone </th>
                    <th> Função </th>
                    <th> Ações </th>
                </tr>
            <tbody>
                @foreach ($contato as $contato)
                <tr>
                    <td> {{ $contato->nome }} </td>
                    <td> {{ $contato -> email }} </td>
                    <td> {{ $contato -> telefone }} </td>
                    <td> {{ $contato -> funcao }} </td>
                    <td>
                        <a class="btn ui button" href="{{ route('contato.editar', $contato->id) }}">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <a class="btn ui button" onclick="return confirm('Tem certeza que deseja excluir?')" href="{{ route('contato.excluir', $contato->id) }}">
                            <i class="fa fa-times"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @else
        <h3 class="ui center aligned header">
            Nenhum contato cadastrado
        </h3>
        @endif
        <div class="centro">
            <a class="btn center aligned btn-outline-primary ui button" href="{{ route('contato.adicionar', $cliente->id) }}"> Cadastrar contato </a>
        </div>
    </div>
</div>

@endsection