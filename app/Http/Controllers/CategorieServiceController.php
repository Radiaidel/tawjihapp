<?php

namespace App\Http\Controllers;

use App\Models\CategorieService;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategorieServiceRequest;
use App\Http\Requests\UpdateCategorieServiceRequest;

class CategorieServiceController extends Controller
{
    public function index()
    {
        $categorieServices = CategorieService::all();
        return response()->json($categorieServices);
    }


    public function show(CategorieService $categorieService)
    {
        return response()->json($categorieService);
    }


    public function store(StoreCategorieServiceRequest $request)
    {
        $categorieService = CategorieService::create($request->validated());
        return response()->json($categorieService, 201);
    }

    public function update(UpdateCategorieServiceRequest $request, CategorieService $categorieService)
    {
        $categorieService->update($request->validated());
        return response()->json($categorieService, 200);
    }
    
    public function destroy(CategorieService $categorieService)
    {
        $categorieService->delete();
        return response()->json(['message' => 'Categorie Service deleted successfully']);
    }
}

