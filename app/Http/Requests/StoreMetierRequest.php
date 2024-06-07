<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMetierRequest extends FormRequest
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
            'Id_Secteur_Metier' => 'required|exists:secteur_metiers,id',
        ];
    }
}
