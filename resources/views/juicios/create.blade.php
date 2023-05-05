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
@include('layouts/scripts/scripts_dttb')
@endsection