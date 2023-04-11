<form action="{{url('/juicios_com/'.$juicio3[0]->id_juicio)}}" method="POST">
    @csrf
    <h6>
      <i class="fa-solid fa-comment fa-beat" style="color: #680606;"></i> - Comentarios
    </h6>
    <div class="row row-cols-1 row-cols-md-3">                                                                                                                 
        <div class="card-body">                               
          <p class="card-text">                                                                                                             
            <textarea name="comentario" class="form-control"  id="abogados_asignados" placeholder="Sin Dato por el Momento"   >{{$juicio3[0]->comentario}}</textarea>
          </p>                                    
        </div>                                                                                    
    </div> 
    <button class="btn btn-primary" value="Guardar Comentario" >Guardar Comentario</button>                      
  </form> 