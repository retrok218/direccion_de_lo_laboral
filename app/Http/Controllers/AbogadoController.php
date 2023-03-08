<?php

namespace App\Http\Controllers;
use App\Models\abogado;
use Illuminate\Http\Request;

class AbogadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abogados['abogados']=abogado::paginate();
        return view('abogados.index', $abogados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('abogados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosabogado = request()->all();
        $datosabogado = request()->except('_token');
        abogado::insert($datosabogado);
       // return response()->json($datosabogado);
       return redirect()->route('abogado.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\abogado  $abogado
     * @return \Illuminate\Http\Response
     */
    public function show(abogado $abogado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\abogado  $abogado
     * @return \Illuminate\Http\Response
     */
    public function edit($id_abogado)
    {
        //
        $abogadod =abogado::findOrFail($id_abogado);

        return view('abogados.edit', compact('abogadod'));
    }











    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\abogado  $abogado
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id_abogado)
    {
        //
        $datosabogado = request()->except(['_token','_method']);
        abogado::where('id_abogado','=',$id_abogado)->update($datosabogado);
        
        //regresando a lista de abogados  
        return redirect()->route('abogado.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\abogado  $abogado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_abogado)
    {

        //dd($id_abogado);
        $aeliminar = abogado::find($id_abogado);
        if($aeliminar){
            $aeliminar->delete();
            return redirect()->route('abogado.index');
        }



        // abogado::destroy($id_abogado);
        // return redirect ('abogado');
    }
}
