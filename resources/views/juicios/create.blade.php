@extends('home') 
@section('content')

<h1>Creacion de juisicios con DB</h1>

<form action="{{url('juicios')}}"class="needs-validation" method="post">
    @csrf
    @include('juicios.forminijuicio')
    
</form>
@include('layouts/scripts/scripts_dttb')
@endsection