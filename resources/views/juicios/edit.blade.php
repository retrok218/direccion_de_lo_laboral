<div class="modal fade" id="modal-juicio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
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
                                                    <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$nombreabogado}}"  >
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
                                               
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->noti_demanda}}"  >
                                                
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
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->presentacion_de_demanda}}" >
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
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->expediente}}" >
                                                                               
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
                                                
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->año_juicio}}" >
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
                                                
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->clasificacion_año}}" >
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
                                                
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->clasificacion_exp}}" >
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
                                            
                                                                                   
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->tipo}}" >
                                                                              
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
                                                
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->accion}}" >
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
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->nombre_completo}}" > 
                                              
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
                                                  
                                                  <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->adscripcion}}" > 
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
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->ur}}" > 
                                                  
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
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->denominacion}}" > 
                                                  
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
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->puesto}}" > 
                                                  
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
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->nivel}}" >
                                                  
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
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" ${{$juicio3[0]->salarioMen}}" >
                                                 
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
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->inicio_rellab}}" >
                                                  
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
                                                <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->terminacion_rellab}}" >
                                                  
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
                                    <h5 class="subcardtt"><i class="fa-sharp fa-solid fa-file-invoice" style="color: #8b1818;"></i> Expediente Personal R.H</h5>
                                    <div class="card-deck">                                                              
                                          <div class="col-sm-4">
                                            <div class="card">
                                              <div class="card-header juiciotext ">
                                                Solicitud
                                              </div>
                                              <div class="card-body">
                                                
                                                <p class="card-text">
                                                  <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->exp_personal_rh_solicitud}}" >
                                                    
                                                </p>                                    
                                              </div>
                                            </div>
                                          </div>
          
                                          <div class="col-sm-4">
                                            <div class="card">
                                              <div class="card-header juiciotext ">
                                                Devolucion
                                              </div>
                                              <div class="card-body">
                                                
                                                <p class="card-text">
                                                  <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->exp_personal_rh_devolucion}}" >
                                                    
                                                </p>                                    
                                              </div>
                                            </div>
                                          </div>
          
                                          <div class="col-sm-4">
                                            <div class="card">
                                              <div class="card-header juiciotext ">
                                                Fojas
                                              </div>
                                              <div class="card-body">
                                                
                                                <p class="card-text">
                                                  <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->fojas}}" >                                          
                                                </p>                                    
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                  </div>
                                                  
          
                                  <div class="row row-cols-1 row-cols-md-2">
                                    <h5 class="subcardtt"><i class="fa-sharp fa-solid fa-file-invoice" style="color: #8b1818;"></i> Expediente de Adscripcion</h5>
                                    <div class="card-deck">
                                        
                                          
                                          <div class="col-sm-6">
                                            <div class="card">
                                              <div class="card-header juiciotext ">
                                                Solicitud
                                              </div>
                                              
                                              <div class="card-body">
                                               
                                                <p class="card-text">
                                                  <input  class="form-control" type="text" id="abogados_asignados" value="{{$juicio3[0]->exp_adscripcion_solicitud}}" >                                          
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
                                                  <input  class="form-control" type="text" id="abogados_asignados"  value="{{$juicio3[0]->exp_adscripcion_devolucion}}" >                                          
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
          
                                          <div class="col-sm-4">
                                            <div class="card">
                                              <div class="card-header juiciotext ">
                                                Cierre de Instruccion:
                                              </div>
                                              <div class="card-body">                                      
                                                <p class="card-text">
                                                  <input  class="form-control" type="text" id="abogados_asignados"  value="{{$juicio3[0]->cierredeinstruccion}}" >                                          
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->lau_fecha}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->lau_fecha}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->lau_fecha}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->lau_fecha}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->lau_fecha}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->lau_fecha}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->parte}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->dir_indir}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->ad_dt}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->conceptode}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->aud_const2}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->fecha_sentencia}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->fecha_sentencia}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->recurso_amparo}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->parte_adherente}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->sentido_ad}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->fecha_ad}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->fechacumpreinstalacion}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->fecha_ad}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->r_h}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->vence}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->sentido}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->solicitadoarh}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->cantidad}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->folio}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->nodeintento}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->fechaproxima}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->cumplimiento}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->mesdegobconclusion}}"  >                                      
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
                                              <input  class="form-control" type="text" id="abogados_asignados" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->fecha_conclusion}}"  >                                      
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
                    <div class="modal-footer">
                      
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">
                          Cancelar
                      </button>             
                  </div>                  
                </form>
  {{-- fin de formulario para mostrar datos--}}
                
  
            </div>          
        </div>
    </div>
</div>