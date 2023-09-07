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
use Yajra\DataTables\DataTables;
use Auth;
use PHPUnit\Framework\Constraint\IsEmpty;

use function PHPUnit\Framework\isEmpty;

class table_juicios_controller extends Controller
{
    public function index(){              
        $juicios = juicio::join('laudo','juicios.id_juicio','=', 'laudo.laudo_id_juicio')
            ->join('amparo','juicios.id_juicio','=','amparo.id_amparo_juicio')
            ->join('etapaejecucion','juicios.id_juicio','=','etapaejecucion.id_etapaejecucion_juicio')
            ->join('concluido','juicios.id_juicio','=','concluido.id_segobconclusion_juicio')
            ->get();        
       $suma_coco_ano =juicio::select(DB::raw('EXTRACT(YEAR FROM presentacion_de_demanda) as anio'))
       ->selectRaw('SUM(cocodi_suma) as sumacoco')
       ->groupBy('anio')
       ->orderByDesc('anio')
       ->get();                     
       $json_suma_coco = json_encode($suma_coco_ano);

        $anos_mes_suma_coco = juicio::select(DB::raw('EXTRACT(YEAR FROM presentacion_de_demanda) as anio'),
        DB::raw('EXTRACT(MONTH FROM presentacion_de_demanda) as mes'))
        ->selectRaw('SUM(cocodi_suma) as sumacoco')
        ->groupBy('anio','mes')
        ->orderByDESC('anio')
        ->get();
        
        $ano_mes_coco = $anos_mes_suma_coco
        ->groupBy('anio')
        ->map(function ($items) {
            $arr =$items->pluck('sumacoco', 'mes')->toArray();
            ksort($arr);
            return  $arr;
        })->toArray();
        $Json_ano_mes_coco = json_encode($ano_mes_coco);            
          
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
        
         //se extraen los años de todos los juicios COALESCE si el balor del año obtenido es nulo lo regresa como 0
        
         $años_juicios = juicio::selectRaw('COALESCE(EXTRACT(YEAR FROM presentacion_de_demanda), 0) as anio')
        ->groupBy('anio')
        ->orderBy('anio', 'DESC')
        ->get()
        ->pluck('anio');

         $juicios_por_año_individual =[];
         foreach ($años_juicios as $key => $año) {                   
            $juicios_por_año_individual[] = (object)[
                
                'anio' => $año,                
                'cantidad' => juicio::where(DB::raw('EXTRACT(YEAR FROM presentacion_de_demanda)'), $año)
                ->count()
            ];
         }
                 
         //se crea $años_meses_cantcocodi contienr los juicios completos dependiendo el año 
         $años_meses_cantcocodi =[];
         $cocodi_trimestre_años = [];
         foreach ($años_juicios as $key => $año) {            
            $años_meses_cantcocodi[$año] = juicio::where(DB::raw('EXTRACT(YEAR FROM presentacion_de_demanda)'), $año)                         
            ->get() ; 
            $cocodi_trimestre_años[$año] = juicio::select('id_juicio', 'presentacion_de_demanda','año_juicio','cocodi_suma',DB::raw('EXTRACT(MONTH FROM presentacion_de_demanda) as mes') )->where(DB::raw('EXTRACT(YEAR FROM presentacion_de_demanda)'), $año)                             
            ->get() ;           
         }

        $por_Trimestre_año = [];
        foreach ($cocodi_trimestre_años as $año => $cocodi_trimestre_meses) {                                              
            foreach ($cocodi_trimestre_meses as $key => $value) {                                                                                                     
                    if ($value->mes < 4 & $value->mes > 0) {
                        $por_Trimestre_año[$año]['Primer Trimestre '.$año][] =  intval($value->cocodi_suma); 
                       
                    }elseif ($value->mes < 7 & $value->mes > 3) {
                        $por_Trimestre_año[$año]['Segundo Trimestre '.$año][] = intval($value->cocodi_suma) ;
                        
                    }elseif ($value->mes < 10 & $value->mes > 6) {    
                        $por_Trimestre_año[$año]['Tercero Trimestre '.$año][]= intval($value->cocodi_suma);                                  
                    }elseif ($value->mes < 13 & $value->mes > 9) {
                        $por_Trimestre_año[$año]['Cuarto Trimestre '.$año][] = intval($value->cocodi_suma);                        
                    } 

            }                
                if ($año == 0){continue;}
                if (isset($por_Trimestre_año[$año]['Primer Trimestre '.$año])) {
                    $por_Trimestre_año[$año]['Suma_Primer_Trimestre'] = array_sum($por_Trimestre_año[$año]['Primer Trimestre '.$año]); 
                }
                if (isset($por_Trimestre_año[$año]['Segundo Trimestre '.$año])) {
                    $por_Trimestre_año[$año]['Suma_Segundo_Trimestre'] = array_sum($por_Trimestre_año[$año]['Segundo Trimestre '.$año]); 
                }
                if (isset($por_Trimestre_año[$año]['Tercero Trimestre '.$año])) {
                    $por_Trimestre_año[$año]['Suma_Tercero_Trimestre'] = array_sum($por_Trimestre_año[$año]['Tercero Trimestre '.$año]); 
                }
               if (isset($por_Trimestre_año[$año]['Cuarto Trimestre '.$año])) {
                    $por_Trimestre_año[$año]['Suma_Cuarto_Trimestre'] = array_sum($por_Trimestre_año[$año]['Cuarto Trimestre '.$año]); 
                }
            

        }
        //dd( $por_Trimestre_año);
        //var_dump($por_Trimestre_año); exit();
        $cocodi_año_cuatri=json_encode($por_Trimestre_año);
              
        return view('admin.dashboard')->with([
        'requerimientofecha' => $requerimientofecha,  
        'totalqueaproximados' => $totalqueaproximados,
        'alertaproximafecha'=>$alertaproximafecha, 
        'conteoPorEtapa'=>$conteoPorEtapa,
        'conteoPorEtapa22'=>$conteoPorEtapa22,
        'todoslosjuicios'=>$todoslosjuicios,
        'suma_coco_ano'=>$suma_coco_ano ,
        'json_suma_coco'=>$json_suma_coco, 
        'Json_ano_mes_coco'=>$Json_ano_mes_coco,
        'ano_mes_coco'=>$ano_mes_coco,//prueva
        'juicios_por_año_individual'=>$juicios_por_año_individual,
        'cocodi_año_cuatri'=>$cocodi_año_cuatri,
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

    public function tablas_etapa($etapa){
        $etapa2 = $etapa;
        // $juicios_etapa = juicio::where('etapa',$etapa)->get();       
        return view('juicios.juicios_area')->with(['etapa2'=>$etapa2 ]);
    }

    public function data_tablas_etapa($etapa){
        $status_us =is_null(Auth::user());
    $juicio_actor=DB::connection()->select("SELECT * ,'$status_us' AS status_us
       FROM juicios
       JOIN actores ON juicios.id_juicio = actores.id_actores
       JOIN laudo ON juicios.id_juicio = laudo.id_laudo
       JOIN amparo ON juicios.id_juicio = amparo.id_amparo
       JOIN etapaejecucion ON juicios.id_juicio = etapaejecucion.id_etapaejecucion
       JOIN concluido ON juicios.id_juicio = concluido.id_concluido
       WHERE etapa = '$etapa'
       ORDER BY CASE       
       WHEN actores.audiencia >= CURRENT_DATE THEN actores.audiencia - CURRENT_DATE 
       ELSE NULL 
      END ASC NULLS LAST");   

    return Datatables::of($juicio_actor)->toJson();
    }

    


}
