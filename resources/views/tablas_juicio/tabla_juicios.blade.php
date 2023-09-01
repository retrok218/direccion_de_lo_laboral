   

	<div class="kt-portlet__head kt-portlet__head--lg">
		<div class="kt-portlet__head-label">
			<span class="kt-portlet__head-icon">				
                <i class="fa-solid fa-scale-balanced fa-flip fa-sm" style="color: #9d203f; animation-duration: 5s;"></i>
			</span>
			<h3 class="kt-portlet__head-title">
				Juicios
			</h3>
		</div>	
        <p style="margin-top: 1rem">
            <a class="btn btn-primary" data-toggle="collapse" href="#filtro_por_nombre" role="button" aria-expanded="false" aria-controls="filtro_por_nombre" >
              Filtros Individuales 
            </a>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#filtro_por_seleccion" aria-expanded="false" aria-controls="filtro_por_seleccion">
              Filtro Por Seleccion
            </button>
          </p>	
	</div>			
    <div class="kt-portlet__body">   
    <div class="collapse" id="filtro_por_nombre">
        <div class="row mb-3">                                        
                        <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1" >
                            <label data-column="10">Filtro Por Nombre:</label>
                            <input type="text" class=" filtro form-control kt-input "  id="col10_filter">
                        </div>
                                                                
                        <div class="col-lg-12 col-xl-4 order-lg-1 order-xl-1" >
                            <label data-column="9">Filtro Por Acción:</label>
                            <input type="text" class=" filtro form-control kt-input "  id="col9_filter">
                        </div>
                    
                        <div class="col-lg-12 col-xl-4 order-lg-1 order-xl-1" >
                            <label data-column="11">Filtro Por Adscripción:</label>
                            <input type="text" class=" filtro form-control kt-input "  id="col11_filter">
                        </div>
                    
                    <div class="col-lg-12 col-xl-4 order-lg-1 order-xl-1">            
                        <label data-column="5">Filtro Por Seleccion</label>
                        <input type="number" class=" filtro form-control kt-input "  id="col5_filter">            
                    </div>
        </div>                           
    </div>
    <div class="collapse" id="filtro_por_seleccion">     
            <label  class="col-form-label"> Filtro Por Seleccion</label>
            <div class="input-group">                
							<div class="input-group-prepend">
								<div class="prueva-loca">                                    
                                    <select class="form-control"  name="Filtro completo" id="filtro_completo">
                                        <option value="">Seleccione La Columna</option>
                                        <option value="1">Njuicio</option>
                                        <option value="3">Presentacion</option>
                                        <option value="4">Sala/jnta </option>
                                        <option value="11">ADSCRIPCIÓN</option>
                                    </select>  
                                          
                                </div> 
							</div>
							<input class=" filtro form-control kt-input " type="text" id="filtrox">						
			</div>                        
        </div>
    
                    					                                           
		<table class="table table-striped- table-bordered table-hover table-checkable"  id="juiciotabla" style="font-weight: bold " >
            <thead>
                {{-- <tr>
                    <th>Alerta</th>
                    <th>Juicio</th>
                    <th>Actor</th>
                    <th>Audiencia</th>            
                    <th>Expediente</th>
                    <th>Accion</th>
                    <th>Adscripcion</th>                        
                    <th>Ejecucion/Dias restantes Para Requerimiento Fecha Proxima</th>            
                    <th>Editar</th>
                </tr>   --}}
                
                <tr>
                    <th>ALERTA</th>
                    <th>N/JUICIO</th>
                    <th>NOTIFICACION</th>
                    <th>PRESENTACIÓN</th>
                    <th>SALA/JTA</th>
                    <th>EXPEDIENTE/AÑO</th>           
                    <th title="CLASIFICACIÓN/AÑO">AÑO</th>
                    <th title="CLASIFICACIÓN/EXP">EXP</th>
                    <th>TIPO</th>
                    <th>ACCIÓN</th>
                    <th>NOMBRE</th>
                    <th>ADSCRIPCIÓN</th>
                    <th>UR</th>
                    <th>DENOMINACIÓN</th>
                    <th>PUESTO</th>
                    <th>NIVEL</th>
                    <th>SALARIO/M</th>
                    <th>INICIO/REL.LAB</th>
                    <th>TERMINACIÓN/REL.LAB</th>
                    <th>SOLICITUD</th>
                    <th>DEVOLUCIÓN</th>
                    <th>FOJAS</th>
                    <th>SOLICITUD</th>
                    <th>DEVOLUCIÓN</th>
                </tr>
            </thead>       
        </table>
        </div>
		<!--end: Datatable -->
