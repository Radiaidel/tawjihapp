<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;

    protected $table = 'actualites';
    protected $primaryKey = 'Id_Actualite';
    protected $fillable = ['titre', 'contenu', 'date_publication'];

    public function medias()
    {
        return $this->hasMany(Media::class, 'Id_Actualite');
    }}
