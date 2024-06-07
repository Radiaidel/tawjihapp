<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEvenementRequest;
use App\Http\Requests\UpdateEvenementRequest;

class EvenementController extends Controller
{
    public function index()
    {
        $evenements = Evenement::all();
        return response()->json($evenements);
    }

    public function show(Evenement $evenement)
    {
        return response()->json($evenement);
    }

    public function store(StoreEvenementRequest $request)
    {
        $evenement = Evenement::create($request->validated());
        return response()->json($evenement, 201);
    }

    public function update(UpdateEvenementRequest $request, Evenement $evenement)
    {
        $evenement->update($request->validated());
        return response()->json($evenement, 200);
    }
    
    public function destroy(Evenement $evenement)
    {
        $evenement->delete();
        return response()->json(['message' => 'Evenement deleted successfully']);
    }
}
