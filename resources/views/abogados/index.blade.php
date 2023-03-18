@extends('home') 
@section('content')

@if(Session::has('mensaje'))
{{Session::get('mesaje') }}
@endif


<div class="botonargegar">    
    <a href="{{URL::asset('abogado/create')}}" class="btn-agregar-abogado button-pulse"> <i class="flaticon-user-add"> </i> Agregar Abogado</a>
</div>

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
                    <td>
                        <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-danger btn-xs dt-delete">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>
                        

                        <a class="btn btn-outline-success" href="{{url('/abogado/'.$abogado->id_abogado.'/edit' ) }}">Editar</a>
                       

                        <form action="{{ url('abogado/'.$abogado->id_abogado ) }}" method="POST">
                            @csrf
                            {{method_field('DELETE')}}
                            <input class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Quieres borrar el registro?')" value="Borrar">
                        </form>
                    </td>
                                       
                </tr>
            @endforeach
        </tbody>
    </table>







@include('layouts/scripts/scripts_dttb')
@endsection