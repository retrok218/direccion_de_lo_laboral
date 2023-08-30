   
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
            <table class="table table-striped table-bordered"   style="width: 30%;" >            
                <tbody>
                    @stack('name')                                            
                        <div class="col  ">
                            <tr id="filter_col5" data-column="5">
                                <td>Filtro Por Expediente/Año</td>
                                <td align="center"><input type="number" class="column_filter form-control kt-input" id="col5_filter"></td>            
                            </tr>
                            <tr id="filter_col6" data-column="9">
                                <td>Filtro Por Accion</td>
                                <td align="center"><input type="text" class="column_filter form-control kt-input" id="col9_filter"></td>            
                            </tr>
                            <tr id="filter_col10" data-column="10">
                                <td>Filtro Por Nombre</td>
                                <td align="center"><input type="number" class="column_filter form-control kt-input" id="col10_filter"></td>            
                            </tr>
                        </div>                                                                                                                                                           
                </tbody>
            </table> 	


            <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile" data-column="5">
                <label data-column="12">RecordID:</label>
                <input type="text" class="form-control kt-input" placeholder="E.g: 4590" data-col-index="0">
            </div>

            
		<table class="table table-striped- table-bordered table-hover table-checkable"  id="juiciotabla" >
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
</div>
