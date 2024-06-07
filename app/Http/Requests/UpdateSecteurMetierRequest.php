<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSecteurMetierRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'icone' => 'nullable|string|max:50',
            'titre' => 'nullable|string|max:50',
            'description' => 'nullable|string',
        ];
    }
}
