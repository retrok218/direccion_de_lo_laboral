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
                      Juicio: {{$juicio3[0]->id_juicio}}                                                                
                    </h2>
                                                            
                  </div>                                                                    
                </div> 
                <div style="position: absolute;top: 20%;left: 80%;" >                                     
                    <span>Etapa :</span><h3 id="etappa">{{$juicio3[0]->etapa}}</h3>                                                                                                                              
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
                            <span class="input-group-text btn kt-subheader__btn-secondary" id="basic-addon3">Dias: {{$diasrestantes}}</span>     
                            <span class="input-group-text btn kt-subheader__btn-secondary" id="basic-addon3">Horas: {{$horfatantes}}</span>
                            <span class="input-group-text btn kt-subheader__btn-secondary" id="basic-addon3">Minutos: {{$minfaltantes}}</span>
                                                                                                                                                        
                          </div>
                      </div>
                  </div>
              </div>            
          </div>                          
          <div class="modal-body" id="modal_content">
             
                  <div class="panel panel-primary">
                      <div class="panel-body">
                        {{--inicio del acordion juicios --}}
                        <div class="accordion" id="acordionjuicio">

                          <div  class="card"  >
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
                        
                        
                                          <h6 class="card-title juiciotext juiciotext">Abogados Asignados:</h6>                                                                                                
                                              @foreach ($nombreabogados[0] as $nombreabogado)                                                                     
                                                  <input  class="form-control" type="text" id="" placeholder="Seleccione la Sala" value="{{$nombreabogado}}" readonly >
                                              @endforeach	
                                                                              
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-body">                                                
                                          <h6 class="card-title juiciotext juiciotext">Sala/JTA:</h6>                                                                                                                                                                                                              
                                                  <input  class="form-control" type="text" id="" placeholder="Seleccione la Sala" value="{{$nombreabogados[2]}}" readonly >                                                                                                                         
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
                                             
                                              <input  class="form-control" type="text" id="noti_demanda" placeholder="Seleccione la Sala" value="{{$juicio3[0]->noti_demanda}}" readonly >
                                              
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
                                              <input  class="form-control" type="text" id="presentacion_de_demanda" placeholder="Seleccione la Sala" value="{{$juicio3[0]->presentacion_de_demanda}}" readonly>
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
                                              <input  class="form-control" type="text" id="expediente" placeholder="Seleccione la Sala" value="{{$juicio3[0]->expediente}}" readonly>
                                                                             
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
                                              
                                              <input  class="form-control" type="text" id="año_juicio" placeholder="Seleccione la Sala" value="{{$juicio3[0]->año_juicio}}" readonly>
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
                                              
                                              <input  class="form-control" type="text" id="clasificacion_año" placeholder="Seleccione la Sala" value="{{$juicio3[0]->clasificacion_año}}" readonly>
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
                                              
                                              <input  class="form-control" type="text" id="clasificacion_exp" placeholder="Seleccione la Sala" value="{{$juicio3[0]->clasificacion_exp}}" readonly>
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
                                          
                                                                                 
                                              <input  class="form-control" type="text" id="tipo" placeholder="Seleccione la Sala" value="{{$juicio3[0]->tipo}}" readonly>
                                                                            
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
                                              
                                              <input  class="form-control" type="text" id="accion" placeholder="Seleccione la Sala" value="{{$juicio3[0]->accion}}" readonly>
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
                                  <i class="fa-solid fa-user" style="color: #8b1818;"></i> - Datos De La Ralacion Laboral
                                </button>
                              </h5>
                            </div>

                            
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#acordionjuicio">
                              <div class="card-body">

                                

                                <div class="kt-portlet__body">
                                  <div class="form-group row form-group-marginless">
                                      <label class="col-lg-2 col-form-label juiciotext ">Datos Actor:</label>
                                      <div class="col-lg-10">
                                          <div class="row">

                                              <div class="col-lg-4">
                                                  <label class="kt-option">                                                                
                                                  <span class="kt-option__label">
                                                      <span class="kt-option__head">
                                                          <span class="kt-option__title juiciotext">
                                                          Nombre Completo 				
                                                          </span>                                                                												 
                                                      </span>
                                                      <span class="kt-option__body">
                                                          <input type="text" class="form-control" id="nombre_completo"
                                                          value="{{ $juicio3[0]->nombre_completo}}"
                                                          name="nombre_completo" readonly>
                                                      </span>
                                                  </span>		
                                                  </label> 
                                              </div>
                                              <div class="col-lg-4">
                                                  <label class="kt-option">                                                                
                                                  <span class="kt-option__label">
                                                      <span class="kt-option__head">
                                                          <span class="kt-option__title juiciotext">
                                                          Adscripcion : 				
                                                          </span>                                                                												 
                                                      </span>
                                                      <span class="kt-option__body">
                                                          <input type="text" class="form-control"
                                                              id="exp_personal_rh_devolucion"
                                                              value="{{ $juicio3[0]->adscripcion }}"
                                                              name="exp_personal_rh_devolucion" readonly>
                                                      </span>
                                                  </span>		
                                                  </label> 
                                              </div>
                                              <div class="col-lg-4">
                                                  <label class="kt-option">                                                                
                                                  <span class="kt-option__label">
                                                      <span class="kt-option__head">
                                                          <span class="kt-option__title juiciotext">
                                                            UR  :				
                                                          </span>                                                                												 
                                                      </span>
                                                      <span class="kt-option__body">
                                                        <input  class="form-control" type="text" id="ur" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->ur}}" readonly> 
                                                      </span>
                                                  </span>		
                                                  </label> 
                                              </div>  
                                              <div class="col-lg-4">
                                                <label class="kt-option">                                                                
                                                <span class="kt-option__label">
                                                    <span class="kt-option__head">
                                                        <span class="kt-option__title juiciotext">
                                                          Denominacion :				
                                                        </span>                                                                												 
                                                    </span>
                                                    <span class="kt-option__body">
                                                      <input  class="form-control" type="text" id="denominacion" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->denominacion}}" readonly> 
                                                    </span>
                                                </span>		
                                                </label> 
                                            </div> 
                                            <div class="col-lg-4">
                                              <label class="kt-option">                                                                
                                              <span class="kt-option__label">
                                                  <span class="kt-option__head">
                                                      <span class="kt-option__title juiciotext">
                                                        Puesto :				
                                                      </span>                                                                												 
                                                  </span>
                                                  <span class="kt-option__body">
                                                    <input  class="form-control" type="text" id="puesto" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->puesto}}" readonly> 
                                                  </span>
                                              </span>		
                                              </label> 
                                          </div>
                                          
                                          <div class="col-lg-4">
                                            <label class="kt-option">                                                                
                                            <span class="kt-option__label">
                                                <span class="kt-option__head">
                                                    <span class="kt-option__title juiciotext">
                                                      Nivel :				
                                                    </span>                                                                												 
                                                </span>
                                                <span class="kt-option__body">
                                                  <input  class="form-control" type="text" id="nivel" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->nivel}}" readonly> 
                                                </span>
                                            </span>		
                                            </label> 
                                        </div>

                                        <div class="col-lg-4">
                                          <label class="kt-option">                                                                
                                          <span class="kt-option__label">
                                              <span class="kt-option__head">
                                                  <span class="kt-option__title juiciotext">
                                                    Inicio de la Relacion Laboral  :				
                                                  </span>                                                                												 
                                              </span>
                                              <span class="kt-option__body">
                                                <input  class="form-control" type="text" id="inicio_rellab" placeholder="Sin Fecha" 
                                                    @if ($juicio3[0]->inicio_rellab == null)
                                                        value="Sin Fecha Asignada "
                                                    @else
                                                    value=" {{$juicio3[0]->inicio_rellab}}" readonly
                                                    @endif
                                                 > 
                                                
                                              </span>
                                          </span>		
                                          </label> 
                                      </div>
                                      <div class="col-lg-4">
                                        <label class="kt-option">                                                                
                                        <span class="kt-option__label">
                                            <span class="kt-option__head">
                                                <span class="kt-option__title juiciotext">
                                                  Terminacion de la Relacion Laboral  :				
                                                </span>                                                                												 
                                            </span>
                                            <span class="kt-option__body">
                                              <input  class="form-control" type="text" id="terminacion_rellab" placeholder="Seleccione la Sala" 
                                              @if ($juicio3[0]->terminacion_rellab == null)
                                                value="Sin Fecha Asignada "
                                              @else
                                                value=" {{$juicio3[0]->terminacion_rellab}}" readonly
                                              @endif                                                                                             
                                              readonly> 
                                            </span>
                                        </span>		
                                        </label> 
                                    </div>
                                    </div>
                                      </div>
                                  </div>

                                  
                                  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>

                                  <div class="form-group row form-group-marginless">
                                    <label class="col-lg-2 col-form-label juiciotext ">Informacion :</label>
                                    <div class="col-lg-10">                                      
                                        <div class="row">                                        
                                          @foreach ($informacionauto as $key=>$Info) 
                                            <div class="col-lg-4">
                                              <label class="kt-option">                                                                
                                                <span class="kt-option__label">
                                                    <span class="kt-option__head">
                                                        <span class="kt-option__title juiciotext">
                                                          {{$key}} :				
                                                        </span>                                                                												 
                                                    </span>
                                                    <div class="input-group">                                                  
                                                      <input  class="form-control" type="text" id="" placeholder="Salario no Ingresado" value="{{$Info}}" readonly>
                                                    </div>
                                                </span>		
                                              </label> 
                                            </div>                                              
                                          @endforeach                                                                                                                                                                                                                                        
                                        </div>
                                    </div>
                                </div>                                                                    
                                  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                  <div class="form-group row form-group-marginless">
                                    <label class="col-lg-2 col-form-label juiciotext ">Pasivo Laboral :</label>
                                    <div class="col-lg-10">                                      
                                        <div class="row">
                                          <div class="col-lg-4">
                                            <label class="kt-option">                                                                
                                            <span class="kt-option__label">
                                                <span class="kt-option__head">
                                                    <span class="kt-option__title juiciotext">
                                                      Salario Mensual:				
                                                    </span>                                                                												 
                                                </span>
                                                <div class="input-group">
                                                  <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                  <input  class="form-control" type="text" id="salarioMen" placeholder="Salario no Ingresado" value="{{$juicio3[0]->salarioMen}}" readonly>
                                                </div>
                                            </span>		
                                            </label> 
                                        </div>   


                                          <div class="col-lg-4">
                                          <label class="kt-option">                                                                
                                          <span class="kt-option__label">
                                              <span class="kt-option__head">
                                                  <span class="kt-option__title juiciotext">
                                                    Salario Quincenal:				
                                                  </span>                                                                												 
                                              </span>
                                              <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                <input  class="form-control" type="text" id="Quincenal" placeholder="Salario no Ingresado" value="{{$sueldo['Quincenal']}}" readonly>
                                              </div>
                                          </span>		
                                          </label> 
                                      </div> 

                                      <div class="col-lg-4">
                                        <label class="kt-option">                                                                
                                        <span class="kt-option__label">
                                            <span class="kt-option__head">
                                                <span class="kt-option__title juiciotext">
                                                  Salario Diario:				
                                                </span>                                                                												 
                                            </span>
                                            <div class="input-group">
                                              <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                              <input  class="form-control" type="text" id="Diario" placeholder="Salario no Ingresado" value="{{$sueldo['Diario']}}" readonly>
                                            </div>
                                        </span>		
                                        </label> 
                                    </div>                                                                  
                                        </div>

                                        <div class="row" >

                                          <div class="col-lg-12" id="cocodi">
                                            <span class="kt-option__head">
                                               
                                              <span class="kt-option__title juiciotext">                                                    
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" style="color: black" >
                                                    COCODI : $  
                                                    <span id="cocodi_value">{{$juicio3[0]->cocodi_suma}}</span>
                                                  </span>
                                                </div>  		
                                              </span>                                                                												 
                                            </span>
                                          </div>
                                          
                                          <div class="col-lg-12" >
                                            <label class="kt-option">                                                                
                                            <span class="kt-option__label">                                                                                           
                                              <form action="{{url('/juicios_coco/'.$juicio3[0]->id_juicio)}}" method="POST" id="guardarcocodi">  
                                                @csrf                                                   
                                                  <div class="input-group mb-3">
                                                    <div class="input-group-prepend">                                                  
                                                      <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input"  id="empezar_cocodi" name="cheket_coco" >
                                                      </div>
                                                      <span class="input-group-text">$</span>
                                                    </div>
                                                    <input  name="cocodi_suma" value='0' type="text" class="form-control" aria-label="Text input with checkbox"  id="n_cocodi" readonly >
                                                    <div class="input-group-append">
                                                      <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Guardar / Actualizar Cocodi</button>
                                                    </div>
                                                  </div>
                                              </form>
                                                                                          

                                              <hr width="100%" style="border-color: black">                                               
                                                <div class="input-group " >
                                                  <div class="col-lg-12">
                                                    <span class="kt-option__title juiciotext">
                                                      Prestaciones Legales:	$
                                                      <span id="prestaciones_legales">{{ number_format($sueldo['sumaprestacioneslegales'],2,'.',',') }}</span>
                                                    </span>
                                                  </div>   

                                                  <div class="col-lg-4">                                                    
                                                    <label class="kt-option">                                                                
                                                    <span class="kt-option__label">

                                                                                                            
                                                        <span class="kt-option__head">
                                                            <span class="kt-option__title juiciotext">
                                                              Aguinaldo:			
                                                            </span>                                                                												 
                                                        </span>
                                                        <div class="input-group">
                                                          <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                          <input  class="form-control" type="text" id="Aginaldo" placeholder="Salario no Ingresado" value="{{$sueldo['Aginaldo']}}" readonly>
                                                        </div>
                                                    </span>		
                                                    </label> 
                                                  </div>
                                                  <div class="col-lg-4">
                                                    <label class="kt-option">                                                                
                                                    <span class="kt-option__label">
                                                        <span class="kt-option__head">
                                                            <span class="kt-option__title juiciotext">
                                                              Vacaciones:			
                                                            </span>                                                                												 
                                                        </span>
                                                        <div class="input-group">
                                                          <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                          <input  class="form-control" type="text" id="Vacaciones" placeholder="Salario no Ingresado" value="{{$sueldo['Vacaciones']}}" readonly>
                                                        </div>
                                                    </span>		
                                                    </label> 
                                                  </div>  
                                                  <div class="col-lg-4">
                                                    <label class="kt-option">                                                                
                                                    <span class="kt-option__label">
                                                        <span class="kt-option__head">
                                                            <span class="kt-option__title juiciotext">
                                                              Prima Vacacional:			
                                                            </span>                                                                												 
                                                        </span>
                                                        <div class="input-group">
                                                          <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                          <input  class="form-control" type="text" id="Prima_Vacacional" placeholder="Salario no Ingresado" value="{{$sueldo['Prima_Vacacional']}}" readonly>
                                                        </div>
                                                    </span>	                                                                                                        
                                                    </label> 
                                                  </div> 

                                                  
                                                     
                                                   
                                                  
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text">                                                      
                                                        <label class="kt-checkbox kt-checkbox--single kt-checkbox--success">
                                                          <input type="checkbox" id="horasextracheck">
                                                          <span> </span>
                                                        </label>                                                     
                                                      </span>

                                                      <span class="input-group-text">                                                        
                                                          Otras Prestaciones :$ &nbsp
                                                        <input type="text" placeholder="Otras Prestaciones" id="horas_extra" value=0  min="0" disabled="disabled">
                                                      </span>
                                                    </div> 

                                                                                                                                                    
                                                </div>

                                                <div class="input-group" id="indemnizacion">
                                                  <div class="col-lg-12">
                                                    <span class="kt-option__title juiciotext">
                                                      Indemnizacion	:
                                                    </span>
                                                  </div>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                    <input  class="form-control" type="text" id="indemnizacion_value" placeholder="Salario no Ingresado" value="{{$sueldo['Indemnizacion']}}" readonly>
                                                  </div>
                                                </div>                                           
                                                <div class="input-group" id="salarioscaidos" >
                                                  <div class="col-lg-12" >
                                                    <span class="kt-option__title juiciotext">
                                                      Reinstalacion	/ Salarios Caidos	: $ <span id="res_salarioscaidos">0</span>
                                                    </span>
                                                  </div>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text">Meses transcurridos desde la Separacion/ Fecha Actual </span></div>
                                                    <input  class="form-control" type="text" id="Salarios_Caidos" placeholder="Salario no Ingresado" value={{$mesestranscurridosalcalidos}} readonly>
                                                  </div>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text">Trimestres Transcurridos </span></div>
                                                    <input  class="form-control" type="text" id="Salarios_Caidos" placeholder="Salario no Ingresado" value={{$trimestres}} readonly>
                                                  </div>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text">Salario por Trimestre $</span></div>
                                                    <input  class="form-control" type="text" id="Salarios_Caidos" placeholder="Salario no Ingresado" value={{ $juicio3[0]->salarioMen*3}} readonly>
                                                  </div>
                                                </div>                                                                                                                                                 
                                            </span>	                                                                                                                                      
                                            </label> 
                                          </div>                                                                                     
                                        </div> 

                                        
                                          <div class="row "  id="trimestres">
                                            <div class="col-lg-12" >
                                              <div class="input-group-prepend">
                                                <span class="input-group-text">Trimestres :</span>
                                              </div>
                                            </div>
                                                                                                                                                                                                      
                                              @for ($i = 1; $i <= $trimestres; $i++)                                                   
                                              <div class="kt-checkbox-inline" id="chequeo"> 
                                                <div class="input-group" id='trimestre'>
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text">Trimestre: {{$i}}</span>
                                                  </div>                                                          
                                                  <div class="input-group-append">
                                                    <span class="input-group-text">
                                                      <label class="kt-checkbox kt-checkbox--single kt-checkbox--primary">
                                                        <input type="checkbox" name='saltrime' id= tri$contador value={{$saltrime }}>
                                                        <span></span>
                                                      </label>
                                                    </span>
                                                  </div>							      	
                                                </div>
                                            </div>
                                              @endfor

                                              

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
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#tramitea" aria-expanded="false" aria-controls="tramitea">
                                        <i class="fa-sharp fa-solid fa-file-invoice" style="color: #8b1818;"></i>
                                        - Tramite
                                    </button>
                                </h5>
                            </div>

                            <div id="tramitea" class="collapse" aria-labelledby="stramite" data-parent="#acordionjuicio"> 
                                <div class="card-body">   
                                                                              
                                        <div class="kt-portlet__body">
                                            <div class="form-group row form-group-marginless">
                                                <label class="col-lg-2 col-form-label juiciotext ">Expediente Personal R.H:</label>
                                                <div class="col-lg-10">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="kt-option">                                                                
                                                            <span class="kt-option__label">
                                                                <span class="kt-option__head">
                                                                    <span class="kt-option__title juiciotext">
                                                                    Solicitud 				
                                                                    </span>                                                                												 
                                                                </span>
                                                                <span class="kt-option__body">
                                                                    <input type="date" class="form-control" id="exp_personal_rh_solicitud"
                                                                    value="{{ $juicio3[0]->exp_personal_rh_solicitud}}"
                                                                    name="exp_personal_rh_solicitud" readonly>
                                                                </span>
                                                            </span>		
                                                            </label> 
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="kt-option">                                                                
                                                            <span class="kt-option__label">
                                                                <span class="kt-option__head">
                                                                    <span class="kt-option__title juiciotext">
                                                                    Devolucion 				
                                                                    </span>                                                                												 
                                                                </span>
                                                                <span class="kt-option__body">
                                                                    <input type="date" class="form-control"
                                                                        id="exp_personal_rh_devolucion"
                                                                        value="{{ $juicio3[0]->exp_personal_rh_devolucion }}"
                                                                        name="exp_personal_rh_devolucion" readonly>
                                                                </span>
                                                            </span>		
                                                            </label> 
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="kt-option">                                                                
                                                            <span class="kt-option__label">
                                                                <span class="kt-option__head">
                                                                    <span class="kt-option__title juiciotext">
                                                                    Fojas 				
                                                                    </span>                                                                												 
                                                                </span>
                                                                <span class="kt-option__body">
                                                                    <input type="text" class="form-control"
                                                                    id="fojas" name="fojas" placeholder="0"
                                                                    value="{{ $juicio3[0]->fojas }}" readonly>
                                                                </span>
                                                            </span>		
                                                            </label> 
                                                        </div>                                                           
                                                    </div>
                                                </div>
                                            </div>       

                                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>

                                            
                                            <div class="form-group row form-group-marginless">
                                                <label class="col-lg-2 col-form-label juiciotext ">Expediente Adscripcion :</label>
                                                <div class="col-lg-10">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="kt-option">                                                                
                                                            <span class="kt-option__label">
                                                                <span class="kt-option__head">
                                                                    <span class="kt-option__title juiciotext">
                                                                    Solicitud 				
                                                                    </span>                                                                												 
                                                                </span>
                                                                <span class="kt-option__body">
                                                                    <input type="date" class="form-control"
                                                                    id="exp_adscripcion_solicitud"
                                                                    value="{{ $juicio3[0]->exp_adscripcion_solicitud }}"
                                                                    name="exp_adscripcion_solicitud" readonly>
                                                                </span>
                                                            </span>		
                                                            </label> 
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="kt-option">                                                                
                                                            <span class="kt-option__label">
                                                                <span class="kt-option__head">
                                                                    <span class="kt-option__title juiciotext">
                                                                    Devolucion 				
                                                                    </span>                                                                												 
                                                                </span>
                                                                <span class="kt-option__body">
                                                                    <input type="date" class="form-control"
                                                                    id="exp_adscripcion_devolucion"
                                                                    name="exp_adscripcion_devolucion"
                                                                    value="{{ $juicio3[0]->exp_adscripcion_devolucion }}" readonly>
                                                                </span>
                                                            </span>		
                                                            </label> 
                                                        </div>
                                                                                                                   
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>

                                            <div class="form-group row form-group-marginless">
                                                <label class="col-lg-2 col-form-label juiciotext">Fecha Proxima :</label>
                                                <div class="col-lg-10">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="kt-option">                                                                
                                                            <span class="kt-option__label">
                                                                <span class="kt-option__head">
                                                                    <span class="kt-option__title juiciotext">
                                                                    Audiencia 				
                                                                    </span>                                                                												 
                                                                </span>
                                                                <span class="kt-option__body">
                                                                    <input type="date" class="form-control"
                                                                    id="audiencia"
                                                                    value="{{ $juicio3[0]->audiencia}}"
                                                                    name="audiencia" readonly>
                                                                </span>
                                                            </span>		
                                                            </label> 
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="kt-option">                                                                
                                                            <span class="kt-option__label">
                                                                <span class="kt-option__head">
                                                                    <span class="kt-option__title juiciotext">
                                                                    Descripcion 				
                                                                    </span>                                                                												 
                                                                </span>
                                                                <span class="kt-option__body">
                                                                    <input type="date" class="form-control"
                                                                    id="exp_adscripcion_devolucion"
                                                                    name="exp_adscripcion_devolucion"
                                                                    value="{{ $juicio3[0]->descripcion}}" readonly>
                                                                </span>
                                                            </span>		
                                                            </label> 
                                                        </div>
                                                                                                                   
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>

                                            <div class="form-group row form-group-marginless">
                                                <label class="col-lg-2 col-form-label  juiciotext">Terminos :</label>
                                                <div class="col-lg-10">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="kt-option">                                                                
                                                            <span class="kt-option__label">
                                                                <span class="kt-option__head">
                                                                    <span class="kt-option__title juiciotext">
                                                                    Notificacion 				
                                                                    </span>                                                                												 
                                                                </span>
                                                                <span class="kt-option__body">
                                                                    <input type="date" class="form-control"
                                                                    id="tramite_terminos_notificacion"
                                                                    value="{{ $juicio3[0]->tramite_terminos_notificacion}}"
                                                                    name="tramite_terminos_notificacion" readonly>
                                                                </span>
                                                            </span>		
                                                            </label> 
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="kt-option">                                                                
                                                            <span class="kt-option__label">
                                                                <span class="kt-option__head">
                                                                    <span class="kt-option__title juiciotext">
                                                                    Vencimiento 				
                                                                    </span>                                                                												 
                                                                </span>
                                                                <span class="kt-option__body">
                                                                    <input type="date" class="form-control"
                                                                    id="tramite_terminos_vencimiento"
                                                                    name="tramite_terminos_vencimiento"
                                                                    value="{{ $juicio3[0]->tramite_terminos_vencimiento}}" readonly>
                                                                </span>
                                                            </span>		
                                                            </label> 
                                                        </div>
                                                                                                                   
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>

                                            <div class="form-group row form-group-marginless">
                                                <label class="col-lg-2 col-form-label juiciotext">Amparo Indirecto :</label>
                                                <div class="col-lg-10">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="kt-option">                                                                
                                                            <span class="kt-option__label">
                                                                <span class="kt-option__head">
                                                                    <span class="kt-option__title juiciotext">
                                                                    Juzgado 				
                                                                    </span>                                                                												 
                                                                </span>
                                                                <span class="kt-option__body">
                                                                    <input type="date" class="form-control"
                                                                    id="tramite_ampindirectos_jusgado"
                                                                    value="{{ $juicio3[0]->tramite_ampindirectos_jusgado}}"
                                                                    name="tramite_ampindirectos_jusgado" readonly> 
                                                                </span>
                                                            </span>		
                                                            </label> 
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="kt-option">                                                                
                                                            <span class="kt-option__label">
                                                                <span class="kt-option__head">
                                                                    <span class="kt-option__title juiciotext">
                                                                    AD 				
                                                                    </span>                                                                												 
                                                                </span>
                                                                <span class="kt-option__body">
                                                                    <input type="date" class="form-control"
                                                                    id="tramite_ampindirectos_AD"
                                                                    name="tramite_ampindirectos_AD"
                                                                    value="{{ $juicio3[0]->tramite_ampindirectos_AD}}" readonly>
                                                                </span>
                                                            </span>		
                                                            </label> 
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="kt-option">                                                                
                                                            <span class="kt-option__label">
                                                                <span class="kt-option__head">
                                                                    <span class="kt-option__title juiciotext">
                                                                    Suspension 				
                                                                    </span>                                                                												 
                                                                </span>
                                                                <span class="kt-option__body">
                                                                    <input type="date" class="form-control"
                                                                    id="tramite_ampindirectos_suspencion"
                                                                    value="{{ $juicio3[0]->tramite_ampindirectos_suspencion}}"
                                                                    name="tramite_ampindirectos_suspencion" readonly>
                                                                </span>
                                                            </span>		
                                                            </label> 
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="kt-option">                                                                
                                                            <span class="kt-option__label">
                                                                <span class="kt-option__head">
                                                                    <span class="kt-option__title juiciotext">
                                                                    AUD.Const 				
                                                                    </span>                                                                												 
                                                                </span>
                                                                <span class="kt-option__body">
                                                                    <input type="date" class="form-control"
                                                                    id="tramite_ampindirectos_audconst"
                                                                    value="{{ $juicio3[0]->tramite_ampindirectos_audconst}}"
                                                                    name="tramite_ampindirectos_audconst"readonly>
                                                                </span>
                                                            </span>		
                                                            </label> 
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="kt-option">                                                                
                                                            <span class="kt-option__label">
                                                                <span class="kt-option__head">
                                                                    <span class="kt-option__title juiciotext">
                                                                    Sentido 				
                                                                    </span>                                                                												 
                                                                </span>
                                                                <span class="kt-option__body">
                                                                    <input type="date" class="form-control"
                                                                    id="tramite_ampindirectos_sentido"
                                                                    value="{{ $juicio3[0]->tramite_ampindirectos_sentido}}"
                                                                    name="tramite_ampindirectos_sentido" readonly>
                                                                </span>
                                                            </span>		
                                                            </label> 
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="kt-option">                                                                
                                                            <span class="kt-option__label">
                                                                <span class="kt-option__head">
                                                                    <span class="kt-option__title juiciotext">
                                                                    Recurso 				
                                                                    </span>                                                                												 
                                                                </span>
                                                                <span class="kt-option__body">
                                                                    <input type="date" class="form-control"
                                                                    id="tramite_ampindirectos_recurso"
                                                                    value="{{ $juicio3[0]->tramite_ampindirectos_recurso}}"
                                                                    name="tramite_ampindirectos_recurso" readonly>
                                                                </span>
                                                            </span>		
                                                            </label> 
                                                        </div>

                                                        <div class="col-lg-4">
                                                          <label class="kt-option">                                                                
                                                          <span class="kt-option__label">
                                                              <span class="kt-option__head">
                                                                  <span class="kt-option__title juiciotext">
                                                                  Cierre De Instruccion 				
                                                                  </span>                                                                												 
                                                              </span>
                                                              <span class="kt-option__body">
                                                                  <input type="date" class="form-control"
                                                                  id="tramite_ampindirectos_recurso"
                                                                  value="{{ $juicio3[0]->cierredeinstruccion}}"
                                                                  name="tramite_ampindirectos_recurso" readonly>
                                                              </span>
                                                          </span>		
                                                          </label> 
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
                                            <input  class="form-control" type="text" id="lau_fecha" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->lau_fecha}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="lau_sentido" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->lau_sentido}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div> 
                                    
                                    <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Basificacion
                                        </div>
                                        <div class="card-body">                                  
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="basificacion" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->basificacion}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="reinstalacion" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->reinstalacion}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="indemnizacion" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->indemnizacion}}" readonly >                                      
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
                                          <div class="input-group">
                                            <div class="input-group-prepend"><span
                                                    class="input-group-text">$</span></div>
                                            <input type="text" class="form-control"
                                                placeholder="Sin Dato por el Momento"
                                                aria-describedby="basic-addon1"
                                                value="{{ $juicio3[0]->pasivo_total }}"
                                                name="pasivo_total" id="pasivo_total" readonly>
                                        </div>                                   
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
                                            <input  class="form-control" type="text" id="f_notificacion_laudo" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->f_notificacion_laudo}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="parte" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->parte}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="dir_indir" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->dir_indir}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="ad_dt" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->ad_dt}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
        
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                         Concepto De Violacion
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="conceptode" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->conceptode}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="aud_const2" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->aud_const2}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="fecha_sentencia" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->fecha_sentencia}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="sentido_sentencia" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->sentido_sentencia}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="recurso_amparo" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->recurso_amparo}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="parte_adherente" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->parte_adherente}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="sentido_ad" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->sentido_ad}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="fecha_ad" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->fecha_ad}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="fechacumpreinstalacion" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->fechacumpreinstalacion}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="notf2" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->notf2}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="r_h" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->r_h}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="vence" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->vence}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="sentido" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->sentido}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          Solicitado AR.H
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="solicitadoarh" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->solicitadoarh}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="cantidad" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->cantidad}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="folio" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->folio}}" readonly >                                      
                                          </p>                                    
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="card">
                                        <div class="card-header  juiciotext">
                                          No.De Intento De REQ
                                        </div>
                                        <div class="card-body">                               
                                          <p class="card-text">                                     
                                            <input  class="form-control" type="text" id="nodeintento" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->nodeintento}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="fechaproxima" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->fechaproxima}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="cumplimiento" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->cumplimiento}}" readonly >                                      
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
                                  <i class="fa-sharp fa-solid fa-file-invoice" style="color: #8b1818;"></i> - Concluido
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
                                            <input  class="form-control" type="text" id="mesdegobconclusion" placeholder="Sin Dato por el Momento" value="{{$juicio3[0]->mesdegobconclusion}}" readonly >                                      
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
                                            <input  class="form-control" type="text" id="fecha_conclusion" placeholder="Sin Dato por el Momento" value="{{ $juicio3[0]->fecha_conclusion }}" readonly >                                      
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
              
{{-- fin de formulario para mostrar datos--}}
          <hr class="separador">                
              @include('juicios.form_comentario')
              @include('juicios.updateydowload_form')
    
          </div>          
      </div>
  </div>

  