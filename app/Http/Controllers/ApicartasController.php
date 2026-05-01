<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ApicartasController extends Controller
{
    public function index()
    {
        // buscar só id, nome, tipo
        $carta = Carta::select('id', 'nome', 'tipo')->orderBy('id', 'desc')->get();
      
        return response()->json($carta);
    }

    public function show( $carta){
        $carta = carta::find($carta);
        if(!$carta){
            return response()->json($carta);
        }
        return response()->json($carta);
    }

    public function store(Request $request){
        
        $dados = $request-> validate([
            'nome' =>'required|string|max:255',
             'tipo' =>'required|string|max:255|in:Elétrico,Fogo,Água',
             'foto' =>'nullable|string',
             'numero'=>'required|integer',
        ]);

        $carta = carta::create($dados);

        return response ()->json ($carta, 201);
    }

}
