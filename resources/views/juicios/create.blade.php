@extends('home') 

@section('content')
<script src="https:://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"></script>


<h1>Creacion de juicios</h1>

<form action="{{url('juicios')}}" class="kt-form kt-form--label-right" method="post" id="form-juicios">
    <div class="kt-portlet__body">
    @csrf    
        @include('juicios.forminijuicio')     
    </div>           
</form>



{{-- <form id="formulario_pru">
    <div class="form-group">
        <label for="exemail">Nombre</label>
        <input type="text" id="nombre" name="nombre">
    </div>
    <button type="submit" class="btn btn-primary" >Ingresar</button>
</form> --}}
@include('layouts/scripts/scripts_dttb')
@endsection