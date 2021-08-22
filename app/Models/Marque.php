<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    use HasFactory;
    protected $fillable = ["nom","categorie_id"];
    public function Categorie (){ 
        return $this ->belongsTo(Categorie::class);
    }
    
}
