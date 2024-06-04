<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    use HasFactory;

    protected $table = 'diplomes';
    protected $primaryKey = 'Id_Diplome';
    protected $fillable = ['titre', 'duree', 'niveau_etudes'];
}
