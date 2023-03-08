@extends('layout')
@extends('topnav')
@section('content')
<div class="space">
	<div class="ui container huge">
		<h1 class="ui center aligned header"> Cadastro de Contatos </h1>
		<div class="ul list-group">
			<form action="{{ route('contato.salvar') }}" method="post">
				@csrf
				<input type="hidden" name="cliente_id" id="cliente_id" value="{{$id}}">
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" id="nome" placeholder="Digite o nome" value="{{ old('nome') }}" required>
				</div>
				@error('nome')
				<div class="alert alert-danger">Erro ao cadastrar nome</div>
				@enderror

				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Digite o e-mail" value="{{ old('email') }}" required>
				</div>
				@error('email')
				<div class="alert alert-danger">Erro ao cadastrar E-mail / E-mail já está em uso</div>
				@enderror

				<div class="form-group">
					<label for="telefone">Telefone</label>
					<input type="text" name="telefone" class="form-control @error('telefone') is-invalid @enderror" id="telefone" placeholder="Digite o telefone" value="{{ old('telefone') }}" required>
				</div>
				@error('telefone')
				<div class="alert alert-danger">Erro ao cadastrar telefone</div>
				@enderror
				
				<div class="form-group">
					<label for="funcao">Função</label>
					<input type="text" name="funcao" class="form-control @error('funcao') is-invalid @enderror" id="funcao" placeholder="Digite a função" value="{{ old('funcao') }}" required>
				</div>
				@error('funcao')
				<div class="alert alert-danger">Erro ao cadastrar função</div>
				@enderror
				<button type="submit" class="btn btn-outline-primary ui button">Salvar</button>
			</form>
		</div>
	</div>
	@endsection