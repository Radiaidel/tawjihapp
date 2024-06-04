<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $table = 'formations';
    protected $primaryKey = 'Id_Formation';
    protected $fillable = ['titre', 'description', 'Id_Secteur_Metier'];

    public function secteurMetier()
    {
        return $this->belongsTo(SecteurMetier::class, 'Id_Secteur_Metier');
    }

    public function offres()
    {
        return $this->hasMany(Offre::class, 'Id_Formation');
    }}
