<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreChoixRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'texte' => 'required|string',
            'Id_Question' => 'required|exists:questions,id',
        ];
    }
}
