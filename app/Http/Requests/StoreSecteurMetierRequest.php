<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSecteurMetierRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'icone' => 'required|string|max:50',
            'titre' => 'required|string|max:50',
            'description' => 'nullable|string',
        ];
    }
}
