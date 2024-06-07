<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Undertale Site')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            background-image: url('{{ asset("images/wallpaper.png") }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header {
            background-color: black;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        header img {
            width: 800px;
        }

        nav a {
            margin: 0 15px;
            color: #fff;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        h1, h2, h3 {
            color: #333;
        }

        p {
            color: #4e4e4e;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        img {
            height: auto;
        }

        footer {
            background-color: white;
            color: black;
            padding: 10px 0;
            text-align: center;
            margin-top: 50px;
            align-items: center;
        }

        footer nav a {
            color: black;
            margin: 0 15px;
        }
        
        footer img {
            height: 100px;
            display: flex;
            justify-content: end;
        }

        .jumbotron {
    background-color: #f0f0f0;
    padding: 2rem 1rem;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.jumbotron p {
    font-size: 18px;
    line-height: 1.6;
}
    </style>
</head>
<body>
    <header>
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('personagens') }}">Personagens</a>
            <a href="{{ route('story') }}">História</a>
            <a href="{{ route('contato') }}">Contato</a>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>
    @include('components.footer')
</body>
</html>
