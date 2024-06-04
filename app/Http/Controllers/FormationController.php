<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {
        $formations = Formation::all();
        return response()->json($formations);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:50',
            'description' => 'nullable|string',
            'Id_Secteur_Metier' => 'required|exists:secteur_metiers,id',
        ]);

        $formation = Formation::create($validatedData);
        return response()->json(['message' => 'Formation created successfully', 'formation' => $formation], 201);
    }

    public function show(Formation $formation)
    {
        return response()->json($formation);
    }

    public function update(Request $request, Formation $formation)
    {
        $validatedData = $request->validate([
            'titre' => 'sometimes|required|string|max:50',
            'description' => 'nullable|string',
            'Id_Secteur_Metier' => 'required|exists:secteur_metiers,id',
        ]);

        $formation->update($validatedData);
        return response()->json(['message' => 'Formation updated successfully', 'formation' => $formation]);
    }

    public function destroy(Formation $formation)
    {
        $formation->delete();
        return response()->json(['message' => 'Formation deleted successfully']);
    }
}

