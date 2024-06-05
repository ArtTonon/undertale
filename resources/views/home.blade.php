@extends('components.layout')

@section('title', 'Página Inicial')

@section('content')
    <h1>Página Inicial</h1>
    @component('components.message', ['title' => 'Bem-vindo!'])
        Bem-vindo ao site baseado em Undertale! Onde a DETERMINAÇÃO toca em seus corações!
    @endcomponent
@endsection
