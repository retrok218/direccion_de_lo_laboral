@extends('home')
 <!-- <meta http-equiv="refresh" content="60"> Se recarga cada segundo marcado content -> 10 -->
@section('content')
<div class="row">
    
    
@foreach ($conteoPorEtapa as $key => $totaletapa)


<div class="col-lg-3">
    <div class="kt-portlet kt-portlet--height-fluid kt-iconbox--animate-slow" style="background-color: #9d1f3e36;">
        <div class="kt-portlet__head kt-portlet__head--noborder " >
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    {{$totaletapa['etapa']}}
                </h3>
            </div>
           
        </div>
        <div class="kt-portlet__body kt-portlet__body--fit-y kt-margin-b-40">
            <!--begin::Widget -->
            <div class="kt-widget kt-widget--user-profile-4 " >
                <div class="kt-widget__head">
                    <div class="kt-widget__media ">
                        
                       
                    </div>
                    <div class="kt-widget__content">
                        <div class="kt-widget__section">
                           <h3>
                            <i class="fa fa-file-alt"></i>
                            {{$totaletapa['total']}}   
                           </h3>
                                                                                        
                            
                            
                            
                        </div>
                    </div>
                </div>            
            </div>
            <!--end::Widget -->
        </div>
    </div>
</div>


    
@endforeach


   
</div>


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid"> <!--inicio de graficas y pag principal -->     
    
    <div class="row">
        <div class="col-xl-12 col-lg-12 order-lg-12 order-xl-12">
            <div class="kt-portlet kt-portlet--height-fluid" >
                <div class="kt-witdget14">
                    <div class="kt-widget14__header">
                        <h3>Grafica Juicios Por Etapa</h3>
                        <span>Etapas </span>
                    </div>
                    <div class="kt-widgeat14__content">                                                    
                        <div class="kt-widget14__chart">
                            <div id="pastelgrafica" style="height: 250px;"></div>
                        </div>    
                            
                    </div>                        
                </div>            
            </div>    
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-12 order-lg-12 order-xl-12">
            <div class="kt-portlet kt-portlet--height-fluid" >
                <div class="kt-witdget14">
                    <div class="kt-widget14__header">
                        <h3>Grafica Cocodi Por Año</h3>
                        
                    </div>
                    <div class="kt-widgeat14__content">                                                    
                        <div class="kt-widget14__chart">
                            <div id="chartdiv" style="height: 250px;"></div>
                            
                        </div>    
                        
                    </div>                        
                </div>            
            </div>    
        </div>
    </div> 
    {{-- <div class="row">
        <div class="col-xl-12 col-lg-12 order-lg-12 order-xl-12">
            <div class="kt-portlet kt-portlet--height-fluid" >
                <div class="kt-witdget14">
                    <div class="kt-widget14__header">
                        <h3>Grafica Cocodi Por Mes Año</h3>
                        
                    </div>
                    <div class="kt-widgeat14__content">                                                    
                        <div class="kt-widget14__chart">
                            <div id="ano-mes-coco" style="height: 250px;"></div>
                            
                        </div>    
                        
                    </div>                        
                </div>            
            </div>    
        </div>
    </div>      ************construccion--}}   

    
</div>

{{-- se requeiere que el arreglo que se rtae dese el controlados se transferido a js  --}}

<script>    
      
    let json_suma_coco = {!! $json_suma_coco !!};
    let sumaCocoAno = [];
    let Json_ano_mes_coco ={!!$Json_ano_mes_coco!!};

    for (var i = 0; i < json_suma_coco.length; i++) {
        var anio = json_suma_coco[i].anio || "0";  // Utiliza "0" como valor predeterminado si anio es null
        var sumacoco = json_suma_coco[i].sumacoco;
        sumaCocoAno.push({ ano: anio, value: parseFloat(sumacoco)  });
    }  



    console.log(Json_ano_mes_coco); 

    let nombteetapa= []; 
    let todosloj ={{$todoslosjuicios}};
        
</script>




@foreach ($conteoPorEtapa as $etapa)
    <script>
        nombteetapa['{{$etapa['etapa']}}'] = '{{$etapa['total']}}';            
    </script>    
@endforeach




@include('admin/alertafechas')
@include('layouts/scripts/scripts_dttb')

{{-- Se agrega alerta de juicios proximo --}}
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






