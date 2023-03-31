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
            </div>              
          </div>          
          <div class="modal-body" id="modal_content">
              <form role="form" name="frm_nueva_regla" id="frm_nueva_regla" method="POST" action="javascript:void(0)">
                  <div class="panel panel-primary">
                      <div class="panel-body">
                          <div class="row">                            
                            {{-- <div class="kt-iconbox__icon">
                                <i class="fa-sharp fa-solid fa-people-group " style="color: #8b1818;"></i>	
                                Abogados Asignados: @foreach ($nombreabogados[0] as $nombreabogado)                        
                                {{$nombreabogado}}/ 
                                @endforeach			
                            </div>
                            <div class="kt-iconbox__icon">
                                <i class="fa-solid fa-user" style="color: #8b1818;"></i>
                                Actor:{{$juicio3[0]->nombre_completo}}                                         
                            </div> --}}
                            <div class="col-sm-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title">Abogados Asignados:</h5>
                                    <p class="card-text">
                                        @foreach ($nombreabogados[0] as $nombreabogado)                        
                                            {{$nombreabogado}}/ 
                                        @endforeach	
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title">Notificacion Demanda :</h5>
                                    <p class="card-text">
                                        {{$juicio3[0]->noti_demanda}}
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title">Presentacion Demanda :</h5>
                                    <p class="card-text" >
                                        {{$juicio3[0]->presentacion_de_demanda}}
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title">Expediente :</h5>
                                    <p class="card-text">
                                        {{$juicio3[0]->expediente}}
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title"> Año :</h5>
                                    <p class="card-text">
                                        {{$juicio3[0]->año_juicio}}
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title">Clasificacion-Año  :</h5>
                                    <p class="card-text">
                                        {{$juicio3[0]->clasificacion_año}}
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title"> Clasificacion-Exp :</h5>
                                    <p class="card-text">
                                        {{$juicio3[0]->clasificacion_exp}}
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title"> Tipo :</h5>
                                    <p class="card-text">
                                        {{$juicio3[0]->tipo}}
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title"> Accion :</h5>
                                    <p class="card-text">
                                        {{$juicio3[0]->accion}}
                                    </p>                                    
                                  </div>
                                </div>
                              </div>                                                                                                                       
                          </div>
                          <hr>

                          <h4><i class="fa-solid fa-user" style="color: #8b1818;"></i> Actor</h4>  
                          <div class="row">

                            <div class="col-sm-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title">Nombre Completo:</h5>
                                    <p class="card-text">
                                     {{$juicio3[0]->nombre_completo}}
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title"> Adscripcion :</h5>
                                    <p class="card-text">
                                        {{$juicio3[0]->adscripcion}}
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title">UR  :</h5>
                                    <p class="card-text">
                                        {{$juicio3[0]->ur}}
                                    </p>                                    
                                  </div>
                                </div>
                              </div>
                              
                              <div class="col-sm-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title"> Denominacion :</h5>
                                    <p class="card-text">
                                        {{$juicio3[0]->denominacion}}
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title"> Puesto :</h5>
                                    <p class="card-text">
                                        {{$juicio3[0]->puesto}}
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title"> Nivel :</h5>
                                    <p class="card-text">
                                        {{$juicio3[0]->nivel}}
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title"> Slario Mensual :</h5>
                                    <p class="card-text">
                                       ${{$juicio3[0]->salarioMen}}
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title"> Inicio de la Relaicon Laboral :</h5>
                                    <p class="card-text">
                                        {{$juicio3[0]->inicio_rellab}}
                                    </p>                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title"> Terminacion de la Relacion Laboral :</h5>
                                    <p class="card-text">
                                        {{$juicio3[0]->terminacion_rellab}}
                                    </p>                                    
                                  </div>
                                </div>
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
