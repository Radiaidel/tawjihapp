<?php

namespace App\Http\Controllers;

use App\Models\SecteurMetier;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSecteurMetierRequest;
use App\Http\Requests\UpdateSecteurMetierRequest;

class SecteurMetierController extends Controller
{
    public function index()
    {
        $secteurMetiers = SecteurMetier::all();
        return response()->json($secteurMetiers);
    }

    public function show(SecteurMetier $secteurMetier)
    {
        return response()->json($secteurMetier);
    }


    public function store(StoreSecteurMetierRequest $request)
    {
        $secteurMetier = SecteurMetier::create($request->validated());
        return response()->json($secteurMetier, 201);
    }

    public function update(UpdateSecteurMetierRequest $request, SecteurMetier $secteurMetier)
    {
        $secteurMetier->update($request->validated());
        return response()->json($secteurMetier, 200);
    }
    
    public function destroy(SecteurMetier $secteurMetier)
    {
        $secteurMetier->delete();
        return response()->json(['message' => 'Secteur Metier deleted successfully']);
    }
}
