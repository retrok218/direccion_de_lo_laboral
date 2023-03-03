<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abogado extends Model
{
    use HasFactory;
    public function juicio(){
        return $this->belongsToMany('App\Models\juicio');
    }
}
