<?php

namespace App\Http\Controllers;

use App\Models\Resultat;
use Illuminate\Http\Request;
use App\Http\Requests\StoreResultatRequest;
use App\Http\Requests\UpdateResultatRequest;
class ResultatController extends Controller
{
    public function index()
    {
        $resultats = Resultat::all();
        return response()->json($resultats);
    }

    public function store(StoreResultatRequest $request)
    {
        $resultat = Resultat::create($request->validated());
        return response()->json($resultat, 201);
    }

    public function update(UpdateResultatRequest $request, Resultat $resultat)
    {
        $resultat->update($request->validated());
        return response()->json($resultat, 200);
    }

    public function show(Resultat $resultat)
    {
        return response()->json($resultat);
    }


    public function destroy(Resultat $resultat)
    {
        $resultat->delete();
        return response()->json(['message' => 'Resultat deleted successfully']);
    }
}
