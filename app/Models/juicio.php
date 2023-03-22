<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class juicio extends Model
{
    protected $table = 'juicios';
    protected $primaryKey = 'id_juicio';
    use HasFactory;

    public function abogado(){
        return $this->belongsToMany('App\Models\abogado');
    }

    public function actor(){
        return $this->hasMany(actor::class, 'id_actores' );
    }

    
}
