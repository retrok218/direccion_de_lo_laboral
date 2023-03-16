@extends('home') 
@section('content')
<div class="botonargegar">    
    <a href="{{URL::asset('juicios/create')}}" class="btn-agregar-abogado button-pulse"> + Agregar Juicio</a>
</div>
<h1>Desglose de juicios</h1> 

<table>
    <thead>
        <tr>
            <th>Folio</th>
            <th>Area</th>
            <th>Actor</th>
            <th>Radicacion</th>
            <th>Juicio</th>
            <th>Registro</th>
            <th>Actores</th>
            <th>Accion Principal</th>
            <th>Puesto</th>
            <th>Plaza</th>
            <th>Descripcion</th>        
        </tr>                
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>

@endsection