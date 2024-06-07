<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOffreRequest extends FormRequest
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
            'Id_Service' => 'nullable|exists:services,id',
        ];
    }
}
