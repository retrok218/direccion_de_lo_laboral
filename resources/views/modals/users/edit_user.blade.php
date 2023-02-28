<div class="modal fade" id="mod_edit_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Editar Usuario: {{$user->id}}  Con el Rol: {{ $datosRoles->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal_content">
                <div id="message_usuario_edit"></div>
               
                <form role="form" id="editar_usuario">
                    <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="{{$user->id}}">
                    {{ csrf_field() }}
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label class="control-label">Usuario</label>
                                        <input type="text" class="form-control" id="usuario" name="usuario" value="{{$user->usuario}}" required>
                                        <span id="usuario-error" class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Nombre</label>
                                        <input type="text" class="form-control" id="nombres" name="nombres"value="{{$user->name}}" required>
                                        <span id="nombres-error" class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Apellido Paterno</label>
                                        <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno"value="{{$user->apellido_paterno}}" required>
                                        <span id="apellido_paterno-error" class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Apellido Materno</label>
                                        <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" value="{{$user->apellido_materno}}">
                                    </div>                                  
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Correo electrónico</label>
                                        <input type="email" class="form-control" id="correo" name="correo" value="{{$user->email}}" required>
                                        <span id="correo-error" class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Contraseña</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" >
                                        <span id="password-error" class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Confirmar contraseña</label>
                                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirmar contraseña" >
                                        <span id="password2-error" class="help-block"></span>
                                    </div>                                   
                                    <div class="form-group">                                      
                                        <label class="control-label">Selecciona nuevo Rol </label>                                                                     
                                        <select class="form-control select2" id="id_rol" name="id_rol" required>
                                            <option value="">Seleccione...</option>
                                        @foreach ($roles as $rol)
                                            <option value="{{ $rol->id }}" {{ ($rol->id==$user->id_rol)? "selected" : ""}} >{{ $rol->name }}</option>
                                        @endforeach




                                        </select>
                                        <span id="id_rol-error" class="help-block"></span>
                                    </div>
                                                                        
                                    
                                    <br>
                                    <div class="form-group">
                                        <label class="control-label">Habilitado</label>
                                        <input type="checkbox" checked class="make-switch" id="estatus_user" data-size="mini" data-on-text="SI" data-off-text="NO" name="estatus_user">
                                    </div>
                                    
                                    



                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">                                                                                                                           
                                         <h5>Area/s Asignada  </h5>
                                         <input type="checkbox" onClick="toggle(this)" /> Seleccionar Todas/Eliminar Seleccion 
                                        <table class="table table-striped- table-bordered table-hover table-checkable"  >
                                            <tr>
                                                <th>Numero del Area</th> 
                                                <th>Nombre del Area </th> 
                                            </tr>                                                                                                                                                 
                                                

                                            @foreach($areas as $todareas)
                                                @php 
                                                    $cont = 0;
                                                @endphp
                                                @foreach($areselecc as $seleccionada)
                                                
                                                        @if($seleccionada == $todareas->id)                                                           
                                                                <tr> 
                                                                        <td><input type="checkbox" class="checkbox"  name="checkbox[]" value= '{{$todareas->id}}' checked >{{$todareas->id}} </td>
                                                                        <td>{{$todareas->name}}</td>
                                                                </tr>
                                                                @php 
                                                                    $cont = 1;
                                                                @endphp                                                                                                                                                                                                                                                                                                                                                                                 
                                                        @endif                                                                 
                                                                                                                                                             
                                                    @endforeach

                                                    @if($cont == 0)
                                                    <tr> 
                                                                    <td><input type="checkbox" class="checkbox"  name="checkbox[]" value= '{{$todareas->id}}' >{{$todareas->id}} </td>
                                                                    <td>{{$todareas->name}}</td>
                                                    </tr>
                                                        @endif

                                                @endforeach




                                        </table>
                                    </div> 


                    <div id="error_alerta"> </div>

                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Cancelar
                </button>
                <button type="button" class="btn btn-primary" id="usr_js_fn_05" onclick="edit_user();">
                
                    Aplicar
                </button>
                <!-- <button type="button" onclick="Eliminar_usuario();">
                    ELiminar Usuario 

                </button> -->

            </div>
        </div>
    </div>
</div>