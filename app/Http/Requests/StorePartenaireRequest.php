<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartenaireRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'date_creation' => 'required|date',
            'statut' => 'required|string',
            'Id_Utilisateur' => 'required|exists:utilisateurs,id|unique:partenaires,Id_Utilisateur',
        ];
    }
}

