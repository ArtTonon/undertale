<!-- resources/views/personagens/index.blade.php -->

@extends('components.layout')

@section('title', 'Personagens')

@section('content')
    <h1>Personagens</h1>
    <p>Lista de Personagens</p>

    <ul>
        @foreach ($personagens as $personagem)
        <img src="{{$personagem->imagem}}" alt="{{ $personagem->nome }}" style="width: 100px; height: 100px;">

            <li>
                <strong>{{ $personagem->nome }}</strong> - {{ $personagem->descricao }}
                
                <a href="{{ route('personagens.edit', $personagem->id) }}">Editar</a>

                <form action="{{ route('personagens.destroy', $personagem->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('personagens.create') }}">Adicionar Personagem</a>
@endsection
