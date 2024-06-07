@extends('components.layout')

@section('title', 'Editar Personagem')

@section('content')
    <h1>Atualizando personagem {{$personagem->nome}}</h1>
    <form action={{ route('personagens.update', $personagem->id) }} method="POST">
        @csrf
        @method('PUT')
        {{$personagem->id}}
        <label for="">Insira um novo nome de personagem:</label>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" value="{{ $personagem->nome }}" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" class="form-control" value="{{ $personagem->descricao }}" required>
        </div>
        <div class="form-group">
            <label for="imagem">URL da Imagem:</label>
            <input type="text" id="imagem" name="imagem" class="form-control" value="{{ $personagem->imagem }}" required>
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
    </form>
@endsection
