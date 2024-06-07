@extends('components.layout')

@section('title', 'Criar Personagem')

@section('content')
    <h1>Criar Personagem</h1>
    <form action="{{ route('personagens.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="imagem">Imagem:</label>
            <input type="text" id="imagem" name="imagem" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
@endsection

