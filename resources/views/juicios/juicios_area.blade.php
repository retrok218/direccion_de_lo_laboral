@extends('home')
@section('content')

@if (Session::has('mensaje')) 
<script> 
    let mensaje = '{{ Session::get('mensaje') }}';
    console.log(mensaje);   
    if (mensaje == 'No se selecciono el archivo') {
        $(document).ready(function() {       
         executewrong(mensaje);
     });
    } else{
        $(document).ready(function() {       
         executeExample(mensaje);
     });  
    }            
    
</script>    
@endif 
<script>
let etapa = 'data/juicios_area/{{$etapa2}}';


</script>
<script src="{{URL::asset('js/tabla_juicio_area.js')}}"></script> 
@include('juicios.headbar')
@include('tablas_juicio/tabla_juicio_area')

@endsection