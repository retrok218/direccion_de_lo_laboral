<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    protected $table = 'actores';
    protected $primaryKey = 'id_actores';
    public $timestamps = false;
    use HasFactory;

    public function juicios(){
        return $this->belongsTo(juicio::class,'id_juicio');
    }

    
}
