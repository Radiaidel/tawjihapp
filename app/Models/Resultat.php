<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    use HasFactory;
    protected $table = 'resultats';
    protected $fillable = ['Id_Utilisateur', 'Id_Tests', 'Id_Categories', 'score'];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'Id_Utilisateur');
    }

    public function test()
    {
        return $this->belongsTo(Test::class, 'Id_Tests');
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'Id_Categories');
    }
}
