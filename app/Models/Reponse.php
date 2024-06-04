<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    use HasFactory;
    protected $table = 'reponses';
    protected $fillable = ['Id_Utilisateur', 'Id_Choix'];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'Id_Utilisateur');
    }

    public function choix()
    {
        return $this->belongsTo(Choix::class, 'Id_Choix');
    }
}
