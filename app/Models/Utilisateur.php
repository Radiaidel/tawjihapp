<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $table = 'utilisateurs';
    protected $primaryKey = 'Id_Utilisateur';
    protected $fillable = ['nom', 'email', 'telephone', 'role'];

    public function partenaires()
    {
        return $this->hasOne(Partenaire::class, 'Id_Utilisateur');
    }

    public function reservers()
    {
        return $this->belongsToMany(Evenement::class, 'reservers', 'Id_Utilisateur', 'Id_Evenement')
                    ->withPivot('statut')
                    ->withTimestamps();
    }

    public function reponses()
    {
        return $this->belongsToMany(Choix::class, 'reponses', 'Id_Utilisateur', 'Id_Choix')
                    ->withTimestamps();
    }

    public function resultats()
    {
        return $this->hasMany(Resultat::class, 'Id_Utilisateur');
    }}
