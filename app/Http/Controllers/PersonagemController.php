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
        $personagens=Personagem::all();
        echo @csrf_token()."\n";
        return Personagem::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Personagem::create($request->all());
        return 'personagem criado com sucesso';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
