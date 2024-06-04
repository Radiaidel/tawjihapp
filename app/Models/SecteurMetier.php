<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecteurMetier extends Model
{
    use HasFactory;

    protected $table = 'secteur_metiers';
    protected $primaryKey = 'Id_Secteur_Metier';
    protected $fillable = ['icone', 'titre', 'description'];

    public function metiers()
    {
        return $this->hasMany(Metier::class, 'Id_Secteur_Metier');
    }

    public function formations()
    {
        return $this->hasMany(Formation::class, 'Id_Secteur_Metier');
    }}
