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
       return view('juicios.index')->with([
        'juicio_actor' => $juicio_actor
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
        $actor->exp_personal_rh_solicitud  = $request->input('Solicitud');
        $actor->exp_personal_rh_devolucion  = $request->input('Devolucion');
        $actor->fojas  = $request->input('Fojas');
        $actor->exp_adscripcion_solicitud = $request->input('exp_adscripcion_solicitud');
        $actor->exp_adscripcion_devolucion = $request->input('exp_adscripcion_devolucion');
        $actor->audiencia = $request->input('audiencia');
        $actor->descripcion = $request->input('addescripcion');
        $actor->cierredeinstruccion = $request->input('Cierre_de_Instruccion');
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
        $sessionManager->flash('mensaje', 'Este es el mensaje');

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
    public function edit(Juicios2 $juicios2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Juicios2  $juicios2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Juicios2 $juicios2)
    {
        //
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
        $juicio_actor= juicio::with('actor')->get();
        return Datatables::of($juicio_actor)->toJson();
    }

    public function desglocejuicio($id){
        
        $datosjuicio = juicio:: 
        where('id_juicio',$id)->with('actor','sala')->firstOrFail();     //selecciona todos los datos tanto de juicio como de actor    
dd($datosjuicio->sala);




        $juicios2 = DB::table('juicios')
                  ->select('juicios.id_juicio', 'juicios.noti_demanda', 'actores.nombre_completo')
                  ->join('actores', 'juicios.id_juicio', '=', 'actores.juicio_id')
                  ->where('juicios.id_juicio', $id)
                  ->get(); 

        $juicio3 = Juicio::select('juicios.id_juicio', 'juicios.noti_demanda','juicios.presentacion_de_demanda','juicios.expediente','juicios.año_juicio','juicios.clasificacion_año','juicios.clasificacion_exp','actores.nombre_completo','actores.adscripcion','actores.ur','actores.denominacion','actores.puesto','actores.nivel','actores.salarioMen','actores.inicio_rellab','actores.terminacion_rellab','actores.exp_personal_rh_solicitud','actores.exp_personal_rh_devolucion','actores.fojas','actores.exp_adscripcion_solicitud','actores.exp_adscripcion_devolucion','actores.audiencia','actores.descripcion','actores.cierredeinstruccion')
        
        ->join('actores', 'juicios.id_juicio', '=', 'actores.juicio_id')
        ->where('juicios.id_juicio', $id)
        ->get('juicios.id_juicio');

//var_dump($juicio3);
         
        return view('juicios.modals.desgloce_juicio_vista')->with(['juicio3'=>$juicio3]);
    }
}
