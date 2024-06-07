<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTestRequest;
use App\Http\Requests\UpdateTestRequest;


class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all();
        return response()->json($tests);
    }



    public function show(Test $test)
    {
        return response()->json($test);
    }

    public function store(StoreTestRequest $request)
    {
        $test = Test::create($request->validated());
        return response()->json($test, 201);
    }

    public function update(UpdateTestRequest $request, Test $test)
    {
        $test->update($request->validated());
        return response()->json($test, 200);
    }

    public function destroy(Test $test)
    {
        $test->delete();
        return response()->json(['message' => 'Test deleted successfully']);
    }
}