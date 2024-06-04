<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return response()->json($questions);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'contenu' => 'required|string',
            'Id_Categories' => 'required|exists:categories,id',
        ]);

        $question = Question::create($validatedData);
        return response()->json(['message' => 'Question created successfully', 'question' => $question], 201);
    }

    public function show(Question $question)
    {
        return response()->json($question);
    }

    public function update(Request $request, Question $question)
    {
        $validatedData = $request->validate([
            'contenu' => 'sometimes|required|string',
            'Id_Categories' => 'required|exists:categories,id',
        ]);

        $question->update($validatedData);
        return response()->json(['message' => 'Question updated successfully', 'question' => $question]);
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return response()->json(['message' => 'Question deleted successfully']);
    }
}

