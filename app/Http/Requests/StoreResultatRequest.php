<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResultatRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'score' => 'required|numeric',
            'Id_Test' => 'required|exists:tests,id',
            'Id_Utilisateur' => 'required|exists:utilisateurs,id',
        ];
    }
}
