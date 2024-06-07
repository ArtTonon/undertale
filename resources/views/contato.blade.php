@extends('components.layout')

@section('title', 'Contato')

@section('content')
    <div style="text-align: center;">
        <h1>Informações de Contato</h1>
        <p>Entre em contato para caso de duvida ou problema</p>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h3>Endereço:</h3>
                <p>123 Rua Toriel, Bairro: Frisk, Cidade: Papayrus - Estado: Sans</p>
                <h3>Telefone:</h3>
                <p>(00) 1234-5678</p>
                <h3>E-mail:</h3>
                <p>contato@heart.com</p>
                <h3>Horário de Atendimento:</h3>
                <p>Segunda a Sexta, das 06:00 às 18:00</p>
            </div>
        </div>
    </div>
@endsection
