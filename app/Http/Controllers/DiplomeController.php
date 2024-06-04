<?php
namespace App\Http\Controllers;

use App\Models\Diplome;
use Illuminate\Http\Request;

class DiplomeController extends Controller
{
    public function index()
    {
        $diplomes = Diplome::all();
        return response()->json($diplomes);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:50',
            'duree' => 'required|string|max:50',
            'niveau_etudes' => 'required|string|max:50',
        ]);

        $diplome = Diplome::create($validatedData);
        return response()->json(['message' => 'Diplome created successfully', 'diplome' => $diplome], 201);
    }

    public function show(Diplome $diplome)
    {
        return response()->json($diplome);
    }

    public function update(Request $request, Diplome $diplome)
    {
        $validatedData = $request->validate([
            'titre' => 'sometimes|required|string|max:50',
            'duree' => 'sometimes|required|string|max:50',
            'niveau_etudes' => 'sometimes|required|string|max:50',
        ]);

        $diplome->update($validatedData);
        return response()->json(['message' => 'Diplome updated successfully', 'diplome' => $diplome]);
    }

    public function destroy(Diplome $diplome)
    {
        $diplome->delete();
        return response()->json(['message' => 'Diplome deleted successfully']);
    }
}
