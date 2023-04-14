
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
                                    <i class="fa-solid fa-book" style="color: #8b1818;" ></i>- Datos Generales del Juicio
                                    
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
                                            <input type="date"  min="2016-01-01" class="form-control" id="notidemanda" value="{{$juicio3[0]->noti_demanda}}"  name="notidemanda"> 
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
                                                <input  class="form-control" type="date" id="abogados_asignados" placeholder="Seleccione la Sala" value="{{$juicio3[0]->presentacion_de_demanda}}" >
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
                                                <input  class="form-control" type="text" id="abogados_asignados"  value="{{$juicio3[0]->expediente}}" >
                                                                               
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
                                                <select class="custom-select" name="año_juicio" id="año_juicio" >
                                                  @foreach($añosseleccionables as $año)
                                                    @if ($año == $juicio3[0]->año_juicio)
                                                      <option value="{{$año}}" selected>{{$año}}</option>                                                                                                               
                                                      @else
                                                      <option value="{{$año}}">{{$año}}</option>                                                  
                                                    @endif                                                                                                                                                                   
                                                  @endforeach
                                              </select>
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
                                                <select class="custom-select" name="año_juicio" id="año_juicio" >
                                                  @foreach($añosseleccionables as $año)
                                                    @if ($año == $juicio3[0]->clasificacion_año)
                                                      <option value="{{$año}}" selected>{{$año}}</option>                                                                                                               
                                                      @else
                                                      <option value="{{$año}}">{{$año}}</option>                                                  
                                                    @endif                                                                                                                                                                   
                                                  @endforeach
                                              </select>
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
                                                <input type="number" class="form-control" id="clasificacion_exp" name="clasificacion_exp" placeholder="----" value="{{$juicio3[0]->clasificacion_exp}}" >
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
                                                <select class="custom-select" id="tipo" name="tipo" >
                                                  <option selected disabled value="">Tipo</option>
                                                  <option @if ($juicio3[0]->tipo == "CESE") {{"selected"}} @endif>CESE</option>    
                                                  <option @if ($juicio3[0]->tipo == "COLECTIVO") {{"selected"}} @endif>COLECTIVO</option> 
                                                  <option @if ($juicio3[0]->tipo == "BENEF") {{"selected"}} @endif>BENEF</option>
                                                  <option @if ($juicio3[0]->tipo == "DEMANDA") {{"selected"}} @endif>DEMANDA</option>
                                                  <option @if ($juicio3[0]->tipo == "DEMANDA SEGOB") {{"selected"}} @endif>DEMANDA SEGOB</option>                         
                                                </select>                                                                              
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
                                                
                                                
                                                <select class="custom-select" id="accion" name="accion" >
                                                  <option selected disabled value="">Selecicona la Accion</option>
                                                  <option @if ($juicio3[0]->accion == "Reinstalación") {{"selected"}} @endif>Reinstalación</option>
                                                  <option @if ($juicio3[0]->accion == "Indemnización") {{"selected"}} @endif>Indemnización </option>
                                                  <option @if ($juicio3[0]->accion == "Otros (prestaciones legales)") {{"selected"}} @endif>Otros (prestaciones legales)</option>
                                                  <option @if ($juicio3[0]->accion == "Solicitud de autorizacion de terminacion de efectos de nombramiento") {{"selected"}} @endif>Solicitud de autorizacion de terminacion de efectos de nombramiento</option>  
                                                  <option @if ($juicio3[0]->accion == "Basificación") {{"selected"}} @endif>Basificación</option>
                                                  <option @if ($juicio3[0]->accion == "RENIVELACION SALARIAL") {{"selected"}} @endif>RENIVELACION SALARIAL</option>  
                                                  <option @if ($juicio3[0]->accion == "HORAS EXTRAORDINARIAS") {{"selected"}} @endif>HORAS EXTRAORDINARIAS</option> 
                                                  <option @if ($juicio3[0]->accion == "SALARIOS DEVENGADOS") {{"selected"}} @endif>SALARIOS DEVENGADOS</option> 
                                                </select>
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
                                                                                                                                              
                                                  <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala" value=" {{$juicio3[0]->adscripcion}}" > 
                                                  <select class="custom-select" id="adscripcion" name="adscripcion" >
                                                    <option selected disabled value="">Selecicona la Adscripcion</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Archivo General de la Nación") {{"selected"}} @endif>Archivo General de la Nación</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Centro de Producción de Programas Informativos y Especiales") {{"selected"}} @endif></option>
                                                    <option @if ($juicio3[0]->adscripcion == "Centro Nacional de Prevención de Desastres ") {{"selected"}} @endif>Centro Nacional de Prevención de Desastres</option>
                                                    <option @if ($juicio3[0]->adscripcion == "CFE") {{"selected"}} @endif value="CFE">CFE</option>
                                                    <option @if ($juicio3[0]->adscripcion == "CNI (antes CISEN)") {{"selected"}} @endif value="CNI (antes CISEN)">CNI (antes CISEN)</option>
                                                    <option @if ($juicio3[0]->adscripcion == "COMISION EJECUTIVA DE ATENCION A VICTIMAS Y OTROS") {{"selected"}} @endif value="COMISION EJECUTIVA DE ATENCION A VICTIMAS Y OTROS">COMISION EJECUTIVA DE ATENCION A VICTIMAS Y OTROS</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Comisión Nacional para Prevenir y Erradicar la Violencia Contra las Mujeres") {{"selected"}} @endif value="Comisión Nacional para Prevenir y Erradicar la Violencia Contra las Mujeres">Comisión Nacional para Prevenir y Erradicar la Violencia Contra las Mujeres</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Comisión para el Diálogo con los Pueblos Indígenas de México") {{"selected"}} @endif value="Comisión para el Diálogo con los Pueblos Indígenas de México">Comisión para el Diálogo con los Pueblos Indígenas de México</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Consejo de Menores") {{"selected"}} @endif value="Consejo de Menores">Consejo de Menores</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Coordinación General de la Comisión Mexicana de Ayuda a Refugiados") {{"selected"}} @endif value="Coordinación General de la Comisión Mexicana de Ayuda a Refugiados">Coordinación General de la Comisión Mexicana de Ayuda a Refugiados</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Coordinación General de Protección Civil") {{"selected"}} @endif value="Coordinación General de Protección Civil">Coordinación General de Protección Civil</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Coordinación para la Atención Integral de la Migración en la Frontera Sur") {{"selected"}} @endif value="Coordinación para la Atención Integral de la Migración en la Frontera Sur">Coordinación para la Atención Integral de la Migración en la Frontera Sur</option>
                                                    <option @if ($juicio3[0]->adscripcion == "DATOS DE LA RELACIÓN LABORAL") {{"selected"}} @endif value="DATOS DE LA RELACIÓN LABORAL">DATOS DE LA RELACIÓN LABORAL</option>
                                                    <option @if ($juicio3[0]->adscripcion == "DESPLEGABLE CON MODIFICACIÓN") {{"selected"}} @endif value="DESPLEGABLE CON MODIFICACIÓN">DESPLEGABLE CON MODIFICACIÓN</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Diario Oficial") {{"selected"}} @endif value="Diario Oficial">Diario Oficial</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General De Acuerdos Políticos") {{"selected"}} @endif value="Dirección General De Acuerdos Políticos">Dirección General De Acuerdos Políticos</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección general de Análisis y Prospectiva para la Poítica de Interior") {{"selected"}} @endif value="Dirección general de Análisis y Prospectiva para la Poítica de Interior">Dirección general de Análisis y Prospectiva para la Poítica de Interior</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Asociaciones Religiosas") {{"selected"}} @endif value="Dirección General de Asociaciones Religiosas">Dirección General de Asociaciones Religiosas</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Compilación y Consulta del Orden Jurídico Nacional") {{"selected"}} @endif value="Dirección General de Compilación y Consulta del Orden Jurídico Nacional">Dirección General de Compilación y Consulta del Orden Jurídico Nacional</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Comunicación Social") {{"selected"}} @endif value="Dirección General de Comunicación Social">Dirección General de Comunicación Social</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Coordinación con Entidades Federativas") {{"selected"}} @endif value="Dirección General de Coordinación con Entidades Federativas">Dirección General de Coordinación con Entidades Federativas</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General De Coordinación Para La Operación Territorial") {{"selected"}} @endif value="Dirección General De Coordinación Para La Operación Territorial">Dirección General De Coordinación Para La Operación Territorial</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Cultura Democrática y Fomento Cívico") {{"selected"}} @endif value="Dirección General de Cultura Democrática y Fomento Cívico">Dirección General de Cultura Democrática y Fomento Cívico</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Enlace y Seguimiento") {{"selected"}} @endif value="Dirección General de Enlace y Seguimiento">Dirección General de Enlace y Seguimiento</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Estrategias para la Atención de Derechos Humanos") {{"selected"}} @endif value="Dirección General de Estrategias para la Atención de Derechos Humanos">Dirección General de Estrategias para la Atención de Derechos Humanos</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Estudios Legislativos") {{"selected"}} @endif value="Dirección General de Estudios Legislativos">Dirección General de Estudios Legislativos</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Información Legislativa") {{"selected"}} @endif value="Dirección General de Información Legislativa">Dirección General de Información Legislativa</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Infraestructura Tecnologica de Seguridad Pública") {{"selected"}} @endif value="Dirección General de Infraestructura Tecnologica de Seguridad Pública">Dirección General de Infraestructura Tecnologica de Seguridad Pública</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Juegos y Sorteos") {{"selected"}} @endif value="Dirección General de Juegos y Sorteos">Dirección General de Juegos y Sorteos</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Medios Impresos") {{"selected"}} @endif value="Dirección General de Medios Impresos">Dirección General de Medios Impresos</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General De Modernización, Organización Y Eficiencia Administrativa") {{"selected"}} @endif value="Dirección General De Modernización, Organización Y Eficiencia Administrativa">Dirección General De Modernización, Organización Y Eficiencia Administrativa</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Normatividad de Comunicación") {{"selected"}} @endif value="Dirección General de Normatividad de Comunicación">Dirección General de Normatividad de Comunicación</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General De Planeación Estratégica Para La Prevención Social") {{"selected"}} @endif value="Dirección General De Planeación Estratégica Para La Prevención Social">Dirección General De Planeación Estratégica Para La Prevención Social</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Política Pública de Derechos Humanos") {{"selected"}} @endif value="Dirección General de Política Pública de Derechos Humanos">Dirección General de Política Pública de Derechos Humanos </option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Programación y Presupuesto") {{"selected"}} @endif value="Dirección General de Programación y Presupuesto">Dirección General de Programación y Presupuesto</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Protección Civil") {{"selected"}} @endif value="Dirección General de Protección Civil">Dirección General de Protección Civil</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Radio, Televisión y Cinematografía") {{"selected"}} @endif value="Dirección General de Radio, Televisión y Cinematografía">Dirección General de Radio, Televisión y Cinematografía</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Recursos Humanos") {{"selected"}} @endif value="Dirección General de Recursos Humanos">Dirección General de Recursos Humanos</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Recursos Materiales y Servicios Generales") {{"selected"}} @endif value="Dirección General de Recursos Materiales y Servicios Generales">Dirección General de Recursos Materiales y Servicios Generales</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General de Tecnologías de la Información y Comunicaciones") {{"selected"}} @endif value="Dirección General de Tecnologías de la Información y Comunicaciones">Dirección General de Tecnologías de la Información y Comunicaciones</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General del Registro Nacional de Población e Identidad") {{"selected"}} @endif value="Dirección General del Registro Nacional de Población e Identidad">Dirección General del Registro Nacional de Población e Identidad</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General del Registro Nacional de Población e Identificación Personal") {{"selected"}} @endif value="Dirección General del Registro Nacional de Población e Identificación Personal">Dirección General del Registro Nacional de Población e Identificación Personal</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General para el Fondo de Desastres Naturales") {{"selected"}} @endif value="Dirección General para el Fondo de Desastres Naturales">Dirección General para el Fondo de Desastres Naturales</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Dirección General para la Protección de Personas Defensoras de Derechos Humanos y Periodistas") {{"selected"}} @endif value="Dirección General para la Protección de Personas Defensoras de Derechos Humanos y Periodistas">Dirección General para la Protección de Personas Defensoras de Derechos Humanos y Periodistas</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Ecoblue de México, S.A. de C.V.") {{"selected"}} @endif value="Ecoblue de México, S.A. de C.V.">Ecoblue de México, S.A. de C.V.</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Entonces Registro Federal de Electores") {{"selected"}} @endif value="Entonces Registro Federal de Electores">Entonces Registro Federal de Electores</option>
                                                    <option @if ($juicio3[0]->adscripcion == "GUAIDA, S A DE C.V. Y/O") {{"selected"}} @endif value="GUAIDA, S A DE C.V. Y/O">GUAIDA, S A DE C.V. Y/O</option>
                                                    <option @if ($juicio3[0]->adscripcion == "INM") {{"selected"}} @endif value="INM">INM</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado") {{"selected"}} @endif value="Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado">Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Instituto Estatal de Educación Pública") {{"selected"}} @endif value="Instituto Estatal de Educación Pública">Instituto Estatal de Educación Pública</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Instituto Nacional De Estudios Históricos De Las Revoluciones De México") {{"selected"}} @endif value="Instituto Nacional De Estudios Históricos De Las Revoluciones De México">Instituto Nacional De Estudios Históricos De Las Revoluciones De México</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Instituto Nacional para el Federalismo y el Desarrollo Municipal") {{"selected"}} @endif value="Instituto Nacional para el Federalismo y el Desarrollo Municipal">Instituto Nacional para el Federalismo y el Desarrollo Municipal</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Instituto Nacional para la Educación de los Adultos") {{"selected"}} @endif value="Instituto Nacional para la Educación de los Adultos">Instituto Nacional para la Educación de los Adultos</option>
                                                    <option @if ($juicio3[0]->adscripcion == "INSTITUTO PARA DEVOLVER AL PUEBLO LO ROBADO") {{"selected"}} @endif value="INSTITUTO PARA DEVOLVER AL PUEBLO LO ROBADO">INSTITUTO PARA DEVOLVER AL PUEBLO LO ROBADO</option>
                                                    <option @if ($juicio3[0]->adscripcion == "LyFC") {{"selected"}} @endif value="LyFC">LyFC</option>
                                                    <option @if ($juicio3[0]->adscripcion == "No presta servicios para SEGOB, Ayuntamiento Jiutepec") {{"selected"}} @endif value="No presta servicios para SEGOB, Ayuntamiento Jiutepec">No presta servicios para SEGOB, Ayuntamiento Jiutepec</option>
                                                    <option @if ($juicio3[0]->adscripcion == "No prestaba servicios en SEGOB") {{"selected"}} @endif value="No prestaba servicios en SEGOB">No prestaba servicios en SEGOB</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Oficialia Mayor") {{"selected"}} @endif value="Oficialia Mayor">Oficialia Mayor</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Oficina del C. Secretario") {{"selected"}} @endif value="Oficina del C. Secretario">Oficina del C. Secretario</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Órgano Interno de Control") {{"selected"}} @endif value="Órgano Interno de Control">Órgano Interno de Control</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Policía Federal") {{"selected"}} @endif value="Policía Federal">Policía Federal</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Prevención y Readapción Social") {{"selected"}} @endif value="Prevención y Readapción Social">Prevención y Readapción Social</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Secretaría de Gobernación") {{"selected"}} @endif value="Secretaría de Gobernación">Secretaría de Gobernación</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Secretaría de Seguridad y Protección Ciudadana") {{"selected"}} @endif value="Secretaría de Seguridad y Protección Ciudadana">Secretaría de Seguridad y Protección Ciudadana</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Secretaría General del Consejo Nacional de Población") {{"selected"}} @endif value="Secretaría General del Consejo Nacional de Población">Secretaría General del Consejo Nacional de Población</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Secretaría Técnica de la Comisión Calificadora de Publicaciones y Revistas Ilustradas") {{"selected"}} @endif value="Secretaría Técnica de la Comisión Calificadora de Publicaciones y Revistas Ilustradas">Secretaría Técnica de la Comisión Calificadora de Publicaciones y Revistas Ilustradas</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Secretaria Tecnica Para La Implementacion De Sistema De Justicia Penal") {{"selected"}} @endif value="Secretaria Tecnica Para La Implementacion De Sistema De Justicia Penal">Secretaria Tecnica Para La Implementacion De Sistema De Justicia Penal</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Secretariado Ejecutivo del Sistema Nacional de Seguridad Publica") {{"selected"}} @endif value="Secretariado Ejecutivo del Sistema Nacional de Seguridad Publica">Secretariado Ejecutivo del Sistema Nacional de Seguridad Publica</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Segob (no presta servicios)") {{"selected"}} @endif value="Segob (no presta servicios)">Segob (no presta servicios)</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Servicio de Protección Federal") {{"selected"}} @endif value="Servicio de Protección Federal">Servicio de Protección Federal</option>
                                                    <option @if ($juicio3[0]->adscripcion == "SISTEMA DIF. MUNICIPAL DE JIUTEPEC [DESARROLLO INTEGRAL DE LA FAMILIADE JIUTEPEC MORELOS] JUICIO RADICADO EN EL TECA DE MORELOS") {{"selected"}} @endif value="SISTEMA DIF. MUNICIPAL DE JIUTEPEC [DESARROLLO INTEGRAL DE LA FAMILIADE JIUTEPEC MORELOS] JUICIO RADICADO EN EL TECA DE MORELOS">SISTEMA DIF. MUNICIPAL DE JIUTEPEC [DESARROLLO INTEGRAL DE LA FAMILIADE JIUTEPEC MORELOS] JUICIO RADICADO EN EL TECA DE MORELOS</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Sistema Público De Radiodifusión Del Estado Mexicano") {{"selected"}} @endif value="Sistema Público De Radiodifusión Del Estado Mexicano">Sistema Público De Radiodifusión Del Estado Mexicano</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Subsecretaría de Derechos Humanos") {{"selected"}} @endif value="Subsecretaría de Derechos Humanos">Subsecretaría de Derechos Humanos</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Subsecretaria de Enlace Legislativo") {{"selected"}} @endif value="Subsecretaria de Enlace Legislativo">Subsecretaria de Enlace Legislativo</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Subsecretaría de Gobierno") {{"selected"}} @endif value="Subsecretaría de Gobierno">Subsecretaría de Gobierno</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Subsecretaría de Normatividad de Medios") {{"selected"}} @endif value="Subsecretaría de Normatividad de Medios">Subsecretaría de Normatividad de Medios</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Subsecretaría de Población, Migración y Asuntos Religiosos") {{"selected"}} @endif value="Subsecretaría de Población, Migración y Asuntos Religiosos">Subsecretaría de Población, Migración y Asuntos Religiosos</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Subsecretaría de Prevención y Participación Ciudadana") {{"selected"}} @endif value="Subsecretaría de Prevención y Participación Ciudadana">Subsecretaría de Prevención y Participación Ciudadana</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Talleres Gráficos de México") {{"selected"}} @endif value="Talleres Gráficos de México">Talleres Gráficos de México</option>
                                                    <option @if ($juicio3[0]->adscripcion == "TFCA") {{"selected"}} @endif value="TFCA">TFCA</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Unidad de Desarrollo Político y Fomento Cívico") {{"selected"}} @endif value="Unidad de Desarrollo Político y Fomento Cívico">Unidad de Desarrollo Político y Fomento Cívico</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Unidad de Enlace") {{"selected"}} @endif value="Unidad de Enlace">Unidad de Enlace</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Unidad de Enlace Federal") {{"selected"}} @endif value="Unidad de Enlace Federal">Unidad de Enlace Federal</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Unidad de Enlace Federal y Coordinación con Entidades Federativas") {{"selected"}} @endif value="Unidad de Enlace Federal y Coordinación con Entidades Federativas">Unidad de Enlace Federal y Coordinación con Entidades Federativas</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Unidad de Enlace Legislativo") {{"selected"}} @endif value="Unidad de Enlace Legislativo">Unidad de Enlace Legislativo</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Unidad de Gobierno") {{"selected"}} @endif value="Unidad de Gobierno">Unidad de Gobierno</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Unidad de Normatividad de Medios") {{"selected"}} @endif value="Unidad de Normatividad de Medios">Unidad de Normatividad de Medios</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Unidad de Normatividad de Medios de Comunicación") {{"selected"}} @endif value="Unidad de Normatividad de Medios de Comunicación">Unidad de Normatividad de Medios de Comunicación</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Unidad De Política Migratoria") {{"selected"}} @endif value="Unidad De Política Migratoria">Unidad De Política Migratoria</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Unidad de Servicios y Formación Policial") {{"selected"}} @endif value="Unidad de Servicios y Formación Policial">Unidad de Servicios y Formación Policial</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Unidad General de Asuntos Jurídicos") {{"selected"}} @endif value="Unidad General de Asuntos Jurídicos">Unidad General de Asuntos Jurídicos</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Unidad para el Desarrollo Político") {{"selected"}} @endif value="Unidad para el Desarrollo Político">Unidad para el Desarrollo Político</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Unidad para la Atención de las Organizaciones Sociales") {{"selected"}} @endif value="Unidad para la Atención de las Organizaciones Sociales">Unidad para la Atención de las Organizaciones Sociales</option>
                                                    <option @if ($juicio3[0]->adscripcion == "Unidad para la Promoción y Defensa de los Derechos Humanos") {{"selected"}} @endif value="Unidad para la Promoción y Defensa de los Derechos Humanos">Unidad para la Promoción y Defensa de los Derechos Humanos</option>                    
                                                  </select>
                                                                                 
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
                                                    <textarea name="comentario" class="form-control"  id="abogados_asignados" placeholder="Sin Datos por el Momento"  style="width: 100%; height: 100px" >{{$juicio3[0]->descripcion}}</textarea>
                                                  </p>                                                                                           
                                                  </div>                                                                                                                                                                  
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


  
