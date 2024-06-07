<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDiplomeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titre' => 'nullable|string|max:50',
            'duree' => 'nullable|string|max:50',
            'niveau_etudes' => 'nullable|string|max:50',
        ];
    }
}
