@extends('home') 
@section('content')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id-Abogado</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($abogados as $abogado)
                <tr>   
                    <td>{{$abogado->id_abogado}}</td>
                    <td>{{$abogado->nombre}}</td>
                    <td>{{$abogado->apellidoP}}</td>
                    <td>{{$abogado->apellidoM}}</td>
                    <td>Editar|

                        <form action="{{ url('/abogado/'.$abogado->id_abogado ) }}" method="POST">
                            @csrf
                            {{method_field('DELETE')}}
                        <input type="submit" onclick="return confirm('¿Quieres borrar el registro?')" value="Borrar">
                        </form>
                    </td>
                                       
                </tr>
            @endforeach
        </tbody>
    </table>







@include('layouts/scripts/scripts_dttb')
@endsection