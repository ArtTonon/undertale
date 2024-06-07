@extends('components.layout')

@section('title', 'Página Inicial')

@section('content')
    <h1>Página Inicial</h1>
    @component('components.message', ['title' => 'Bem-vindo!'])
        Bem-vindo ao site baseado em Undertale! Onde a DETERMINAÇÃO toca em seus corações!
    @endcomponent
    <div class="jumbotron">
    <hr class="my-4">
            <p>
                Undertale é um jogo de RPG onde o jogador controla uma criança que cai no subsolo, um mundo habitado por monstros.
                A história se desenrola à medida que a criança tenta encontrar uma maneira de voltar para a superfície.
                Aqui está um resumo detalhado da história dentro do jogo:
            </p>
            <ul>
                <li><strong>Prólogo:</strong> Há muito tempo, uma guerra entre humanos e monstros resultou na vitória dos humanos, que selaram os monstros no subsolo com uma barreira mágica. Muitos anos depois, uma criança cai em um buraco em uma montanha e entra no mundo dos monstros.</li>
            </ul>
            <p>Crie e Descubra os Personagens que a comunidade tem a oferecer</p>
            <a class="btn btn-primary btn-lg" href="{{ route('personagens.index') }}" role="button">Ver Personagens</a>
        </div>
@endsection

