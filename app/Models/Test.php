<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $table = 'tests';
    protected $primaryKey = 'Id_Tests';
    protected $fillable = ['nom', 'description'];

    public function categories()
    {
        return $this->hasMany(Categorie::class, 'Id_Tests');
    }

    public function resultats()
    {
        return $this->hasMany(Resultat::class, 'Id_Tests');
    }}
