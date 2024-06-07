<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function rayon(){
        return $this->belongsTo(Rayon::class);
    }
}
