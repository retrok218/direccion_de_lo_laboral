
$(document).ready(function(){

var table = $('#juiciotabla').DataTable({
    "pageLength": 6,   
    "lengthChange": true,
    "searching": true,
    
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

        if (diferenciafehas >= 1) {
            // verde si faltan mas de 2 dias            
            $(row).find('td').css('color', 'rgb(60, 53, 53)');            
            $(row).css('background', 'rgba(7, 232, 0, 0.14)');                        
            $(row).css('box-shadow', '2px 1px 8px rgba(0, 255, 40)');                                    
        } else if (diferenciafehas < 1 & diferenciafehas > -1) {
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
            let diferenciafehas =f.diff(actual_fecha,'days');                        
            if( diferenciafehas >= 1){
                estatusRegla = '<i class="far fa-clock fa-xl" style="color: #0daf5c; margin: 0px 0px 0px 35%;" title='+'Resta'+diferenciafehas+'/D'+'></i>';
            }
            else if (diferenciafehas < 1 & diferenciafehas > -1){
                estatusRegla = '<i class="fa fa-bell fa-shake fa-xl" style="color: #511f1f; margin: 0px 0px 0px 35%;"></i>';
            }
            else {
                estatusRegla = '<i class="fa fa-calendar-times fa-xl" style="color: #484747; margin: 0px 0px 0px 35%;"></i>';
            }                         
            return estatusRegla;
        }},
               
        {"mRender": function(data, type, row){
            var ligajuicio=row.id_juicio;                
            //  return '<a href="'+url+'desgloce_juicio/'+ ligajuicio +'" target="_blank" title="Ir en busca del TKT en OTRS" ;><button class="button2"> <span> '+row.id_juicio+' <span> </button></a>';
             return `<a  onclick="mostrar_modal_juicio(${ligajuicio})" title="Ir en busca del TKT en OTRS" ;><button class="button2"> <span> ${row.id_juicio} <span> </button></a>`;                                   }
        },
        {data:'noti_demanda', name:'noti_demanda'},
        {data:'presentacion_de_demanda', name:'presentacion_de_demanda'},
        {data:'expediente',name:'expediente'},
        {data:'tipo', name:'tipo'},
        {data:'accion', name:'accion'},
        {data:'actor.0.nombre_completo', name: 'actor.nombre_completo'},

        { 
            "mRender": function(data, type, row){
              var editUrl = url+"editar/" + row.id_juicio;
              var deleteUrl =url+"eliminar/" + row.id_juicio;
              var ligajuicio=row.id_juicio;
              
              return `<a onclick="editarJuicio(${ligajuicio})" title="Editar"><i class="fa fa-pencil">/</i></a> <a href="'+deleteUrl+'" title="Eliminar"><i class="fa fa-trash"></i></a>`
            }
          }
        


    ],


    });
});

function mostrar_modal_juicio(data) {
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
            }).on('hidden.bs.modal', function() {
                $(this).remove();
            });
        },
        error: function(respuesta) {
            Swal.fire('¡Alerta!','Error de conectividad de red USR-03','warning');
        }
    });   
};


function editarJuicio(data) {
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


