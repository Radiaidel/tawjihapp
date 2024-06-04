<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    use HasFactory;

    protected $table = 'partenaires';
    protected $primaryKey = 'Id_Partenaire';
    protected $fillable = ['date_creation', 'statut', 'Id_Utilisateur'];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'Id_Utilisateur');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'Id_Partenaire');
    }}
