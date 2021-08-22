<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        "dateNaissance" ,
        "lieuNaissance",
        'email',
        'telephone',
        'adresse',
        
        'pieceIdentite',
        'numeroPieceIdentite',
        
        
    ];

    public function structures(){
        return $this->belongsTo(Structure::class, "structure_id", " personnel_id");
    }
   

}
