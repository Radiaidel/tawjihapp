<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $table = 'evenements';
    protected $primaryKey = 'Id_Evenement';
    protected $fillable = ['titre', 'description', 'date_heure', 'adresse'];

    public function utilisateurs()
    {
        return $this->belongsToMany(Utilisateur::class, 'reservers', 'Id_Evenement', 'Id_Utilisateur')
                    ->withPivot('statut')
                    ->withTimestamps();
    }}
