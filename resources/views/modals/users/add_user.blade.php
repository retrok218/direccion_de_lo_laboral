<div class="modal fade" id="mod_add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Añadir nuevo usuario:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal_content">
                <div id="error_usuario_add"></div>
                <form role="form" name="frm_nuevo_usuario" id="frm_nuevo_usuario" method="POST">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">                                                                  
                                    <div class="form-group">
                                            {{ Form::label('usuario', 'Usuario', array('class' => 'col-xl-3 col-lg-3 col-form-label')) }}
                                            {{ Form::text('usuario', '', array('class' => 'form-control','required'=>true ,'placeholder'=> 'Usuario')) }}
                                    </div>                                    
                                    <div class="form-group">
                                        <label class="control-label">Nombre </label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre(s)" required>
                                        <span id="nombre-error" class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Apellido Paterno</label>
                                        <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido Paterno" required>
                                        <span id="apellido_paterno-error" class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Apellido Materno</label>
                                        <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" placeholder="Apellido Materno">
                                        <span id="apellido_materno-error" class="help-block"></span>
                                    </div><br>                                   
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Correo electrónico</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Ingresar correo electrónico" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required>
                                        <span id="email-error" class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Contraseña</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                                        <span id="password-error" class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Confirmar contraseña</label>
                                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirmar contraseña" required>
                                        <span id="password2-error" class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Rol</label>
                                        <select class="form-control" id="id_rol" name="id_rol" required>
                                            <option value="">Seleccione...</option>
                                        @foreach ($roles as $rol)
                                            <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>      
                                    <div class="form-group ">						
                                        <label class="col-4 col-form-label">Habilitado </label>
                                        <div class="col-4">
                                            <span class="kt-switch kt-switch--icon">
                                                <label>
                                                    <input type="checkbox" checked="checked" name="cat_status">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </div>
                                    </div>                                   
                                    </div> 

                            
                                    <div class="col-md-12">                                                                                                                           
                                         <h5>Area/s Asignada  </h5>
                                         <input type="checkbox" onClick="toggle(this)" /> Seleccionar Todas/Eliminar Seleccion 
                                        <table class="table table-hover" >
                                            <tr>
                                                <th>Numero del Area</th> 
                                                <th>Nombre del Area </th> 
                                            </tr>  

                                                @foreach($areas as $area )                                                                                                                                                                                                                                   
                                                <tr> 
                                                    <td><input type="checkbox" class="checkbox"  name="checkbox[]" value= '{{$area->id}}'>{{$area->id}}</td>
                                                    <td>{{$area->name}}</td>
                                                </tr>   
                                                @endforeach                                                                                                                                 
                                        </table>
                                    </div>

                            </div>
                        </div>
                    </div>


                    <div id="error_alerta"> </div>

                    <!-- <input type="hidden" id="cat_status" name="cat_status" value="3">
                    <input type="hidden" id="change_pass" name="change_pass" value="10"> -->
                    

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Cancelar
                </button>
                <button type="button" class="btn btn-primary" id="usr_js_fn_04" onclick="save_user_create();" >
                    Aplicar
                </button>

            </div>
        </div>
    </div>
</div>


