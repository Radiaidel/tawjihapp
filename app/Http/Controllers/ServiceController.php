<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return response()->json($services);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:50',
            'description' => 'nullable|string',
            'tarif' => 'required|numeric',
            'Id_Categorie_Services' => 'required|exists:categorie_services,id',
        ]);

        $service = Service::create($validatedData);
        return response()->json(['message' => 'Service created successfully', 'service' => $service], 201);
    }

    public function show(Service $service)
    {
        return response()->json($service);
    }

    public function update(Request $request, Service $service)
    {
        $validatedData = $request->validate([
            'nom' => 'sometimes|required|string|max:50',
            'description' => 'nullable|string',
            'tarif' => 'required|numeric',
            'Id_Categorie_Services' => 'required|exists:categorie_services,id',
        ]);

        $service->update($validatedData);
        return response()->json(['message' => 'Service updated successfully', 'service' => $service]);
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return response()->json(['message' => 'Service deleted successfully']);
    }
}
