<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFormationRequest;
use App\Http\Requests\UpdateFormationRequest;

class FormationController extends Controller
{
    public function index()
    {
        $formations = Formation::all();
        return response()->json($formations);
    }


    public function show(Formation $formation)
    {
        return response()->json($formation);
    }

    public function store(StoreFormationRequest $request)
    {
        $formation = Formation::create($request->validated());
        return response()->json($formation, 201);
    }

    public function update(UpdateFormationRequest $request, Formation $formation)
    {
        $formation->update($request->validated());
        return response()->json($formation, 200);
    }
    
    public function destroy(Formation $formation)
    {
        $formation->delete();
        return response()->json(['message' => 'Formation deleted successfully']);
    }
}

