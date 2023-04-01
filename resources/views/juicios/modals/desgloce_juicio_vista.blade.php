<div class="modal fade" id="modal-juicio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
      <div class="modal-content">

          <div class="modal-header kt-portlet kt-iconbox kt-iconbox--animate-slow">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>

            <div class="kt-portlet__body">                
                <h3 class="modal-title" id="myModalLabel">
                    <div class="kt-iconbox__icon">
                         <i class="fa-solid fa-gavel fa-bounce fa-xl"  style="color: #8b1818;"> </i>
                        Desgloce Juicio: {{$juicio3[0]->id_juicio}}                        
                    </div>                    
                </h3> 
                <h4></h4>                               
            </div>              
          </div>          
          <div class="modal-body" id="modal_content">
              <form role="form" name="frm_nueva_regla" id="frm_nueva_regla" method="POST" action="javascript:void(0)">
                  <div class="panel panel-primary">
                      <div class="panel-body">
                        <h4><i class="fa-solid fa-book" style="color: #8b1818;"></i> - Datos Generales del Juicio</h4>
                          <div class="row  row-cols-1 row-cols-md-3">                                                       
                            <div class="card-deck"> 
                            <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">


                                    <h6 class="card-title juiciotext juiciotext">  Abogados Asignados:</h6>                                                                                                
                                        @foreach ($nombreabogados[0] as $nombreabogado)                                                                     
                                            <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$nombreabogado}}" readonly >
                                        @endforeach	
                                                                        
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                    <h6 class="card-title juiciotext juiciotext">Notificacion Demanda :</h6>
                                    <p class="card-text">
                                       
                                        <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->noti_demanda}}" readonly >
                                        
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                    <h6 class="card-title juiciotext juiciotext">Presentacion Demanda :</h6>
                                    <p class="card-text" >                                        
                                        <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->presentacion_de_demanda}}" readonly>
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                    <h6 class="card-title juiciotext ">Expediente :</h6>
                                    
                                        
                                        <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->expediente}}" readonly>
                                                                       
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                    <h6 class="card-title juiciotext "> Año :</h6>
                                    <p class="card-text">
                                        
                                        <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->año_juicio}}" readonly>
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                    <h6 class="card-title juiciotext">Clasificacion-Año  :</h6>
                                    <p class="card-text">
                                        
                                        <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->clasificacion_año}}" readonly>
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                    <h6 class="card-title juiciotext"> Clasificacion-Exp :</h6>
                                    <p class="card-text">
                                        
                                        <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->clasificacion_exp}}" readonly>
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                    <h6 class="card-title juiciotext"> Tipo :</h6>
                                                                           
                                        <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->tipo}}" readonly>
                                                                      
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                    <h6 class="card-title juiciotext"> Accion :</h6>
                                    <p class="card-text">
                                        
                                        <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->accion}}" readonly>
                                    </p>                                    
                                  </div>
                                </div>
                              </div>                                                                                                                       
                          </div>
                        </div>

                        <hr>                                                
                        <h4><i class="fa-solid fa-user" style="color: #8b1818;"></i> - Actor</h4>

                        <div class="row row-cols-1 row-cols-md-3">
                          <div class="card-deck">
                            <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                    <h6 class="card-title juiciotext">Nombre Completo:</h6>
                                    <p class="card-text">
                                      <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->nombre_completo}}" readonly> 
                                    
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                    <h6 class="card-title juiciotext"> Adscripcion :</h6>
                                    <p class="card-text">
                                        
                                        <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->adscripcion}}" readonly> 
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                    <h6 class="card-title juiciotext">UR  :</h6>
                                    <p class="card-text">
                                      <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->ur}}" readonly> 
                                        
                                    </p>                                    
                                  </div>
                                </div>
                              </div>
                              
                              <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                    <h6 class="card-title juiciotext"> Denominacion :</h6>
                                    <p class="card-text">
                                      <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->denominacion}}" readonly> 
                                        
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                    <h6 class="card-title juiciotext"> Puesto :</h6>
                                    <p class="card-text">
                                      <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->puesto}}" readonly> 
                                        
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                    <h6 class="card-title juiciotext"> Nivel :</h6>
                                    <p class="card-text">
                                      <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->nivel}}" readonly>
                                        
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                    <h6 class="card-title juiciotext"> Slario Mensual :</h6>
                                    <p class="card-text">
                                      <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" ${{$juicio3[0]->salarioMen}}" readonly>
                                       
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                    <h6 class="card-title juiciotext"> Inicio de la Relaicon Laboral :</h6>
                                    <p class="card-text">
                                      <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->inicio_rellab}}" readonly>
                                        
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                    <h6 class="card-title juiciotext"> Terminacion de la Relacion Laboral :</h6>
                                    <p class="card-text">
                                      <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->terminacion_rellab}}" readonly>
                                        
                                    </p>                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <hr>                                                
                        <h4><i class="fa-solid fa-user" style="color: #8b1818;"></i> - Tramite</h4>
                        <div class="row row-cols-1 row-cols-md-3">
                          <div class="card-deck">
                              <h5><i class="fa-solid fa-user" style="color: #188b44;"></i> Expediente Personal R.H</h5>
                                
                                <div class="col-sm-4">
                                  <div class="card">
                                    <div class="card-body">
                                      <h6 class="card-title juiciotext"> Solicitud:</h6>
                                      <p class="card-text">
                                        <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->exp_personal_rh_solicitud}}" readonly>
                                          
                                      </p>                                    
                                    </div>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="card">
                                    <div class="card-body">
                                      <h6 class="card-title juiciotext"> Devolucion:</h6>
                                      <p class="card-text">
                                        <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->exp_personal_rh_devolucion}}" readonly>
                                          
                                      </p>                                    
                                    </div>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="card">
                                    <div class="card-body">
                                      <h6 class="card-title juiciotext"> Fojas:</h6>
                                      <p class="card-text">
                                        <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->fojas}}" readonly>
                                          
                                      </p>                                    
                                    </div>
                                  </div>
                                </div>



                          </div>
                        </div>

                        

                        

                        <hr>                                                
                        <h4><i class="fa-solid fa-user" style="color: #8b1818;"></i> - Laudo</h4>
                        <div class="row row-cols-1 row-cols-md-3">
                          <div class="card-deck">

                          </div>
                        </div>

                        <hr>                                                
                        <h4><i class="fa-solid fa-user" style="color: #8b1818;"></i> - Amparo</h4>
                        <div class="row row-cols-1 row-cols-md-3">
                          <div class="card-deck">

                          </div>
                        </div>

                        <hr>                                                
                        <h4><i class="fa-solid fa-user" style="color: #8b1818;"></i> - Ejecucion</h4>
                        <div class="row row-cols-1 row-cols-md-3">
                          <div class="card-deck">

                          </div>
                        </div>

                        <hr>                                                
                        <h4><i class="fa-solid fa-user" style="color: #8b1818;"></i> - Conclusion</h4>
                        <div class="row row-cols-1 row-cols-md-3">
                          <div class="card-deck">

                          </div>
                        </div>

                        <hr>                                                
                        <h4><i class="fa-solid fa-user" style="color: #8b1818;"></i> - Comentario</h4>
                        <div class="row row-cols-1 row-cols-md-3">
                          <div class="card-deck">

                          </div>
                        </div>




                      </div>
                  </div>
                  
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Cancelar
                    </button>             
                </div>
          </div>
          
      </div>
  </div>
