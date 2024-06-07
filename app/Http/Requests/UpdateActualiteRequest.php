<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateActualiteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titre' => 'nullable|string|max:50',
            'contenu' => 'nullable|string',
            'date_publication' => 'nullable|date',
        ];
    }
}
