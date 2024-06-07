<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return response()->json($questions);
    }

    public function store(StoreQuestionRequest $request)
    {
        $question = Question::create($request->validated());
        return response()->json($question, 201);
    }

    public function update(UpdateQuestionRequest $request, Question $question)
    {
        $question->update($request->validated());
        return response()->json($question, 200);
    }

    public function show(Question $question)
    {
        return response()->json($question);
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return response()->json(['message' => 'Question deleted successfully']);
    }
}

