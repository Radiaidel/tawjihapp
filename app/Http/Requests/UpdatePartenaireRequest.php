<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePartenaireRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $partenaireId = $this->route('partenaire')->id;

        return [
            'date_creation' => 'nullable|date',
            'statut' => 'nullable|string',
            'Id_Utilisateur' => "nullable|exists:utilisateurs,id|unique:partenaires,Id_Utilisateur,{$partenaireId}",
        ];
    }
}
