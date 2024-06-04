<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    protected $table = 'offres';
    protected $fillable = ['Id_Etablissemnt', 'Id_Formation', 'Id_Diplome', 'cout'];

    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class, 'Id_Etablissemnt');
    }

    public function formation()
    {
        return $this->belongsTo(Formation::class, 'Id_Formation');
    }

    public function diplome()
    {
        return $this->belongsTo(Diplome::class, 'Id_Diplome');
    }
}
