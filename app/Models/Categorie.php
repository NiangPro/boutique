<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $tables = "categories";

    protected $fillable = [
        "slug",
        "name"
    ];

    public function produits()
    {
        return $this->belongsToMany(Produit::class,'produit_categories');
    }
}
