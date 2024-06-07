<?php

namespace App\Http\Controllers;

use App\Models\Choix;
use Illuminate\Http\Request;
use App\Http\Requests\StoreChoixRequest;
use App\Http\Requests\UpdateChoixRequest;

class ChoixController extends Controller
{
    public function index()
    {
        $choix = Choix::all();
        return response()->json($choix);
    }


    public function show(Choix $choix)
    {
        return response()->json($choix);
    }

    public function store(StoreChoixRequest $request)
    {
        $choix = Choix::create($request->validated());
        return response()->json($choix, 201);
    }

    public function update(UpdateChoixRequest $request, Choix $choix)
    {
        $choix->update($request->validated());
        return response()->json($choix, 200);
    }

    public function destroy(Choix $choix)
    {
        $choix->delete();
        return response()->json(['message' => 'Choix deleted successfully']);
    }
}
