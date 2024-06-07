<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return response()->json($categories);
    }


    public function show(Categorie $categorie)
    {
        return response()->json($categorie);
    }

    public function store(StoreCategorieRequest $request)
    {
        $categorie = Categorie::create($request->validated());
        return response()->json($categorie, 201);
    }

    public function update(UpdateCategorieRequest $request, Categorie $categorie)
    {
        $categorie->update($request->validated());
        return response()->json($categorie, 200);
    }
    
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return response()->json(['message' => 'Categorie deleted successfully']);
    }
}