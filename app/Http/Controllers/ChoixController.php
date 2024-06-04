<?php

namespace App\Http\Controllers;

use App\Models\Choix;
use Illuminate\Http\Request;

class ChoixController extends Controller
{
    public function index()
    {
        $choix = Choix::all();
        return response()->json($choix);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'contenu' => 'required|string',
            'Id_Questions' => 'required|exists:questions,id',
        ]);

        $choix = Choix::create($validatedData);
        return response()->json(['message' => 'Choix created successfully', 'choix' => $choix], 201);
    }

    public function show(Choix $choix)
    {
        return response()->json($choix);
    }

    public function update(Request $request, Choix $choix)
    {
        $validatedData = $request->validate([
            'contenu' => 'sometimes|required|string',
            'Id_Questions' => 'required|exists:questions,id',
        ]);

        $choix->update($validatedData);
        return response()->json(['message' => 'Choix updated successfully', 'choix' => $choix]);
    }

    public function destroy(Choix $choix)
    {
        $choix->delete();
        return response()->json(['message' => 'Choix deleted successfully']);
    }
}
