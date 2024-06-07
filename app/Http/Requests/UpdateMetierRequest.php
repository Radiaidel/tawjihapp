<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMetierRequest extends FormRequest
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
            'Id_Secteur_Metier' => 'nullable|exists:secteur_metiers,id',
        ];
    }
}
