<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $primaryKey = 'Id_Service';
    protected $fillable = ['titre', 'description', 'Id_Categorie_Service', 'Id_Partenaire'];

    public function categorieService()
    {
        return $this->belongsTo(CategorieService::class, 'Id_Categorie_Service');
    }

    public function partenaire()
    {
        return $this->belongsTo(Partenaire::class, 'Id_Partenaire');
    }
}
