<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class juicio extends Model
{
    use HasFactory;
    public function abogado(){
        return $this->belongsToMany('App\Models\abogado');
    }
}
