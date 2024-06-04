<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    public function index()
    {
        $actualites = Actualite::all();
        return response()->json($actualites);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:50',
            'contenu' => 'required|string',
            'date_publication' => 'required|date',
        ]);

        $actualite = Actualite::create($validatedData);
        return response()->json(['message' => 'Actualite created successfully', 'actualite' => $actualite], 201);
    }

    public function show(Actualite $actualite)
    {
        return response()->json($actualite);
    }

    public function update(Request $request, Actualite $actualite)
    {
        $validatedData = $request->validate([
            'titre' => 'sometimes|required|string|max:50',
            'contenu' => 'required|string',
            'date_publication' => 'required|date',
        ]);

        $actualite->update($validatedData);
        return response()->json(['message' => 'Actualite updated successfully', 'actualite' => $actualite]);
    }

    public function destroy(Actualite $actualite)
    {
        $actualite->delete();
        return response()->json(['message' => 'Actualite deleted successfully']);
    }
}

