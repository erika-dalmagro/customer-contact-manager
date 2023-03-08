@extends('layout')
@extends('topnav')
@section('content')
<div class="space">
    <div class="ui container huge">
        <h1 class="ui center aligned header"> Cadastro de Clientes </h1>
        <div class="ul list-group fonte">
            <form action="{{ route('cliente.salvar') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nome_fantasia">Nome Fantasia</label>
                    <input type="text" name="nome_fantasia" class="form-control @error('nome_fantasia') is-invalid @enderror" id="nome_fantasia" placeholder="Digite o Nome Fantasia" value="{{ old('nome_fantasia') }}" required>
                </div>
                @error('nome_fantasia')
                <div class="alert alert-danger">Erro ao cadastrar Nome Fantasia</div>
                @enderror

                <div class="form-group">
                    <label for="razao_social">Razão Social</label>
                    <input type="text" name="razao_social" class="form-control @error('razao_social') is-invalid @enderror" id="razao_social" placeholder="Digite a Razão Social" value="{{ old('razao_social') }}" required>
                </div>
                @error('razao_social')
                <div class="alert alert-danger">Erro ao cadastrar Razão Social</div>
                @enderror

                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" id="estado" placeholder="Selecione o estado" value="{{ old('estado') }}" required>
                </div>
                @error('estado')
                <div class="alert alert-danger">Erro ao cadastrar Estado</div>
                @enderror

                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" class="form-control @error('cidade') is-invalid @enderror" id="cidade" placeholder="Digite a cidade" value="{{ old('cidade') }}" required>
                </div>
                @error('cidade')
                <div class="alert alert-danger">Erro ao cadastrar Cidade</div>
                @enderror

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Digite o e-mail" value="{{ old('email') }}" required>
                </div>
                @error('email')
                <div class="alert alert-danger">Erro ao cadastrar E-mail</div>
                @enderror

                <div class="form-group">
                    <label for="tipo_pessoa">Tipo Pessoa</label>
                    <select class="form-control" id="tipo_pessoa" name="tipo_pessoa">
                        @foreach($tipo_pessoa as $tipo_pessoa)
                        <option value="{{ $tipo_pessoa }}" {{ $selectedTipo == $tipo_pessoa ? 'selected' : '' }}>
                            {{ $tipo_pessoa }}
                        </option>
                        @endforeach
                    </select>
                </div>
                @error('tipo_pessoa')
                <div class="alert alert-danger">Erro ao cadastrar Tipo de Pessoa</div>
                @enderror

                <div class="form-group">
                    <label for="documento">Documento</label>
                    <input type="text" name="documento" class="form-control @error('documento') is-invalid @enderror" id="documento" placeholder="Digite o documento" value="{{ old('documento') }}" required>
                </div>
                @error('documento')
                <div class="alert alert-danger">Erro ao cadastrar Documento</div>
                @enderror

                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" class="form-control @error('telefone') is-invalid @enderror" id="telefone" placeholder="Digite o telefone" value="{{ old('telefone') }}" required>
                </div>
                @error('telefone')
                <div class="alert alert-danger">Erro ao cadastrar Telefone</div>
                @enderror

                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="textarea" name="endereco" class="form-control @error('endereco') is-invalid @enderror" id="endereco" placeholder="Digite o endereço" value="{{ old('endereco') }}" required>
                </div>
                @error('endereco')
                <div class="alert alert-danger">Erro ao cadastrar Endereço</div>
                @enderror

                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status') }}" required>
                        @foreach($status as $status)
                        <option value="{{ $status }}" {{ $selectedStatus == $status ? 'selected' : '' }}>
                            {{ $status }}
                        </option>
                        @endforeach
                    </select>
                </div>
                @error('status')
                <div class="alert alert-danger">Erro ao cadastrar Status</div>
                @enderror

                <button type="submit" class="btn center aligned btn-outline-primary ui button">Enviar</button>
            </form>
        </div>
    </div>
</div>
@endsection