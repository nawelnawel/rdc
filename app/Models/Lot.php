<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;
    protected $fillable = ["num_lot","num_ao","num_ap","fournisseur","qte","cout","categorie_id","marque_id","modele"];
    public function Categorie (){ 
        return $this ->belongsTo(Categorie::class);
    }
    public function Marque (){ 
        return $this ->belongsTo(Marque::class);
    }


}
