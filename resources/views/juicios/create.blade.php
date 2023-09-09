@extends('home') 
@section('content')
@include('juicios.headbar')

<script src="https:://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"></script>
<div class="kt-portlet__head kt-portlet__head--lg">
    <div class="kt-portlet__head-label">
        <span class="kt-portlet__head-icon">
            <i class="fa-solid fa-scale-balanced fa-flip fa-sm" style="color: #9d203f; animation-duration: 5s;"></i>
        </span>
        <h3 class="kt-portlet__head-title">
            Crear Nuevo Juicios
        </h3>
    </div>
   
</div>
<div class="kt-portlet__body  ">
    <form action="{{url('juicios')}}" class="kt-form kt-form--label-right" method="post" id="form-juicios">               
        @csrf                
        @include('juicios.forminijuicio')                       
    </form>
</div>

@include('layouts/scripts/scripts_dttb')
@endsection