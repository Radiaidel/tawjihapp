<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOffreRequest;
use App\Http\Requests\UpdateOffreRequest;

class OffreController extends Controller
{
    public function index()
    {
        $offres = Offre::all();
        return response()->json($offres);
    }

    public function store(StoreOffreRequest $request)
    {
        $offre = Offre::create($request->validated());
        return response()->json($offre, 201);
    }

    public function update(UpdateOffreRequest $request, Offre $offre)
    {
        $offre->update($request->validated());
        return response()->json($offre, 200);
    }

    public function show(Offre $offre)
    {
        return response()->json($offre);
    }
    public function destroy(Offre $offre)
    {
        $offre->delete();
        return response()->json(['message' => 'Offre deleted successfully']);
    }
}
