<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return response()->json($categories);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:50',
            'Id_Tests' => 'required|exists:tests,id',
        ]);

        $categorie = Categorie::create($validatedData);
        return response()->json(['message' => 'Categorie created successfully', 'categorie' => $categorie], 201);
    }

    public function show(Categorie $categorie)
    {
        return response()->json($categorie);
    }

    public function update(Request $request, Categorie $categorie)
    {
        $validatedData = $request->validate([
            'nom' => 'sometimes|required|string|max:50',
            'Id_Tests' => 'required|exists:tests,id',
        ]);

        $categorie->update($validatedData);
        return response()->json(['message' => 'Categorie updated successfully', 'categorie' => $categorie]);
    }

    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return response()->json(['message' => 'Categorie deleted successfully']);
    }
}