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

<div>
    <input type="file" id="archivo" class='fansi_file'>
    <label for="archivo">
      <span class='fansi_file_name'>
         <span id="nombre">  Ningun archivo Seleccionado</span>     
      </span>
      <span class='fansi_file_button'> <i class="fa fa-upload"></i> Buscar Archivo</span>
    </label>
  </div>
  <input type="submit" value="Enviar">
  
  
@endsection

<script>
    
    document.addEventListener('DOMContentLoaded', () => {
        let archivo = document.querySelector('#archivo');
        archivo.addEventListener('change', () => {
            document.querySelector('#nombre').innerText = archivo.files[0].name;
        });
    });
    
</script>
 