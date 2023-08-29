
    


<div class="kt-portlet kt-portlet--mobile">
	<div class="kt-portlet__head kt-portlet__head--lg">
		<div class="kt-portlet__head-label">
			<span class="kt-portlet__head-icon">
				<i class="kt-font-brand flaticon2-line-chart"></i>
			</span>
			<h3 class="kt-portlet__head-title">
				Juicios
			</h3>
		</div>		
	</div>

	<div class="kt-portlet__body">
		<!--begin: Search Form -->		

			<div class="row ">
							
                <table class="table table-striped table-bordered"   style="width: 25%;" >            
                    <tbody>
                        <div class="row">
                            {{-- <div class="col">
                                <tr id="filter_col3" data-column="13">
                                    <td>Filtro  Por Nombre</td>
                                    <td align="center"><input type="text" class="column_filter" id="col13_filter"></td>            
                                </tr>
                            </div> --}}
                            <div class="col ">
                                <tr id="filter_col5" data-column="5">
                                    <td>Filtro Por Expediente</td>
                                    <td align="center"><input type="number" class="column_filter form-control kt-input" id="col5_filter"></td>            
                                </tr>
                            </div>
                            <div class="col">              
                                <tr id="filter_col6" data-column="9">
                                    <td>Filtro Por Accion</td>
                                    <td align="center"><input type="text" class="column_filter form-control kt-input" id="col9_filter"></td>            
                                </tr>
                            </div>
                          </div>                   
                        
                        
                        
                    </tbody>
                </table> 




			</div>							
		</div>

			<div class="kt-separator kt-separator--md kt-separator--dashed"></div>

			{{-- <div class="row">
				<div class="col-lg-12">
					<button class="btn btn-primary btn-brand--icon" id="kt_search">
						<span>
							<i class="la la-search"></i>
							<span>Search</span>
						</span>
					</button>
					&nbsp;&nbsp;
					<button class="btn btn-secondary btn-secondary--icon" id="kt_reset">
						<span>
							<i class="la la-close"></i>
							<span>Reset</span>
						</span>
					</button>
				</div>
			</div> --}}
		
		<!--begin: Datatable -->

		

		<table class="dataTables_wrapper dt-bootstrap4 no-footer" style="width:40% ; font-size:12px;font-weight: bold;" id="juiciotabla" >
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
		<!--end: Datatable -->
	</div>
</div>	