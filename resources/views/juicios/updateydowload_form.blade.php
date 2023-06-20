<hr class="separador">
      <form action="{{url('/juicios_upload/'.$juicio3[0]->id_juicio)}}" method="POST" enctype="multipart/form-data">
            @csrf 
          <input type="file" id="archivo" class='fansi_file' name="archivo">
          <label for="archivo" class="subirarchivos">
            <span class='fansi_file_name'>
              <span id="docn">  Ningun archivo Seleccionado</span>     
            </span>
            <span class='fansi_file_button'> <i class="fa fa-file-alt "></i> - Buscar Archivo</span>      
          </label>
          <div class="kt-section">
            <div class="kt-section__info">Seleccione donde se guardara el PDF</div>
            <div class="kt-section__content kt-section__content--solid">                          
              <button type="submit" class="btn btn-outline-brand btn-elevate btn-pill" name="asubir" value="demandaupload"><i class="fa fa-upload"></i> Subir archivo Demanda</button>
              <button type="submit" class="btn btn-outline-brand btn-elevate btn-pill" name="asubir" value="contratacionupload"><i class="fa fa-upload"></i> Subir archivo Contestacion</button>
              <button type="submit" class="btn btn-outline-brand btn-elevate btn-pill" name="asubir" value="laudoupload"><i class="fa fa-upload"></i> Subir archivo Laudo</button>
          </div>
          </div>
    </form>        
    <i class="fa fa-download"></i> <span>Demanda :</span>
  @isset($juicio3[0]->archivo)                
            <a href="{{url('/juicio_dowload/'.$juicio3[0]->archivo)}}"> {{$juicio3[0]->archivo}}</a>
            <a class="close_archivo"href="{{url('/juicio_delete_archivo/'.'archivo'.'/'.$juicio3[0]->id_juicio.'/'.$juicio3[0]->archivo)}}" >
              <i class="fa fa-times-circle"></i>
            </a>  
            @else
            Sin archivo para descarga Demanda
  @endisset
  <br>
    <i class="fa fa-download"></i> <span>Contestacion :</span>
  @isset($juicio3[0]->archivo1)
    <a href="{{url('/juicio_dowload/'.$juicio3[0]->archivo1)}}"> {{$juicio3[0]->archivo1}}</a> 
    <a class="close_archivo"href="{{url('/juicio_delete_archivo/'.'archivo1'.'/'.$juicio3[0]->id_juicio.'/'.$juicio3[0]->archivo1)}}" >
      <i class="fa fa-times-circle"></i>
   </a>             
  @else  
  Sin archivo para descarga Contestacion
  @endisset
  <br>  
  <i class="fa fa-download"></i> <span>Laudo :</span>
    @isset($juicio3[0]->archivo2)
      <a href="{{url('/juicio_dowload/'.$juicio3[0]->archivo2)}}"> {{$juicio3[0]->archivo2}}</a>
      <a class="close_archivo" href="{{url('/juicio_delete_archivo/'.'archivo2'.'/'.$juicio3[0]->id_juicio.'/'.$juicio3[0]->archivo2)}}" value="archivo2" >       
        <i class="fa fa-times-circle"></i>
      </a>                
    @else
    Sin archivo para descarga Laudo
    @endisset