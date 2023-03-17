<?php

namespace App\Http\Controllers;
use App\Models\abogado;
use App\Models\salas;
use Illuminate\Http\Request;

class SalasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salasconabogados= salas::with('abogados')->get();                       
        return view('salas.index',compact('salasconabogados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $abogados=abogado::all();

        return view('salas.create')->with(['abogados'=> $abogados]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sala = new salas;
        $sala->nombre_sala = $request->input('nombre_sala');
        $sala->created_at = now();
        $sala->updated_at = now();
        $sala->save();
        //Se ingresa la sala 



        
        $datossala =request()->except('_token');
        $abogadosSeleccionados = $request->input('abogadosid');

        $sala->abogados()->attach($abogadosSeleccionados);
        return redirect()->route('sala.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\salas  $salas
     * @return \Illuminate\Http\Response
     */
    public function show(salas $salas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\salas  $salas
     * @return \Illuminate\Http\Response
     */
    public function edit(salas $salas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\salas  $salas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, salas $salas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\salas  $salas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_sala)
    {
           
        $eliminandosala = salas::find($id_sala);
        if ($eliminandosala) {
            $eliminandosala->delete();
            return redirect()->route('sala.index');
        }
     }
}
