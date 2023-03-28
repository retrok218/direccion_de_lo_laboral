<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amparo extends Model
{
    protected $table = 'amparo';
    protected $primaryKey = 'id_amparo';
    use HasFactory;

    public function juicios(){
        return $this->belongsTo(juicio::class,'id_amparo_juicio');
    }
}
