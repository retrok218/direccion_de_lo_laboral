@extends('home') 
<link href="{{ asset('css/fontawesome/css/all.css') }}"  rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('assets/vendors/general/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>

@section('content')

@if(Session::has('mensaje'))
    

    
@endif
{{-- <script src="public/js/datatable.js"></script> --}}
<i class="fa-solid fa-bomb"></i>
<div class="botonargegar">    
    
    <a href="{{URL::asset('juicios/create')}}" class="btn-agregar-abogado button-pulse"> + Agregar Juicio</a>
</div>


<button onclick="executeExample()">Ejecutar función</button>



<h1>Desglose de juicios</h1> 

<table class="display" style="width:100%" id="example" >
    <thead>
        <tr>
            <th>Juicio</th>
            <th>Notificacion</th>
            <th>Presentacion</th>
            <th>Expediente</th>
            <th>Tipo</th>
            <th>Accion</th>
            <th>Actor</th>
            <th>Puesto</th>
        </tr>                
    </thead>
    
</table>
<script src="public/js/datatable.js"></script>
<script>
    function executeExample() {
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Juicio Agregado Correctamente',
          html:'<i class="fa fa-thumbs-up"></i>', 
          showConfirmButton: false,         
          timer: 1500,
        })
      }
    </script>
@include('layouts/css/css')
@endsection