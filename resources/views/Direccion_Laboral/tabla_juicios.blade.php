@extends('home')
 
@section('content')
<h1> Tabla de juicios  </h1>
<div class="button_plus">
    
</div>

<link href="{{ URL::asset('assets/css/demo1/alerta.css')}}" rel="stylesheet" type="text/css" />
<div class="col-sm-12">       
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Abogado Responsable</th>
                    <th>Notificacion de Demanda</th>
                    <th>Presentacion de Demanda</th>
                    <th>Sala/Jta</th>
                    <th>Expediente</th>
                    <th>Año</th>
                    <th>Clasificacion/Año</th>
                    <th>Clas/Exp</th>
                    <th>Tipo</th>
                    <th>Accion</th>
                    <th>Nombre</th>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <td><a href="">001</a>  </td>
                        <td>CBV/***</td>
                        <td>22/11/2022</td>
                        <td>01/12/2022</td>
                        <td>8a</td>
                        <td>5507</td>
                        <td>2022</td>
                        <td>2022</td>
                        <td>129</td>
                        <td>DEMANDA</td>
                        <td>Basificación</td>
                        <td>MORENO MOEDANO ADRIANA</td>
                        
                    </tr>

                    <tr>
                        <td><a href="">002</a>  </td>
                        <td>Transferido</td>
                        <td></td>
                        <td></td>
                        <td>2a</td>
                        <td>2805</td>
                        <td>2009</td>
                        <td>2009</td>
                        <td>83</td>
                        <td>DEMANDA</td>
                        <td>Reinstalación</td>
                        <td>LOPEZ HERNANDEZ ELIA ARTEMISA</td>
                        
                    </tr>
                                               
                </tbody>
        </table>
    
@include('layouts/scripts/scripts_dttb')
@endsection
