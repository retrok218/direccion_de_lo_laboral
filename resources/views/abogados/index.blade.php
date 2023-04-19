@extends('home') 
@section('content')




<div class="botonargegar">    
    <a href="{{URL::asset('abogado/create')}}" class="btn-agregar-abogado button-pulse"> <i class="flaticon-user-add"> </i> Agregar Abogado</a>
</div>

    <table id="" class="table table-striped table-bordered" style="width:100%">
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
                        
                        
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="container text-center" style="display: contents;">
                                <form action="{{ url('abogado/'.$abogado->id_abogado ) }}" method="POST">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" onclick="return confirm('¿Quieres borrar el registro?'+{{$abogado->id_abogado}})" class="btn btn-danger  btn-wide">
                                        <i class="fa fa-trash"></i> Borrar
                                    </button>
                                    
                                </form>
                                <form action="{{url('/abogado/'.$abogado->id_abogado.'/edit' ) }}" >
                                    <button type="submit"  class="btn btn-success btn-wide">
                                        <i class="la la-edit"></i>Editar
                                    </button>
                                </form>                                                                
                            </div>
                        </div>
                    
                    </td>
                                       
                </tr>
            @endforeach
        </tbody>
    </table>








@endsection
