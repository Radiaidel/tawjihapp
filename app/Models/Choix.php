<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choix extends Model
{
    use HasFactory;
    protected $table = 'choix';
    protected $primaryKey = 'Id_Choix';
    protected $fillable = ['choix_text', 'point', 'Id_Question'];

    public function question()
    {
        return $this->belongsTo(Question::class, 'Id_Question');
    }

    public function reponses()
    {
        return $this->hasMany(Reponse::class, 'Id_Choix');
    }

}
