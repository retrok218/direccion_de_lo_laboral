<?php

namespace App\Http\Controllers;
use App\Models\abogado;
use App\Models\salas;

use App\Models\actor;
use App\Models\juicio;
use App\Models\amparo;
use App\Models\etapaejecucion;
use App\Models\concluido;
use App\Models\User;
use App\Models\laudo;

use Illuminate\Http\Request;

class table_juicios_controller extends Controller
{

    public function index(){
       $juiciosactivos = juicio::join('laudo','juicios.id_juicio','=', 'laudo.laudo_id_juicio')
         ->join('amparo','juicios.id_juicio','=','amparo.id_amparo_juicio')
         ->join('etapaejecucion','juicios.id_juicio','=','etapaejecucion.id_etapaejecucion_juicio')
         ->join('concluido','juicios.id_juicio','=','concluido.id_segobconclusion_juicio')
         ->get();
        
        // dd($juiciosactivos);               
        return view('admin.dashboard');
    }

    public function desgloce_juicios(){
        return view('Direccion_Laboral.tabla_juicios');
    }
    
    public function datos_rel_laboral(){
        return view('relacion_laboral.datos_rel_laboral');
    }

    public function registro(){
        return view('Direccion_Laboral.registro_juicio');
    }
}
