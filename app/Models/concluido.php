<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class concluido extends Model
{
    protected $table = 'concluido';
    protected $primaryKey = 'id_concluido';

    use HasFactory;

    public function juicios(){
        return $this->belongsTo(juicio::class,'id_segobconclusion_juicio');
    }
}
