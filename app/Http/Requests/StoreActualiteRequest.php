<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreActualiteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titre' => 'required|string|max:50',
            'contenu' => 'required|string',
            'date_publication' => 'required|date',
        ];
    }
}
