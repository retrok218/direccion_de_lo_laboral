@extends('home') 
@section('content')
<script src="https:://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"></script>

<h1>Creacion de juicios</h1>

<form action="{{url('juicios')}}"class="needs-validation" method="post" id="form-juicios">
    @csrf
    
        @include('juicios.forminijuicio')
  
      
        
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
    $()

    $('#form-juicios').submit(function(e) {
        e.preventDefault();
        var nombre = $('#nombre'),val();
        var _token = $("input[name_token]").val();

        $.ajax({
            url:"{{ route('eje.control') }}",
            type: "POST",
            data: $("#form-juicios").serialize(),
            dataType: 'json',


            success:function(response){
                if (response) {
                    $('#formulario_pru')[0].reset();
                    toastr.success('El registro se ingreso','Nuevo registro',{timeOut:3000});
                    
                }
            }
        });
    });

</script>

@endsection