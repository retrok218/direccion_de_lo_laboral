<ul class="kt-sticky-toolbar" style="margin-top: 30px;">
    <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success" id="kt_demo_panel_toggle" data-toggle="kt-tooltip" title="" data-placement="right" data-original-title="Alerta ">
        
          <div class="bell-notify">
            <div class="bell">
              <a @if($totalqueaproximados>0)class="fa fa-bell fa-shake" @endif class="fa fa-bell">  </a>
            </div>
            <span class="fa fa-circle"></span> <span class="num" >{{$totalqueaproximados}}</span>
          </div>
            {{-- <div id="ex2">
                <span class=" p1 fa-stack  has-badge"  style="font-size: 1.8em !important;" data-count={{$totalqueaproximados}} >
                    <i class="fa fa-circle fa-stack-2x" ></i>
                    @if ($totalqueaproximados>0)
                    <i class="fa fa-bell fa-stack-1x fa-inverse fa-shake"></i>
                    @else
                    <i class="fa fa-bell fa-stack-1x fa-inverse " id="alertasfechaproxima"></i>
                    @endif                    
                  </span>
            </div> --}}
            
        </a>
    </li>  
</ul>





<div id="kt_demo_panel" class="kt-demo-panel kt-demo-panel--of  " style="padding: 1.5rem !important;"> 
	
    <div class="offcanvas-header d-flex align-items-center justify-content-between " style="margin: 1px 1px 13px 1px;" kt-hidden-height="47">
      <h4 class="font-weight-bold m-0">
        Fechas Proximas Ejecucion 
      </h4>
       
      <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
        <i class="icon-2x text-dark-50 flaticon-cancel " style="font-size: 20px"></i>
     </a>     
	  </div>

		<!--begin::Wrapper-->
		<div class="table-wrapper-scroll-y my-custom-scrollbar" >
      <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline " style="with:100%" >
        <thead >
           <tr>
            <th scope="col">ID Juicio</th>
            <th scope="col">Fecha Proxima</th>
          </tr>  
        </thead>
        <tbody>               
          @foreach ($alertaproximafecha as $key=>$fecha) 
          <tr>
            <td><a  onclick="mostrar_modal_juicio({{$key}})" title="Desglose de Juicio" ;><button class="button2"> <span> {{$key}} <span> </button></a> </td>
            <td >{{$fecha }}</td>
          </tr>                      
          @endforeach
        </tbody>
        
      </table>
    
	  </div>
		<!--end::Wrapper-->

		<!--begin::Purchase-->
		<div class="offcanvas-footer" style="" kt-hidden-height="38">
			{{-- foother --}}
		</div>
		<!--end::Purchase-->			    
</div>

{{-- scrip para actualizar notificacion --}}
{{-- <script type="text/javascript">
  function loadDoc() {
   
 
   setInterval(function(){
 
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
      document.getElementById("alertasfechaproxima").innerHTML = this.responseText;
     }
    };
    xhttp.open("GET",url, true);
    xhttp.send();
 
   },1000);
 
 
  }
  loadDoc();
 </script> --}}