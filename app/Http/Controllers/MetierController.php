<?php


namespace App\Http\Controllers;

use App\Models\Metier;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMetierRequest;
use App\Http\Requests\UpdateMetierRequest;

class MetierController extends Controller
{
    public function index()
    {
        $metiers = Metier::all();
        return response()->json($metiers);
    }

    public function show(Metier $metier)
    {
        return response()->json($metier);
    }

    public function store(StoreMetierRequest $request)
    {
        $metier = Metier::create($request->validated());
        return response()->json($metier, 201);
    }

    public function update(UpdateMetierRequest $request, Metier $metier)
    {
        $metier->update($request->validated());
        return response()->json($metier, 200);
    }
    
    public function destroy(Metier $metier)
    {
        $metier->delete();
        return response()->json(['message' => 'Metier deleted']);
    }
}