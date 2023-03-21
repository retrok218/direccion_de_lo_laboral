<div class="form-row">
    <div class="col-md-3 mb-3">
        <label for="validationDefault04">Abogados Asignados a la Sala</label>
        
        {{-- <select class="custom-select" id="juicio_abogado" name="abogado">
          <option selected disabled value="">Abogado</option>
           @foreach ($abogados as $abogado)
              @php
                  $nabogado = Str::substr($abogado->nombre, 0, 1). Str::substr($abogado->apellidoP, 0, 1).Str::substr($abogado->apellidoM, 0, 1)
              @endphp
              <option value="{{$nabogado}}" name = "{{$nabogado}}">{{$nabogado}}</option>
            @endforeach          
        </select>       --}}
        
        <input  class="form-control" type="text" id="abogados_asignados" placeholder="Seleccione la Sala"  readonly >
      </div>

      <div class="col-md-3 mb-3">
        <label for="validationDefault01">Notificacion de Demanda</label>
        <input type="date" class="form-control" id="notidemanda" value="Mark"  name="notidemanda">
      </div>

      <div class="col-md-3 mb-3">
        <label for="validationDefault02">Presentacion de Demanda</label>

        <input type="date" class="form-control" id="presentacion_de_demanda" name="presentacion_de_demanda" value="Otto" >
      </div>
    </div>

    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="validationDefault03">Sala/Jta</label>     

        <select class="custom-select" id="juicio_sala_seleccionada" name="juicio_sala_seleccionada" >
          <option selected disabled value="Sala">Sala</option>        
          @foreach($salas as $sala)
          <option value="{{$sala->id_sala}}">{{$sala->nombre_sala}}</option>
          @endforeach
        </select>
      </div>
     
      <div class="col-md-3 mb-3">
        <label for="validationDefault05">Expediente</label>
        <input type="text" class="form-control" id="expediente" name="expediente" placeholder="Ingrese el Numero de Expediente" >
      </div>
  
      <div class="col-md-2 mb-3">
          <label for="validationDefault05">Año</label>
            <select class="custom-select" name="año_juicio" id="año_juicio">
                @foreach($añosseleccionables as $año)
                <option value="{{$año}}">{{$año}}</option>               
                @endforeach
            </select>
         
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationDefault05">Clasificacion/Año</label>
            <select class="custom-select" name="clasificacion_año" id="clasificacion_año">               
                @foreach($añosseleccionables as $año)
                    <option value="{{$año}}">{{$año}}</option>               
                @endforeach
            </select>
      </div>


      <div class="col-md-2 mb-3">
          <label for="validationDefault05">Clasificacion/EXP</label>
          <input type="number" class="form-control" id="clasificacion_exp" name="clasificacion_exp" placeholder="----" >
      </div>
  
    </div>
  
    <div class="form-row">    
      <div class="col-md-3 mb-3">
        <label for="validationDefault03">Tipo</label>      
        <select class="custom-select" id="tipo" name="tipo" >
          <option selected disabled value="">Tipo</option>
          <option>CESE</option>    
          <option>COLECTIVO</option> 
          <option>BENEF</option>
          <option>DEMANDA</option>
          <option>DEMANDA SEGOB</option>                         
        </select>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault03">Accion</label>      
        <select class="custom-select" id="accion" name="accion" >
          <option selected disabled value="">Selecicona la Accion</option>
          <option>Reinstalación</option>
          <option>Indemnización </option>
          <option>Otros (prestaciones legales)</option>
          <option>Solicitud de autorizacion de terminacion de efectos de nombramiento</option>  
          <option>Basificación</option>
          <option>RENIVELACION SALARIAL</option>  
          <option>HORAS EXTRAORDINARIAS</option> 
          <option>SALARIOS DEVENGADOS</option> 
        </select>
      </div>
    </div>
    <hr>
    <h2>Datos de la Relacion Laboral </h2>
  
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="validationDefault05">Nombre Completo</label>
        <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" placeholder="Ingresa El Nombre Completo" >
      </div>
  
      <div class="col-md-3 mb-3">
        <label for="validationDefault03">Adscripcion</label>      
        <select class="custom-select" id="adscripcion" name="adscripcion" >
          <option selected disabled value="">Selecicona la Adscripcion</option>
          <option value="Archivo General de la Nación">Archivo General de la Nación</option>
          <option value="Centro de Producción de Programas Informativos y Especiales">Centro de Producción de Programas Informativos y Especiales</option>
          <option value="Centro Nacional de Prevención de Desastres">Centro Nacional de Prevención de Desastres</option>
          <option value="CFE">CFE</option>
          <option value="CNI (antes CISEN)">CNI (antes CISEN)</option>
          <option value="COMISION EJECUTIVA DE ATENCION A VICTIMAS Y OTROS">COMISION EJECUTIVA DE ATENCION A VICTIMAS Y OTROS</option>
          <option value="Comisión Nacional para Prevenir y Erradicar la Violencia Contra las Mujeres">Comisión Nacional para Prevenir y Erradicar la Violencia Contra las Mujeres</option>
          <option value="Comisión para el Diálogo con los Pueblos Indígenas de México">Comisión para el Diálogo con los Pueblos Indígenas de México</option>
          <option value="Consejo de Menores">Consejo de Menores</option>
          <option value="Coordinación General de la Comisión Mexicana de Ayuda a Refugiados">Coordinación General de la Comisión Mexicana de Ayuda a Refugiados</option>
          <option value="Coordinación General de Protección Civil">Coordinación General de Protección Civil</option>
          <option value="Coordinación para la Atención Integral de la Migración en la Frontera Sur">Coordinación para la Atención Integral de la Migración en la Frontera Sur</option>
          <option value="DATOS DE LA RELACIÓN LABORAL">DATOS DE LA RELACIÓN LABORAL</option>
          <option value="DESPLEGABLE CON MODIFICACIÓN">DESPLEGABLE CON MODIFICACIÓN</option>
          <option value="Diario Oficial">Diario Oficial</option>
          <option value="Dirección General De Acuerdos Políticos">Dirección General De Acuerdos Políticos</option>
          <option value="Dirección general de Análisis y Prospectiva para la Poítica de Interior">Dirección general de Análisis y Prospectiva para la Poítica de Interior</option>
          <option value="Dirección General de Asociaciones Religiosas">Dirección General de Asociaciones Religiosas</option>
          <option value="Dirección General de Compilación y Consulta del Orden Jurídico Nacional">Dirección General de Compilación y Consulta del Orden Jurídico Nacional</option>
          <option value="Dirección General de Comunicación Social">Dirección General de Comunicación Social</option>
          <option value="Dirección General de Coordinación con Entidades Federativas">Dirección General de Coordinación con Entidades Federativas</option>
          <option value="Dirección General De Coordinación Para La Operación Territorial">Dirección General De Coordinación Para La Operación Territorial</option>
          <option value="Dirección General de Cultura Democrática y Fomento Cívico">Dirección General de Cultura Democrática y Fomento Cívico</option>
          <option value="Dirección General de Enlace y Seguimiento">Dirección General de Enlace y Seguimiento</option>
          <option value="Dirección General de Estrategias para la Atención de Derechos Humanos">Dirección General de Estrategias para la Atención de Derechos Humanos</option>
          <option value="Dirección General de Estudios Legislativos">Dirección General de Estudios Legislativos</option>
          <option value="Dirección General de Información Legislativa">Dirección General de Información Legislativa</option>
          <option value="Dirección General de Infraestructura Tecnologica de Seguridad Pública">Dirección General de Infraestructura Tecnologica de Seguridad Pública</option>
          <option value="Dirección General de Juegos y Sorteos">Dirección General de Juegos y Sorteos</option>
          <option value="Dirección General de Medios Impresos">Dirección General de Medios Impresos</option>
          <option value="Dirección General De Modernización, Organización Y Eficiencia Administrativa">Dirección General De Modernización, Organización Y Eficiencia Administrativa</option>
          <option value="Dirección General de Normatividad de Comunicación">Dirección General de Normatividad de Comunicación</option>
          <option value="Dirección General De Planeación Estratégica Para La Prevención Social">Dirección General De Planeación Estratégica Para La Prevención Social</option>
          <option value="Dirección General de Política Pública de Derechos Humanos ">Dirección General de Política Pública de Derechos Humanos </option>
          <option value="Dirección General de Programación y Presupuesto">Dirección General de Programación y Presupuesto</option>
          <option value="Dirección General de Protección Civil">Dirección General de Protección Civil</option>
          <option value="Dirección General de Radio, Televisión y Cinematografía">Dirección General de Radio, Televisión y Cinematografía</option>
          <option value="Dirección General de Recursos Humanos">Dirección General de Recursos Humanos</option>
          <option value="Dirección General de Recursos Materiales y Servicios Generales">Dirección General de Recursos Materiales y Servicios Generales</option>
          <option value="Dirección General de Tecnologías de la Información y Comunicaciones">Dirección General de Tecnologías de la Información y Comunicaciones</option>
          <option value="Dirección General del Registro Nacional de Población e Identidad">Dirección General del Registro Nacional de Población e Identidad</option>
          <option value="Dirección General del Registro Nacional de Población e Identificación Personal">Dirección General del Registro Nacional de Población e Identificación Personal</option>
          <option value="Dirección General para el Fondo de Desastres Naturales">Dirección General para el Fondo de Desastres Naturales</option>
          <option value="Dirección General para la Protección de Personas Defensoras de Derechos Humanos y Periodistas">Dirección General para la Protección de Personas Defensoras de Derechos Humanos y Periodistas</option>
          <option value="Ecoblue de México, S.A. de C.V.">Ecoblue de México, S.A. de C.V.</option>
          <option value="Entonces Registro Federal de Electores">Entonces Registro Federal de Electores</option>
          <option value="GUAIDA, S A DE C.V. Y/O">GUAIDA, S A DE C.V. Y/O</option>
          <option value="INM">INM</option>
          <option value="Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado">Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado</option>
          <option value="Instituto Estatal de Educación Pública">Instituto Estatal de Educación Pública</option>
          <option value="Instituto Nacional De Estudios Históricos De Las Revoluciones De México">Instituto Nacional De Estudios Históricos De Las Revoluciones De México</option>
          <option value="Instituto Nacional para el Federalismo y el Desarrollo Municipal">Instituto Nacional para el Federalismo y el Desarrollo Municipal</option>
          <option value="Instituto Nacional para la Educación de los Adultos">Instituto Nacional para la Educación de los Adultos</option>
          <option value="INSTITUTO PARA DEVOLVER AL PUEBLO LO ROBADO">INSTITUTO PARA DEVOLVER AL PUEBLO LO ROBADO</option>
          <option value="LyFC">LyFC</option>
          <option value="No presta servicios para SEGOB, Ayuntamiento Jiutepec">No presta servicios para SEGOB, Ayuntamiento Jiutepec</option>
          <option value="No prestaba servicios en SEGOB">No prestaba servicios en SEGOB</option>
          <option value="Oficialia Mayor">Oficialia Mayor</option>
          <option value="Oficina del C. Secretario">Oficina del C. Secretario</option>
          <option value="Órgano Interno de Control">Órgano Interno de Control</option>
          <option value="Policía Federal">Policía Federal</option>
          <option value="Prevención y Readapción Social">Prevención y Readapción Social</option>
          <option value="Secretaría de Gobernación">Secretaría de Gobernación</option>
          <option value="Secretaría de Seguridad y Protección Ciudadana">Secretaría de Seguridad y Protección Ciudadana</option>
          <option value="Secretaría General del Consejo Nacional de Población">Secretaría General del Consejo Nacional de Población</option>
          <option value="Secretaría Técnica de la Comisión Calificadora de Publicaciones y Revistas Ilustradas">Secretaría Técnica de la Comisión Calificadora de Publicaciones y Revistas Ilustradas</option>
          <option value="Secretaria Tecnica Para La Implementacion De Sistema De Justicia Penal">Secretaria Tecnica Para La Implementacion De Sistema De Justicia Penal</option>
          <option value="Secretariado Ejecutivo del Sistema Nacional de Seguridad Publica">Secretariado Ejecutivo del Sistema Nacional de Seguridad Publica</option>
          <option value="Segob (no presta servicios)">Segob (no presta servicios)</option>
          <option value="Servicio de Protección Federal">Servicio de Protección Federal</option>
          <option value="SISTEMA DIF. MUNICIPAL DE JIUTEPEC [DESARROLLO INTEGRAL DE LA FAMILIADE JIUTEPEC MORELOS] JUICIO RADICADO EN EL TECA DE MORELOS">SISTEMA DIF. MUNICIPAL DE JIUTEPEC [DESARROLLO INTEGRAL DE LA FAMILIADE JIUTEPEC MORELOS] JUICIO RADICADO EN EL TECA DE MORELOS</option>
          <option value="Sistema Público De Radiodifusión Del Estado Mexicano">Sistema Público De Radiodifusión Del Estado Mexicano</option>
          <option value="Subsecretaría de Derechos Humanos">Subsecretaría de Derechos Humanos</option>
          <option value="Subsecretaria de Enlace Legislativo">Subsecretaria de Enlace Legislativo</option>
          <option value="Subsecretaría de Gobierno">Subsecretaría de Gobierno</option>
          <option value="Subsecretaría de Normatividad de Medios">Subsecretaría de Normatividad de Medios</option>
          <option value="Subsecretaría de Población, Migración y Asuntos Religiosos">Subsecretaría de Población, Migración y Asuntos Religiosos</option>
          <option value="Subsecretaría de Prevención y Participación Ciudadana">Subsecretaría de Prevención y Participación Ciudadana</option>
          <option value="Talleres Gráficos de México">Talleres Gráficos de México</option>
          <option value="TFCA">TFCA</option>
          <option value="Unidad de Desarrollo Político y Fomento Cívico">Unidad de Desarrollo Político y Fomento Cívico</option>
          <option value="Unidad de Enlace">Unidad de Enlace</option>
          <option value="Unidad de Enlace Federal">Unidad de Enlace Federal</option>
          <option value="Unidad de Enlace Federal y Coordinación con Entidades Federativas">Unidad de Enlace Federal y Coordinación con Entidades Federativas</option>
          <option value="Unidad de Enlace Legislativo">Unidad de Enlace Legislativo</option>
          <option value="Unidad de Gobierno">Unidad de Gobierno</option>
          <option value="Unidad de Normatividad de Medios">Unidad de Normatividad de Medios</option>
          <option value="Unidad de Normatividad de Medios de Comunicación">Unidad de Normatividad de Medios de Comunicación</option>
          <option value="Unidad De Política Migratoria">Unidad De Política Migratoria</option>
          <option value="Unidad de Servicios y Formación Policial">Unidad de Servicios y Formación Policial</option>
          <option value="Unidad General de Asuntos Jurídicos">Unidad General de Asuntos Jurídicos</option>
          <option value="Unidad para el Desarrollo Político">Unidad para el Desarrollo Político</option>
          <option value="Unidad para la Atención de las Organizaciones Sociales">Unidad para la Atención de las Organizaciones Sociales</option>
          <option value="Unidad para la Promoción y Defensa de los Derechos Humanos">Unidad para la Promoción y Defensa de los Derechos Humanos</option>                    
        </select>
      </div>
  
      <div class="col-md-3 mb-3">
      <label for="validationDefault03">UR</label>      
        <select class="custom-select" id="ur" name="ur" >
          <option selected disabled value="">Selecicona el UR</option>
          <option value="100">100</option>
          <option value="111">111</option>
          <option value="114">114</option>
          <option value="130">130</option>  
          <option value="200">200</option>
          <option value="211">211</option>  
          <option value="212">212</option> 
          <option value="214">214</option> 
          <option value="215">215</option>      
          <option value="217">217</option>  
          <option value="223">223</option>
          <option value="230">230</option>
          <option value="231">231</option>
          <option value="232">232</option>
          <option value="270">270</option>
          <option value="271">271</option>
          <option value="272">272</option>
          <option value="273">273</option>
          <option value="300">300</option>
          <option value="311">311</option>
          <option value="313">313</option>
          <option value="410">410</option>
          <option value="412">412</option>
          <option value="500">500</option>
          <option value="510">510</option>
          <option value="511">511</option>
          <option value="513">513</option>
          <option value="515">515</option>
          <option value="541">541</option>
          <option value="700">700</option>
          <option value="800">800</option>
          <option value="810">810</option>
          <option value="811">811</option>
          <option value="812">812</option>
          <option value="813">813</option>
          <option value="814">814</option>
          <option value="900">900</option>
          <option value="901">901</option>
          <option value="911">911</option>
          <option value="913">913</option>
          <option value="914">914</option>
          <option value="915">915</option>
          <option value="920">920</option>
          <option value="941">941</option>
          <option value="A00">A00</option>
          <option value="C00">C00</option>
          <option value="E2D">E2D</option>
          <option value="EZN">EZN</option>
          <option value="F00">F00</option>
          <option value="K00">K00</option>
          <option value="M00">M00</option>
          <option value="N00">N00</option>
          <option value="Q00">Q00</option>
          <option value="S/UR">S/UR</option>
          <option value="T00">T00</option>
          <option value="V00">V00</option>
        </select>      
      </div>
  
      <div class="col-md-3 mb-3">
      <label for="validationDefault03">Denominacion</label>      
        <select class="custom-select" id="denominacion" name="denominacion">
          <option selected disabled value="">Selecicona la Denominacion</option>
          <option value="Base">Base</option>
          <option value="Confianza">Confianza</option>
          <option value="Enlace">Enlace</option>
          <option value="Honorarios">Honorarios</option> 
          <option value="Libre designación">Libre designación</option> 
          <option value="S/REL. LAB.">S/REL. LAB.</option>
          <option value="Servicio Exterior Mexicano">Servicio Exterior Mexicano</option>
          <option value="SPC">SPC</option>                 
        </select>      
      </div>
    </div>
  
    <div class="form-row">
      <div class="col-md-3 mb-3">        
      <label for="validationDefault03">Puesto</label>  
      <input type="text" list="puestoitem" class="form-control"  placeholder="Ingresa El Puesto" id="puesto" name="puesto">  
        <datalist class="custom-datalist" id="puestoitem" >
          <option selected disabled value="">Selecicona El Puesto</option>
          <option value="Abogado penitenciario">Abogado penitenciario </option>
          <option value="Agende Federal de Migración">Agende Federal de Migración</option>
          <option value="Agente de Protección al Inmigrante">Agente de Protección al Inmigrante</option>
          <option value="AGENTE DE PROTECCION AL MIGRANTE">AGENTE DE PROTECCION AL MIGRANTE</option> 
          <option value="Agente Federal de Migración">Agente Federal de Migración</option>                         
          <option value="Agente Federal de Migración B">Agente Federal de Migración B</option>
          <option value="Agregada Administativa C, en los Ángeles">Agregada Administativa C, en los Ángeles</option>
          <option value="Analista Especializado en Servicios Migratorios">Analista Especializado en Servicios Migratorios</option>
          <option value="Analista PRS administrativo">Analista PRS administrativo</option>
          <option value="Analista PRS Administrativo FC">Analista PRS Administrativo FC</option>
          <option value="Analista técnico nivel 6">Analista técnico nivel 6</option>
          <option value="Asistente de Áreas de Servicios Migratorios">Asistente de Áreas de Servicios Migratorios</option>
          <option value="Auxiliar Administrativo PRS de SG">Auxiliar Administrativo PRS de SG</option>
          <option value="Auxiliar en SG y mantenimiento PRS">Auxiliar en SG y mantenimiento PRS</option>
          <option value="Chofer">Chofer</option>
          <option value="Cocinero penitenciario B">Cocinero penitenciario B</option>
          <option value="Codinador de Unidad de Áreas de Servicios Migratorios ">Codinador de Unidad de Áreas de Servicios Migratorios </option>
          <option value="Coordinadora">Coordinadora</option>
          <option value="Dictaminador de Asuntos Migratorios">Dictaminador de Asuntos Migratorios</option>
          <option value="Dir. Área">Dir. Área</option>
          <option value="DIR. GRAL.">DIR. GRAL.</option>
          <option value="DIR. GRAL. ADJ.">DIR. GRAL. ADJ.</option>
          <option value="Dirección">Dirección</option>
          <option value="Director">Director</option>
          <option value="Director de área">Director de área</option>
          <option value="Director General Adjunto">Director General Adjunto</option>
          <option value="Directora">Directora</option>
          <option value="Directora de Área">Directora de Área</option>
          <option value="Directora General Adjunta">Directora General Adjunta</option>
          <option value="Diversos">Diversos</option>
          <option value="Enlace">Enlace</option>
          <option value="Enlace de alta responsabilidad">Enlace de alta responsabilidad</option>
          <option value="Enlace de alto nivel de responsabilidad">Enlace de alto nivel de responsabilidad</option>
          
          

        </datalist>      
      </div>
      <div class="col-md-2 mb-2">
        <label for="validationDefault05">Nivel</label>
        <input type="text" class="form-control" id="nivel" list="listnivel" placeholder="Ingresa el Nivel" name="nivel">
        <datalist id="listnivel">
          <option value="Enlace">Enlace</option>
          <option value="K11">K11</option>
          <option value="K11">K11</option>
          <option value="K32">K32</option>
          <option value="L11">L11</option>
        </datalist>
        
      </div>
      <div class="col-md-3 mb-2 input-wrapper">
        <label for="validationDefault05">Salario Mensual</label>
        
        <input type="text" class="form-control input_dinero" name="salarioMen" id="salarioMen"   data-type="currency" placeholder="1000,000.00">
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar input-icon" viewBox="0 0 16 16">
                  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
          </svg>
      </div>
  
      
    </div>
    <div class="form-row">
      <div class="col-md-2 mb-2">
          <label for="validationDefault02">Inicio de Rel. Lab.</label>
          <input type="date" class="form-control" id="juicio_in_rellaboral" name="juicio_in_rellaboral" value="Otto" >
      </div>
      <div class="col-md-2 mb-2">
          <label for="validationDefault02">Terminacion de Rel. Lab.</label>
          <input type="date" class="form-control" id="juicio_term_rellaboral" name="juicio_term_rellaboral" value="Otto" >
      </div>
    </div>
    <hr>
    <h3>Expediente Personal R.H</h3>
  <div class="form-row">
      <div class="col-md-2 mb-2">
          <label for="validationDefault02">Solicitud</label>
          <input type="date" class="form-control" id="Solicitud" name="Solicitud" value="Otto" >
      </div>
      <div class="col-md-2 mb-2">
          <label for="validationDefault02">Devolucion</label>
          <input type="date" class="form-control" id="Devolucion" name="Devolucion" value="Otto" >
      </div>
      <div class="col-md-2 mb-3">
          <label for="validationDefault05">Fojas</label>
          <input type="number" class="form-control" id="Fojas" name="Fojas" placeholder="0"   >
      </div>
  </div>
  <div class="form-row">
  <div class="col-md-3 mb-3">
      <label for="validationDefault03">Etapa</label>      
        <select class="custom-select" id="Etapa"  name="Etapa">
          <option selected disabled value="">Selecicona la Etapa</option>
          <option>Concluido </option>
          <option>Transferido</option>
          <option>Ejecucion</option>
          <option>Proyecto de Laudo</option> 
          <option>Laudo</option>    
          <option>Amparo</option>            
         
        </select>      
      </div>
  </div>
  <button class="btn btn-primary" type="submit">Crear Juicio</button>
  

  
<script>









      


      $("#juicion_salmensual").on({keyup: function() {formatCurrency($(this));},
    blur: function() { 
      formatCurrency($(this), "blur");
    }
      });


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
   // input_val = "$" + left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
   // input_val = "$" + input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += ".00";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}



    </script>

@include('layouts/scripts/scripts_dttb')