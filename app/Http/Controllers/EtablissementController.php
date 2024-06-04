<?php

namespace App\Http\Controllers;

use App\Models\Etablissement;
use Illuminate\Http\Request;

class EtablissementController extends Controller
{
    public function index()
    {
        $etablissements = Etablissement::all();
        return response()->json($etablissements);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'logo' => 'required|string|max:50',
            'nom' => 'required|string|max:50',
            'description' => 'nullable|string',
            'type' => 'required|string',
            'statut' => 'required|string|in:public,privé,semi-public',
            'adresse' => 'required|string|max:50',
            'ville' => 'required|string|max:50',
            'telephone' => 'required|string|max:50',
            'fax' => 'nullable|string|max:50',
            'email' => 'required|string|email|max:50|unique:etablissements',
            'instagram_url' => 'nullable|string|max:50',
            'facebook_url' => 'nullable|string|max:50',
            'whatsapp_url' => 'nullable|string|max:50',
        ]);

        $etablissement = Etablissement::create($validatedData);
        return response()->json(['message' => 'Etablissement created successfully', 'etablissement' => $etablissement], 201);
    }

    public function show(Etablissement $etablissement)
    {
        return response()->json($etablissement);
    }

    public function update(Request $request, Etablissement $etablissement)
    {
        $validatedData = $request->validate([
            'logo' => 'required|string|max:50',
            'nom' => 'required|string|max:50',
            'description' => 'nullable|string',
            'type' => 'required|string',
            'statut' => 'required|string|in:public,privé,semi-public',
            'adresse' => 'required|string|max:50',
            'ville' => 'required|string|max:50',
            'telephone' => 'required|string|max:50',
            'fax' => 'nullable|string|max:50',
            'email' => 'required|string|email|max:50|unique:etablissements,email,' . $etablissement->id,
            'instagram_url' => 'nullable|string|max:50',
            'facebook_url' => 'nullable|string|max:50',
            'whatsapp_url' => 'nullable|string|max:50',
        ]);

        $etablissement->update($validatedData);
        return response()->json(['message' => 'Etablissement updated successfully', 'etablissement' => $etablissement]);
    }

    public function destroy(Etablissement $etablissement)
    {
        $etablissement->delete();
        return response()->json(['message' => 'Etablissement deleted successfully']);
    }
}

