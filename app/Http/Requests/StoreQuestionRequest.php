<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'texte' => 'required|string',
            'type' => 'required|string|max:50',
            'Id_Test' => 'required|exists:tests,id',
        ];
    }
}
