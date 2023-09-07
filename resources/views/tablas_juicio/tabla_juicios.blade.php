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
         <a class="btn btn-primary" data-toggle="collapse" href="#filtro_por_nombre" role="button" aria-expanded="false"
             aria-controls="filtro_por_nombre">
             Filtros Individuales
         </a>
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#filtro_por_seleccion"
             aria-expanded="false" aria-controls="filtro_por_seleccion">
             Filtro Por Seleccion
         </button>
     </p>
 </div>
 <div class="kt-portlet__body">
     <div class="collapse" id="filtro_por_nombre">
         <div class="row mb-3">
             <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
                 <label data-column="1">Filtro Por N/Juicio:</label>
                 <input type="text" class=" filtro form-control kt-input " id="col1_filter">
             </div>

             <div class="col-lg-12 col-xl-4 order-lg-1 order-xl-1">
                 <label data-column="2">Filtro Por Notificacion:</label>
                 <input type="text" class=" filtro form-control kt-input " id="col2_filter">
             </div>

             <div class="col-lg-12 col-xl-4 order-lg-1 order-xl-1">
                 <label data-column="3">Filtro Por Presentacion:</label>
                 <input type="text" class=" filtro form-control kt-input " id="col3_filter">
             </div>
             <div class="col-lg-12 col-xl-4 order-lg-1 order-xl-1">
                 <label data-column="4">Filtro Por Sala/Jta:</label>
                 <input type="text" class=" filtro form-control kt-input " id="col4_filter">
             </div>
             <div class="col-lg-12 col-xl-4 order-lg-1 order-xl-1">
                 <label data-column="5">Filtro Por Expediente/Año:</label>
                 <input type="text" class=" filtro form-control kt-input " id="col5_filter">

             </div>
             <div class="col-lg-12 col-xl-4 order-lg-1 order-xl-1">
                 <label data-column="6">Filtro Por Año:</label>
                 <input type="number" class=" filtro form-control kt-input " id="col6_filter">
             </div>
             <div class="col-lg-12 col-xl-4 order-lg-1 order-xl-1">
                 <label data-column="7">Filtro Por EXP:</label>
                 <input type="text" class=" filtro form-control kt-input " id="col7_filter">
             </div>
             <div class="col-lg-12 col-xl-4 order-lg-1 order-xl-1">
                 <label data-column="8">Filtro Por Tipo:</label>
                 <input type="text" class=" filtro form-control kt-input " id="col8_filter">
             </div>
             <div class="col-lg-12 col-xl-4 order-lg-1 order-xl-1">
                 <label data-column="9">Filtro Por Accion:</label>
                 <input type="text" class=" filtro form-control kt-input " id="col9_filter">
             </div>
             <div class="col-lg-12 col-xl-4 order-lg-1 order-xl-1">
                 <label data-column="10">Filtro Por Nombre:</label>
                 <input type="text" class=" filtro form-control kt-input " id="col10_filter">
             </div>


         </div>
     </div>
     <div class="collapse mb-4" id="filtro_por_seleccion">
         <label class="col-form-label"> Filtro Por Seleccion</label>
         <div class="input-group ">
             <div class="input-group-prepend ">
                 <div class="prueva-loca ">
                     <select class="form-control" name="Filtro completo" id="filtro_completo">
                         <option value="0">Seleccione La Columna</option>
                         <option value="11">Adcripción</option>
                         <option value="12">UR</option>
                         <option value="13">Denominación</option>
                         <option value="14">Puesto</option>
                         <option value="15">Nivel</option>
                         <option value="16">Salario/M</option>
                         <option value="17">Inicio/Rel/Lab</option>
                         <option value="18">Terminacion/Rel/Lab</option>
                         <option value="19">Solicitud</option>
                         <option value="20">Devolución</option>
                         <option value="21">Fojas</option>
                         <option value="22">Solicitud</option>
                         <option value="23">Devolución</option>
                         
                     </select>
                 </div>

             </div>
             <input class=" filtro form-control kt-input " type="text" id="filtrox"
                 placeholder="Confirma la busqueda con un Click o Enter ">

         </div>


         {{-- <select name="" id="por_accion">
                <option value="" disabled>Seleccione</option>
            </select> --}}
     </div>



     <table class="table table-striped- table-bordered table-hover table-checkable" id="juiciotabla"
         style="font-weight: bold ">
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
                 <th>Editar</th>
             </tr>
         </thead>
     </table>
 </div>
 <!--end: Datatable -->
