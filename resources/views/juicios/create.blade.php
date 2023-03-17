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




<script>
$(function() {
    $("#juicio_sala_seleccionada").change(function() {
        
        let data = {"valor":$(this).val()};
        
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            
            
            url: url+"juicios/data",
            dataType : 'json',
            type: 'POST',
            data:  data ,
            success: function(abogadesdesalas) {
                if (abogadesdesalas.success == true) {

                    const abogadoss=[];
                    abogadesdesalas.abogados.forEach(element => {
                        abogadoss.push(element.nombre);                                               
                   });
                   
                   $("#abogados_asignados").val(abogadoss.join(","));
                        
                    
                    
                }
             

                 
            },
        })
        
    });
});


</script>

@endsection