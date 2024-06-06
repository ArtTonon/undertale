<?php

use App\Http\Controllers\PersonagemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/personagens', [PersonagemController::class, 'index'])->name('personagens');
Route::get('/personagens/create', [PersonagemController::class, 'create'])->name('personagens.create');
Route::post('/personagens', [PersonagemController::class, 'store'])->name('personagens.store');
Route::get('/personagens/{id}/edit', [PersonagemController::class, 'edit'])->name('personagens.edit');
Route::put('/personagens/{id}', [PersonagemController::class, 'update'])->name('personagens.update');
Route::delete('/personagens/{id}', [PersonagemController::class, 'destroy'])->name('personagens.destroy');

Route::get('/story', function () {
    return view('story');
})->name('story');

Route::get('/contact', function () {
    return view('contato');
})->name('contato');

// Redirecionamento de rotas com nomes parecidos
Route::get('/personagem', function () {
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
