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
        return view('salas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $abogados=abogado::all();
        return view('salas.create')->with([            
            'abogados'=> $abogados
         ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datossala =request()->except('_token');
        
        dd( $datossala);
       // return response()->json($datossala);
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
    public function destroy(salas $salas)
    {
        //
    }
}
