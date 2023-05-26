<?php

namespace App\Http\Controllers;
use Yajra\DataTables\DataTables;
use App\Models\abogado;
use App\Models\salas;
use App\Models\Juicios2;  //a eliminar
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


class Juicios2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juicio_actor= juicio::with('actor')->get();
        //   $r=[];
        //  foreach ($juicio_actor as $jactor) {
        //     $r[]=$jactor->noti_demanda;
        //     foreach($jactor->actor as $datoactor){
        //         $r[]= $datoactor->nombre_completo;
        //     }          
        // }       
        //dd($juicio_actor);
        $factual = Carbon::now();
            
        


        $arreglofechas = [];        
        $requerimientofecha = juicio::select('fechaproxima')->join('actores', 'juicios.id_juicio', '=', 'actores.juicio_id')
        ->join('laudo','juicios.id_juicio','=','laudo.id_laudo')
        ->join('amparo','juicios.id_juicio','=','amparo.id_amparo')
        ->join('etapaejecucion','juicios.id_juicio','=','etapaejecucion.id_etapaejecucion')
        ->join('concluido','juicios.id_juicio','=','concluido.id_concluido')      
        ->whereNotNull('fechaproxima')                
        ->pluck('fechaproxima');
        $fechascount=$requerimientofecha->count(); //se lleva el conteo de cuantas fechas de fechaproxima->etapajuicio esta en 2 dias o menos para iniciar 

        
        
        $alertaproximafecha=[];
       $totalqueaproximados = 0;
       //se seleciconan las fechas que estan a punto de iniciar fechaproxima->etapajuicio se veran dentro de la alerta 
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
        //dd($totalqueaproximados,$alertaproximafecha);

       return view('juicios.index')->with([
        'juicio_actor' => $juicio_actor,
        'totalqueaproximados' => $totalqueaproximados,
        '$alertaproximafecha'=>$alertaproximafecha,        
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $añoactual = date('Y');
        $abogados=abogado::all();
        $salas=salas::all(); 

        $añosseleccionables=[];
        while($añoactual >= 1950){
            $añosseleccionables[]=$añoactual;
            $añoactual = $añoactual-1;
         };
         
       
        return view('juicios.create')->with([
           'añoactual'=> $añoactual,
           'añosseleccionables'=>$añosseleccionables,
           'abogados'=> $abogados,
           'salas'=>$salas
        ]) ;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,SessionManager $sessionManager)
    {        
        $juicio = new juicio;
        $juicio->noti_demanda = $request->input('notidemanda');
        $juicio->presentacion_de_demanda= $request->input('presentacion_de_demanda');
        $juicio->expediente= $request->input('expediente');
        $juicio->año_juicio= $request->input('año_juicio');
        $juicio->clasificacion_año= $request->input('clasificacion_año');
        $juicio->clasificacion_exp= $request->input('clasificacion_exp');
        $juicio->tipo= $request->input('tipo');
        $juicio->accion= $request->input('accion');
        $juicio->id_sala=$request->input('juicio_sala_seleccionada');   
        $juicio->etapa=$request->input('etapa');
        //dd($juicio);
        $juicio->save();

        $actor = new actor;
        $actor->juicio_id = $juicio->id_juicio;
        $actor->nombre_completo = $request->input('nombre_completo');
        $actor->adscripcion  = $request->input('adscripcion');
        $actor->ur  = $request->input('ur');
        $actor->denominacion  = $request->input('denominacion');
        $actor->puesto  = $request->input('puesto');
        $actor->nivel  = $request->input('nivel');
        $actor->salarioMen  = $request->input('salarioMen');
        $actor->inicio_rellab  = $request->input('juicio_in_rellaboral');
        $actor->terminacion_rellab  = $request->input('juicio_term_rellaboral');
        // $actor->exp_personal_rh_solicitud  = $request->input('Solicitud');
        // $actor->exp_personal_rh_devolucion  = $request->input('Devolucion');
        // $actor->fojas  = $request->input('Fojas');
        // $actor->exp_adscripcion_solicitud = $request->input('exp_adscripcion_solicitud');
        // $actor->exp_adscripcion_devolucion = $request->input('exp_adscripcion_devolucion');
        // $actor->audiencia = $request->input('audiencia');
        // $actor->descripcion = $request->input('addescripcion');
        // $actor->cierredeinstruccion = $request->input('Cierre_de_Instruccion');
        $actor->save();

        $laudo = new laudo;
        $laudo-> laudo_id_juicio = $juicio->id_juicio;
        $laudo->save();

        $amparo = new amparo;
        $amparo-> id_amparo_juicio =  $juicio->id_juicio;
        $amparo->save(); 

        $etapajuicios =new etapaejecucion;
        $etapajuicios->id_etapaejecucion_juicio = $juicio->id_juicio;
        $etapajuicios->save();


        $concluido = new concluido;
        $concluido->id_segobconclusion_juicio = $juicio->id_juicio;
        $concluido->created_at = now();
        $concluido->updated_at = now();
        $concluido->save();

        //mensaje de confirmacion guardado 
        $sessionManager->flash('mensaje', 'Juicio Creado Correctamente');        
        return redirect()->route('juicios.index');              
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Juicios2  $juicios2
     * @return \Illuminate\Http\Response
     */
    public function show(Juicios2 $juicios2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Juicios2  $juicios2
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $j=juicio::find($id);
        $nombreabogados = $j->obteniendonombresdearea($id); 
        // $juicio3 = Juicio::select('juicios.id_juicio', 'juicios.noti_demanda','juicios.presentacion_de_demanda','juicios.expediente','juicios.año_juicio','juicios.clasificacion_año','juicios.clasificacion_exp','juicios.tipo','juicios.accion','actores.nombre_completo','actores.adscripcion','actores.ur','actores.denominacion','actores.puesto','actores.nivel','actores.salarioMen','actores.inicio_rellab','actores.terminacion_rellab','actores.exp_personal_rh_solicitud','actores.exp_personal_rh_devolucion','actores.fojas','actores.exp_adscripcion_solicitud','actores.exp_adscripcion_devolucion','actores.audiencia','actores.descripcion','actores.cierredeinstruccion','juicios.comentario','laudo.lau_fecha' ) 
        $juicio3 = Juicio::join('actores', 'juicios.id_juicio', '=', 'actores.juicio_id')
        ->join('laudo','juicios.id_juicio','=','laudo.id_laudo')
        ->join('amparo','juicios.id_juicio','=','amparo.id_amparo')
        ->join('etapaejecucion','juicios.id_juicio','=','etapaejecucion.id_etapaejecucion')
        ->join('concluido','juicios.id_juicio','=','concluido.id_concluido')        
        ->where('juicios.id_juicio', $id)
        ->get();
        //se modifica la fecha para que aparesca con los nombre de los meses y dias 
         $fechaaudiencia = Carbon::parse($juicio3[0]->audiencia)->formatLocalized('%A %d %B %Y');  
         $fecha = Carbon::create($juicio3[0]->audiencia); //se crea la fecha en formato carbon no necesaria        
         $diasDiferencia = $fecha->diffInDays(Carbon::now());
         //$diferenciaMinuto = $fecha->diffInMinutes(Carbon::now());   

         $diasrestantes =  Carbon::now()->diffInDays($fecha,false);
         if ($diasrestantes < 0) {
            $diasrestantes = 0;
            $horfatantes= 0;
            $minfaltantes= 0;
         }else {
            $horfatantes = Carbon::now()->diffInHours($fecha) %24 ;         
            $minfaltantes =  Carbon::now()->diffInMinutes($fecha) % 60; 
         }
         

         $añoactual = date('Y');
        $abogados=abogado::all();
        $salas=salas::all(); 

        $añosseleccionables=[];
        while($añoactual >= 1950){
            $añosseleccionables[]=$añoactual;
            $añoactual = $añoactual-1;
         };
      
         
        return view('juicios.edit')->with(['juicio3'=>$juicio3, 'nombreabogados'=>$nombreabogados , 'fechaaudiencia'=>$fechaaudiencia, 'diasDiferencia' => $diasDiferencia , "diasrestantes"=>$diasrestantes, "horfatantes" => $horfatantes, "minfaltantes"=>$minfaltantes ,'añosseleccionables'=>$añosseleccionables]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Juicios2  $juicios2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id,$name)
    {       
                
    }
    

    public function update_all_form(Request $request,$id,$name){

        

        $datosj = request()->except(['_token','_method']);
        
        switch ($name) {
            case 'actualiza_datos_generales':                
                juicio::where('id_juicio', $id)->update($datosj);                
            break;            
            case 'actor';
            case 'tramite';
                actor::where('juicio_id', $id)->update($datosj);                
            break;
            case 'laudo';
                laudo::where('laudo_id_juicio', $id)->update($datosj);
            break;           
            case 'amparo';
             amparo::where('id_amparo', $id)->update($datosj);
            break;

            case 'ejecucion':
             etapaejecucion::where('id_etapaejecucion', $id)->update($datosj);
            break;

            case 'conclusion':
                concluido::where('id_concluido', $id)->update($datosj);
            break;

            default:
                # code...
                break;
        }        
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Juicios2  $juicios2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Juicios2 $juicios2)
    {
        //
    }


    public function juicios_datos(Request $request){

     $id_sala = $request->input('valor');     
     $sala = salas::find($id_sala);
     $abogados = $sala->abogados;
     $abogadesdesalas = array('success' => true, 'abogados'=> $abogados);

     return $abogadesdesalas;
    }

    public function juiciosdatosajax(){
        $juicio_actor= juicio::with('actor')
        ->join('actores', 'juicios.id_juicio', '=', 'actores.juicio_id')
        ->join('laudo','juicios.id_juicio','=','laudo.id_laudo')
        ->join('amparo','juicios.id_juicio','=','amparo.id_amparo')
        ->join('etapaejecucion','juicios.id_juicio','=','etapaejecucion.id_etapaejecucion')
        ->join('concluido','juicios.id_juicio','=','concluido.id_concluido')
        ->get();
        
        return Datatables::of($juicio_actor)->toJson();

    }

    public function desglocejuicio($id){
        //se obtienen los nombres de los abogados dependiendo de la seleccion del id se realiza la consulta en el modelo
        $j=juicio::find($id);
        $nombreabogados = $j->obteniendonombresdearea($id); 
        //dd($nombreabogados);
        //$f=$datosjuicio->sala[0]->nombre_sala;
       
        

        $juicio3 = Juicio::join('actores', 'juicios.id_juicio', '=', 'actores.juicio_id')
        ->join('laudo','juicios.id_juicio','=','laudo.id_laudo')
        ->join('amparo','juicios.id_juicio','=','amparo.id_amparo')
        ->join('etapaejecucion','juicios.id_juicio','=','etapaejecucion.id_etapaejecucion')
        ->join('concluido','juicios.id_juicio','=','concluido.id_concluido')        
        ->where('juicios.id_juicio', $id)
        ->get();

        //se modifica la fecha para que aparesca con los nombre de los meses y dias 
         $fechaaudiencia = Carbon::parse($juicio3[0]->audiencia)->formatLocalized('%A %d %B %Y');  
         $fecha = Carbon::create($juicio3[0]->audiencia); //se crea la fecha en formato carbon no necesaria        
         $diasDiferencia = $fecha->diffInDays(Carbon::now());
            

         $diasrestantes =  Carbon::now()->diffInDays($fecha,false);
         if ($diasrestantes < 0) {
            $diasrestantes = 0;
            $horfatantes= 0;
            $minfaltantes= 0;
         }else {
            $horfatantes = Carbon::now()->diffInHours($fecha) %24 ;         
            $minfaltantes =  Carbon::now()->diffInMinutes($fecha) %60; 
         }

                 
         $datoLaudos = Juicio::join('laudo','juicios.id_juicio','=', 'laudo.laudo_id_juicio')
         ->join('amparo','juicios.id_juicio','=','amparo.id_amparo_juicio')
         ->join('etapaejecucion','juicios.id_juicio','=','etapaejecucion.id_etapaejecucion_juicio')
         ->join('concluido','juicios.id_juicio','=','concluido.id_segobconclusion_juicio')
         ->where('laudo.laudo_id_juicio',$id)
         ->get(); 
         $sueldo=[];
         $informacionauto=[];
        
         $sueldo['Diario'] = round($juicio3[0]->salarioMen/30,2);
         $sueldo['Quincenal'] = round($juicio3[0]->salarioMen/2,2);
       
         $iniciolab = Carbon::create($juicio3[0]->inicio_rellab);                                      
         $finrellab = Carbon::create($juicio3[0]->terminacion_rellab);

         if ($juicio3[0]->inicio_rellab == null ||  $juicio3[0]->terminacion_rellab == null) {
            $añostrancurridos = "Sin Fecha para Calcular Diferecia";
            $diastranscurridos= "Sin Fecha para Calcular Diferecia";
         } else {
            $añostrancurridos = $iniciolab->diffInYears($finrellab);
            $diastranscurridos = $iniciolab->diffInDays($finrellab);
            $sueldo['Aginaldo'] =number_format ((40*$añostrancurridos)* $sueldo['Diario'],2,'.',',');
            $sueldo['Indemnizacion'] = number_format(($juicio3[0]->salarioMen*3)+(($añostrancurridos*20)* $sueldo['Diario']), 2, '.', ',');
            $sueldo['Prima Vacacional']=  $sueldo['Diario']*20*0.30;
            $informacionauto["Años Transcurridos Relacion Laboral"]=  $añostrancurridos;
            $informacionauto["Dias Transcurridos Relacion Laboral"]=  $diastranscurridos;
         }
         
       
         
        
        // dd($finrellab, $añostrancurridos,$diastranscurridos, $iniciolab    );
        

    
    
        return view('juicios.modals.desgloce_juicio_vista')
         ->with(['juicio3'=>$juicio3,
         'nombreabogados'=>$nombreabogados,
         'fechaaudiencia'=>$fechaaudiencia,
         'diasDiferencia' => $diasDiferencia,
          "diasrestantes"=>$diasrestantes,
          "horfatantes" => $horfatantes,
          "informacionauto"=> $informacionauto,
          "minfaltantes"=>$minfaltantes,
          "sueldo" =>$sueldo]);
    }

    public function comentario(Request $request,$id,SessionManager $sessionManager){ 
        $comentario =request()->only('comentario'); 
        Juicio::where('id_juicio','=',$id)->update($comentario);
        $sessionManager->flash('mensaje', 'Comentario Agregado');
        //dd($sessionManager);
        return redirect()->route('juicios.index', compact('sessionManager')) ;
    }





    private $disk = "public"; //se configura el disco como publick para que sea donde se almacena el archivo por defecto 
    public function upload(Request $request,SessionManager $sessionManager,$id){ 
      

        try {
            $updatearchivo = request()->only('asubir')['asubir'];  //se requiere el valor del boton para guardar respectivamente   
            $archivo = $request->file('archivo');
            if (!isset($archivo) ) {
                $sessionManager->flash('mensaje', 'No se selecciono el archivo');
                return redirect()->route('juicios.index');
            }
            else{               
                    //obteniendo nombre del archivo 
                     $archivo = $request->file('archivo');       
                    //se agrega fecha al nombre del archivo para que no se sobre escrivan archivos 
                    $archivonombre =date('Y-m-d-H-m-s').'_'.$updatearchivo.'_'.$archivo->getClientOriginalName();                     
                    if ($updatearchivo=="demandaupload") {
                        $narchivo = 'archivo';                         
                        $archivoprevio = Juicio::select($narchivo)->where('id_juicio','=',$id)->value($narchivo);                                                   
                        if ($archivoprevio == !null) {
                                Storage::disk($this->disk)->delete($archivoprevio);
                            }

                    }elseif($updatearchivo=="contratacionupload" ) {
                         $narchivo = 'archivo1';         
                         $archivoprevio = Juicio::select($narchivo)->where('id_juicio','=',$id)->value($narchivo);                                                   
                            if ($archivoprevio == !null) {
                                Storage::disk($this->disk)->delete($archivoprevio);
                            }                       
                    }elseif($updatearchivo=="laudoupload" ) {
                         $narchivo = 'archivo2';   
                         $archivoprevio = Juicio::select($narchivo)->where('id_juicio','=',$id)->value($narchivo);                                                   
                            if ($archivoprevio == !null) {
                                    Storage::disk($this->disk)->delete($archivoprevio);
                                }                          
                            } 
                            
                    Juicio::where('id_juicio','=',$id)->update([$narchivo =>$archivonombre]); 
                    $archivo->storeAs($this->disk,$archivonombre);
                    $sessionManager->flash('mensaje', 'Archivo Agregado');
                    return redirect()->route('juicios.index');
                    //return $this->loadView();
                  }                                 
        } 
        catch (\Exception $e) {
            $response = ['success' => false, 'message' => 'Error al guardar la regla.'];
        }
    }           
    public function dowload_juicio($name){
        if(Storage::disk($this->disk)->exists($name)){
            return Storage::disk($this->disk)->download($name);
        }
        return response()->json(['error' => 'El archivo no existe.'], 404);
    }

    public function delete(SessionManager $sessionManager,$narchivo,$id,$name){        
        if(Storage::disk($this->disk)->exists($name)){    
            Juicio::where('id_juicio', '=', $id)->update([$narchivo => null]);
            Storage::disk($this->disk)->delete($name);
            $sessionManager->flash('mensaje', 'Archivo Eliminado');
            return redirect()->route('juicios.index');
            }
            return response()->json(['error' => 'El archivo no existe.'], 404);        
        }
    
       




}