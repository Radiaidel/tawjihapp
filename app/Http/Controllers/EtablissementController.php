<?php

namespace App\Http\Controllers;

use App\Models\Etablissement;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEtablissementRequest;
use App\Http\Requests\UpdateEtablissementRequest;
class EtablissementController extends Controller
{
    public function index()
    {
        $etablissements = Etablissement::all();
        return response()->json($etablissements);
    }

 

    public function show(Etablissement $etablissement)
    {
        return response()->json($etablissement);
    }

    public function store(StoreEtablissementRequest $request)
    {
        $etablissement = Etablissement::create($request->validated());
        return response()->json($etablissement, 201);
    }

    public function update(UpdateEtablissementRequest $request, Etablissement $etablissement)
    {
        $etablissement->update($request->validated());
        return response()->json($etablissement, 200);
    }

    public function destroy(Etablissement $etablissement)
    {
        $etablissement->delete();
        return response()->json(['message' => 'Etablissement deleted successfully']);
    }
}

