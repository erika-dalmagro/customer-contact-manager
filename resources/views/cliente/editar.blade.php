@extends('layout')
@extends('topnav')
@section('content')
<div class="space">
    <div class="ui container huge">
        <h1 class="ui center aligned header"> Edição de Clientes </h1>

        <div class="ul list-group">
            <form action="{{ route('cliente.atualizar', $cliente->id) }}" method="post" class="needs-validation" novalidate>
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome_fantasia">Nome Fantasia</label>
                    <input type="text" name="nome_fantasia" class="form-control" id="nome_fantasia" placeholder="Digite o nome fantasia" value="{{ old('nome_fantasia', $cliente->nome_fantasia) }}" required>
                </div>
                @error('nome_fantasia')
                <div class="alert alert-danger">Erro ao atualizar Nome Fantasia</div>
                @enderror

                <div class="form-group">
                    <label for="razao_social">Razão Social</label>
                    <input type="text" name="razao_social" class="form-control" id="razao_social" placeholder="Digite a razão social" value="{{ old('razao_social', $cliente->razao_social) }}" required>
                </div>
                @error('razao_social')
                <div class="alert alert-danger">Erro ao atualizar Razão Social</div>
                @enderror

                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" name="estado" class="form-control" id="estado" placeholder="Digite o estado" value="{{ old('estado', $cliente->estado) }}" required>
                </div>
                @error('estado')
                <div class="alert alert-danger">Erro ao atualizar Estado</div>
                @enderror

                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Digite a cidade" value="{{ old('cidade', $cliente->cidade) }}" required>
                </div>
                @error('cidade')
                <div class="alert alert-danger">Erro ao atualizar Cidade</div>
                @enderror

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Digite o e-mail" value="{{ old('email', $cliente->email) }}" required>
                </div>
                @error('email')
                <div class="alert alert-danger">Erro ao atualizar E-mail</div>
                @enderror

                <div class="form-group">
                    <label for="tipo_pessoa">Tipo Pessoa</label>
                    <select class="form-control" id="tipo_pessoa" name="tipo_pessoa" required>
                        @foreach($tipo_pessoa as $tipo_pessoa)
                        <option value="{{ $tipo_pessoa }}" {{ old('tipo_pessoa', $cliente->tipo_pessoa) == $tipo_pessoa ? 'selected' : '' }}>{{ $tipo_pessoa }}</option>
                        @endforeach
                    </select>
                </div>
                @error('tipo_pessoa')
                <div class="alert alert-danger">Erro ao atualizar Tipo de Pessoa</div>
                @enderror

                <div class="form-group">
                    <label for="documento">Documento</label>
                    <input type="text" name="documento" class="form-control" id="documento" placeholder="Digite o documento" value="{{ old('documento', $cliente->documento) }}" required>
                </div>
                @error('documento')
                <div class="alert alert-danger">Erro ao atualizar Documento</div>
                @enderror

                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Digite o telefone" value="{{ old('telefone', $cliente->telefone) }}" required>
                </div>
                @error('telefone')
                <div class="alert alert-danger">Erro ao atualizar Telefone</div>
                @enderror

                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Digite o endereço" value="{{ old('endereco', $cliente->endereco) }}" required>
                </div>
                @error('endereco')
                <div class="alert alert-danger">Erro ao atualizar Endereço</div>
                @enderror

                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status') }}" required>
                        @foreach($status as $status)
                        <option value="{{ $status }}" {{ old('status', $cliente->status) == $status ? 'selected' : '' }}>{{ $status }}</option>
                        @endforeach
                    </select>
                </div>

                @error('status')
                <div class="alert alert-danger">Erro ao atualizar Status</div>
                @enderror

                <button type="submit" class="btn center aligned btn-outline-primary ui button">Enviar</button>
            </form>

        </div>
    </div>
    @endsection