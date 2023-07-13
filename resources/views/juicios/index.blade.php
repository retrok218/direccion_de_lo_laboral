@extends('home') 
@section('content')   
@if (Session::has('mensaje')) 
<script> 
    let mensaje = '{{ Session::get('mensaje') }}';
    console.log(mensaje);   
    if (mensaje == 'No se selecciono el archivo') {
        $(document).ready(function() {       
         executewrong(mensaje);
     });
    } else{
        $(document).ready(function() {       
         executeExample(mensaje);
     });  
    }                 
</script>    

@endif   
@include('juicios.headbar')

 <table class="table table-striped table-bordered"   style="width: 1%; margin: 1em 1em 1em 1em;" >
    
    
    
    <tbody>
        <tr id="filter_col3" data-column="2">
            <td>Filtro  Por Actor</td>
            <td align="center"><input type="text" class="column_filter" id="col2_filter"></td>            
        </tr>
        <tr id="filter_col5" data-column="4">
            <td>Filtro Por Expediente</td>
            <td align="center"><input type="number" class="column_filter" id="col4_filter"></td>            
        </tr>
    </tbody>
</table> 


<table class="table table-striped table-bordered" style="width:100%" id="juiciotabla" >
    <thead>
        <tr>
            <th>Alerta</th>
            <th>Juicio</th>
            <th>Actor</th>
            <th>Audiencia</th>            
            <th>Expediente</th>
            <th>Accion</th>
            <th>Indemnizacion</th>                        
            <th>Ejecucion/Dias restantes Para Requerimiento Fecha Proxima</th>            
            <th>Editar</th>
        </tr>                
    </thead>    
    {{-- <tfoot>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tfoot> --}}
</table>    
@endsection
{{-- <script>
    let user = {!! json_encode((array)auth()->user()) !!};
    console.log(user.typeof );            
</script> --}}
 