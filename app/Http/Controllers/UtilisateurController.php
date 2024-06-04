<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:50',
            'email' => 'required|string|email|max:50|unique:utilisateurs',
            'telephone' => 'required|string|max:50',
            'role' => 'required|string|max:50',
        ]);

        $utilisateur = Utilisateur::create($validatedData);

        return response()->json(['message' => 'Utilisateur created successfully', 'utilisateur' => $utilisateur], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function show(Utilisateur $utilisateur)
    {
        return response()->json($utilisateur);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utilisateur $utilisateur)
    {
        $validatedData = $request->validate([
            'nom' => 'sometimes|required|string|max:50',
            'email' => 'sometimes|required|string|email|max:50|unique:utilisateurs,email,' . $utilisateur->Id_Utilisateur,
            'telephone' => 'sometimes|required|string|max:50',
            'role' => 'sometimes|required|string|max:50',
        ]);

        $utilisateur->update($validatedData);

        return response()->json(['message' => 'Utilisateur updated successfully', 'utilisateur' => $utilisateur]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utilisateur $utilisateur)
    {
        $utilisateur->delete();

        return response()->json(['message' => 'Utilisateur deleted successfully']);
    }
}

