<div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Ingresa el Nombre de la Sala</label>
      <input type="text" class="form-control" id="nombre"  name="nombre_sala" placeholder="Nombre"  required>
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    
    
  </div>
  <div class="form-row">

    <div class="col-md-3 mb-3">
        <label >Selecciona el Abogado</label>                            
          @foreach ($abogados as $abogado)
          {{-- solo muestras las iniciales del abogado --}}
             @php
                $nabogado = Str::substr($abogado->nombre, 0, 1). Str::substr($abogado->apellidoP, 0, 1).Str::substr($abogado->apellidoM, 0, 1)
             @endphp

                 <div class="col-md-3 mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input" name="abogadosid[]" value="{{$abogado->id_abogado}}" >                            
                        </div>
                        <div class="input-group-text">
                            <label class="form-check-label"  >{{$nabogado }}</label>
                        </div>
                        <div class="input-group-text">
                            <label class="form-check-label"  >{{$abogado->nombre }} {{$abogado->apellidoP}} </label>
                        </div>
                        
                        
                    </div>                    
                </div>
          @endforeach


          
       
      </div>

      

  </div>

  <button class="btn btn-primary" value="guardar_abogado" >Confirmar</button>
  <div class="botonargegar">    
    <a href="{{URL::asset('sala/')}}" class="btn-agregar-abogado button-pulse"> Cancelar</a>
</div>