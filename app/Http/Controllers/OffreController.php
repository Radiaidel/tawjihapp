<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    public function index()
    {
        $offres = Offre::all();
        return response()->json($offres);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:50',
            'description' => 'nullable|string',
            'Id_Partenaire' => 'required|exists:partenaires,id',
        ]);

        $offre = Offre::create($validatedData);
        return response()->json(['message' => 'Offre created successfully', 'offre' => $offre], 201);
    }

    public function show(Offre $offre)
    {
        return response()->json($offre);
    }

    public function update(Request $request, Offre $offre)
    {
        $validatedData = $request->validate([
            'nom' => 'sometimes|required|string|max:50',
            'description' => 'nullable|string',
            'Id_Partenaire' => 'required|exists:partenaires,id',
        ]);

        $offre->update($validatedData);
        return response()->json(['message' => 'Offre updated successfully', 'offre' => $offre]);
    }

    public function destroy(Offre $offre)
    {
        $offre->delete();
        return response()->json(['message' => 'Offre deleted successfully']);
    }
}
