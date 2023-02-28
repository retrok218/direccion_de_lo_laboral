$(document).ready(function() {
    $('.users-table').each(function () {
        $(this).dataTable(window.dtDefaultOptions);
    });
    var dataTable = $('#users-table').dataTable({
        //responsive:true,
        processing: true,
        serverSide: true,
        dom: 'Bfrtip',
        buttons: [
            { extend: 'copyHtml5', className: 'kt-hidden', name: '' },
            { extend: 'excelHtml5', className: 'kt-hidden' },
            { extend: 'csvHtml5', className: 'kt-hidden' },
            { extend: 'pdfHtml5', className: 'kt-hidden', text: 'PDF',
            //orientation: 'landscape'
            },
            { extend: 'print', className: 'kt-hidden', text: 'Imprimir', name: 'print' },
        ],
        language: {
            "url": url + "assets/vendors/general/datatables/Spanish.json"
        },
        ajax: {
            "url": url + "admin/data_listar_usuarios",
            "type": "GET"
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'apellido_paterno', name: 'apellido_paterno' },
            { data: 'apellido_materno', name: 'apellido_materno' },
            { data: 'usuario', name: 'usuario' },
            // { data: 'perfil', name: 'perfil' },
            { data: 'email', name: 'email' },
            // vista para las areas 
            //{data: 'area',area: 'area' },


            {"mRender" : function(data,type,row){
                var ar = row.area;
                return ar;
            }},



            {
                "mRender": function (data, type, row) {
                    var id_user = row.id;
                    console.log(row);
                    return '<a class=" fas fa-pencil-alt " onClick="edit_user_modal('+id_user+');" href="javascript:void(0)"> Editar</a>';
                }
               
                
            },
            

            

        ]
        });
});

// Mostrar modal para alta de usuario
function add_user_modal() {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url : url + "admin/create",
        dataType: 'html',
        success: function(resp_success) {
            var modal = resp_success;
            $(modal).modal().on('shown.bs.modal', function() {
                $("[class='make-switch']").bootstrapSwitch('animate', true);
                $('.select2').select2({dropdownParent: $("#mod_add_user")});
            }).on('hidden.bs.modal', function() {
                $(this).remove();
            });
        },
        error: function(respuesta) {
            Swal.fire('¡Alerta!','Error de conectividad de red USR-01','warning');
        }
    });
}
// Guardar nuevo usuario
function save_user_create() {
    if(!formValidate('#frm_nuevo_usuario')){ return false; };
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url : url + "admin/store",
        type: 'POST',
        data: $("#frm_nuevo_usuario").serialize(),
        dataType: 'json',
        success: function(respuesta) {
            if (respuesta.success == true) {
                $('#mod_add_user').modal('hide').on('hidden.bs.modal', function() {
                    Swal.fire("Proceso  correcto!", "Se  creó  correctamente  el usuario!","success");
                    $('#users-table').DataTable().ajax.reload();
                });
            } else {
                Swal.fire('error', respuesta.message,"error");
            }
        },
        error: function(xhr) {
         //   var message = getErrorAjax(xhr, 'Error de conectividad de red USR-02.');
         Swal.fire('¡Alerta!', xhr, 'warning');

        }
    });
}

// Mostrar modal para edición de usuario
function edit_user_modal(data) {
    console.log(data);
    var id=data;
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url : url + "admin/edit",
        dataType: 'html',
        data:{
            id:id
        },
        success: function(resp_success) {
            var modal = resp_success;
            $(modal).modal().on('shown.bs.modal', function() {
                $("[class='make-switch']").bootstrapSwitch('animate', true);
                $('.select2').select2({dropdownParent: $("#mod_edit_user")});
            }).on('hidden.bs.modal', function() {
                $(this).remove();
            });
        },
        error: function(respuesta) {
            Swal.fire('¡Alerta!','Error de conectividad de red USR-03','warning');
        }
    });
}














function edit_user() {
    if(!formValidate('#editar_usuario')){ return false; }
    var password = $('#password').removeClass('has-error').val();
    var password2 = $('#password2').removeClass('has-error').val();
    if (password != password2){
        showElementError('password2','Las contraseñas no son iguales.');
        return false;
    }
    var dataString = ($("#editar_usuario").serialize());
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url : url + "admin/update",
        type: 'POST',
        data: dataString,
        dataType: 'json',
        success: function(respuesta) {
            if (respuesta.success == true) {
                $('#mod_edit_user').modal('hide').on('hidden.bs.modal', function() {
                    Swal.fire("Proceso  correcto!", "Se  modifico  correctamente  el usuario!","success");
                    $('#users-table').DataTable().ajax.reload();
                });
            }else {
                Swal.fire('error', respuesta.message,"error");
            }
        },
        error: function(respuesta) {
            Swal.fire('¡Alerta!','Error de conectividad de red USR-04','warning');
        }
     });
}



function Eliminar_usuario(){   
        var agree=confirm("¿Realmente desea eliminarlo? ");
        if (agree) return true ;
        return false;
}


//$(".dt-buttons").addClass('kt-hidden');


// Activar checkbox
function toggle(source) {
    checkboxes = document.getElementsByName('checkbox[]');
  
    for(var i=0, n=checkboxes.length;i<n;i++) {
      checkboxes[i].checked = source.checked;
    }
  
  }