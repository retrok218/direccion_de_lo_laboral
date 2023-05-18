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
<table class="table table-striped table-bordered" style="width:100%" id="juiciotabla" >
    <thead>
        <tr>
            <th>Alerta</th>
            <th>Juicio</th>
            <th>Notificacion</th>
            <th>Etapa</th>
            <th>Presentacion</th>
            <th>Expediente</th>
            <th>Indemnizacion</th>
            
            <th>Actor</th>
            <th>Reinstalacion</th>
            <th>Dias restantes Para Requerimiento Fecha Proxima</th>
            <th>Requerimiento Fecha Proxima </th>
            <th>Editar</th>
        </tr>                
    </thead>
    
</table>
    
@endsection


 