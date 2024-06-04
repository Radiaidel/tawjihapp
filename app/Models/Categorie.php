<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'Id_Categories';
    protected $fillable = ['nom', 'Id_Tests'];

    public function tests()
    {
        return $this->belongsTo(Test::class, 'Id_Tests');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'Id_Categories');
    }

    public function resultats()
    {
        return $this->hasMany(Resultat::class, 'Id_Categories');
    }}
