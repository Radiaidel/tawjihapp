<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUtilisateurRequest;
use App\Http\Requests\UpdateUtilisateurRequest;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utilisateurs = Utilisateur::all();
        return response()->json($utilisateurs);
    }

    public function show(Utilisateur $utilisateur)
    {
        return response()->json($utilisateur);
    }

 
    public function store(StoreUtilisateurRequest $request)
    {
        $utilisateur = Utilisateur::create($request->validated());
        return response()->json($utilisateur, 201);
    }

    public function update(UpdateUtilisateurRequest $request, Utilisateur $utilisateur)
    {
        $utilisateur->update($request->validated());
        return response()->json($utilisateur, 200);
    }

    
    public function destroy(Utilisateur $utilisateur)
    {
        $utilisateur->delete();

        return response()->json(['message' => 'Utilisateur deleted successfully']);
    }
}

