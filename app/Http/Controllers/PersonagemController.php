<?php

namespace App\Http\Controllers;

use App\Models\Personagem;
use Illuminate\Http\Request;

class PersonagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personagens = Personagem::all();
        return view('personagens.index', compact('personagens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personagens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'imagem' => 'required|string|max:255',
        ]);

        // Criação do Personagem
        Personagem::create($validatedData);

        // Redirecionamento
        return redirect()->route('personagens');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personagem $personagem)
    {
        return view('personagens.show', compact('personagem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $personagem = Personagem::findOrFail($id);

        return view('personagens.edit', compact('personagem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'imagem' => 'required|string|max:255',
        ]);

        $personagem = Personagem::findOrFail($id);
        $personagem->update($validatedData);

        // Atualização do Personagem
        

        // Redirecionamento
        return redirect()->route('personagens');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $personagem = Personagem::findOrfail($id);
        $personagem->delete();
        return redirect()->route('personagens');
    }
}
