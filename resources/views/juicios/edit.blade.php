<div class="modal fade" id="editjuicio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body" id="modal_content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="modal-header">                                
                <h4 class="modal-title"> <i class="flaticon2-edit"  style="color: #8b1818;"></i> Edicion del Juicio: {{$juicio3[0]->id_juicio}}</h4>
              </div>
      <div class="panel panel-primary">
                    <div class="panel-body">
                        {{-- inicio del acordion juicios --}}
                        <div class="accordion" id="acordionjuicio">


                            {{-- @csrf
                              {{method_field('PATCH') }} --}}

                            <div class="card">

                                <div class="card-header" id="datosjuicio">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#juicio" aria-expanded="false" aria-controls="juicio">
                                            <i class="fa-solid fa-book" style="color: #8b1818;"></i>- Datos Generales
                                            del Juicio
                                        </button>
                                    </h5>
                                </div>

                                <div id="juicio" class="collapse " aria-labelledby="datosjuicio"
                                    data-parent="#acordionjuicio">
                                    <div class="card-body">
                                        <div class="row  row-cols-1 row-cols-md-3">

                                            <form id="actualiza_datos_generales" name="actualiza_datos_generales">

                                                <div class="card-deck">
                                                    <div class="col-sm-4">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h6 class="card-title juiciotext juiciotext"> Abogados
                                                                    Asignados</h6>
                                                                @foreach ($nombreabogados[0] as $nombreabogado)
                                                                    <input class="form-control" type="text"
                                                                        id="abogados_asignados"
                                                                        placeholder="Seleccione la Sala"
                                                                        value="{{ $nombreabogado }}">
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
                                                                <input type="date" class="form-control"
                                                                    id="noti_demanda" name="noti_demanda"
                                                                    value="{{ $juicio3[0]->noti_demanda }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="card">
                                                            <div class="card-header juiciotext ">
                                                                Presentacion Demanda
                                                            </div>
                                                            <div class="card-body">
                                                                <p class="card-text">
                                                                    <input class="form-control" type="date"
                                                                        id="presentacion_de_demanda"
                                                                        name="presentacion_de_demanda"
                                                                        value="{{ $juicio3[0]->presentacion_de_demanda }}">
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
                                                                <input class="form-control" type="text" id="expediente" value="{{ $juicio3[0]->expediente }}" name="expediente">

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
                                                                    <select class="custom-select" name="año_juicio"
                                                                        id="año_juicio">
                                                                        @foreach ($añosseleccionables as $año)
                                                                            @if ($año == $juicio3[0]->año_juicio)
                                                                                <option value="{{ $año }}"
                                                                                    selected>{{ $año }}
                                                                                </option>
                                                                            @else
                                                                                <option value="{{ $año }}">
                                                                                    {{ $año }}</option>
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
                                                                    <select class="custom-select"
                                                                        name="clasificacion_año" id="clasificacion_año">
                                                                        @foreach ($añosseleccionables as $año)
                                                                            @if ($año == $juicio3[0]->clasificacion_año)
                                                                                <option value="{{ $año }}"
                                                                                    selected>{{ $año }}
                                                                                </option>
                                                                            @else
                                                                                <option value="{{ $año }}">
                                                                                    {{ $año }}</option>
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
                                                                    <input type="number" class="form-control"
                                                                        id="clasificacion_exp" name="clasificacion_exp"
                                                                        placeholder="----"
                                                                        value="{{ $juicio3[0]->clasificacion_exp }}">
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
                                                                <select class="custom-select" id="tipo"
                                                                    name="tipo">
                                                                    <option selected disabled value="">Tipo
                                                                    </option>
                                                                    <option
                                                                        @if ($juicio3[0]->tipo == 'CESE') {{ 'selected' }} @endif>
                                                                        CESE</option>
                                                                    <option
                                                                        @if ($juicio3[0]->tipo == 'COLECTIVO') {{ 'selected' }} @endif>
                                                                        COLECTIVO</option>
                                                                    <option
                                                                        @if ($juicio3[0]->tipo == 'BENEF') {{ 'selected' }} @endif>
                                                                        BENEF</option>
                                                                    <option
                                                                        @if ($juicio3[0]->tipo == 'DEMANDA') {{ 'selected' }} @endif>
                                                                        DEMANDA</option>
                                                                    <option
                                                                        @if ($juicio3[0]->tipo == 'DEMANDA SEGOB') {{ 'selected' }} @endif>
                                                                        DEMANDA SEGOB</option>
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


                                                                    <select class="custom-select" id="accion"
                                                                        name="accion">
                                                                        <option selected disabled value="">
                                                                            Selecicona la Accion</option>
                                                                        <option
                                                                            @if ($juicio3[0]->accion == 'Reinstalación') {{ 'selected' }} @endif>
                                                                            Reinstalación</option>
                                                                        <option
                                                                            @if ($juicio3[0]->accion == 'Indemnización') {{ 'selected' }} @endif>
                                                                            Indemnización </option>
                                                                        <option
                                                                            @if ($juicio3[0]->accion == 'Otros (prestaciones legales)') {{ 'selected' }} @endif>
                                                                            Otros (prestaciones legales)</option>
                                                                        <option
                                                                            @if ($juicio3[0]->accion == 'Solicitud de autorizacion de terminacion de efectos de nombramiento') {{ 'selected' }} @endif>
                                                                            Solicitud de autorizacion de terminacion de
                                                                            efectos de nombramiento</option>
                                                                        <option
                                                                            @if ($juicio3[0]->accion == 'Basificación') {{ 'selected' }} @endif>
                                                                            Basificación</option>
                                                                        <option
                                                                            @if ($juicio3[0]->accion == 'RENIVELACION SALARIAL') {{ 'selected' }} @endif>
                                                                            RENIVELACION SALARIAL</option>
                                                                        <option
                                                                            @if ($juicio3[0]->accion == 'HORAS EXTRAORDINARIAS') {{ 'selected' }} @endif>
                                                                            HORAS EXTRAORDINARIAS</option>
                                                                        <option
                                                                            @if ($juicio3[0]->accion == 'SALARIOS DEVENGADOS') {{ 'selected' }} @endif>
                                                                            SALARIOS DEVENGADOS</option>
                                                                    </select>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="kt-form__actions">
                                        <button
                                            onclick="update_actualiza_datos_generales({{$juicio3[0]->id_juicio}},'actualiza_datos_generales');"
                                            class="btn btn-success">Editar Juicio General</button>
                                      
                                    </div>

                                </div>
                            </div>



                            {{-- inicio car actor --}}
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <i class="fa-solid fa-user" style="color: #8b1818;"></i> - Actor
                                        </button>
                                    </h5>
                                </div>


                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#acordionjuicio">
                                    <div class="card-body">
                                      
                                      <form id="actor" name="actor">
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="card-deck">
                                                <div class="col-sm-4">
                                                    <div class="card">
                                                        <div class="card-header juiciotext ">
                                                            Nombre Completo:
                                                        </div>
                                                        <div class="card-body">

                                                            <p class="card-text">
                              <input class="form-control" name="nombre_completo" type="text" id="abogados_asignados" placeholder="Seleccione la Sala"value=" {{ $juicio3[0]->nombre_completo }}" >
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                        <div class="card-header juiciotext ">
                                                            Adscripcion :
                                                        </div>
                                                        <div class="card-body">

                                                            @php
                                                                // Creando catalogo para acortar codigo en el select
                                                                $adscripcion = [
                                                                    'Archivo General de la Nación',
                                                                    'Centro de Producción de Programas Informativos y Especiales',
                                                                    'Centro Nacional de Prevención de Desastres',
                                                                    'CFE',
                                                                    'CNI (antes CISEN)',
                                                                    'COMISION EJECUTIVA DE ATENCION A VICTIMAS Y OTROS',
                                                                    'Comisión Nacional para Prevenir y Erradicar la Violencia Contra las Mujeres',
                                                                    'Comisión para el Diálogo con los Pueblos Indígenas de México',
                                                                    'Consejo de Menores',
                                                                    'Coordinación General de la Comisión Mexicana de Ayuda a Refugiados',
                                                                    'Coordinación General de Protección Civil',
                                                                    'Coordinación para la Atención Integral de la Migración en la Frontera Sur',
                                                                    'DATOS DE LA RELACIÓN LABORAL',
                                                                    'DESPLEGABLE CON MODIFICACIÓN',
                                                                    'Diario Oficial',
                                                                    'Dirección General De Acuerdos Políticos',
                                                                    'Dirección general de Análisis y Prospectiva para la Poítica de Interior',
                                                                    'Dirección General de Asociaciones Religiosas',
                                                                    'Dirección General de Compilación y Consulta del Orden Jurídico Nacional',
                                                                    'Dirección General de Comunicación Social',
                                                                    'Dirección General de Coordinación con Entidades Federativas',
                                                                    'Dirección General De Coordinación Para La Operación Territorial',
                                                                ];
                                                            @endphp
                                                            <select class="custom-select" id="adscripcion"
                                                                name="adscripcion">
                                                                <option selected disabled value="">Selecicona la
                                                                    Adscripcion</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Archivo General de la Nación') {{ 'selected' }} @endif>
                                                                    Archivo General de la Nación</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Centro de Producción de Programas Informativos y Especiales') {{ 'selected' }} @endif>
                                                                    Centro de Producción de Programas Informativos y
                                                                    Especiales</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Centro Nacional de Prevención de Desastres ') {{ 'selected' }} @endif>
                                                                    Centro Nacional de Prevención de Desastres</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'CFE') {{ 'selected' }} @endif
                                                                    value="CFE">CFE</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'CNI (antes CISEN)') {{ 'selected' }} @endif
                                                                    value="CNI (antes CISEN)">CNI (antes CISEN)
                                                                </option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'COMISION EJECUTIVA DE ATENCION A VICTIMAS Y OTROS') {{ 'selected' }} @endif
                                                                    value="COMISION EJECUTIVA DE ATENCION A VICTIMAS Y OTROS">
                                                                    COMISION EJECUTIVA DE ATENCION A VICTIMAS Y OTROS
                                                                </option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Comisión Nacional para Prevenir y Erradicar la Violencia Contra las Mujeres') {{ 'selected' }} @endif
                                                                    value="Comisión Nacional para Prevenir y Erradicar la Violencia Contra las Mujeres">
                                                                    Comisión Nacional para Prevenir y Erradicar la
                                                                    Violencia Contra las Mujeres</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Comisión para el Diálogo con los Pueblos Indígenas de México') {{ 'selected' }} @endif
                                                                    value="Comisión para el Diálogo con los Pueblos Indígenas de México">
                                                                    Comisión para el Diálogo con los Pueblos Indígenas
                                                                    de México</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Consejo de Menores') {{ 'selected' }} @endif
                                                                    value="Consejo de Menores">Consejo de Menores
                                                                </option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Coordinación General de la Comisión Mexicana de Ayuda a Refugiados') {{ 'selected' }} @endif
                                                                    value="Coordinación General de la Comisión Mexicana de Ayuda a Refugiados">
                                                                    Coordinación General de la Comisión Mexicana de
                                                                    Ayuda a Refugiados</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Coordinación General de Protección Civil') {{ 'selected' }} @endif
                                                                    value="Coordinación General de Protección Civil">
                                                                    Coordinación General de Protección Civil</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Coordinación para la Atención Integral de la Migración en la Frontera Sur') {{ 'selected' }} @endif
                                                                    value="Coordinación para la Atención Integral de la Migración en la Frontera Sur">
                                                                    Coordinación para la Atención Integral de la
                                                                    Migración en la Frontera Sur</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'DATOS DE LA RELACIÓN LABORAL') {{ 'selected' }} @endif
                                                                    value="DATOS DE LA RELACIÓN LABORAL">DATOS DE LA
                                                                    RELACIÓN LABORAL</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'DESPLEGABLE CON MODIFICACIÓN') {{ 'selected' }} @endif
                                                                    value="DESPLEGABLE CON MODIFICACIÓN">DESPLEGABLE
                                                                    CON MODIFICACIÓN</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Diario Oficial') {{ 'selected' }} @endif
                                                                    value="Diario Oficial">Diario Oficial</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General De Acuerdos Políticos') {{ 'selected' }} @endif
                                                                    value="Dirección General De Acuerdos Políticos">
                                                                    Dirección General De Acuerdos Políticos</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección general de Análisis y Prospectiva para la Poítica de Interior') {{ 'selected' }} @endif
                                                                    value="Dirección general de Análisis y Prospectiva para la Poítica de Interior">
                                                                    Dirección general de Análisis y Prospectiva para la
                                                                    Poítica de Interior</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Asociaciones Religiosas') {{ 'selected' }} @endif
                                                                    value="Dirección General de Asociaciones Religiosas">
                                                                    Dirección General de Asociaciones Religiosas
                                                                </option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Compilación y Consulta del Orden Jurídico Nacional') {{ 'selected' }} @endif
                                                                    value="Dirección General de Compilación y Consulta del Orden Jurídico Nacional">
                                                                    Dirección General de Compilación y Consulta del
                                                                    Orden Jurídico Nacional</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Comunicación Social') {{ 'selected' }} @endif
                                                                    value="Dirección General de Comunicación Social">
                                                                    Dirección General de Comunicación Social</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Coordinación con Entidades Federativas') {{ 'selected' }} @endif
                                                                    value="Dirección General de Coordinación con Entidades Federativas">
                                                                    Dirección General de Coordinación con Entidades
                                                                    Federativas</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General De Coordinación Para La Operación Territorial') {{ 'selected' }} @endif
                                                                    value="Dirección General De Coordinación Para La Operación Territorial">
                                                                    Dirección General De Coordinación Para La Operación
                                                                    Territorial</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Cultura Democrática y Fomento Cívico') {{ 'selected' }} @endif
                                                                    value="Dirección General de Cultura Democrática y Fomento Cívico">
                                                                    Dirección General de Cultura Democrática y Fomento
                                                                    Cívico</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Enlace y Seguimiento') {{ 'selected' }} @endif
                                                                    value="Dirección General de Enlace y Seguimiento">
                                                                    Dirección General de Enlace y Seguimiento</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Estrategias para la Atención de Derechos Humanos') {{ 'selected' }} @endif
                                                                    value="Dirección General de Estrategias para la Atención de Derechos Humanos">
                                                                    Dirección General de Estrategias para la Atención de
                                                                    Derechos Humanos</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Estudios Legislativos') {{ 'selected' }} @endif
                                                                    value="Dirección General de Estudios Legislativos">
                                                                    Dirección General de Estudios Legislativos</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Información Legislativa') {{ 'selected' }} @endif
                                                                    value="Dirección General de Información Legislativa">
                                                                    Dirección General de Información Legislativa
                                                                </option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Infraestructura Tecnologica de Seguridad Pública') {{ 'selected' }} @endif
                                                                    value="Dirección General de Infraestructura Tecnologica de Seguridad Pública">
                                                                    Dirección General de Infraestructura Tecnologica de
                                                                    Seguridad Pública</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Juegos y Sorteos') {{ 'selected' }} @endif
                                                                    value="Dirección General de Juegos y Sorteos">
                                                                    Dirección General de Juegos y Sorteos</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Medios Impresos') {{ 'selected' }} @endif
                                                                    value="Dirección General de Medios Impresos">
                                                                    Dirección General de Medios Impresos</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General De Modernización, Organización Y Eficiencia Administrativa') {{ 'selected' }} @endif
                                                                    value="Dirección General De Modernización, Organización Y Eficiencia Administrativa">
                                                                    Dirección General De Modernización, Organización Y
                                                                    Eficiencia Administrativa</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Normatividad de Comunicación') {{ 'selected' }} @endif
                                                                    value="Dirección General de Normatividad de Comunicación">
                                                                    Dirección General de Normatividad de Comunicación
                                                                </option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General De Planeación Estratégica Para La Prevención Social') {{ 'selected' }} @endif
                                                                    value="Dirección General De Planeación Estratégica Para La Prevención Social">
                                                                    Dirección General De Planeación Estratégica Para La
                                                                    Prevención Social</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Política Pública de Derechos Humanos') {{ 'selected' }} @endif
                                                                    value="Dirección General de Política Pública de Derechos Humanos">
                                                                    Dirección General de Política Pública de Derechos
                                                                    Humanos </option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Programación y Presupuesto') {{ 'selected' }} @endif
                                                                    value="Dirección General de Programación y Presupuesto">
                                                                    Dirección General de Programación y Presupuesto
                                                                </option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Protección Civil') {{ 'selected' }} @endif
                                                                    value="Dirección General de Protección Civil">
                                                                    Dirección General de Protección Civil</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Radio, Televisión y Cinematografía') {{ 'selected' }} @endif
                                                                    value="Dirección General de Radio, Televisión y Cinematografía">
                                                                    Dirección General de Radio, Televisión y
                                                                    Cinematografía</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Recursos Humanos') {{ 'selected' }} @endif
                                                                    value="Dirección General de Recursos Humanos">
                                                                    Dirección General de Recursos Humanos</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Recursos Materiales y Servicios Generales') {{ 'selected' }} @endif
                                                                    value="Dirección General de Recursos Materiales y Servicios Generales">
                                                                    Dirección General de Recursos Materiales y Servicios
                                                                    Generales</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General de Tecnologías de la Información y Comunicaciones') {{ 'selected' }} @endif
                                                                    value="Dirección General de Tecnologías de la Información y Comunicaciones">
                                                                    Dirección General de Tecnologías de la Información y
                                                                    Comunicaciones</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General del Registro Nacional de Población e Identidad') {{ 'selected' }} @endif
                                                                    value="Dirección General del Registro Nacional de Población e Identidad">
                                                                    Dirección General del Registro Nacional de Población
                                                                    e Identidad</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General del Registro Nacional de Población e Identificación Personal') {{ 'selected' }} @endif
                                                                    value="Dirección General del Registro Nacional de Población e Identificación Personal">
                                                                    Dirección General del Registro Nacional de Población
                                                                    e Identificación Personal</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Dirección General para el Fondo de Desastres Naturales') {{ 'selected' }} @endif
                                                                    value="Dirección General para el Fondo de Desastres Naturales">
                                                                    Dirección General para el Fondo de Desastres
                                                                    Naturales</option>
                                                                <option
                                                                    @if (
                                                                        $juicio3[0]->adscripcion ==
                                                                            'Dirección General para la Protección de Personas Defensoras de Derechos Humanos y Periodistas') {{ 'selected' }} @endif
                                                                    value="Dirección General para la Protección de Personas Defensoras de Derechos Humanos y Periodistas">
                                                                    Dirección General para la Protección de Personas
                                                                    Defensoras de Derechos Humanos y Periodistas
                                                                </option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Ecoblue de México, S.A. de C.V.') {{ 'selected' }} @endif
                                                                    value="Ecoblue de México, S.A. de C.V.">Ecoblue de
                                                                    México, S.A. de C.V.</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Entonces Registro Federal de Electores') {{ 'selected' }} @endif
                                                                    value="Entonces Registro Federal de Electores">
                                                                    Entonces Registro Federal de Electores</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'GUAIDA, S A DE C.V. Y/O') {{ 'selected' }} @endif
                                                                    value="GUAIDA, S A DE C.V. Y/O">GUAIDA, S A DE C.V.
                                                                    Y/O</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'INM') {{ 'selected' }} @endif
                                                                    value="INM">INM</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado') {{ 'selected' }} @endif
                                                                    value="Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado">
                                                                    Instituto de Seguridad y Servicios Sociales de los
                                                                    Trabajadores del Estado</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Instituto Estatal de Educación Pública') {{ 'selected' }} @endif
                                                                    value="Instituto Estatal de Educación Pública">
                                                                    Instituto Estatal de Educación Pública</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Instituto Nacional De Estudios Históricos De Las Revoluciones De México') {{ 'selected' }} @endif
                                                                    value="Instituto Nacional De Estudios Históricos De Las Revoluciones De México">
                                                                    Instituto Nacional De Estudios Históricos De Las
                                                                    Revoluciones De México</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Instituto Nacional para el Federalismo y el Desarrollo Municipal') {{ 'selected' }} @endif
                                                                    value="Instituto Nacional para el Federalismo y el Desarrollo Municipal">
                                                                    Instituto Nacional para el Federalismo y el
                                                                    Desarrollo Municipal</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Instituto Nacional para la Educación de los Adultos') {{ 'selected' }} @endif
                                                                    value="Instituto Nacional para la Educación de los Adultos">
                                                                    Instituto Nacional para la Educación de los Adultos
                                                                </option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'INSTITUTO PARA DEVOLVER AL PUEBLO LO ROBADO') {{ 'selected' }} @endif
                                                                    value="INSTITUTO PARA DEVOLVER AL PUEBLO LO ROBADO">
                                                                    INSTITUTO PARA DEVOLVER AL PUEBLO LO ROBADO</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'LyFC') {{ 'selected' }} @endif
                                                                    value="LyFC">LyFC</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'No presta servicios para SEGOB, Ayuntamiento Jiutepec') {{ 'selected' }} @endif
                                                                    value="No presta servicios para SEGOB, Ayuntamiento Jiutepec">
                                                                    No presta servicios para SEGOB, Ayuntamiento
                                                                    Jiutepec</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'No prestaba servicios en SEGOB') {{ 'selected' }} @endif
                                                                    value="No prestaba servicios en SEGOB">No prestaba
                                                                    servicios en SEGOB</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Oficialia Mayor') {{ 'selected' }} @endif
                                                                    value="Oficialia Mayor">Oficialia Mayor</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Oficina del C. Secretario') {{ 'selected' }} @endif
                                                                    value="Oficina del C. Secretario">Oficina del C.
                                                                    Secretario</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Órgano Interno de Control') {{ 'selected' }} @endif
                                                                    value="Órgano Interno de Control">Órgano Interno de
                                                                    Control</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Policía Federal') {{ 'selected' }} @endif
                                                                    value="Policía Federal">Policía Federal</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Prevención y Readapción Social') {{ 'selected' }} @endif
                                                                    value="Prevención y Readapción Social">Prevención y
                                                                    Readapción Social</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Secretaría de Gobernación') {{ 'selected' }} @endif
                                                                    value="Secretaría de Gobernación">Secretaría de
                                                                    Gobernación</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Secretaría de Seguridad y Protección Ciudadana') {{ 'selected' }} @endif
                                                                    value="Secretaría de Seguridad y Protección Ciudadana">
                                                                    Secretaría de Seguridad y Protección Ciudadana
                                                                </option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Secretaría General del Consejo Nacional de Población') {{ 'selected' }} @endif
                                                                    value="Secretaría General del Consejo Nacional de Población">
                                                                    Secretaría General del Consejo Nacional de Población
                                                                </option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Secretaría Técnica de la Comisión Calificadora de Publicaciones y Revistas Ilustradas') {{ 'selected' }} @endif
                                                                    value="Secretaría Técnica de la Comisión Calificadora de Publicaciones y Revistas Ilustradas">
                                                                    Secretaría Técnica de la Comisión Calificadora de
                                                                    Publicaciones y Revistas Ilustradas</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Secretaria Tecnica Para La Implementacion De Sistema De Justicia Penal') {{ 'selected' }} @endif
                                                                    value="Secretaria Tecnica Para La Implementacion De Sistema De Justicia Penal">
                                                                    Secretaria Tecnica Para La Implementacion De Sistema
                                                                    De Justicia Penal</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Publica') {{ 'selected' }} @endif
                                                                    value="Secretariado Ejecutivo del Sistema Nacional de Seguridad Publica">
                                                                    Secretariado Ejecutivo del Sistema Nacional de
                                                                    Seguridad Publica</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Segob (no presta servicios)') {{ 'selected' }} @endif
                                                                    value="Segob (no presta servicios)">Segob (no
                                                                    presta servicios)</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Servicio de Protección Federal') {{ 'selected' }} @endif
                                                                    value="Servicio de Protección Federal">Servicio de
                                                                    Protección Federal</option>
                                                                <option
                                                                    @if (
                                                                        $juicio3[0]->adscripcion ==
                                                                            'SISTEMA DIF. MUNICIPAL DE JIUTEPEC [DESARROLLO INTEGRAL DE LA FAMILIADE JIUTEPEC MORELOS] JUICIO RADICADO EN EL TECA DE MORELOS') {{ 'selected' }} @endif
                                                                    value="SISTEMA DIF. MUNICIPAL DE JIUTEPEC [DESARROLLO INTEGRAL DE LA FAMILIADE JIUTEPEC MORELOS] JUICIO RADICADO EN EL TECA DE MORELOS">
                                                                    SISTEMA DIF. MUNICIPAL DE JIUTEPEC [DESARROLLO
                                                                    INTEGRAL DE LA FAMILIADE JIUTEPEC MORELOS] JUICIO
                                                                    RADICADO EN EL TECA DE MORELOS</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Sistema Público De Radiodifusión Del Estado Mexicano') {{ 'selected' }} @endif
                                                                    value="Sistema Público De Radiodifusión Del Estado Mexicano">
                                                                    Sistema Público De Radiodifusión Del Estado Mexicano
                                                                </option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Subsecretaría de Derechos Humanos') {{ 'selected' }} @endif
                                                                    value="Subsecretaría de Derechos Humanos">
                                                                    Subsecretaría de Derechos Humanos</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Subsecretaria de Enlace Legislativo') {{ 'selected' }} @endif
                                                                    value="Subsecretaria de Enlace Legislativo">
                                                                    Subsecretaria de Enlace Legislativo</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Subsecretaría de Gobierno') {{ 'selected' }} @endif
                                                                    value="Subsecretaría de Gobierno">Subsecretaría de
                                                                    Gobierno</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Subsecretaría de Normatividad de Medios') {{ 'selected' }} @endif
                                                                    value="Subsecretaría de Normatividad de Medios">
                                                                    Subsecretaría de Normatividad de Medios</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Subsecretaría de Población, Migración y Asuntos Religiosos') {{ 'selected' }} @endif
                                                                    value="Subsecretaría de Población, Migración y Asuntos Religiosos">
                                                                    Subsecretaría de Población, Migración y Asuntos
                                                                    Religiosos</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Subsecretaría de Prevención y Participación Ciudadana') {{ 'selected' }} @endif
                                                                    value="Subsecretaría de Prevención y Participación Ciudadana">
                                                                    Subsecretaría de Prevención y Participación
                                                                    Ciudadana</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Talleres Gráficos de México') {{ 'selected' }} @endif
                                                                    value="Talleres Gráficos de México">Talleres
                                                                    Gráficos de México</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'TFCA') {{ 'selected' }} @endif
                                                                    value="TFCA">TFCA</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Unidad de Desarrollo Político y Fomento Cívico') {{ 'selected' }} @endif
                                                                    value="Unidad de Desarrollo Político y Fomento Cívico">
                                                                    Unidad de Desarrollo Político y Fomento Cívico
                                                                </option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Unidad de Enlace') {{ 'selected' }} @endif
                                                                    value="Unidad de Enlace">Unidad de Enlace</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Unidad de Enlace Federal') {{ 'selected' }} @endif
                                                                    value="Unidad de Enlace Federal">Unidad de Enlace
                                                                    Federal</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Unidad de Enlace Federal y Coordinación con Entidades Federativas') {{ 'selected' }} @endif
                                                                    value="Unidad de Enlace Federal y Coordinación con Entidades Federativas">
                                                                    Unidad de Enlace Federal y Coordinación con
                                                                    Entidades Federativas</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Unidad de Enlace Legislativo') {{ 'selected' }} @endif
                                                                    value="Unidad de Enlace Legislativo">Unidad de
                                                                    Enlace Legislativo</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Unidad de Gobierno') {{ 'selected' }} @endif
                                                                    value="Unidad de Gobierno">Unidad de Gobierno
                                                                </option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Unidad de Normatividad de Medios') {{ 'selected' }} @endif
                                                                    value="Unidad de Normatividad de Medios">Unidad de
                                                                    Normatividad de Medios</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Unidad de Normatividad de Medios de Comunicación') {{ 'selected' }} @endif
                                                                    value="Unidad de Normatividad de Medios de Comunicación">
                                                                    Unidad de Normatividad de Medios de Comunicación
                                                                </option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Unidad De Política Migratoria') {{ 'selected' }} @endif
                                                                    value="Unidad De Política Migratoria">Unidad De
                                                                    Política Migratoria</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Unidad de Servicios y Formación Policial') {{ 'selected' }} @endif
                                                                    value="Unidad de Servicios y Formación Policial">
                                                                    Unidad de Servicios y Formación Policial</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Unidad General de Asuntos Jurídicos') {{ 'selected' }} @endif
                                                                    value="Unidad General de Asuntos Jurídicos">Unidad
                                                                    General de Asuntos Jurídicos</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Unidad para el Desarrollo Político') {{ 'selected' }} @endif
                                                                    value="Unidad para el Desarrollo Político">Unidad
                                                                    para el Desarrollo Político</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Unidad para la Atención de las Organizaciones Sociales') {{ 'selected' }} @endif
                                                                    value="Unidad para la Atención de las Organizaciones Sociales">
                                                                    Unidad para la Atención de las Organizaciones
                                                                    Sociales</option>
                                                                <option
                                                                    @if ($juicio3[0]->adscripcion == 'Unidad para la Promoción y Defensa de los Derechos Humanos') {{ 'selected' }} @endif
                                                                    value="Unidad para la Promoción y Defensa de los Derechos Humanos">
                                                                    Unidad para la Promoción y Defensa de los Derechos
                                                                    Humanos</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="card">
                                                        <div class="card-header juiciotext ">
                                                            UR :
                                                        </div>
                                                        @php
                                                            $urcatalogo = ['100', '111', '114', '130', '200', '211', '212', '214', '215', '217', '223', '230', '231', '232', '270', '271', '272', '273', '300', '311', '313', '410', '412', '500', '510', '511', '513', '515', '541', '700', '800', '810', '811', '812', '813', '814', '900', '901', '911', '913', '914', '915', '920', '941', 'A00', 'C00', 'E2D', 'EZN', 'F00', 'K00', 'M00', 'N00', 'Q00', 'S/UR', 'T00', 'V00'];
                                                        @endphp


                                                        <div class="card-body">
                                                            <p class="card-text">

                                                                <select class="custom-select" id="ur"
                                                                    name="ur">
                                                                    @foreach ($urcatalogo as $e)
                                                                        @if ($e == $juicio3[0]->ur)
                                                                            <option selected
                                                                                value={{ $e }}>
                                                                                {{ $e }} </option>
                                                                        @else
                                                                            <option value={{ $e }}>
                                                                                {{ $e }}</option>
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
                                                            Denominacion :
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="card-text">
                                                                @php
                                                                    $catdenomicacion = ['Base', 'Confianza', 'Enlace', 'Honorarios', 'Libre designación', 'S/REL. LAB.', 'Servicio Exterior Mexicano', 'SPC'];
                                                                @endphp
                                                                <select class="custom-select" id="denominacion"
                                                                    name="denominacion">
                                                                    @foreach ($catdenomicacion as $deno)
                                                                        @if ($deno == $juicio3[0]->denominacion)
                                                                            <option selected
                                                                                value={{ $deno }}>
                                                                                {{ $deno }}</option>
                                                                        @else
                                                                            <option value={{ $deno }}>
                                                                                {{ $deno }}</option>
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
                                                            Puesto
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="card-text">
                                                                @php
                                                                    $puestcatalogo = ['Abogado penitenciario', 'Agende Federal de Migración', 'Agente de Protección al Inmigrante', 'AGENTE DE PROTECCION AL MIGRANTE', 'Agente Federal de Migración', 'Agente Federal de Migración B', 'Agregada Administativa C, en los Ángeles', 'Analista Especializado en Servicios Migratorios', 'Analista PRS administrativo', 'Analista PRS Administrativo FC', 'Analista técnico nivel 6', 'Asistente de Áreas de Servicios Migratorios', 'Auxiliar Administrativo PRS de SG', 'Auxiliar en SG y mantenimiento PRS', 'Chofer', 'Cocinero penitenciario B', 'Codinador de Unidad de Áreas de Servicios Migratorios ', 'Coordinadora', 'Dictaminador de Asuntos Migratorios', 'Dir. Área', 'DIR. GRAL.', 'DIR. GRAL. ADJ.', 'Dirección', 'Director', 'Director de área', 'Director General Adjunto', 'Directora', 'Directora de Área', 'Directora General Adjunta', 'Diversos', 'Enlace', 'Enlace de alta responsabilidad', 'Enlace de alto nivel de responsabilidad'];
                                                                @endphp
                                                                <input type="text" list="puestoitem"
                                                                    class="form-control"
                                                                    placeholder="Ingresa El Puesto" id="puesto"
                                                                    name="puesto"
                                                                    value=" {{ $juicio3[0]->puesto }}">
                                                                <datalist class="custom-datalist" id="puestoitem">
                                                                    @foreach ($puestcatalogo as $puestoc)
                                                                        @if ($puestoc == $juicio3[0]->puesto)
                                                                            <option selected
                                                                                value={{ $puestoc }}>
                                                                                {{ $puestoc }}</option>
                                                                        @else
                                                                            <option value="{{ $puestoc }}">
                                                                                {{ $puestoc }}</option>
                                                                        @endif
                                                                    @endforeach
                                                                </datalist>
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
                                                            @php
                                                                $nivelcat = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '14', '21', '22', '23', '-', '*', 'DG', 'Enlace', 'K11', 'K32', 'L11', 'L31', ' L32', 'LA1', 'LB1', 'LC1', 'M11', 'M21', 'M23', 'M33', 'M43', 'MA1', 'MB1', 'MB2', 'MC1', 'MC2', 'MC3', 'N11', 'N21', 'N22', 'N22 y P12', 'N23', 'N31', 'N33', 'N8', ' NA', 'NA1', 'NA1/OA1', 'NA2', 'NB1', 'NB2', 'NB3', 'NC1', 'NC2', 'NC3', ' NIVEL', 'O11', ' O21', 'O23', 'O32', 'OA1', 'OA2', 'OB1', 'OB3', ' OC1', 'OC2', 'P11', 'p12', 'P12, P13', 'P12 P13 P12 P12', 'P13', 'P13 P12 P12 P12', 'P2', 'P23', 'P23 P13 P13', 'P31', 'P32', 'P33', 'PA1', 'PC2', 'PQ1', 'PQ2', 'PQ3', 'QA', 'SPFOF', 'Varios'];
                                                            @endphp
                                                            <p class="card-text">
                                                           <input type="text" class="form-control input_dinero" name="nivel" id="nivel"data-type="currency" min="1" value="{{$juicio3[0]->nivel}}">
                                                                <datalist class="custom-datalist" id="niveles">
                                                                    @foreach ($nivelcat as $nivc)
                                                                        @if ($nivc == $juicio3[0]->nivel)
                                                                            <option selected
                                                                                value={{ $nivc }}>
                                                                                {{ $nivc }}</option>
                                                                        @else
                                                                            <option value="{{ $nivc }}">
                                                                                {{ $nivc }}</option>
                                                                        @endif
                                                                    @endforeach
                                                                </datalist>
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

                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span
                                                                        class="input-group-text">$</span></div>
                                                                <input type="text" class="form-control "
                                                                    name="salarioMen" id="salarioMen"
                                                                    data-type="currency"
                                                                    value="{{ $juicio3[0]->salarioMen }}">
                                                            </div>
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

                                                                <input type="date" class="form-control"
                                                                    id="inicio_rellab"
                                                                    value="{{ $juicio3[0]->inicio_rellab }}"
                                                                    name="inicio_rellab">
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
                                                                <input type="date" class="form-control"
                                                                    id="terminacion_rellab"
                                                                    value="{{ $juicio3[0]->terminacion_rellab }}"
                                                                    name="terminacion_rellab">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>                                                                                              
                                            </div>
                                        </div>
                                      </form>
                                      <div class="kt-form__actions">
                                        <button
                                            onclick="update_actualiza_datos_generales({{ $juicio3[0]->id_juicio }},'actor');"
                                            class="btn btn-success">Editar Actor</button>
                                        
                                    </div>

                                    </div>
                                </div>


                            </div>
                            {{-- fin car actor --}}
                            {{-- Inicio card  Tramite --}}
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

                                <div id="tramitea" class="collapse" aria-labelledby="stramite"
                                    data-parent="#acordionjuicio"> 

                                    <div class="card-body">   
                            <form id="tramite" name="tramite">          
                              <div class="row row-cols-1 row-cols-md-3">                                                                                   
                    <h5 class="subcardtt"><i class="fa-sharp fa-solid fa-file-invoice"style="color: #8b1818;"></i> Expediente Personal R.H</h5>
                                            <div class="card-deck">
                                                <div class="col-sm-4">
                                                    <div class="card">
                                                        <div class="card-header juiciotext ">
                                                            Solicitud
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="card-text">
                                            <input type="date" class="form-control" id="exp_personal_rh_solicitud"
                                                                    value="{{ $juicio3[0]->exp_personal_rh_solicitud}}"
                                                                    name="exp_personal_rh_solicitud">
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
                                                                <input type="date" class="form-control"
                                                                    id="exp_personal_rh_devolucion"
                                                                    value="{{ $juicio3[0]->exp_personal_rh_devolucion }}"
                                                                    name="exp_personal_rh_devolucion">
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

                                                                <input type="number" class="form-control"
                                                                    id="fojas" name="fojas" placeholder="0"
                                                                    value="{{ $juicio3[0]->fojas }}">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <h5 class="subcardtt"><i class="fa-sharp fa-solid fa-file-invoice"
                                              style="color: #8b1818;"></i> Expediente de Adscripcion</h5>
                                      <div class="card-deck">


                                          <div class="col-sm-6">
                                              <div class="card">
                                                  <div class="card-header juiciotext ">
                                                      Solicitud
                                                  </div>

                                                  <div class="card-body">

                                                      <p class="card-text">
                                                          <input type="date" class="form-control"
                                                              id="exp_adscripcion_solicitud"
                                                              value="{{ $juicio3[0]->exp_adscripcion_solicitud }}"
                                                              name="exp_adscripcion_solicitud">
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

                                                          <input type="date" class="form-control"
                                                              id="exp_adscripcion_devolucion"
                                                              name="exp_adscripcion_devolucion"
                                                              value="{{ $juicio3[0]->exp_adscripcion_devolucion }}">
                                                      </p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-deck">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header juiciotext ">
                                                    Descripcion
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        <textarea name="descripcion" class="form-control" id="descripcion" placeholder="Sin Datos por el Momento">{{ $juicio3[0]->descripcion }}</textarea>
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

                                                          <input type="date" class="form-control"
                                                              id="cierredeinstruccion"
                                                              name="cierredeinstruccion"value="{{ $juicio3[0]->cierredeinstruccion }}">
                                                      </p>
                                                  </div>
                                              </div>
                                          </div> 
                                        
                                      </div>                                       
                                      </form>
                                      
                                      
                                      <div class="kt-form__actions">
                                        <button onclick="update_actualiza_datos_generales({{$juicio3[0]->id_juicio}},'tramite');"class="btn btn-success">Editar tramite
                                        </button>
                                       
                                    </div>
                                    </div>
                                </div>
                            </div>


                            {{-- fin card  Tramite --}}

                            {{-- inicio card Laudo --}}
                            <div class="card">
                                <div class="card-header" id="laudos">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#laudoab" aria-expanded="false" aria-controls="laudoab">
                                            <i class="fa-sharp fa-solid fa-file-invoice" style="color: #8b1818;"></i>
                                            - Laudo
                                        </button>
                                    </h5>
                                </div>
                                <div id="laudoab" class="collapse" aria-labelledby="laudoab"
                                    data-parent="#acordionjuicio">

                                    <div class="card-body">
                                        <div class="row row-cols-1 row-cols-md-3">

                                          <form id="laudo" name="laudo">
                                            <div class="card-deck">
                                                <div class="col-sm-4">
                                                    <div class="card">
                                                        <div class="card-header  juiciotext">
                                                            Fecha
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="card-text">
                         <input type="date" class="form-control" id="lau_fecha" name="lau_fecha" value="{{ $juicio3[0]->lau_fecha }}">
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
                    <input type="date" class="form-control"  id="lau_sentido" name="lau_sentido" value="{{ $juicio3[0]->lau_sentido }}">
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

                                                                <select class="custom-select" id="reinstalacion"
                                                                    name="reinstalacion">
                                                                    <option
                                                                        @if ($juicio3[0]->reinstalacion == 'Si') {{ 'selected' }} @endif
                                                                        value="Si">Si</option>
                                                                    <option
                                                                        @if ($juicio3[0]->reinstalacion == 'No') {{ 'selected' }} @endif
                                                                        value="No">No</option>
                                                                </select>

                                                                {{-- <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
                                                <label>
                                                  <input @if ($juicio3[0]->reinstalacion == 'No') checked="checked" @endif type="checkbox"  name="reinstalacion">
                                                  <span></span>
                                                </label>
                                              </span> --}}
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
                                                                <select class="custom-select" id="indemnizacion"
                                                                    name="indemnizacion">
                                                                    <option
                                                                        @if ($juicio3[0]->indemnizacion == 'Si') {{ 'selected' }} @endif
                                                                        value="Si">Si</option>
                                                                    <option
                                                                        @if ($juicio3[0]->indemnizacion == 'No') {{ 'selected' }} @endif
                                                                        value="No">No</option>
                                                                </select>
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
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span
                                                                        class="input-group-text">$</span></div>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Sin Dato por el Momento"
                                                                    aria-describedby="basic-addon1"
                                                                    value="{{ $juicio3[0]->pasivo_total }}"
                                                                    name="pasivo_total" id="pasivo_total">
                                                            </div>
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

                                                                <input type="date" class="form-control"
                                                                    id="f_notificacion_laudo"
                                                                    value="{{ $juicio3[0]->f_notificacion_laudo }}"
                                                                    name="f_notificacion_laudo">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                          </form>

                                        </div>
                                        <div class="kt-form__actions">
                                          <button onclick="update_actualiza_datos_generales({{$juicio3[0]->id_juicio}},'laudo');"class="btn btn-success">Editar Laudo
                                          </button>
                                         
                                      </div>
                                    </div>
                                </div>
                            </div>
                            {{-- fin card Laudo --}}

                            {{-- card amparo --}}
                            <div class="card">
                                <div class="card-header" id="amparos">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#amparoab" aria-expanded="false" aria-controls="amparoab">
                                            <i class="fa-sharp fa-solid fa-file-invoice" style="color: #8b1818;"></i>
                                            - Amparo
                                        </button>
                                    </h5>
                                </div>
                                <div id="amparoab" class="collapse" aria-labelledby="amparoab"
                                    data-parent="#acordionjuicio">
                                    <div class="card-body">
                                      <form id="amparo" name="amparo">
                                        <div class="row ">
                                          
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-header  juiciotext">
                                                        Parte
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text">
                                                            <input type="date" class="form-control" id="parte"
                                                                value="{{ $juicio3[0]->parte }}" name="parte">
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

                                                            <select name="dir_indir" id="dir_indir"
                                                                class="custom-select">
                                                                <option
                                                                    @if ($juicio3[0]->dir_indir == 'Directo') {{ 'selected' }} @endif>
                                                                    Directo</option>
                                                                <option
                                                                    @if ($juicio3[0]->dir_indir == 'Indirecto') {{ 'selected' }} @endif>
                                                                    Indirecto</option>
                                                            </select>
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
                                                            <input class="form-control" type="text" id="ad_dt"
                                                                placeholder="Sin Dato por el Momento" name="ad_dt"
                                                                value="{{ $juicio3[0]->ad_dt }}" name="ad_dt">
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
                                                            <input class="form-control" type="text"
                                                                id="conceptode" placeholder="Sin Dato por el Momento"
                                                                value="{{ $juicio3[0]->conceptode }}"
                                                                name="conceptode">
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

                                                            <input type="date" class="form-control"
                                                                id="aud_const2"
                                                                value="{{ $juicio3[0]->aud_const2 }}"
                                                                name="aud_const2">
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


                                                            <input type="date" class="form-control"
                                                                id="fecha_sentencia"
                                                                value="{{ $juicio3[0]->fecha_sentencia }}"
                                                                name="fecha_sentencia">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="card">
                                                    <div class="card-header  juiciotext">
                                                        Sentido Sentecia
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text">
                                                            <select class="custom-select" id="sentido_sentencia"
                                                                name="sentido_sentencia">
                                                                <option
                                                                    @if ($juicio3[0]->sentido_sentencia == 'Ampara y Protege') {{ 'selected' }} @endif>
                                                                    Ampara y Protege Actor</option>
                                                                <option
                                                                    @if ($juicio3[0]->sentido_sentencia == 'No Ampara Ni Protege') {{ 'selected' }} @endif>
                                                                    No Ampara Ni Protege"</option>
                                                                <option
                                                                    @if ($juicio3[0]->sentido_sentencia == 'Niega') {{ 'selected' }} @endif>
                                                                    Niega</option>
                                                            </select>
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
                                                            <input class="form-control" type="text"
                                                                id="recurso_amparo"
                                                                placeholder="Sin Dato por el Momento"
                                                                value="{{ $juicio3[0]->recurso_amparo }}"
                                                                name="recurso_amparo">
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
                                                            <select class="custom-select" id="parte_adherente"
                                                                name="parte_adherente">
                                                                <option
                                                                    @if ($juicio3[0]->parte_adherente == 'Trabajador') {{ 'selected' }} @endif
                                                                    value="Trabajador">Trabajador</option>
                                                                <option
                                                                    @if ($juicio3[0]->parte_adherente == 'Segob') {{ 'selected' }} @endif
                                                                    value="Segob">Segob</option>
                                                            </select>
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
                                                            <select class="custom-select" id="sentido_ad"
                                                                name="sentido_ad">
                                                                <option
                                                                    @if ($juicio3[0]->sentido_ad == 'Concede') {{ 'selected' }} @endif
                                                                    value="Concede">Concede</option>
                                                                <option
                                                                    @if ($juicio3[0]->sentido_ad == 'Niega') {{ 'selected' }} @endif
                                                                    value="Niega">Niega</option>
                                                            </select>
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

                                                            <input type="date" class="form-control" id="fecha_ad"
                                                                value="{{ $juicio3[0]->fecha_ad }}" name="fecha_ad">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      </form>
                                      <div class="kt-form__actions">
                                        <button onclick="update_actualiza_datos_generales({{$juicio3[0]->id_juicio}},'amparo');"class="btn btn-success">Editar Amparo
                                        </button>                                        
                                    </div>

                                    </div>
                                </div>
                                {{-- fincard amparo --}}
                                {{-- card ejecucion --}}

                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button"
                                                data-toggle="collapse" data-target="#ejecucionab" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                <i class="fa-sharp fa-solid fa-file-invoice"
                                                    style="color: #8b1818;"></i> - Ejecucion
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="ejecucionab" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#acordionjuicio">
                                        <div class="card-body">
                                          
                                          

                                            <div class="row row-cols-1 row-cols-md-3">
                                              <form name="ejecucion" id="ejecucion">


                                                <div class="card-deck">

                                                    <div class="col-md-4">
                                                        <div class="card">
                                                            <div class="card-header  juiciotext">
                                                                Fecha Cump. Reinstalacion
                                                            </div>
                                                            <div class="card-body">
                                                                <p class="card-text">


                                                                    <input type="date" class="form-control"
                                                                        id="fechacumpreinstalacion"
                                                                        value="{{ $juicio3[0]->fechacumpreinstalacion }}"
                                                                        name="fechacumpreinstalacion">
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

                                                                    <input type="date" class="form-control"
                                                                        id="notf2"
                                                                        value="{{ $juicio3[0]->notf2 }}"
                                                                        name="notf2">

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

                                                                    <input type="date" class="form-control"
                                                                        id="r_h"
                                                                        value="{{ $juicio3[0]->r_h }}"
                                                                        name="r_h">
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
                                                                    <input type="date" class="form-control"
                                                                        id="vence"
                                                                        value="{{ $juicio3[0]->vence }}"
                                                                        name="vence">
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

                                                                    <select class="custom-select" id="sentido"
                                                                        name="sentido">
                                                                        <option selected disabled value="">
                                                                            Selecicona</option>
                                                                        <option
                                                                            @if ($juicio3[0]->sentido == 'Allana') {{ 'selected' }} @endif
                                                                            value="Allana">Allana</option>
                                                                        <option
                                                                            @if ($juicio3[0]->sentido == 'Alta') {{ 'selected' }} @endif
                                                                            value="Alta">Alta</option>
                                                                        <option
                                                                            @if ($juicio3[0]->sentido == 'Baja') {{ 'selected' }} @endif
                                                                            value="Baja">Baja</option>
                                                                    </select>

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
                                                                    <input class="form-control" type="date"
                                                                        id="solicitadoarh"
                                                                        placeholder="Sin Dato por el Momento"
                                                                        value="{{ $juicio3[0]->solicitadoarh }}"
                                                                        name="solicitadoarh">

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

                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span
                                                                            class="input-group-text">$</span></div>
                                                                    <input class="form-control" type="number"
                                                                        id="cantidad" min="1"
                                                                        value="{{ $juicio3[0]->cantidad }}"
                                                                        name="cantidad">
                                                                </div>
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
                                                                    <input class="form-control" type="text"
                                                                        id="folio"
                                                                        placeholder="Sin Dato por el Momento"
                                                                        value="{{ $juicio3[0]->folio }}"
                                                                        name="folio">
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
                                                                    <input class="form-control" type="text"
                                                                        id="nodeintento"
                                                                        placeholder="Sin Dato por el Momento"
                                                                        name="nodeintento"
                                                                        value="{{ $juicio3[0]->nodeintento }}">
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
                                                                    <input class="form-control" type="date"
                                                                        id="fechaproxima" name="fechaproxima"
                                                                        placeholder="Sin Dato por el Momento"
                                                                        value="{{ $juicio3[0]->fechaproxima }}">
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
                                                                    <input class="form-control" type="date"
                                                                        id="cumplimiento"
                                                                        placeholder="Sin Dato por el Momento"
                                                                        name="cumplimiento"
                                                                        value="{{ $juicio3[0]->cumplimiento }}">
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </form>
                                            </div>
                                            <div class="kt-form__actions">
                                              <button onclick="update_actualiza_datos_generales({{$juicio3[0]->id_juicio}},'ejecucion');"class="btn btn-success">Editar Ejecucion
                                              </button>                                        
                                          </div>


                                        </div>
                                    </div>
                                </div>
                                {{-- fin card ejecucion --}}
                                {{-- card conclusion --}}

                                <div class="card">
                                    <div class="card-header" id="conclusions">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button"
                                                data-toggle="collapse" data-target="#conclusionab"
                                                aria-expanded="false" aria-controls="conclusionab">
                                                <i class="fa-sharp fa-solid fa-file-invoice"
                                                    style="color: #8b1818;"></i> - Conclusion
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="conclusionab" class="collapse" aria-labelledby="conclusions"
                                        data-parent="#acordionjuicio">
                                        <div class="card-body">
                                            <div class="row row-cols-1 row-cols-md-3">
                                              <form name="conclusion" id="conclusion">
                                                <div class="card-deck">
                                                    <div class="col-lg-6">
                                                        <div class="card">
                                                            <div class="card-header  juiciotext">
                                                                MES PARA SEGOB DE CONCLUSIÓN
                                                            </div>
                                                            <div class="card-body">
                                                                <p class="card-text">
                                                                    <input class="form-control" type="date"
                                                                        id="mesdegobconclusion"
                                                                        name="mesdegobconclusion"
                                                                        placeholder="Sin Dato por el Momento"
                                                                        value="{{ $juicio3[0]->mesdegobconclusion }}">
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
                                                                    <input class="form-control" type="date"
                                                                        id="fecha_conclusion" name="fecha_conclusion"
                                                                        placeholder="Sin Dato por el Momento"
                                                                        value="{{ $juicio3[0]->fecha_conclusion }}">
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                              </form>

                                          </div>
                                        </div>
                                        <div class="kt-form__actions">
                                          <button onclick="update_actualiza_datos_generales({{$juicio3[0]->id_juicio}},'conclusion');"class="btn btn-success">Editar Conclusion
                                          </button>                                        
                                      </div>

                                    </div>
                                </div>
                                {{-- fin conclusion card --}}
                            </div>
                        </div>

                    </div>
                </div>




                {{-- fin de formulario para mostrar datos --}}
            </div>
        </div>
    </div>
</div>
