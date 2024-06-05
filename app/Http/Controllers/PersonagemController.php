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
            $personagens = [
                ['name' => 'Frisk', 'image' => 'frisk.png'],
                ['name' => 'Sans', 'image' => 'sans.png'],
                ['name' => 'Papyrus', 'image' => 'papyrus.png'],
                ['name' => 'Undyne', 'image' => 'undyne.png'],
            ];
    
            return view('personagens', compact('personagens'));
        }

        public function index2(Request $request)
        {
            // $personagens=Personagem::all();
            // echo @csrf_token()."\n";
            // return Personagem::all();
            return view("index");
        }
    
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            Personagem::create($request->all());
            return 'personagem criado com sucesso';
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
        public function update(Request $request, Personagem $personagem)
        {
            $personagem->fill($request->all());
            $personagem->save();
            return "personagem $personagem atualizado com sucesso";
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(int $id)
        {
            Personagem::destroy($id);
            return "Personagem apagado com sucesso";
        }
    }

