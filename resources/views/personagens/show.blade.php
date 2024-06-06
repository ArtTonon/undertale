@extends('components.layout')

@section('title', $personagem->nome)

@section('content')
    <div>
        <h2>Detalhes do Personagem</h2>
        <p><strong>Nome:</strong> {{ $personagem->nome }}</p>
        <p><strong>Descrição:</strong> {{ $personagem->descricao }}</p>
        <img src="{{ asset('images/personagens/' . $personagem->imagem) }}" alt="{{ $personagem->nome }}" style="width: 200px;">
    </div>

    <div style="margin-top: 20px;">
        <a href="{{ route('personagens.index') }}" class="btn btn-secondary">Voltar</a>
        <a href="{{ route('personagens.edit', $personagem->id) }}" class="btn btn-primary">Editar</a>

        <form action="{{ route('personagens.destroy', $personagem->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
    </div>
@endsection
