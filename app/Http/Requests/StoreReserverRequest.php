<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReserverRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'date_reservation' => 'required|date',
            'Id_Utilisateur' => 'required|exists:utilisateurs,id',
            'Id_Offre' => 'required|exists:offres,id',
        ];
    }
}
