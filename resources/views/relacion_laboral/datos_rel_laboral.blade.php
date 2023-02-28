@extends('home')
 
@section('content')
<h1>Datos del Relacion laboral </h1>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>adscripcion</th>
            <th>Ur</th>
            <th>Denominacion</th>
            <th>Puesto </th>
            <th>Nivel</th>
            <th>Salaraio Mensual</th>
            <th>Inicio.rel Laboral </th>
            <th>Terminacion rel laboral</th>    
        </tr>  
    </thead>
    <tbody>
        <tr>
            <th>GALVAN MARQUEZ OSCAR RENE</th>
            <th>INM</th>
            <th>K00</th>
            <th>Confianza</th>
            <th>Enlace</th>
            <th>PQ2</th>
            <th>$1500</th>
            <th>12/01/2020</th>
            <th>01/05/2023</th>
        </tr>
    </tbody>
      

</table>


@include('layouts/scripts/scripts_dttb')
@endsection
