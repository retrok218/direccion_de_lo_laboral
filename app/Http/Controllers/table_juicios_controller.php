<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class table_juicios_controller extends Controller
{

    public function index(){
        return view('admin.dashboard');
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
