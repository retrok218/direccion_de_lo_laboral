@extends('home')
 <!-- <meta http-equiv="refresh" content="60"> Se recarga cada segundo marcado content -> 10 -->
@section('content')


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid"> <!--inicio de graficas y pag principal -->     
    <h1> Control Direccion de lo Laboral</h1>
    <div class="row">
        <div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">
            <div class="kt-portlet kt-portlet--height-fluid" >
                <div class="kt-witdget14">
                    <div class="kt-widget14__header">
                        <h3>Grafica de algo xxxxxx</h3>
                        <span>Algo</span>
                    </div>
                    <div class="kt-widgeat14__content">                                                    
                        <div class="kt-widget14__chart">
                            <div id="pastelgrafica" style="height: 250px;"></div>
                        </div>    
                        <div class="kt-widget14__chart">
                            <div id="pas" style="height: 250px;"></div>
                        </div>    
                    </div>                        
                </div>            
            </div>    
        </div>
    </div>
</div>

@include('admin/alertafechas')



@include('layouts/scripts/scripts_dttb')
@if($totalqueaproximados != 0)
    <script>
        let fechas = {{$totalqueaproximados}};
        $(function() {
            seacercan(fechas) ;            
        });    
    </script>    
    @else        
@endif


@endsection

