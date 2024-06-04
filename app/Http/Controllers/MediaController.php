<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        $medias = Media::all();
        return response()->json($medias);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'url' => 'required|string|max:50',
            'type' => 'required|string',
            'Id_Actualites' => 'nullable|exists:actualites,id',
        ]);

        $media = Media::create($validatedData);
        return response()->json(['message' => 'Media created successfully', 'media' => $media], 201);
    }

    public function show(Media $media)
    {
        return response()->json($media);
    }

    public function update(Request $request, Media $media)
    {
        $validatedData = $request->validate([
            'url' => 'sometimes|required|string|max:50',
            'type' => 'required|string',
            'Id_Actualites' => 'nullable|exists:actualites,id',
        ]);

        $media->update($validatedData);
        return response()->json(['message' => 'Media updated successfully', 'media' => $media]);
    }

    public function destroy(Media $media)
    {
        $media->delete();
        return response()->json(['message' => 'Media deleted successfully']);
    }
}
