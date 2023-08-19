@extends('home')
{{-- <meta http-equiv="refresh" content="60"/> --}}
@section('content')
<div class="row">
    
    
@foreach ($conteoPorEtapa as $key => $totaletapa)


<div class="col-lg-3">
    <a href="{{url('/tabla_etapa_juicio/'.$totaletapa['etapa'])}}">


        <div class="item-wrapper">
           

        <div class="kt-portlet kt-portlet--height-fluid kt-iconbox--animate-slow" style="background-color: #9d1f3e36;">
            <div class="line line-top"><span></span></div>
            <div class="line line-right"><span></span> </div>
            <div class="line line-bottom"><span></span> </div>
            <div class="line line-left"><span></span> </div>
            <div class="kt-portlet__head kt-portlet__head--noborder " style="min-height: 40px;"  >
               
                    <h3 class="kt-portlet__head-title" style="font-size: 20px;
                    color:  #0f4c42b3;
                    font-weight: bold;">
                        {{$totaletapa['etapa']}}
                    </h3>
              
            
            </div>
            <div class="kt-portlet__body kt-portlet__body--fit-y kt-margin-b-25">
                <!--begin::Widget -->
                <div class="kt-widget kt-widget--user-profile-4 " >
                    <div class="kt-widget__head">
                        <div class="kt-widget__media "></div>
                        <div class="kt-widget__content">
                            <div class="kt-widget__section">
                            <h3 style="text-shadow: 1px 1px 2px #e7d8bb, 0 0 25px #aa3f53, 0 0 5px #f1e9d9;">
                                <i class="fa fa-file-alt" style="color:#a02744"></i>
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

    </a> 
</div>


    
@endforeach


   
</div>


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid"> <!--inicio de graficas y pag principal -->     
    
    <div class="row">
        <div class="col-xl-6 col-lg-6 order-lg-6 order-xl-6">
            <div class="kt-portlet kt-portlet--height-fluid" >
                <div class="kt-witdget14">
                    <div class="kt-widget14__header">
                        <h3>Juicios Por Etapa</h3>
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
   

    
        <div class="col-xl-6 col-lg-6 order-lg-6 order-xl-6">
            <div class="kt-portlet kt-portlet--height-fluid" >
                <div class="kt-witdget14">
                    <div class="kt-widget14__header">
                        <h3>Cocodi Por Año</h3>
                        
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
    <div class="row">
        <div class="col-xl-5 col-lg-5 order-lg-5 order-xl-5">
            <div class="kt-portlet kt-portlet--height-fluid" >
                <div class="kt-witdget14">
                    <div class="kt-widget14__header">
                        <h3>Juicio/Año</h3>                        
                    </div>
                    <div class="kt-widgeat14__content">                                                    
                        <div class="kt-widget14__chart">
                            <div id="juicio_año" style="height: 250px;"></div> 
                                                        
                        </div>                                                  
                    </div>                        
                </div> 
                           
            </div>    
        </div>
        <div class="col-xl-7 col-lg-7 order-lg-7 order-xl-7">
            <div class="kt-portlet kt-portlet--height-fluid" >
                <div class="kt-witdget14">
                    <div class="kt-widget14__header">
                        <h3>Juicio/Año/Porciento</h3>
                        
                    </div>
                    <div class="kt-widgeat14__content">                                                    
                        <div class="kt-widget14__chart">                             
                            <div id="grafica_animada_de_dona" style="height:250px;"></div>                             
                        </div>                                                  
                    </div>                        
                </div>            
            </div>    
        </div>
        
    </div>  
    
    

    
</div>

{{-- se requeiere que el arreglo que se rtae dese el controlados se transferido a js  --}}

<script>    
      
    let json_suma_coco = {!! $json_suma_coco !!};
    let sumaCocoAno = [];
    let Json_ano_mes_coco ={!!$Json_ano_mes_coco!!};
    const añojuicioData =   @json($juicios_por_año_individual);
      

    

    for (var i = 0; i < json_suma_coco.length; i++) {
        var anio = json_suma_coco[i].anio || "0";  // Utiliza "0" como valor predeterminado si anio es null
        var sumacoco = json_suma_coco[i].sumacoco;
        sumaCocoAno.push({ ano: anio, value: parseFloat(sumacoco)  });
    }  



  

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






