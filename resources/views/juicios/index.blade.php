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

@php
    $log = is_null(Auth::user());
   
@endphp
@include('juicios.headbar')

<table class="table table-striped table-bordered" style="width:100%" id="juiciotabla" >
    <thead>
        <tr>
            <th>Alerta</th>
            <th>Juicio</th>
            <th>Notificacion</th>
            <th>Audiencia</th>            
            <th>Expediente</th>
            <th>Accion</th>
            <th>Indemnizacion</th>                        
            <th>Ejecucion/Dias restantes Para Requerimiento Fecha Proxima</th>
            
            <th>Editar</th>
        </tr>                
    </thead>    
</table>    

@endsection
{{-- <script>
    let user = {!! json_encode((array)auth()->user()) !!};
    console.log(user.typeof );            
</script> --}}
 