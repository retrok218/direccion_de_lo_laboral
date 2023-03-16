@extends('home') 
@section('content')
    <h1>Salas</h1>
    <div class="botonargegar">    
        <a href="{{URL::asset('sala/create')}}" class="btn-agregar-abogado button-pulse"> + Agregar Sala</a>
    </div>

    

    <div class="row">


@foreach ($salasconabogados as $sala) 

<div class="col-lg-3">
    <div class="kt-portlet kt-iconbox kt-iconbox--success  kt-iconbox--animate-slower" style=" border-radius: 20px;">
        <div class="kt-portlet__body">
            <div class="kt-iconbox__body">
                
                <div class="kt-iconbox__desc">
                    <h3 class="kt-iconbox__title">
                        <p class="kt-link"  >Sala: {{ $sala->nombre_sala }}</p>
                    </h3>
                    
                    <div class="kt-iconbox__content" style="color: #c50030b8;font-size: 12px;font-weight: 700;">
                        @foreach ($sala->abogados as $abogado)   
                            <ul>
                                <li>{{ $abogado->nombre }} - {{ $abogado->apellidoP }}</li>
                            </ul>                                                                    
                         @endforeach  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

      



@endforeach

       
    </div>

@endsection
