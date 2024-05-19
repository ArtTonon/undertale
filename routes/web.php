<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/characters', function () {
    return view('personagens');
})->name('personagens');

Route::get('/story', function () {
    return view('story');
})->name('story');

Route::get('/contact', function () {
    return view('contato');
})->name('contato');

// Redirecionamento de rotas com nomes parecidos
Route::get('/charactr', function () {
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
