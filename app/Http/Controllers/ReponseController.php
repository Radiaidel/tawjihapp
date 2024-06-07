<?php

namespace App\Http\Controllers;

use App\Models\Reponse;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReponseRequest;
use App\Http\Requests\UpdateReponseRequest;
class ReponseController extends Controller
{
    public function index()
    {
        $reponses = Reponse::all();
        return response()->json($reponses);
    }

    public function store(StoreReponseRequest $request)
    {
        $reponse = Reponse::create($request->validated());
        return response()->json($reponse, 201);
    }

    public function update(UpdateReponseRequest $request, Reponse $reponse)
    {
        $reponse->update($request->validated());
        return response()->json($reponse, 200);
    }

    public function show(Reponse $reponse)
    {
        return response()->json($reponse);
    }


    public function destroy(Reponse $reponse)
    {
        $reponse->delete();
        return response()->json(['message' => 'Reponse deleted successfully']);
    }
}
