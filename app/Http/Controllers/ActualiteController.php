<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use App\Http\Requests\StoreActualiteRequest;
use App\Http\Requests\UpdateActualiteRequest;

class ActualiteController extends Controller
{
    public function index()
    {
        $actualites = Actualite::all();
        return response()->json($actualites);
    }


    public function show(Actualite $actualite)
    {
        return response()->json($actualite);
    }

    public function store(StoreActualiteRequest $request)
    {
        $actualite = Actualite::create($request->validated());
        return response()->json($actualite, 201);
    }

    public function update(UpdateActualiteRequest $request, Actualite $actualite)
    {
        $actualite->update($request->validated());
        return response()->json($actualite, 200);
    }

    public function destroy(Actualite $actualite)
    {
        $actualite->delete();
        return response()->json(['message' => 'Actualite deleted successfully']);
    }
}

