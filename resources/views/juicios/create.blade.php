@extends('home') 
@section('content')

<h1>Creacion de juisicios con DB</h1>

<form>
    @csrf
    @include('juicios.forminijuicio')
    
</form>
@include('layouts/scripts/scripts_dttb')
@endsection