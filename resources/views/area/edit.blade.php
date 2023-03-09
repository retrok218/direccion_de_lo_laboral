@extends('home') 
@section('content')

   <form action="{{url('/abogado/'.$abogadod->id_abogado)}} " method="POST">
        @csrf
        {{method_field('PATCH') }}
        @include('abogados.form');

   </form>


   
@include('layouts/scripts/scripts_dttb')
@endsection
