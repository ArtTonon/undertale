@extends('components.layout')

@section('title', 'Personagens')

@section('content')
<h1>Personagens</h1>
    <p>Conheça os personagens de Undertale.</p>
    <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        @foreach ($personagens as $personagem)
            @include('components.card', ['name' => $personagem['name'], 'image' => $personagem['image']])
        @endforeach
    </div>
@endsection