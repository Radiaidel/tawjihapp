<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titre' => 'nullable|string|max:50',
            'description' => 'nullable|string',
            'prix' => 'nullable|numeric',
            'Id_Categorie_Service' => 'nullable|exists:categorie_services,id',
        ];
    }
}
