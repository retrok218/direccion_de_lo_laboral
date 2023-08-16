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
@include('juicios.headbar')
@include('tablas_juicio.tabla_juicios')   

@endsection
{{-- <script>
    let user = {!! json_encode((array)auth()->user()) !!};
    console.log(user.typeof );            
</script> --}}
 