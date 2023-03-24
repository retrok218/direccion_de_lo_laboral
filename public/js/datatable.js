$(document).ready(function(){

var table = $('#example').DataTable({
    "pageLength": 6,   
    "lengthChange": true,
    "searching": true,
    "ordering": false,
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

    columns:[
        {data:'id_juicio', name:'id_juicio'},
        {data:'noti_demanda', name:'noti_demanda'},
        {data:'presentacion_de_demanda', name:'presentacion_de_demanda'},
        {data:'expediente',name:'expediente'},
        {data:'tipo', name:'tipo'},
        {data:'accion', name:'accion'},
        {data:'actor.0.nombre_completo', name: 'actor.nombre_completo'},
        {data: 'actor.0.puesto', name: 'actor.puesto'}
    ],


    });
});

