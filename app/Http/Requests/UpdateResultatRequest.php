<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateResultatRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'score' => 'nullable|numeric',
            'Id_Test' => 'nullable|exists:tests,id',
            'Id_Utilisateur' => 'nullable|exists:utilisateurs,id',
        ];
    }
}
