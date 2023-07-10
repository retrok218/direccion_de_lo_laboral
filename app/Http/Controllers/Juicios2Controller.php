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
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

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
        $juiactual = Juicio::select('id_juicio')->latest()->pluck('id_juicio')->first()+1; //se requiuere el ultimo id_juicio que se tiene y se le sumara uno esto es por si se agregan datos mediante la base de datos 

        

        $juicio = new juicio; 
        $juicio->id_juicio= $juiactual;     
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
        $juicio->cocodi_suma=0;      
        $juicio->created_at = now();
        $juicio->updated_at = now();
        $juicio->save();

        $actor = new actor;
        $actor->id_actores =$juiactual;
        $actor->juicio_id = $juiactual;
        $actor->nombre_completo = $request->input('nombre_completo');
        $actor->adscripcion  = $request->input('adscripcion');
        $actor->ur  = $request->input('ur');
        $actor->denominacion  = $request->input('denominacion');
        $actor->puesto  = $request->input('puesto');
        $actor->nivel  = $request->input('nivel');
        $actor->salarioMen  = $request->input('salarioMen');
        $actor->inicio_rellab  = $request->input('juicio_in_rellaboral');
        $actor->terminacion_rellab  = $request->input('juicio_term_rellaboral');    
        $actor->save();
        $laudo = new laudo;
        $laudo->id_laudo = $juiactual;
        $laudo-> laudo_id_juicio = $juiactual;
        $laudo->save();
        $amparo = new amparo;
        $amparo->id_amparo =  $juiactual;
        $amparo-> id_amparo_juicio =  $juiactual;
        $amparo->save(); 
        $etapajuicios =new etapaejecucion;
        $etapajuicios->id_etapaejecucion = $juiactual;
        $etapajuicios->id_etapaejecucion_juicio = $juiactual;
        $etapajuicios->save();
        $concluido = new concluido;
        $concluido->id_concluido = $juiactual;
        $concluido->id_segobconclusion_juicio = $juiactual;

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
        return view('juicios.edit')->with([
            'juicio3'=>$juicio3,
            'abogados'=>$abogados,
            'salas'=>$salas,
            'nombreabogados'=>$nombreabogados , 
            'fechaaudiencia'=>$fechaaudiencia,
            'diasDiferencia' => $diasDiferencia ,
            'diasrestantes'=>$diasrestantes,
            'horfatantes' => $horfatantes,
            'minfaltantes'=>$minfaltantes ,
            'añosseleccionables'=>$añosseleccionables]);       
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


      
        $status_us =is_null(Auth::user()); 

       $juicio_actor=DB::connection()->select("SELECT *,'$status_us' AS status_us
       FROM juicios
       JOIN actores ON juicios.id_juicio = actores.id_actores
       JOIN laudo ON juicios.id_juicio = laudo.id_laudo
       JOIN amparo ON juicios.id_juicio = amparo.id_amparo
       JOIN etapaejecucion ON juicios.id_juicio = etapaejecucion.id_etapaejecucion
       JOIN concluido ON juicios.id_juicio = concluido.id_concluido
       ORDER BY CASE
      WHEN actores.audiencia >= CURRENT_DATE THEN actores.audiencia - CURRENT_DATE -- Fechas futuras
       ELSE NULL -- Fechas pasadas
      END ASC NULLS LAST");
      //ordena las tablas conforme las fechas de audiencia se acerca al dia actual las que ya pasaron las deja al fina igual las nulas
    //dd( $juicio_actor);
        
    //   $juicio_actor = $juicio_actor->map(function ($item) use ($status_us) {
    //     $item->status_us = $status_us;
    //     return $item;
    // });
     
        return Datatables::of($juicio_actor)->toJson();
    }

    public function desglocejuicio(Request $request, $id){

        
        //se obtienen los nombres de los abogados dependiendo de la seleccion del id se realiza la consulta en el modelo
        $j=juicio::find($id);
        $nombreabogados = $j->obteniendonombresdearea($id); 
 
        $juicio3 = Juicio::join('actores', 'juicios.id_juicio', '=', 'actores.juicio_id')
        ->join('laudo','juicios.id_juicio','=','laudo.id_laudo')
        ->join('amparo','juicios.id_juicio','=','amparo.id_amparo')
        ->join('etapaejecucion','juicios.id_juicio','=','etapaejecucion.id_etapaejecucion')
        ->join('concluido','juicios.id_juicio','=','concluido.id_concluido')        
        ->where('juicios.id_juicio', $id)
        ->get();

        $accion_de_juicio = $juicio3[0]->accion;

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
        
         $sueldo['Quincenal'] = round($juicio3[0]->salarioMen/2,2);
         $sueldo['Diario'] = round($juicio3[0]->salarioMen/30,2);
         
       
         $iniciolab = Carbon::create($juicio3[0]->inicio_rellab);                                      
         $finrellab = Carbon::create($juicio3[0]->terminacion_rellab);
         $finrelacionlaboral = Carbon::create($juicio3[0]->terminacion_rellab);
         $fechaactul = Carbon::create(now());

         $dif_days_finrellab_actual = $finrelacionlaboral->diffInDays($fechaactul); 
         $dif_monts_finrellab_actual = $finrelacionlaboral->diffInMonths($fechaactul); 
         $dif_years_finrellab_actual = $finrelacionlaboral->diffInYears($fechaactul); 

//if para validar si no existe o es nula
         if ($juicio3[0]->inicio_rellab == null ||  $juicio3[0]->terminacion_rellab == null) {
            $añostrancurridos = "Sin Fecha para Calcular Diferecia";
            $diastranscurridos= "Sin Fecha para Calcular Diferecia";
            $sueldo['Indemnizacion'] = 0;
            $sueldo['Indemnizaciones'] = 0;
            $sueldo['Aginaldo']= 0 ;
            $sueldo['Vacaciones']=0;
            $sueldo['Prima_Vacacional']= 0;
            $sueldo['Prestaciones_legales'] =0;          
            $informacionauto["Años Transcurridos Relacion Laboral"]="Sin Fecha";
            $informacionauto["Meses Transcurridos Relacion Laboral"]="Sin Fecha";
            $informacionauto["Dias Transcurridos Relacion Laboral"]="Sin Fecha";
            $mesestranscurridosalcalidos=0;
            $sueldo['sumaprestacioneslegales']=0;

         } else {            
            $añostrancurridos = $iniciolab->diffInYears($finrellab);
            $mesestranscurridos = $iniciolab->diffInMonths($finrellab);
            $diastranscurridos = $iniciolab->diffInDays($finrellab);         
            $mesestranscurridosalcalidos =  $finrellab->diffInMonths($fechaactul);
            $sueldo['Indemnizacion'] = $juicio3[0]->salarioMen*3+$sueldo['Diario']*20;
            $sueldo['Indemnizaciones'] = $juicio3[0]->salarioMen*3 +(20*$añostrancurridos)*$sueldo['Diario'];
            $sueldo['aginaldoanual'] = 40 * $sueldo['Diario'];           
            $sueldo['Aginaldo'] =40* $sueldo['Diario'];
            $sueldo['Vacaciones']=$sueldo['Diario']*20;
            $sueldo['Prima_Vacacional']=  $sueldo['Vacaciones']*0.30;
            $sueldo['Prestaciones_legales'] = $sueldo['Aginaldo']+$sueldo['Vacaciones']+$sueldo['Prima_Vacacional'];
           // $sueldo['Salarios_Caidos']= $diastranscurridos*$sueldo['Diario'];
            $informacionauto["Años Transcurridos Relacion Laboral"]=  $añostrancurridos;
            $informacionauto["Meses Transcurridos Relacion Laboral"]= $mesestranscurridos;
            $informacionauto["Dias Transcurridos Relacion Laboral"]=  $diastranscurridos;                       
            $sueldo['sumaprestacioneslegales'] =  $sueldo['Aginaldo']+$sueldo['Vacaciones']+ $sueldo['Prima_Vacacional'];

            // if ($accion_de_juicio == 'Indemnización'){
            //     $sueldo['cocodi'] = $sueldo['Indemnizacion']+$sueldo['Prestaciones_legales'];
            //     }
            // elseif($accion_de_juicio == 'Reinstalación'){
            //     $sueldo['cocodi']= 0 +$sueldo['Prestaciones_legales'];
            //     }
            // elseif($accion_de_juicio == 'Otros (prestaciones legales)'){
            //     $sueldo['cocodi']=$sueldo['Prestaciones_legales'];             
            //     }
            // else{
            //     $sueldo['cocodi'] =$sueldo['Salarios_Caidos']+$sueldo['Prestaciones_legales'];
            //     }

         }                  
         //se requiere saber cuantos trimestres son desde la fecha de separacion hasta la fecha actual         
        $trimestres = floor($mesestranscurridosalcalidos/3);
        $salarioportrimestre = $juicio3[0]->salarioMen*3;              
        return view('juicios.modals.desgloce_juicio_vista')
         ->with(['juicio3'=>$juicio3,
         'nombreabogados'=>$nombreabogados,
         'fechaaudiencia'=>$fechaaudiencia,
         'diasDiferencia' => $diasDiferencia,
          "diasrestantes"=>$diasrestantes,
          "horfatantes" => $horfatantes,
          "informacionauto"=> $informacionauto,
          "minfaltantes"=>$minfaltantes,
          "mesestranscurridosalcalidos"=>$mesestranscurridosalcalidos,
          "trimestres"=>$trimestres,
          "sueldo" =>$sueldo]);
    }
    public function comentario(Request $request,$id,SessionManager $sessionManager){ 
        $comentario =request()->only('comentario'); 
        Juicio::where('id_juicio','=',$id)->update($comentario);
        $sessionManager->flash('mensaje', 'Observacion Agregada');
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
            $response = ['success' => false, 'message' => 'Error al guardar.'];
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
    
        public function guardarcocodi(Request $request,$id,SessionManager $sessionManager){ 
            $valorCoco =$request->only('cocodi_suma');            
            Juicio::where('id_juicio','=',$id)->update($valorCoco);
            $sessionManager->flash('mensaje', 'Cocodi Actualizado'); 
                   
            return redirect()->route('juicios.index');
                                   
        }
       




}