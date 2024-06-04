<?php

namespace App\Http\Controllers;

use App\Models\Reponse;
use Illuminate\Http\Request;

class ReponseController extends Controller
{
    public function index()
    {
        $reponses = Reponse::all();
        return response()->json($reponses);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'contenu' => 'required|string',
            'Id_Questions' => 'required|exists:questions,id',
        ]);

        $reponse = Reponse::create($validatedData);
        return response()->json(['message' => 'Reponse created successfully', 'reponse' => $reponse], 201);
    }

    public function show(Reponse $reponse)
    {
        return response()->json($reponse);
    }

    public function update(Request $request, Reponse $reponse)
    {
        $validatedData = $request->validate([
            'contenu' => 'sometimes|required|string',
            'Id_Questions' => 'required|exists:questions,id',
        ]);

        $reponse->update($validatedData);
        return response()->json(['message' => 'Reponse updated successfully', 'reponse' => $reponse]);
    }

    public function destroy(Reponse $reponse)
    {
        $reponse->delete();
        return response()->json(['message' => 'Reponse deleted successfully']);
    }
}
