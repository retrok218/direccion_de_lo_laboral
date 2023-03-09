<div class="form-row">
    <div class="col-md-3 mb-3">
        <label for="validationDefault04">Selecciona el Abogado</label>
        <select class="custom-select" id="validationDefault04" required>
          <option selected disabled value="">Abogado</option>
          @foreach ($abogados as $abogado)
             @php
                $nabogado = Str::substr($abogado->nombre, 0, 1). Str::substr($abogado->apellidoP, 0, 1).Str::substr($abogado->apellidoM, 0, 1)
             @endphp
            <option value="">{{$nabogado}}</option>
          @endforeach
          <option value="">Transferido</option>
        </select>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault01">Notificacion de  Demanda</label>
        <input type="date" class="form-control" id="validationDefault01" value="Mark" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault02">Presentacion de Demanda</label>
        <input type="date" class="form-control" id="validationDefault02" value="Otto" required>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="validationDefault03">Sala/Jta</label>      
        <select class="custom-select" id="validationDefault04" required>
          <option selected disabled value="">Sala</option>
          <option>4a</option>
          <option>3a</option>
          <option>7a</option>
          <option>2a</option>
          <option>J.F. 11</option>
          <option>6a</option>
        </select>
      </div>
     
      <div class="col-md-3 mb-3">
        <label for="validationDefault05">Expediente</label>
        <input type="text" class="form-control" id="validationDefault05" placeholder="Ingrese el Numero de Expediente" required>
      </div>
  
      <div class="col-md-2 mb-3">
          <label for="validationDefault05">AÑO</label>
            <select class="custom-select" name="añoj" id="añoj">
                @foreach($añosseleccionables as $año)
                <option value="">{{$año}}</option>               
                @endforeach
            </select>
         
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationDefault05">CLASIFICACIÓN/AÑO</label>
            <select class="custom-select" name="añoj" id="añoj">               
                @foreach($añosseleccionables as $año)
                    <option value="">{{$año}}</option>               
                @endforeach
            </select>
      </div>


      <div class="col-md-2 mb-3">
          <label for="validationDefault05">Clasificacion/EXP</label>
          <input type="number" class="form-control" id="validationDefault01" placeholder="---" required>
      </div>
  
    </div>
  
    <div class="form-row">    
      <div class="col-md-3 mb-3">
        <label for="validationDefault03">Tipo</label>      
        <select class="custom-select" id="validationDefault04" required>
          <option selected disabled value="">Tipo</option>
          <option>DEMANDA</option>
          <option>DEMANDA SEGOB</option>
          <option>BENEF</option>
          <option>CESE</option>    
          <option>COLECTIVO</option>      
        </select>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault03">Accion</label>      
        <select class="custom-select" id="validationDefault04" required>
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
        <input type="text" class="form-control" id="validationDefault05" placeholder="Ingresa El Nombre Completo" required>
      </div>
  
      <div class="col-md-3 mb-3">
        <label for="validationDefault03">Adscripcion</label>      
        <select class="custom-select" id="validationDefault04" required>
          <option selected disabled value="">Selecicona la Adscripcion</option>
          <option>Talleres Gráficos de México</option>
          <option>TFCA</option>
          <option>INM</option>
          <option>Unidad General de Asuntos Jurídicos</option>  
          <option>Dirección General de Recursos Humanos</option>
          <option>Coordinación General de la Comisión Mexicana de Ayuda a Refugiados</option>  
          <option>Dirección General de Juegos y Sorteos</option> 
          <option>CNI (antes CISEN)</option> 
          <option>Oficina del C. Secretario</option>
          <option>Unidad para el Desarrollo Político</option>
          <option>Dirección General de Comunicación Social</option>
          <option>Dirección General de Radio, Televisión y Cinematografía</option>
        </select>
      </div>
  
      <div class="col-md-3 mb-3">
      <label for="validationDefault03">UR</label>      
        <select class="custom-select" id="validationDefault04" required>
          <option selected disabled value="">Selecicona el UR</option>
          <option>300</option>
          <option>S/UR</option>
          <option>E2D</option>
          <option>F00</option>  
          <option>K00</option>
          <option>810</option>  
          <option>N00</option> 
          <option>S/UR</option> 
          <option>100</option>        
        </select>      
      </div>
  
      <div class="col-md-3 mb-3">
      <label for="validationDefault03">Denominacion</label>      
        <select class="custom-select" id="validationDefault04" required>
          <option selected disabled value="">Selecicona la Denominacion</option>
          <option>Confianza </option>
          <option>Honorarios</option>
          <option>Base</option>
          <option>SPC</option> 
          <option>S/REL. LAB.</option> 
                 
        </select>      
      </div>
    </div>
  
    <div class="form-row">
      <div class="col-md-3 mb-3">
      <label for="validationDefault03">Puesto</label>      
        <select class="custom-select" id="validationDefault04" required>
          <option selected disabled value="">Selecicona El Puesto</option>
          <option>Enlace </option>
          <option>Operativo</option>
          <option>Sub. Área</option>
          <option>Honorarios</option> 
          <option>Jefe Depto.</option>    
          <option>SUBD./Jefe Depto.</option>            
          <option>Dir. Área</option>
          <option value="">Ojurativo</option>
        </select>      
      </div>
      <div class="col-md-2 mb-2">
        <label for="validationDefault05">Nivel</label>
        <input type="text" class="form-control" id="validationDefault05" placeholder="Ingresa el Nivel" required>
      </div>
      <div class="col-md-2 mb-2 input-wrapper">
        <label for="validationDefault05">Salario Mensual</label>
        
        <input type="number" class="form-control input_dinero" id="validationDefault05" placeholder="Ingresa el Salario Mensual" required>
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi    bi-currency-dollar input-icon" viewBox="0 0 16 16">
                  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
          </svg>
      </div>
  
      
    </div>
    <div class="form-row">
      <div class="col-md-2 mb-2">
          <label for="validationDefault02">Inicio de Rel. Lab.</label>
          <input type="date" class="form-control" id="validationDefault02" value="Otto" required>
      </div>
      <div class="col-md-2 mb-2">
          <label for="validationDefault02">Terminacion de Rel. Lab.</label>
          <input type="date" class="form-control" id="validationDefault02" value="Otto" required>
      </div>
    </div>
    <hr>
    <h3>Expediente Personal R.H</h3>
  <div class="form-row">
      <div class="col-md-2 mb-2">
          <label for="validationDefault02">Solicitud</label>
          <input type="date" class="form-control" id="validationDefault02" value="Otto" required>
      </div>
      <div class="col-md-2 mb-2">
          <label for="validationDefault02">Devolucion</label>
          <input type="date" class="form-control" id="validationDefault02" value="Otto" required>
      </div>
      <div class="col-md-2 mb-3">
          <label for="validationDefault05">Fojas</label>
          <input type="number" class="form-control" id="validationDefault01" placeholder="0"  required >
      </div>
  </div>
  <div class="form-row">
  <div class="col-md-3 mb-3">
      <label for="validationDefault03">Etapa</label>      
        <select class="custom-select" id="validationDefault04" required>
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