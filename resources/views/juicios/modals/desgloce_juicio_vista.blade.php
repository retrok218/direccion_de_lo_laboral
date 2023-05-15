<div class="modal fade" id="modal-juicio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
      <div class="modal-content">

        {{-- se cambia el color de fondo dependiendo de el tiempo restante para el juicio --}}
        @if ($diasrestantes > 1)  
          <div class="modal-header kt-portlet kt-iconbox--success kt-iconbox--animate-slow" style="padding: 0.25rem; margin-bottom: 0px;">
            @elseif($diasrestantes == 0 & $horfatantes == 0 & $minfaltantes == 0)
            <div class="modal-header kt-portlet kt-iconbox kt-iconbox--animate-slow" style="padding: 0.25rem; margin-bottom: 0px;">
            @else
            <div class="modal-header kt-portlet kt-iconbox--danger kt-iconbox--animate-slow" style="padding: 0.25rem; margin-bottom: 0px;">
        @endif
          
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              
                <div class="kt-portlet__head">  
                  <div class="modal-header">              
                    <h2 class="modal-title" id="myModalLabel">                    
                      <i class="fa-solid fa-gavel fa-bounce fa-xl"  style="color: #8b1818;"> </i>
                      Desglose Juicio : {{$juicio3[0]->id_juicio}}                                                                
                    </h2>                   
                  </div> 
                </div> 

                <div class="kt-subheader  kt-grid__item" id="kt_subheader"style="width: 100%;" >
                  <div class="kt-container  kt-container--fluid ">
                      <div class="kt-subheader__main">                                                    
                          <h3 class="kt-subheader__title">Fecha Proxima Audiencia</h3>
              
                          <span class="kt-subheader__separator kt-subheader__separator--v"></span>
              
                          <span class="kt-subheader__desc"> {{$fechaaudiencia}}</span>       
                      </div>
                      <div class="kt-subheader__toolbar">
                          <div class="kt-subheader__wrapper">
                            <span class="input-group-text btn kt-subheader__btn-secondary" id="basic-addon3">Faltan</span>                                      
                              <a  class="btn kt-subheader__btn-secondary">Dias: {{$diasrestantes}}</a>              
                              <a  class="btn kt-subheader__btn-secondary">Horas: {{$horfatantes}}</a>
                              <a  class="btn kt-subheader__btn-secondary">Minutos: {{$minfaltantes}}</a>                                                                                                                           
                          </div>
                      </div>
                  </div>
              </div>            
          </div>                          
          <div class="modal-body" id="modal_content">
              <form role="form" name="juiciodes" id="juiciodes" method="POST" action="javascript:void(0)">
                  <div class="panel panel-primary">
                      <div class="panel-body">
                        {{--inicio del acordion juicios --}}
                        <div class="accordion" id="acordionjuicio">

                          <div class="card">
                            <div class="card-header" id="datosjuicio">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#juicio" aria-expanded="false" aria-controls="juicio">
                                  <i class="fa-solid fa-book" style="color: #8b1818;"></i>- Datos Generales del Juicio
                                </button>
                              </h5>
                            </div>
                        
                            <div id="juicio" class="collapse " aria-labelledby="datosjuicio" data-parent="#acordionjuicio">
                              <div class="card-body">
                                <div class="row  row-cols-1 row-cols-md-3">                                                       
                                  <div class="card-deck"> 
                                  <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-body">
                        
                        
                                          <h6 class="card-title juiciotext juiciotext">  Abogados Asignados</h6>                                                                                                
                                              @foreach ($nombreabogados[0] as $nombreabogado)                                                                     
                                                  <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$nombreabogado}}" readonly >
                                              @endforeach	
                                                                              
                                        </div>
                                      </div>
                                    </div>
                        
                                    <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-header juiciotext ">
                                          Notificacion Demanda 
                                        </div>
                                        <div class="card-body">
                                          
                                          <p class="card-text">
                                             
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->noti_demanda}}" readonly >
                                              
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                        
                                    <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-header juiciotext ">
                                          Presentacion Demanda 
                                        </div>
                                        <div class="card-body">
                                         
                                          <p class="card-text" >                                        
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->presentacion_de_demanda}}" readonly>
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                        
                                    <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-header juiciotext ">
                                          Expediente 
                                        </div>
                                        <div class="card-body">                                                                                                               
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->expediente}}" readonly>
                                                                             
                                        </div>
                                      </div>
                                    </div>
                        
                                    <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-header juiciotext ">
                                          Año 
                                        </div>
                                        <div class="card-body">
                                          
                                          <p class="card-text">
                                              
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->año_juicio}}" readonly>
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                        
                                    <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-header juiciotext ">
                                          Clasificacion-Año  
                                        </div>
                                        <div class="card-body">
                                          
                                          <p class="card-text">
                                              
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->clasificacion_año}}" readonly>
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                        
                                    <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-header juiciotext ">
                                          Clasificacion-Exp 
                                        </div>
                                        <div class="card-body">
                                         
                                          <p class="card-text">
                                              
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->clasificacion_exp}}" readonly>
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                        
                                    <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-header juiciotext ">
                                          Tipo 
                                        </div>
                                        <div class="card-body">
                                          
                                                                                 
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->tipo}}" readonly>
                                                                            
                                        </div>
                                      </div>
                                    </div>
                        
                                    <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-header juiciotext ">
                                          Accion 
                                        </div>
                                        <div class="card-body">
                                          
                                          <p class="card-text">
                                              
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->accion}}" readonly>
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>                                                                                                                       
                                </div>
                              </div>
                              </div>
                            </div>
                          </div>
                          {{--inicio car actor--}}
                          <div class="card">                            
                            <div class="card-header" id="headingTwo">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  <i class="fa-solid fa-user" style="color: #8b1818;"></i> - Actor
                                </button>
                              </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#acordionjuicio">
                              <div class="card-body">
                                <div class="row row-cols-1 row-cols-md-3">
                                  <div class="card-deck">
                                    <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-header juiciotext ">
                                            Nombre Completo:
                                          </div>
                                          <div class="card-body">
                                            
                                            <p class="card-text">
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->nombre_completo}}" readonly> 
                                            
                                            </p>                                    
                                          </div>
                                        </div>
                                      </div>
        
                                      <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-header juiciotext ">
                                            Adscripcion :
                                          </div>
                                          <div class="card-body">
                                            
                                            <p class="card-text">
                                                
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->adscripcion}}" readonly> 
                                            </p>                                    
                                          </div>
                                        </div>
                                      </div>
        
                                      <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-header juiciotext ">
                                            UR  :
                                          </div>
                                          <div class="card-body">
                                           
                                            <p class="card-text">
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->ur}}" readonly> 
                                                
                                            </p>                                    
                                          </div>
                                        </div>
                                      </div>
                                      
                                      <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-header juiciotext ">
                                            Denominacion :
                                          </div>
                                          <div class="card-body">
                                            
                                            <p class="card-text">
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->denominacion}}" readonly> 
                                                
                                            </p>                                    
                                          </div>
                                        </div>
                                      </div>
        
                                      <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-header juiciotext ">
                                            Puesto
                                          </div>
                                          <div class="card-body">
                                            
                                            <p class="card-text">
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->puesto}}" readonly> 
                                                
                                            </p>                                    
                                          </div>
                                        </div>
                                      </div>
        
                                      <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-header juiciotext ">
                                            Nivel
                                          </div>
                                          <div class="card-body">
                                            
                                            <p class="card-text">
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->nivel}}" readonly>
                                                
                                            </p>                                    
                                          </div>
                                        </div>
                                      </div>
        
                                      <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-header juiciotext ">
                                            Salario Mensual :
                                          </div>
                                          <div class="card-body">
                                            
                                            <p class="card-text">
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" ${{$juicio3[0]->salarioMen}}" readonly>
                                               
                                            </p>                                    
                                          </div>
                                        </div>
                                      </div>
        
                                      <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-header juiciotext ">
                                            Inicio de la Relaicon Laboral :
                                          </div>
                                          <div class="card-body">
                                            
                                            <p class="card-text">
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->inicio_rellab}}" readonly>
                                                
                                            </p>                                    
                                          </div>
                                        </div>
                                      </div>
        
                                      <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-header juiciotext ">
                                            Terminacion de la Relacion Laboral :
                                          </div>
                                          <div class="card-body">
                                            
                                            <p class="card-text">
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->terminacion_rellab}}" readonly>
                                                
                                            </p>                                    
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          {{--fin car actor--}}                          
                          {{--Inicio card  Tramite--}}
                          <div class="card">

                            <div class="card-header" id="stramite">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#tramite" aria-expanded="false" aria-controls="tramite">
                                  <i class="fa-sharp fa-solid fa-file-invoice" style="color: #8b1818;"></i> - Tramite
                                </button>
                              </h5>
                            </div>

                            <div id="tramite" class="collapse" aria-labelledby="stramite" data-parent="#acordionjuicio">

                              <div class="card-body">

                                <div class="row row-cols-1 row-cols-md-3">
                                  <div class="col-lg-12">
                                     <h5 class="subcardtt"><i class="fa-sharp fa-solid fa-file-invoice" style="color: #8b1818;"></i> Expediente Personal R.H</h5>
                                  </div>
                                 
                                   
                                    



                                        <div class="col-lg-4">
                                          <div class="card">
                                            <div class="card-header juiciotext ">
                                              Solicitud
                                            </div>
                                            <div class="card-body">
                                              
                                              <p class="card-text">
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->exp_personal_rh_solicitud}}" readonly>                                                  
                                              </p>                                    
                                            </div>
                                          </div>
                                        </div>
        
                                        <div class="col-lg-4">
                                          <div class="card">
                                            <div class="card-header juiciotext ">
                                              Devolucion
                                            </div>
                                            <div class="card-body">
                                              
                                              <p class="card-text">
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->exp_personal_rh_devolucion}}" readonly>
                                                  
                                              </p>                                    
                                            </div>
                                          </div>
                                        </div>
        
                                        <div class="col-lg-4">
                                          <div class="card">
                                            <div class="card-header juiciotext ">
                                              Fojas
                                            </div>
                                            <div class="card-body">
                                              
                                              <p class="card-text">
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->fojas}}" readonly>                                          
                                              </p>                                    
                                            </div>
                                          </div>
                                        </div>

                                </div>
                                                
        
                                <div class="row row-cols-1 row-cols-md-3">
                                  <div class="col-lg-12">
                                   <h5 class="subcardtt"><i class="fa-sharp fa-solid fa-file-invoice" style="color: #8b1818;"></i> Expediente de Adscripcion</h5>
                                  </div>


                                  <div class="row">

                                        <div class="col-sm-6">
                                          <div class="card">
                                            <div class="card-header juiciotext ">
                                              Solicitud
                                            </div>                                            
                                            <div class="card-body">                                             
                                              <p class="card-text">
                                                <input  class="form-control" type="text" id="abogados_asignados" value="{{$juicio3[0]->exp_adscripcion_solicitud}}" readonly>                                          
                                              </p>                                    
                                            </div>
                                          </div>
                                        </div>
        
                                        <div class="col-sm-6">
                                          <div class="card">
                                            <div class="card-header juiciotext ">
                                              Devolucion
                                            </div>
                                            <div class="card-body">
                                              
                                              <p class="card-text">
                                                <input  class="form-control" type="text" id="abogados_asignados"  value="{{$juicio3[0]->exp_adscripcion_devolucion}}" readonly>                                          
                                              </p>                                    
                                            </div>
                                          </div>
                                        </div> 
                                        
                                        <div class="col-sm-4">
                                          <div class="card">
                                            <div class="card-header juiciotext ">
                                              Cierre de Instruccion:
                                            </div>
                                            <div class="card-body">                                      
                                              <p class="card-text">
                                                <input  class="form-control" type="text" id="abogados_asignados"  value="{{$juicio3[0]->cierredeinstruccion}}" readonly>                                          
                                              </p>                                    
                                            </div>
                                          </div>
                                        </div>  

                                  </div>
                                </div>

                                <div class="row row-cols-1 row-cols-md-3">                          
                                  <div class="card-deck"> 

                                        <div class="col-sm-12">
                                          <div class="card">
                                            <div class="card-header juiciotext ">
                                              Descripcion
                                            </div>
                                            <div class="card-body">
                                             
                                              <p class="card-text">                                         
                                                <div class="overflow-auto p-5 mb-4 mb-md-0 mr-md-5 bg-light form-control" style="max-width: 100%; max-height: 100px;">
                                                  {{$juicio3[0]->descripcion}}
                                                </div>                                         
                                              </p>                                                                         
                                            </div>
                                          </div>
                                          
                                                
                                        </div>
        
                                                                                                                                   
                                  </div>
                                </div>


                              </div>
                            </div>
                          </div>





                          {{--fin card  Tramite--}}

                          {{--inicio card Laudo --}}
                          <div class="card">
                            <div class="card-header" id="laudos">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#laudo" aria-expanded="false" aria-controls="laudo">
                                  <i class="fa-sharp fa-solid fa-file-invoice" style="color: #8b1818;"></i> - Laudo
                                </button>
                              </h5>
                            </div>
                            <div id="laudo" class="collapse" aria-labelledby="laudos" data-parent="#acordionjuicio">
                              <div class="card-body">
                                <div class="row row-cols-1 row-cols-md-3">
                                  <div class="card-deck">        
                                    <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Fecha
                                        </div>
                                        <div class="card-body">                                  
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->lau_fecha}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>        
                                    <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Sentido
                                        </div>
                                        <div class="card-body">                                  
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->lau_sentido}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>                                    
                                    <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Reinstalacion
                                        </div>
                                        <div class="card-body">                                  
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->reinstalacion}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>        
                                    <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Indemnización
                                        </div>
                                        <div class="card-body">                                 
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->indemnizacion}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>        
                                    <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Pasivo Total
                                        </div>
                                        <div class="card-body">                                 
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->pasivo_total}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>        
                                    <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Notificacion
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->f_notificacion_laudo}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>                                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          {{--fin card Laudo --}}

                          {{-- card amparo--}}
                          <div class="card">
                            <div class="card-header" id="amparos">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#amparo" aria-expanded="false" aria-controls="amparo">
                                  <i class="fa-sharp fa-solid fa-file-invoice" style="color: #8b1818;"></i> - Amparo
                                </button>
                              </h5>
                            </div>
                            <div id="amparo" class="collapse" aria-labelledby="amparos" data-parent="#acordionjuicio">
                              <div class="card-body">
                                <div class="row ">                                         
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Parte
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->parte}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Directo O Indirecto
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->dir_indir}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
        
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                         Ad o Dt
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->ad_dt}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
        
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                         Concepto De
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->conceptode}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                         Aud.Const.2
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->aud_const2}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
        
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                         Fecha Sentecia 
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->fecha_sentencia}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Sentido Sentecia
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->sentido_sentencia}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
        
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Recurso
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->recurso_amparo}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
        
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Parte Adherente
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->parte_adherente}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Sentido AD
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->sentido_ad}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
        
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Fecha AD
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->fecha_ad}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>                                                                              
                              </div>
                            </div>
                          </div>
                          {{--fincard amparo--}}
                          {{--card ejecucion--}}
                          <div class="card">
                            <div class="card-header" id="headingThree">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#ejecucion" aria-expanded="false" aria-controls="collapseThree">
                                  <i class="fa-sharp fa-solid fa-file-invoice" style="color: #8b1818;"></i> - Ejecucion
                                </button>
                              </h5>
                            </div>
                            <div id="ejecucion" class="collapse" aria-labelledby="headingThree" data-parent="#acordionjuicio">
                              <div class="card-body">
                                <div class="row row-cols-1 row-cols-md-3">
                                  <div class="card-deck">
        
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Fecha Cump Reinstalacion
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->fechacumpreinstalacion}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Notif.2
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->notf2}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          R.H
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->r_h}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Vence
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->vence}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Sentido
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->sentido}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Solicitado a R.H
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->solicitadoarh}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Cantidad
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->cantidad}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Folio
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->folio}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          No.De Intento
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->nodeintento}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Fecha Prox.
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->fechaproxima}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Cumplimiento
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->cumplimiento}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>                            
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          {{--fin card ejecucion --}}
                          {{--card conclusion--}}
                          <div class="card">
                            <div class="card-header" id="conclusions">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#conclusion" aria-expanded="false" aria-controls="conclusion">
                                  <i class="fa-sharp fa-solid fa-file-invoice" style="color: #8b1818;"></i> - Conclusion
                                </button>
                              </h5>
                            </div>
                            <div id="conclusion" class="collapse" aria-labelledby="conclusions" data-parent="#acordionjuicio">
                              <div class="card-body">
                                <div class="row row-cols-1 row-cols-md-3">
                                  <div class="card-deck">
                                    <div class="col-lg-6">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Mes Para Segob De Conclusion
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->mesdegobconclusion}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
        
                                    <div class="col-lg-6">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Fecha de Conclusion TFCA
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{ $juicio3[0]->fecha_conclusion }}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          {{-- fin conclusion card--}}

                        </div>                         
                      </div>
                  </div>                                   
              </form>
{{-- fin de formulario para mostrar datos--}}
          <hr class="separador">                
              @include('juicios.form_comentario')
<hr class="separador">
     
    
      <form action="{{url('/juicios_upload/'.$juicio3[0]->id_juicio)}}" method="POST" enctype="multipart/form-data">
            @csrf 
          <input type="file" id="archivo" class='fansi_file' name="archivo">
          <label for="archivo">
            <span class='fansi_file_name'>
              <span id="docn">  Ningun archivo Seleccionado</span>     
            </span>
            <span class='fansi_file_button'> <i class="fa fa-file-alt "></i> - Buscar Archivo</span>      
          </label>
          <div class="kt-section">
            <div class="kt-section__info">Seleccione donde se guardara el PDF</div>
            <div class="kt-section__content kt-section__content--solid">                          
              <button type="submit" class="btn btn-outline-brand btn-elevate btn-pill" name="asubir" value="demandaupload"><i class="fa fa-upload"></i> Subir archivo Demanda</button>
              <button type="submit" class="btn btn-outline-brand btn-elevate btn-pill" name="asubir" value="contratacionupload"><i class="fa fa-upload"></i> Subir archivo Contratacion</button>
              <button type="submit" class="btn btn-outline-brand btn-elevate btn-pill" name="asubir" value="laudoupload"><i class="fa fa-upload"></i> Subir archivo Laudo</button>
          </div>
          </div>
    </form>
    
    
    <i class="fa fa-download"></i>
    @isset($juicio3[0]->archivo2)
      <a href="{{url('/juicio_dowload/'.$juicio3[0]->archivo2)}}"> {{$juicio3[0]->archivo2}}</a>
      <a class="close_archivo" href="{{url('/juicio_delete_archivo/'.'archivo2'.'/'.$juicio3[0]->id_juicio.'/'.$juicio3[0]->archivo2)}}" value="archivo2" >       
        <i class="fa fa-times-circle"></i>
      </a>                
    @else
    Sin archivo para descarga Laudo
    @endisset
    <br>
    <i class="fa fa-download"></i>
  @isset($juicio3[0]->archivo1)
    <a href="{{url('/juicio_dowload/'.$juicio3[0]->archivo1)}}"> {{$juicio3[0]->archivo1}}</a> 
    <a class="close_archivo"href="{{url('/juicio_delete_archivo/'.'archivo1'.'/'.$juicio3[0]->id_juicio.'/'.$juicio3[0]->archivo1)}}" >
      <i class="fa fa-times-circle"></i>
   </a>             
  @else
  
  Sin archivo para descarga Contratacion
  @endisset
  <br>
  <i class="fa fa-download"></i>
  @isset($juicio3[0]->archivo)                
            <a href="{{url('/juicio_dowload/'.$juicio3[0]->archivo)}}"> {{$juicio3[0]->archivo}}</a>
            <a class="close_archivo"href="{{url('/juicio_delete_archivo/'.'archivo'.'/'.$juicio3[0]->id_juicio.'/'.$juicio3[0]->archivo)}}" >
              <i class="fa fa-times-circle"></i>
            </a>  
            @else
            Sin archivo para descarga Demanda
  @endisset

  
  


          </div>          
      </div>
  </div>

  