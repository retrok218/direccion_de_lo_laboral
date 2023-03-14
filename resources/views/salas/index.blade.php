@extends('home') 
@section('content')
    <h1>Salas</h1>
    <div class="botonargegar">    
        <a href="{{URL::asset('sala/create')}}" class="btn-agregar-abogado button-pulse"> + Agregar Sala</a>
    </div>

    @foreach ($salasconabogados as $sala)                      
      <div class="card" style="margin-bottom: 15px">
        <div class="card-header-salas">           
            <h4>  <i class="flaticon-users-1"></i> Sala: {{ $sala->nombre_sala }}</h4>
        </div>        
        <div class="card-body">
            <h5>Abogados Asignados</h5>
            <hr>   
            
            @foreach ($sala->abogados as $abogado)   
            <ul>
                <li>{{ $abogado->nombre }} - {{ $abogado->apellidoP }}</li>
            </ul>                                                                    
            @endforeach                   
        </div>
      </div>
    @endforeach

@endsection
