@extends('components.layout')

@section('title', 'Personagens')

@section('content')
    <h1>Atualizando personagem {{$personagem->nome}}</h1>
    <form action={{route('personagens.update', $personagem->id)}} method="POST">
        @csrf
        @method("PUT")
        {{$personagem->id}}
        <label for="">Insira um novo nome de personagem:</label>
        <input type="text" name="nome" id="nome" value={{$personagem->nome}}/>
        <input type="text" name="descricao" id="descricao" value={{$personagem->descricao}}/>
        <input type="text" name="imagem" id="imagem" value={{$personagem->imagem}}/>
        <button class="btn btn-sucess mt-2" type="submit">
            Atualizar personagem
        </button>
    </form>
@endsection