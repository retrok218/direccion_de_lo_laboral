function executeExample(mensaje) {        
    Swal.fire({
        title: mensaje,
        width: 334,
        type:'success',
        position :'top-right',
        padding: '0px',
        color: '#716add',
        border: '3px solid #a5dc86',
        timerProgressBar: true,
        timer: 4000,
        showConfirmButton: false,
        background: '#fff ',
        backdrop: `
            rgba(0,0,123,0.4)
            
            left top
            no-repeat`    
        })
}
function  executewrong(mensaje) {
    Swal.fire({
        type:'error',
        title: 'Oops...',
        text: 'No se selecciono Archivo para Subir ',        
        })
}




let table ;
$(document).ready(function(){
 
table = $('#juiciotabla').DataTable({
    "pageLength": 6,   
    "lengthChange": true,
    "searching": true,
    responsive: true,
    
    "info": true,
    // responsive: true,
    "autoWidth": false,      
    //"language": idioma,
    "lengthMenu": [[10,20, -1],[10,20,"Mostrar Todo"]],
    "order":[1 ,'desc'],
    dom:'Bfrtip<"col-md-6 inline"i> <"col-md-6 inline"p>',
    dom:'Bfrtip',
    deferRender:true, 
    "columnDefs": [ {
          "visible": true,
          "targets": -1
      } ],


    "search": {
      "regex": true,
      "caseInsensitive": false,
    },

    buttons: {
        dom: {
            container: {
                tag: 'div',
            },
            buttonLiner: {
                tag: null
            }
        },
        buttons: [
            {
                extend: 'excelHtml5',
                text: '<i class="fas fa-file-excel"></i> Exel',                
                titleAttr: 'Excel',
                className: 'btn btn-app export excel',
                exportOptions: {                   
                },
            },
            {
                extend: 'print',
                text: '<i class="fa fa-print"></i>Imprimir',                
                titleAttr: 'Imprimir',
                className: 'btn btn-app export imprimir',
                exportOptions: {                    
                }
            },
            {
                extend: 'pdfHtml5',
                text: '<i class="fas fa-file-pdf"></i>PDF',                
                titleAttr: 'PDF',               
                orientation: 'landscape',
                pageSize: 'TABLOID',               
                customize: function (doc) {
                    doc.styles.title = {
                        color: '#114627',
                        fontSize: '30',
                        alignment: 'center'
                    }
                    doc.styles['td:nth-child(2)'] = {
                            width: '100px',
                            'max-width': '100px',
                            margin: [0, 0, 0, 12],
                        },
                        doc.styles.tableHeader = {
                            fillColor: '#114627',
                            color: 'white',
                            alignment: 'center',   
                        } 
                },
            }                                   
        ]
    },
    language: {
        "url": url + "assets/vendors/general/datatables/Spanish.json",  
    },
    ajax: {
        "url": url + "data/juicios",
        cache: false,
    },

    // cambia el estilo de la fila dependiendo de id_juicio
    "createdRow": function(row, data, dataIndex) {
        let actual_fecha = moment(); 
        let f = moment(data.actor[0].audiencia);            
        let diferenciafehas =f.diff(actual_fecha,'days');

        if (diferenciafehas > 1) {
            // verde si faltan mas de 2 dias            
            $(row).find('td').css('color', 'rgb(60, 53, 53)');            
            $(row).css('background', 'rgba(7, 232, 0, 0.14)');                        
            $(row).css('box-shadow', '2px 1px 8px rgba(0, 255, 40)');                                    
        } else if (diferenciafehas <= 1 & diferenciafehas > -1) {
            //rojo 0 dias o menos de 0 dias
            $(row).css('background', 'rgba(255, 1, 1, 0.38)');
            $(row).css('box-shadow', 'rgb(255, 0, 0) 2px 1px 8px');           
            $(row).find('td').css('color', 'rgb(60, 53, 53)');
        }        
        else {
            //Gris vencidos 
            $(row).find('td').css('background-color', 'rgb(139 135 135 / 31%)');
            $(row).find('td').css('color', 'rgb(60, 53, 53)');
        }
    },
    
    columns:[

        
        { "mRender": function(data, type, row){            

            let actual_fecha = moment(); 
            let f = moment(row.actor[0].audiencia);  
            let fproxima = moment(row.fechaproxima);           
            let diferenciafehas =f.diff(actual_fecha,'days'); 
            let fproxdif  = fproxima.diff(actual_fecha,'days');                    
            if( diferenciafehas > 1 ){
                estatusRegla = '<i class="far fa-clock fa-xl" style="color: #0daf5c; margin: 0px 0px 0px 35%;" title='+'Resta'+diferenciafehas+'/D'+'></i>';
            }
            else if (diferenciafehas <= 1 & diferenciafehas > -1){
                estatusRegla = '<i class="fa fa-bell fa-shake fa-xl" style="color: #511f1f; margin: 0px 0px 0px 35%;"></i>';
            }
            else {
                estatusRegla = '<i class="fa fa-calendar-times fa-xl" style="color: #484747; margin: 0px 0px 0px 35%;"></i>';
            }                         
            return estatusRegla;
        }},
               
        {"mRender": function(data, type, row){
            var ligajuicio=row.id_juicio;                           
             return `<a  onclick="mostrar_modal_juicio(${ligajuicio})" title="Desglose de Juicio" ;><button class="button2"> <span> ${row.id_juicio} <span> </button></a>`;                                   }
        },
        {data:'noti_demanda', name:'noti_demanda'},
        {data:'etapa',name:'etapa'},        
        {data:'expediente',name:'expediente'},
        {data:'reinstalacion',name:'reinstalacion'},
        {data:'indemnizacion', name:'indemnizacion'},
        
        
        {"mRender":function(data,type,row){
            let actual_fecha = moment(); 
            let f = moment(row.fechaproxima);            
            let fechaproximaalert;
            if (row.fechaproxima !== null ) {                
                 fechaproximaalert = f.diff(actual_fecha,'days') ;
                 fechaproximaalert = f.diff(actual_fecha,'days') <= 0 ? 'Feacha Vencida':fechaproximaalert;  
                 fechaproximaalert = f.diff(actual_fecha,'days') <=2 && f.diff(actual_fecha,'days') >=0 ? '<span class=" requerimiento fa-beat-fade"> Restan '+f.diff(actual_fecha,'days')+' Dias</span>':  fechaproximaalert;      
               }               
               else{
                fechaproximaalert = 'Sin Fecha';
               }            
                return fechaproximaalert
               console.log(fechaproximaalert)

          
        }},
        {data:'fechaproxima',name:'fechaproxima'},

        { 
            "mRender": function(data, type, row){
              var editUrl = url+"editar/" + row.id_juicio;
              var deleteUrl =url+"eliminar/" + row.id_juicio;              
              var ligajuicio=row.id_juicio;
                                        
              return `              
              <button value="Actualizar" title="Actualizar" class="btn  btn-edit" onclick="editarJuicio(${ligajuicio})"><i class="fa fa-pencil"></i></button>
              `
            }
          }
        


    ],


    });
});

function mostrar_modal_juicio(data) {
    
    let segment =location.href.split('/');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url : url +"desgloce_juicio/"+data,
        dataType: 'html',
        success: function(resp_success) {
            var modal = resp_success;
            $(modal).modal().on('shown.bs.modal', function() {
            $("[class='make-switch']").bootstrapSwitch('animate', true);
            $('.select2').select2({dropdownParent: $("#modal-juicio")});
            let etapa = document.getElementById('etappa').textContent //se obtiene el nombre de la etapa en la que se encuentra para manipular los datos a mostrar
            let archivo = $('#archivo')[0];           
            archivo.addEventListener('change', () => {            
                document.querySelector('#docn').innerText = archivo.files[0].name;
                document.querySelector('#docn').classList.remove('textanime')
                document.querySelector('#docn').classList.add('textanime')
                  
             });

    


            }).on('hidden.bs.modal', function() {
                $(this).remove();
            });            
        },
        error: function(respuesta) {
            Swal.fire('¡Alerta!','Error de conectividad de red USR-03','warning');
        }
    });   
};


function editarJuicio(data,ads) {
    // muestra modal de edicion
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url : url +"edit_juicio/"+data,
        dataType: 'html',        
        success: function(resp_success) {                      
            var modal = resp_success;
                $(modal).modal().on('shown.bs.modal', function() {
                $("[class='make-switch']").bootstrapSwitch('animate', true);
                $('.select2').select2({dropdownParent: $("#edicion_juicio")});                                    
                }).on('hidden.bs.modal', function() {
                    $(this).remove();
                });                          
        },
        error: function(respuesta) {
            Swal.fire('¡Alerta!','Error de conectividad de red USR-03','warning');
        }
    });   
};


function update_actualiza_datos_generales(id,formname){
     console.log(formname);
    let formData = new FormData($('#'+formname).get(0));       
    formData.append('_method','PUT');    
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: url+'juicios_update/'+id+'/'+formname ,        
        type:'POST',
        data:formData,
        contentType: false,
        processData: false,    
        success: function(response) {
            
            table.ajax.reload(); 
            // Recargar el modal con los datos actualizados
            editarJuicio(id);
            // Cerrar el modal actual
            $('#editjuicio').modal('hide');
        },
        error: function(respuesta) {
            Swal.fire('¡Alerta!', 'Error de conectividad de red USR-03', 'warning');
        }                    
    });


//    location.reload(); // recarga la pagina al cuncluir la edicion dentro del modal               
}






//eliminar checando si es util ?

// $('form').submit(function (e) {
//     e.preventDefault();
//   });
//   $('form input').on('change', function () {
//     var file        = $(this).prop('files')[0],
//         convertToMb = Math.floor(file.size / 1024 / 1024);
    
//     $('form #r').html(
//       "<div>Name: <span>" + file.name + "</span></div>" +
//       "<div>Type: <span>" + file.type + "</span></div>" +
//       "<div>Size: <span>" + file.size + ' bytes (' + convertToMb + ' mb)' + "</span> </div>"
//       );
//     console.log(file);
//   });
  
//   $('form button').click(function () {
//     $('input').click();
//   });














//   $(document).ready(function() {
     

//     $(':file').on('fileselect', function(event, numFiles, label) {
//       console.log(numFiles);
//       console.log(label);
//     });

//   });



 
    
 

