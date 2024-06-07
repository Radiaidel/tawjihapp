<?php
namespace App\Http\Controllers;

use App\Models\Diplome;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDiplomeRequest;
use App\Http\Requests\UpdateDiplomeRequest;

class DiplomeController extends Controller
{
    public function index()
    {
        $diplomes = Diplome::all();
        return response()->json($diplomes);
    }

    public function show(Diplome $diplome)
    {
        return response()->json($diplome);
    }


    public function store(StoreDiplomeRequest $request)
    {
        $diplome = Diplome::create($request->validated());
        return response()->json($diplome, 201);
    }

    public function update(UpdateDiplomeRequest $request, Diplome $diplome)
    {
        $diplome->update($request->validated());
        return response()->json($diplome, 200);
    }

    
    public function destroy(Diplome $diplome)
    {
        $diplome->delete();
        return response()->json(['message' => 'Diplome deleted successfully']);
    }
}
