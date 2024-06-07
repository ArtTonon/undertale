@extends('components.layout')

@section('title', 'Personagens')

@section('content')
    <h1>Personagens</h1>
    <p>Lista de Personagens</p>
    <h3>Aqui você poderá visualizar e criar os seus personagens de Undertale <3</h3>

    <div class="card-container" style="display: flex; flex-wrap: wrap; gap: 20px;">
        @foreach ($personagens as $personagem)
            <div class="card" style="width: 18rem; border: 1px solid #ccc; border-radius: 10px; overflow: hidden;">
                <img src="{{ asset('images/personagens/' . $personagem['image']) }}" alt="{{ $personagem['name'] }}" class="card-img-top" style="width: 100%; height: 200px; object-fit: cover;">
                <div class="card-body" style="padding: 15px;">
                    <h5 class="card-title">{{ $personagem['name'] }}</h5>
                    <p class="card-text">Descrição do personagem aqui.</p>
                    <a href="#" class="btn btn-primary mr-20">Editar</a>
                    <form action="#" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-10">
        <a href="#" class="btn btn-success">Adicionar Personagem</a>
    </div>
@endsection

@section('cards')
    <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        @foreach ($personagens as $personagem)
            @include('components.card', ['name' => $personagem['name'], 'image' => $personagem['image']])
        @endforeach
    </div>
@endsection
