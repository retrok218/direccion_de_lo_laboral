@extends('home')
@section('content')
     
    

    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="fa-solid fa-scale-balanced fa-flip fa-sm" style="color: #9d203f; animation-duration: 5s;"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Salas
            </h3>
        </div>
        <div class="botonargegar">    
            <a href="{{URL::asset('sala/create')}}" class="btn-agregar-abogado button-pulse"> + Agregar Sala</a>
        </div> 
    </div>


    <div class="kt-portlet__body">
    <div class="row">
        @foreach ($salasconabogados as $sala)
            <div class="col-lg-3">
                <div class="kt-portlet kt-iconbox kt-iconbox--success  kt-iconbox--animate-slower"
                    style=" border-radius: 20px;">
                    <div class="kt-portlet__body">
                        <div class="kt-iconbox__body">

                            <div class="kt-iconbox__desc">
                                <h3 class="kt-iconbox__title">
                                    <p class="kt-link">Sala: {{ $sala->nombre_sala }}</p>
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
                    <div class="botonargegar">

                        <form action="{{ url('sala/' . $sala->id_sala) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn-agregar-abogado button-pulse"
                                onclick="return confirm('¿Quieres borrar el registro?')" value="Eliminar">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

@endsection
