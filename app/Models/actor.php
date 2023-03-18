<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    protected $table = 'acotres';
    protected $primaryKey = 'id_actores';
    use HasFactory;

    public function juicios(){
        return $this->belongsTo(juicio::class);
    }

    
}
