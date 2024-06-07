<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEtablissementRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $etablissementId = $this->route('etablissement')->id;

        return [
            'logo' => 'nullable|string|max:50',
            'nom' => 'nullable|string|max:50',
            'description' => 'nullable|string',
            'type' => 'nullable|string',
            'statut' => 'nullable|in:public,privé,semi-public',
            'adresse' => 'nullable|string|max:50',
            'ville' => 'nullable|string|max:50',
            'telephone' => 'nullable|string|max:50',
            'fax' => 'nullable|string|max:50',
            'email' => "nullable|email|unique:etablissements,email,{$etablissementId}",
            'instagram_url' => 'nullable|string|max:50',
            'facebook_url' => 'nullable|string|max:50',
            'whatsapp_url' => 'nullable|string|max:50',
        ];
    }
}
