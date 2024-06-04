<?php

namespace App\Http\Controllers;

use App\Models\SecteurMetier;
use Illuminate\Http\Request;

class SecteurMetierController extends Controller
{
    public function index()
    {
        $secteurMetiers = SecteurMetier::all();
        return response()->json($secteurMetiers);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'icone' => 'required|string|max:50',
            'titre' => 'required|string|max:50',
            'description' => 'nullable|string',
        ]);

        $secteurMetier = SecteurMetier::create($validatedData);
        return response()->json(['message' => 'Secteur Metier created successfully', 'secteurMetier' => $secteurMetier], 201);
    }

    public function show(SecteurMetier $secteurMetier)
    {
        return response()->json($secteurMetier);
    }

    public function update(Request $request, SecteurMetier $secteurMetier)
    {
        $validatedData = $request->validate([
            'icone' => 'sometimes|required|string|max:50',
            'titre' => 'sometimes|required|string|max:50',
            'description' => 'nullable|string',
        ]);

        $secteurMetier->update($validatedData);
        return response()->json(['message' => 'Secteur Metier updated successfully', 'secteurMetier' => $secteurMetier]);
    }

    public function destroy(SecteurMetier $secteurMetier)
    {
        $secteurMetier->delete();
        return response()->json(['message' => 'Secteur Metier deleted successfully']);
    }
}
