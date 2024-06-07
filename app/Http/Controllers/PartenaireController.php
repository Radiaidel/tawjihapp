<?php
namespace App\Http\Controllers;

use App\Models\Partenaire;
use App\Http\Requests\StorePartenaireRequest;
use App\Http\Requests\UpdatePartenaireRequest;
use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    public function index()
    {
        $partenaires = Partenaire::all();
        return response()->json($partenaires);
    }

    public function store(StorePartenaireRequest $request)
    {
        $partenaire = Partenaire::create($request->validated());
        return response()->json(['message' => 'Partenaire created successfully', 'partenaire' => $partenaire], 201);
    }

    public function show(Partenaire $partenaire)
    {
        return response()->json($partenaire);
    }

    public function update(UpdatePartenaireRequest $request, Partenaire $partenaire)
    {
        $partenaire->update($request->validated());
        return response()->json(['message' => 'Partenaire updated successfully', 'partenaire' => $partenaire]);
    }

    public function destroy(Partenaire $partenaire)
    {
        $partenaire->delete();
        return response()->json(['message' => 'Partenaire deleted successfully']);
    }
}
