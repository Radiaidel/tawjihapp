<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUtilisateurRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nom' => 'required|string|max:50',
            'email' => 'required|email|unique:utilisateurs,email',
            'telephone' => 'required|string|max:50',
            'role' => 'required|string|max:50',
        ];
    }
}
