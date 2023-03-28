<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laudo extends Model
{
    protected $table = 'laudo';
    protected $primaryKey = 'id_laudo';
    public $timestamps = false;
    use HasFactory;

    public function juicios(){
        return $this->belongsTo(juicio::class,'laudo_id_juicio');
    }
}
