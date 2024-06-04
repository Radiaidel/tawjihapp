<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metier extends Model
{
    use HasFactory;

    protected $table = 'metiers';
    protected $primaryKey = 'Id_Metier';
    protected $fillable = ['titre', 'description', 'Id_Secteur_Metier'];

    public function secteurMetier()
    {
        return $this->belongsTo(SecteurMetier::class, 'Id_Secteur_Metier');
    }}
