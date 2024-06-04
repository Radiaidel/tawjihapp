<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\CategorieService;
use Illuminate\Http\Request;

class CategorieServiceController extends Controller
{
    public function index()
    {
        $categorieServices = CategorieService::all();
        return response()->json($categorieServices);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:50',
        ]);

        $categorieService = CategorieService::create($validatedData);
        return response()->json(['message' => 'Categorie Service created successfully', 'categorieService' => $categorieService], 201);
    }

    public function show(CategorieService $categorieService)
    {
        return response()->json($categorieService);
    }

    public function update(Request $request, CategorieService $categorieService)
    {
        $validatedData = $request->validate([
            'nom' => 'sometimes|required|string|max:50',
        ]);

        $categorieService->update($validatedData);
        return response()->json(['message' => 'Categorie Service updated successfully', 'categorieService' => $categorieService]);
    }

    public function destroy(CategorieService $categorieService)
    {
        $categorieService->delete();
        return response()->json(['message' => 'Categorie Service deleted successfully']);
    }
}

