@extends('components.layout')

@section('title', 'Adicionar Personagem')

@section('content')
    <h1>Adicionar Personagem</h1>

    <form action="{{ route('personagens.store') }}" method="POST">
        @csrf

        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
        </div>

        <div>
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao"></textarea>
        </div>

        <div>
            <label for="imagem">Imagem:</label>
            <input type="text" id="imagem" name="imagem">
        </div>

        <button type="submit">Salvar</button>
    </form>
@endsection
