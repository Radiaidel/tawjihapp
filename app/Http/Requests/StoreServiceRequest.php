<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titre' => 'required|string|max:50',
            'description' => 'nullable|string',
            'prix' => 'required|numeric',
            'Id_Categorie_Service' => 'required|exists:categorie_services,id',
        ];
    }
}
