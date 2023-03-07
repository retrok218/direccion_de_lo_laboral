@extends('home') 
@section('content')
<h2>formulario de cracion de abogados</h2>
<form action="{{url('abogado')}}" class="needs-validation" method="post">
    @csrf
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom01">Ingresa el Nombre del Abogado</label>
        <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="Nombre" required>
        <div class="valid-feedback">
          Correcto!
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationCustom02">Ingresa el Apellido Paterno del Abogado</label>
        <input type="text" class="form-control" id="apellidoP" name="apellidoP" placeholder="Apellido Paterno" required>
        <div class="valid-feedback">
            Correcto!
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationCustom02">Ingresa el Apellido Materno del Abogado</label>
        <input type="text" class="form-control" id="apellidoM" name="apellidoM" placeholder="Apellido Materno" required>
        <div class="valid-feedback">
            Correcto!
        </div>
      </div>
    </div>
    <button class="btn btn-primary" value="guardar_abogado" >Agregar Abogado</button>
  </form>
  









  <script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>


@include('layouts/scripts/scripts_dttb')
@endsection