{{-- @extends('home') 
@section('content')
<div class="row">

</div>
    @foreach($juicio3 as $juiciocompleto)
        <div>
            <h1>Juicio</h1>
            {{$juiciocompleto->id_juicio}}
            <span>Notificacion de Demanda</span>
            {{$juiciocompleto->noti_demanda}}
            <span>Presentacion </span>
            {{$juiciocompleto->presentacion_de_demanda}}
            <span>Expediente</span>
            {{$juiciocompleto->expediente}}
            <span>Año</span>
            {{$juiciocompleto->año_juicio}}
            <span>Clasificacion - Año</span>
            {{$juiciocompleto->clasificacion_año}}
            <span>Clasificaion - Exp</span>
            {{$juiciocompleto->clasificacion_exp}}
            <span>Nombre Actor</span>
            {{$juiciocompleto->nombre_completo}}
            <span>Adscripcion </span>
            {{$juiciocompleto->adscripcion}}
            

            


            
        </div>
           
          
               
    @endforeach
@endsection --}}