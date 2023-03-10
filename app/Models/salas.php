<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salas extends Model
{

    protected $primaryKey = 'id_sala';
    use HasFactory;

    public function abogados(){
        return $this->belongsToMany('App\Models\abogado');
    }
}
