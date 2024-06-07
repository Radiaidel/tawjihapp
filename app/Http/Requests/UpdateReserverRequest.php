<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReserverRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'date_reservation' => 'nullable|date',
            'Id_Utilisateur' => 'nullable|exists:utilisateurs,id',
            'Id_Offre' => 'nullable|exists:offres,id',
        ];
    }
}
