<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDiplomeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titre' => 'required|string|max:50',
            'duree' => 'required|string|max:50',
            'niveau_etudes' => 'required|string|max:50',
        ];
    }
}
