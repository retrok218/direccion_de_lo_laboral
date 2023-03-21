<?php

namespace App\Http\Controllers;
use App\Models\abogado;
use App\Models\salas;
use App\Models\Juicios2;
use App\Models\actor;
use Illuminate\Http\Request;

class Juicios2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('juicios.index');
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
    public function store(Request $request)
    {
        
        $juicio = new Juicios2;
        $juicio->noti_demanda = $request->input('notidemanda');
        $juicio->presentacion_de_demanda= $request->input('presentacion_de_demanda');
        $juicio->expediente= $request->input('expediente');
        $juicio->año_juicio= $request->input('año_juicio');
        $juicio->clasificacion_año= $request->input('clasificacion_año');
        $juicio->clasificacion_exp= $request->input('clasificacion_exp');
        $juicio->tipo= $request->input('tipo');
        $juicio->accion= $request->input('accion');
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
        $actor->  = $request->input();
        $actor->  = $request->input();



    dd($actor);

         return redirect()->route('juicios.index');

        
       // dd($juicio);
       // Juicios2::insert($juicio);
        
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
}
