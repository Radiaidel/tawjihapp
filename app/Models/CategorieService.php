<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieService extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'categorie_services';
    protected $primaryKey = 'Id_Categorie_Service';
    protected $fillable = ['nom'];

    public function services()
    {
        return $this->hasMany(Service::class, 'Id_Categorie_Service');
    }
}
