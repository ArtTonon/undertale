<?php

use App\Http\Controllers\PersonagemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/personagem', function () {
    return view('personagens');
})->name('personagens');

Route::get('/story', function () {
    return view('story');
})->name('story');

Route::get('/contact', function () {
    return view('contato');
})->name('contato');

//Route::resource('personagens', PersonagemController::class );


// Redirecionamento de rotas com nomes parecidos
Route::get('/personagens', function () {
    return redirect()->route('personagens');
});
Route::get('/stor', function () {
    return redirect()->route('story');
});
Route::get('/contat', function () {
    return redirect()->route('contato');
});

// Rota de fallback
Route::fallback(function () {
    return view('error');
});

//cards de personagens
Route::get('/personagens', [PersonagemController::class, 'index'])->name('personagens');
Route::post('/personagens/create', [PersonagemController::class, 'create'])->name('personagens.create');
