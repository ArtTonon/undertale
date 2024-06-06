@extends('components.layout')

@section('title', 'Página Não Encontrada')

@section('content')
    <h1>Página Não Encontrada</h1>
    <p>Desculpe, a página que você está procurando não existe.</p>
    <p><a href="{{ route('home') }}">Voltar para a Página Inicial</a></p>
@endsection
