<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class juicio extends Model
{
    protected $table = 'juicios';
    protected $primaryKey = 'id_juicio';
    use HasFactory;

    public function abogado(){
        return $this->belongsToMany('App\Models\abogado');
    }

    public function actor(){
        return $this->hasMany(actor::class, 'juicio_id' );
        
    }
    
    public function laudo(){
        return $this->hasMany(laudo::class, 'laudo_id_juicio' );
        
    }

    public function amparo(){
        return $this->hasMany(amparo::class, 'id_amparo_juicio' );
        
    }

    public function etapaejecucion(){
        return $this->hasMany(etapaejecucion::class, 'id_etapaejecucion_juicio' );
        
    }

    public function concluido(){
        return $this->hasMany(concluido::class, 'id_segobconclusion_juicio' );
        
    }

    public function sala(){
        return $this->hasMany(salas::class, 'id_sala','id_sala' );
        
    }  

    public function obteniendonombresdearea($id){
        $datosjuicio = juicio::where('id_juicio',$id)->with('actor','sala.abogados')->firstOrFail();     
        $nombres_abogados = $datosjuicio->sala[0]->abogados;            
        $nombres=[];
        foreach ($nombres_abogados as $nombre ) {
            $nombres[]=$nombre->nombre;
        }
        return [$nombres,$datosjuicio];
    }




    
}
