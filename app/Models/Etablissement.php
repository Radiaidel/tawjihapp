<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;

    protected $table = 'etablissemnts';
    protected $primaryKey = 'Id_Etablissemnt';
    protected $fillable = [
        'logo', 'nom', 'description', 'type', 'adresse', 'ville',
        'telephone', 'fax', 'email', 'instagram_url', 'facebook_url', 'whatsapp_url'
    ];

    public function medias()
    {
        return $this->hasMany(Media::class, 'Id_Etablissemnt');
    }}
