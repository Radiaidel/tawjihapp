<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all();
        return response()->json($tests);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:50',
            'description' => 'nullable|string',
        ]);

        $test = Test::create($validatedData);
        return response()->json(['message' => 'Test created successfully', 'test' => $test], 201);
    }

    public function show(Test $test)
    {
        return response()->json($test);
    }

    public function update(Request $request, Test $test)
    {
        $validatedData = $request->validate([
            'nom' => 'sometimes|required|string|max:50',
            'description' => 'nullable|string',
        ]);

        $test->update($validatedData);
        return response()->json(['message' => 'Test updated successfully', 'test' => $test]);
    }

    public function destroy(Test $test)
    {
        $test->delete();
        return response()->json(['message' => 'Test deleted successfully']);
    }
}