@extends('layout')

@section('title', 'Personagens')

@section('content')
    <h1>Personagens</h1>
    <p>Conheça os personagens de Undertale.</p>
    @component('components.cards')
    
    @endcomponent
@endsection
