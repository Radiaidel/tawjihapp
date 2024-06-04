<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $primaryKey = 'Id_Question';
    protected $fillable = ['question', 'ordre', 'Id_Categories'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'Id_Categories');
    }

    public function choix()
    {
        return $this->hasMany(Choix::class, 'Id_Question');
    }
}
