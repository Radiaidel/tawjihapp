<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMediaRequest;
use App\Http\Requests\UpdateMediaRequest;

class MediaController extends Controller
{
    public function index()
    {
        $medias = Media::all();
        return response()->json($medias);
    }

    public function store(StoreMediaRequest $request)
    {
        $media = Media::create($request->validated());
        return response()->json($media, 201);
    }

    public function update(UpdateMediaRequest $request, Media $media)
    {
        $media->update($request->validated());
        return response()->json($media, 200);
    }

    public function show(Media $media)
    {
        return response()->json($media);
    }

    public function destroy(Media $media)
    {
        $media->delete();
        return response()->json(['message' => 'Media deleted successfully']);
    }
}
