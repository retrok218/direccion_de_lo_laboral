@extends('home') 
@section('content')
    <h1>Creando Sala </h1>

    <form action="{{url('sala')}}" class="needs-validation" method="post">
        @csrf        
        @include('salas.form_salas')
    </form>

@endsection