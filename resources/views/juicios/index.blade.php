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
        title: 'Juicio Agregado  Correctamente',
        width: 334,
        type:'success',
        position :'top-right',
        padding: '0px',
        color: '#716add',
        border: '3px solid #a5dc86',
        timerProgressBar: true,
        timer: 2000,
        showConfirmButton: false,
        background: '#fff ',
        backdrop: `
            rgba(0,0,123,0.4)
            url("public/assets/media/company-logos/nyan-cat.gif")
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

<h1>Desglose de juicios</h1> 
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
@endsection