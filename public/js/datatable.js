
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
        if (data.id_juicio == 1) {
            $(row).find('td').css('background-color', '#00800063');
            $(row).find('td').css('color', 'white');
        } else if (data.id_juicio == 2) {
            $(row).find('td').css('background-color', 'rgb(223 119 0 / 68%)');
            $(row).find('td').css('color', 'white');
        } else if (data.id_juicio == 3) {
            $(row).find('td').css('background-color', '#0000ff91');
            $(row).find('td').css('color', 'white');
        } else {
            $(row).find('td').css('background-color', '#41464154');
            $(row).find('td').css('color', 'white');
        }
    },

    columns:[


        { "mRender": function(data, type, row){
            let estatusRegla = "";
            if(row.id_juicio == '1'){
                estatusRegla = '<span class="kt-badge kt-badge--success kt-badge--dot"></span>';
            }
            else if (row.id_juicio == '2'){
                estatusRegla = '<span class="kt-badge kt-badge--warning kt-badge--dot"></span>';
            }
            else if(row.id_juicio == '3'){
                estatusRegla = '<span class="kt-badge kt-badge--pasado kt-badge--dot"></span>';
            }else {
                estatusRegla = '<span class="kt-badge kt-badge--pasado kt-badge--dot"></span>';
            }
            return estatusRegla;
        }},
               
        {"mRender": function(data, type, row){
            var ligajuicio=row.id_juicio;                
            //  return '<a href="'+url+'desgloce_juicio/'+ ligajuicio +'" target="_blank" title="Ir en busca del TKT en OTRS" ;><button class="button2"> <span> '+row.id_juicio+' <span> </button></a>';
             return `<a  onclick="mostrar_modal_juicio(${ligajuicio}) " title="Ir en busca del TKT en OTRS" ;><button class="button2"> <span> ${row.id_juicio} <span> </button></a>`;                                   }
        },
        {data:'noti_demanda', name:'noti_demanda'},
        {data:'presentacion_de_demanda', name:'presentacion_de_demanda'},
        {data:'expediente',name:'expediente'},
        {data:'tipo', name:'tipo'},
        {data:'accion', name:'accion'},
        {data:'actor.0.nombre_completo', name: 'actor.nombre_completo'},

        { 
            "mRender": function(data, type, row){
              var editUrl = "editar/" + row.id;
              var deleteUrl = "eliminar/" + row.id;
              return '<a href="'+editUrl+'" title="Editar"><i class="fa fa-pencil">'+'/'+'</i></a> <a href="'+deleteUrl+'" title="Eliminar"><i class="fa fa-trash"></i></a>';
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
    
}


