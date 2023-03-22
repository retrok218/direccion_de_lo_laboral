<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abogado extends Model
{
    protected $primaryKey = 'id_abogado';
    use HasFactory;

    public function salas(){
        // return $this->belongsToMany('App\Models\salas');
        return $this->belongsToMany(salas::class, 'abogado_salas', 'id_sala', 'id_abogado');
    }
}