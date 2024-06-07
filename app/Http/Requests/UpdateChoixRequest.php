<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateChoixRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'texte' => 'nullable|string',
            'Id_Question' => 'nullable|exists:questions,id',
        ];
    }
}
