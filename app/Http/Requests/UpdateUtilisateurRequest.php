<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUtilisateurRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $utilisateurId = $this->route('utilisateur')->id;

        return [
            'nom' => 'nullable|string|max:50',
            'email' => "nullable|email|unique:utilisateurs,email,{$utilisateurId}",
            'telephone' => 'nullable|string|max:50',
            'role' => 'nullable|string|max:50',
        ];
    }
}
