<?php

namespace App\Http\Controllers;
use App\Models\abogado;
use App\Models\salas;

use App\Models\actor;
use App\Models\juicio;
use App\Models\amparo;
use App\Models\etapaejecucion;
use App\Models\concluido;
use App\Models\Juicios2;
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
       $juicios = juicio::join('laudo','juicios.id_juicio','=', 'laudo.laudo_id_juicio')
         ->join('amparo','juicios.id_juicio','=','amparo.id_amparo_juicio')
         ->join('etapaejecucion','juicios.id_juicio','=','etapaejecucion.id_etapaejecucion_juicio')
         ->join('concluido','juicios.id_juicio','=','concluido.id_segobconclusion_juicio')
         ->get();
        //$todos_juicios = juicio::select('id_juicio','cocodi_suma','presentacion_de_demanda')->groupBy('presentacion_de_demanda');
       $suma_coco_ano =DB::connection()
       ->select("SELECT  EXTRACT(YEAR FROM presentacion_de_demanda) as anio,
        sum(cocodi_suma) as sumacoco 
        FROM juicios
        GROUP BY anio
        ORDER BY anio DESC "); 

        $datos_arreglo_cocodisum = [];
        foreach ($suma_coco_ano as $resultado) {
        $anio = $resultado->anio;
        $sumacoco = $resultado->sumacoco;
        $datos_arreglo_cocodisum[$anio] = $sumacoco;          
        }   
        $coco_suma_años_js = json_encode($datos_arreglo_cocodisum);
       

       
    
//se requiere un count por cada etapa que se encuentre en los juicios que hay 
         $conteoPorEtapa = juicio::groupBy('etapa')
         ->select('etapa', DB::raw('count(*) as total'))
         ->get();
        
         $factual = Carbon::now();                          
         $requerimientofecha = juicio::select('id_juicio','fechaproxima')->join('actores', 'juicios.id_juicio', '=', 'actores.juicio_id')
         ->join('laudo','juicios.id_juicio','=','laudo.id_laudo')
         ->join('amparo','juicios.id_juicio','=','amparo.id_amparo')
         ->join('etapaejecucion','juicios.id_juicio','=','etapaejecucion.id_etapaejecucion')
         ->join('concluido','juicios.id_juicio','=','concluido.id_concluido')      
         ->whereNotNull('fechaproxima')                
         ->pluck('fechaproxima','id_juicio');
                        
        $alertaproximafecha=[];
        $totalqueaproximados = 0;
         foreach ($requerimientofecha as $key=>$fecha) {
             $nf = Carbon::parse($fecha);                        
             $diferenciadias = date_diff($factual,$nf)->format('%R%a');
             $diferenciahoras = date_diff($nf,$factual)->format('%H');            
             if ($diferenciadias <=2 &&  $diferenciadias >= 0 ) {
                 $totalqueaproximados++;
                 $alertaproximafecha[$key]= $fecha;
             }
             
         }
         $todoslosjuicios = juicio::count();
         $conteoPorEtapa2 = juicio::groupBy('etapa')
         ->select('etapa', DB::raw('count(*) as total'))
         ->get();
         $conteoPorEtapa22 = json_encode($conteoPorEtapa2);                     
         //seleccionamos solo los valores de la base de datos que sean cocodi_suma y la fecha para imprimir en grafica las suma de los cocodi por año
        //  $cocodi_cantidades_juicio_años= $todos_juicios->map(function($item){
        //     return[                
        //         'cocodi_suma'=>$item->cocodi_suma,
        //         'clas_año'=>$item->clasificacion_año,
        //     ];
        //  });                          
        return view('admin.dashboard')->with([
         'requerimientofecha' => $requerimientofecha,  
        'totalqueaproximados' => $totalqueaproximados,
        'alertaproximafecha'=>$alertaproximafecha, 
        'conteoPorEtapa'=>$conteoPorEtapa,
        'conteoPorEtapa22'=>$conteoPorEtapa22,
        'todoslosjuicios'=>$todoslosjuicios,
            
        
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
