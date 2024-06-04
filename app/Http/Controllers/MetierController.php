<?php


namespace App\Http\Controllers;

use App\Models\Metier;
use Illuminate\Http\Request;

class MetierController extends Controller
{
    public function index()
    {
        $metiers = Metier::all();
        return response()->json($metiers);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:50',
            'description' => 'nullable|string',
            'Id_Secteur_Metier' => 'required|exists:secteur_metiers,id',
        ]);

        $metier = Metier::create($validatedData);
        return response()->json(['message' => 'Metier created successfully', 'metier' => $metier], 201);
    }

    public function show(Metier $metier)
    {
        return response()->json($metier);
    }

    public function update(Request $request, Metier $metier)
    {
        $validatedData = $request->validate([
            'titre' => 'sometimes|required|string|max:50',
            'description' => 'nullable|string',
            'Id_Secteur_Metier' => 'required|exists:secteur_metiers,id',
        ]);

        $metier->update($validatedData);
        return response()->json(['message' => 'Metier updated successfully', 'metier' => $metier]);
    }

    public function destroy(Metier $metier)
    {
        $metier->delete();
        return response()->json(['message' => 'Metier deleted']);
    }
}