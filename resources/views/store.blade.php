@extends('components.layout')

@section('title, Loja')

@section('content')
    <h1>Criar personagens</h1>
    <form action={{route('personagens.store')}} method="POST">
        @csrf
        <label for="">Insira um nome de personagem:</label>
        <input type="text" placeholder="Ariel" name="nome" id="nome"/>
        <button class="btn btn-sucess mt-2" type="submit">
            Criar novo personagem
        </button>
    </form>
@endsection
