<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etapaejecucion extends Model
{
    protected $table = 'etapaejecucion';
    protected $primaryKey = 'id_etapaejecucion';
    public $timestamps = false;
    use HasFactory;

    public function juicios(){
        return $this->belongsTo(juicio::class,'id_etapaejecucion_juicio');
    }
}
