<?php

namespace App\Http\Controllers;

use App\Models\Resultat;
use Illuminate\Http\Request;

class ResultatController extends Controller
{
    public function index()
    {
        $resultats = Resultat::all();
        return response()->json($resultats);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'score' => 'required|numeric',
            'date_passation' => 'required|date',
            'Id_Tests' => 'required|exists:tests,id',
            'Id_Utilisateur' => 'required|exists:utilisateurs,id',
        ]);

        $resultat = Resultat::create($validatedData);
        return response()->json(['message' => 'Resultat created successfully', 'resultat' => $resultat], 201);
    }

    public function show(Resultat $resultat)
    {
        return response()->json($resultat);
    }

    public function update(Request $request, Resultat $resultat)
    {
        $validatedData = $request->validate([
            'score' => 'sometimes|required|numeric',
            'date_passation' => 'required|date',
            'Id_Tests' => 'required|exists:tests,id',
            'Id_Utilisateur' => 'required|exists:utilisateurs,id',
        ]);

        $resultat->update($validatedData);
        return response()->json(['message' => 'Resultat updated successfully', 'resultat' => $resultat]);
    }

    public function destroy(Resultat $resultat)
    {
        $resultat->delete();
        return response()->json(['message' => 'Resultat deleted successfully']);
    }
}
