<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEvenementRequest extends FormRequest
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
            'date_heure' => 'nullable|date',
            'adresse' => 'nullable|string|max:50',
        ];
    }
}
