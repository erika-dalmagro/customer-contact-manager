@extends('layout')
@extends('topnav')
@section('content')
<div class="space">
    <div class="ui container huge">
        <h1 class="ui center aligned header"> Edição de Contatos </h1>

        <div class="ul list-group">
            <form action="{{ route('contato.atualizar', $contato->id) }}" method="post" class="needs-validation" novalidate>
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" id="nome" placeholder="Digite o nome" value="{{ old('nome', $contato->nome) }}" required>
                </div>
                @error('nome')
                <div class="alert alert-danger">Erro ao cadastrar nome</div>
                @enderror

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Digite o e-mail" value="{{ old('email', $contato->email) }}" required>
                </div>
                @error('email')
                <div class="alert alert-danger">Erro ao cadastrar E-mail / E-mail já está em uso</div>
                @enderror

                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" class="form-control @error('telefone') is-invalid @enderror" id="telefone" placeholder="Digite o telefone" value="{{ old('telefone', $contato->telefone) }}" required>
                </div>
                @error('telefone')
                <div class="alert alert-danger">Erro ao cadastrar Telefone</div>
                @enderror

                <div class="form-group">
                    <label for="funcao">Função</label>
                    <input type="text" name="funcao" class="form-control @error('funcao') is-invalid @enderror" id="funcao" placeholder="Digite a funçãoo" value="{{ old('funcao', $contato->funcao) }}" required>
                </div>
                @error('funcao')
                <div class="alert alert-danger">Erro ao cadastrar Função</div>
                @enderror
                <button type="submit" class="btn btn-outline-primary ui button">Salvar</button>
            </form>
        </div>
    </div>
</div>
@endsection