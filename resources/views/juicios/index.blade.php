@extends('home') 
@section('content')   
@if (Session::has('mensaje')) 
<script> 
    let mensaje = '{{ Session::get('mensaje') }}';            
     $(document).ready(function() {       
         executeExample(mensaje);
     });                                                                                                        
</script>    
@endif
                  
@include('juicios.headbar')
<table class="table table-striped table-bordered" style="width:100%" id="juiciotabla" >
    <thead>
        <tr>
            <th>Etapa</th>
            <th>Juicio</th>
            <th>Notificacion</th>
            <th>Presentacion</th>
            <th>Expediente</th>
            <th>Tipo</th>
            <th>Accion</th>
            <th>Actor</th>
            <th>Editar/Eliminar</th>
        </tr>                
    </thead>
    
</table>


  
  
@endsection
