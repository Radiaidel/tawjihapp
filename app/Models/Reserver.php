<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserver extends Model
{
    use HasFactory;
    protected $table = 'reservers';
    protected $fillable = ['Id_Utilisateur', 'Id_Evenement', 'statut'];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'Id_Utilisateur');
    }

    public function evenement()
    {
        return $this->belongsTo(Evenement::class, 'Id_Evenement');
    }
}
