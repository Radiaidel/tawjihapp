<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $table = 'medias';
    protected $primaryKey = 'Id_Media';
    protected $fillable = ['path', 'type', 'Id_Actualite', 'Id_Etablissemnt'];

    public function actualite()
    {
        return $this->belongsTo(Actualite::class, 'Id_Actualite');
    }

    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class, 'Id_Etablissemnt');
    }}
