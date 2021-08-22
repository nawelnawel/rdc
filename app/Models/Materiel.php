<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;
    protected $fillable = ["num_serie","codebarre","nom","lot_id","etat","affectation"];
    public function Lot (){ 
        return $this ->belongsTo(Lot::class);
    }
}
