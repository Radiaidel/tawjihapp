<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuestionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'texte' => 'nullable|string',
            'type' => 'nullable|string|max:50',
            'Id_Test' => 'nullable|exists:tests,id',
        ];
    }
}
