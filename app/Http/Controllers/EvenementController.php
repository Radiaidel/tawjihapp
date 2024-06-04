<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    public function index()
    {
        $evenements = Evenement::all();
        return response()->json($evenements);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:50',
            'description' => 'nullable|string',
            'date_heure' => 'required|date',
            'adresse' => 'required|string|max:50',
        ]);

        $evenement = Evenement::create($validatedData);
        return response()->json(['message' => 'Evenement created successfully', 'evenement' => $evenement], 201);
    }

    public function show(Evenement $evenement)
    {
        return response()->json($evenement);
    }

    public function update(Request $request, Evenement $evenement)
    {
        $validatedData = $request->validate([
            'titre' => 'sometimes|required|string|max:50',
            'description' => 'nullable|string',
            'date_heure' => 'required|date',
            'adresse' => 'required|string|max:50',
        ]);

        $evenement->update($validatedData);
        return response()->json(['message' => 'Evenement updated successfully', 'evenement' => $evenement]);
    }

    public function destroy(Evenement $evenement)
    {
        $evenement->delete();
        return response()->json(['message' => 'Evenement deleted successfully']);
    }
}
