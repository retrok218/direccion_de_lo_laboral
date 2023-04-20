@extends('home') 
<script>   
    function executeExample() {
    //         Swal.fire({
    //             title: 'Juicio Agregado Crrectamente !',
    //           type: 'success',
    //           timer: 3000,
    //           showConfirmButton: false,
    //           position: 'top-right',
            
    // });
    Swal.fire({
        title: 'Operacion Exitosa',
        width: 334,
        type:'success',
        position :'top-right',
        padding: '0px',
        color: '#716add',
        border: '3px solid #a5dc86',
        timerProgressBar: true,
        timer: 4000,
        showConfirmButton: false,
        background: '#fff ',
        backdrop: `
            rgba(0,0,123,0.4)
            
            left top
            no-repeat`    
        })
}


</script>
@section('content')

@if(Session::has('mensaje'))            
    <script>        
        executeExample();
    </script>        
@endif

<h1  id="h01">Desglose de juicios</h1> 
<div class="botonargegar">            
    <a href="{{URL::asset('juicios/create')}}" class="btn-agregar-abogado button-pulse"> +     <span>Agregar Juicio</span> </a>
</div>

<table class="table table-striped table-bordered" style="width:100%" id="juiciotabla" >
    <thead>
        <tr>
            <th>Etapa</th>
            <th>Juicio</th>
            <th>Notificacion</th>
            <th>Presentacion</th>
            <th>Expediente</th>
            <th>Tipo</th>
            <th>Accion</th>
            <th>Actor</th>
            <th>Editar/Eliminar</th>
        </tr>                
    </thead>
    
</table>

<script>
    function edit_juicio(id) {
        
        let formData = new FormData($("#edit_juicio").get(0));        
        formData.append('_method','PUT');
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
            url:'{{url('juicios/editar/')}}'+id,
            method:'POST',
            data:formData,
           contentType:false,
           processData:false,
            
    


        });
        
       
    }
</script>


@endsection