<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    public function index()
    {
        $partenaires = Partenaire::all();
        return response()->json($partenaires);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date_creation' => 'required|date',
            'statut' => 'required|string',
            'Id_Utilisateur' => 'required|exists:utilisateurs,id|unique:partenaires,Id_Utilisateur',
        ]);

        $partenaire = Partenaire::create($validatedData);
        return response()->json(['message' => 'Partenaire created successfully', 'partenaire' => $partenaire], 201);
    }

    public function show(Partenaire $partenaire)
    {
        return response()->json($partenaire);
    }

    public function update(Request $request, Partenaire $partenaire)
    {
        $validatedData = $request->validate([
            'date_creation' => 'required|date',
            'statut' => 'required|string',
            'Id_Utilisateur' => 'required|exists:utilisateurs,id|unique:partenaires,Id_Utilisateur,' . $partenaire->id,
        ]);

        $partenaire->update($validatedData);
        return response()->json(['message' => 'Partenaire updated successfully', 'partenaire' => $partenaire]);
    }

    public function destroy(Partenaire $partenaire)
    {
        $partenaire->delete();
        return response()->json(['message' => 'Partenaire deleted successfully']);
    }
}

