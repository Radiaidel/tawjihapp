<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEtablissementRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'logo' => 'required|string|max:50',
            'nom' => 'required|string|max:50',
            'description' => 'nullable|string',
            'type' => 'required|string',
            'statut' => 'required|in:public,privé,semi-public',
            'adresse' => 'required|string|max:50',
            'ville' => 'required|string|max:50',
            'telephone' => 'required|string|max:50',
            'fax' => 'nullable|string|max:50',
            'email' => 'required|email|unique:etablissements,email',
            'instagram_url' => 'nullable|string|max:50',
            'facebook_url' => 'nullable|string|max:50',
            'whatsapp_url' => 'nullable|string|max:50',
        ];
    }
}
