

<div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Ingresa el Nombre del Abogado</label>
      <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="Nombre" value="{{isset($abogadod->nombre)?$abogadod->nombre:'' }}" required>
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Ingresa el Apellido Paterno del Abogado</label>
      <input type="text" class="form-control" id="apellidoP" name="apellidoP" placeholder="Apellido Paterno" value="{{isset($abogadod->apellidoP)?$abogadod->apellidoP:''}}" required>
      <div class="valid-feedback">
          Correcto!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Ingresa el Apellido Materno del Abogado</label>
      <input type="text" class="form-control" id="apellidoM" name="apellidoM" placeholder="Apellido Materno" value="{{isset($abogadod->apellidoM)?$abogadod->apellidoM:''}}" required>
      <div class="valid-feedback">
          Correcto!
      </div>
    </div>
  </div>
  <button class="btn btn-primary" value="guardar_abogado" >Confirmar</button>
  <div class="botonargegar">    
    <a href="{{URL::asset('abogado/')}}" class="btn-agregar-abogado button-pulse"> Cancelar</a>
  </div>