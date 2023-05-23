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
use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class table_juicios_controller extends Controller
{

    public function index(){
       $juiciosactivos = juicio::join('laudo','juicios.id_juicio','=', 'laudo.laudo_id_juicio')
         ->join('amparo','juicios.id_juicio','=','amparo.id_amparo_juicio')
         ->join('etapaejecucion','juicios.id_juicio','=','etapaejecucion.id_etapaejecucion_juicio')
         ->join('concluido','juicios.id_juicio','=','concluido.id_segobconclusion_juicio')
         ->get();

         $factual = Carbon::now();
            
        


         $arreglofechas = [];        
         $requerimientofecha = juicio::select('fechaproxima')->join('actores', 'juicios.id_juicio', '=', 'actores.juicio_id')
         ->join('laudo','juicios.id_juicio','=','laudo.id_laudo')
         ->join('amparo','juicios.id_juicio','=','amparo.id_amparo')
         ->join('etapaejecucion','juicios.id_juicio','=','etapaejecucion.id_etapaejecucion')
         ->join('concluido','juicios.id_juicio','=','concluido.id_concluido')      
         ->whereNotNull('fechaproxima')                
         ->pluck('fechaproxima');
         $fechascount=$requerimientofecha->count();
         
         
         $alertaproximafecha=[];
        $totalqueaproximados = 0;
         foreach ($requerimientofecha as $fecha) {
             $nf = Carbon::parse($fecha);                        
             $diferenciadias = date_diff($factual,$nf)->format('%R%a');
             $diferenciahoras = date_diff($nf,$factual)->format('%H');
            // $alertaproximafecha[]= 'Dia'.$diferenciadias.'- h'.$diferenciahoras.'- fecha'.$fecha;
             if ($diferenciadias <=2 &&  $diferenciadias >= 0 ) {
                 $totalqueaproximados++;
                 $alertaproximafecha[]= 'Dia'.$diferenciadias.'- h'.$diferenciahoras.'- fecha'.$fecha;
             }
             
         }
        // dd($totalqueaproximados,$alertaproximafecha);

         
        
                     

        return view('admin.dashboard')->with([
        'totalqueaproximados' => $totalqueaproximados,
        '$alertaproximafecha'=>$alertaproximafecha, 
        ]);
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
