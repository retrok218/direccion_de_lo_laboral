
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

function seacercan(fechas) {
     
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
      })
      
      Toast.fire({
        icon: 'success',
        title: '<span style="font-weight:bold;">Hay <h3 style="color:red;">'+fechas+'</h3> juicios en etapa de ejecución con fechas próximas</span>',
         
      })
}

//funcion para filtro por columna
function filterColumn(table, i) {
    let filter = document.querySelector('#col' + i + '_filter');     
    table.column(i).search(filter.value).draw();
}
 

let table ;
$(document).ready(function(){
    table = $('#juiciotabla').DataTable({      
                 
    "pageLength": 10,   
    //"lengthChange": true,
    "searching": true,
    responsive: true,        
    "info": true,    
   "autoWidth": true,             
    dom:'Bfrtip<"col-md-6 inline"i> <"col-md-6 inline"p>',
    dom:'Bfrtip',       
    deferRender:true, 
    //columnDefs: [{ width: '3%', targets:0 },{ width: '5%', targets:1 },{ width: '1%', targets: 2},{ width: '5%', targets:3 },{ width: '5%', targets:4 },{ width: '5%', targets: 5},{width:'5%' ,targets:6},{width:'5%' ,targets:7},{width:'5%',targets:8},
    // {width:'5%',targets:9},{width:'20%',targets:10}
    //],
    "search": {
      "regex": true,
      "caseInsensitive": false,
    },
    language: {
        buttons: {
          colvisRestore: "now changed",
            
        }
      },

    buttons: {
        
      
        buttons: [
            
            {
                extend: 'excelHtml5',
                className: 'botones_table',
                text: '<i class="fas fa-file-excel"></i> Exel',                
                titleAttr: 'Excel',
                //className: 'btn btn-app export excel',
                exportOptions: {                   
                },
            },
            {
                extend: 'print',
                className: 'botones_table',
                text: '<i class="fa fa-print"></i>Imprimir',                
                titleAttr: 'Imprimir',
                //className: 'btn btn-app export imprimir',
                exportOptions: {                    
                }
            },
            {
                extend: 'pdfHtml5',
                text: '<i class="fas fa-file-pdf"></i>PDF',                
                titleAttr: 'PDF',               
                orientation: 'landscape',
                pageSize: 'TABLOID',        
                className: 'botones_table',       
                customize: function (doc) {
                    doc.styles.title = {
                        color: '#114627',
                        fontSize: '30',
                        alignment: 'center'
                    }
                    doc.styles['td:nth-child(2)'] = {
                            width: '100px',
                            'max-width': '100px',
                            margin: [0, 0, 0, 12 ],
                        },
                        doc.styles.tableHeader = {
                            fillColor: '#114627',
                            color: 'white',
                            alignment: 'center',   
                        } 
                },
            } ,
            {
                text: 'Ultimos agregados',
                className: 'botones_table',
                action: function () {
                    table.order([[1, 'desc']]).draw();
                }
            },  
            {
                text: 'Acomodar Fecha Audiencia',
                className: 'botones_table',
                action: function () {
                    table.order([[3, 'desc']]).draw();
                }
            },      
            {
                extend: 'colvis',
                 postfixButtons: [{extend:'colvisRestore', text:'RESTAURAR COLUMNAS'}],
                 text: 'Columnas',
                 className: 'btn-custom-colvis',  // se agregamos una clase de css para agregar scrol y darle tamaño al colvis 
            },       
        ],
        columnDefs: [
            {
                targets: -1,
                visible: false,                
            }
        ]
    },
    
    language: {
        "url": url + "assets/vendors/general/datatables/Spanish.json",  
    },
    ajax: {
        "url": url + "data/juicios",
        
    },
    

    // cambia el estilo de la fila dependiendo de id_juicio
    "createdRow": function(row, data, dataIndex) {
      
        let actual_fecha = moment(); 
        let f = moment(data.audiencia);            
        let diferenciafehas =f.diff(actual_fecha,'days');
        if (diferenciafehas > 1) {
            // verde si faltan mas de 2 dias            
            $(row).find('td').css('color', 'rgb(60, 53, 53)');            
            $(row).css('background', 'rgba(7, 232, 0, 0.14)');                        
            //$(row).css('box-shadow', '2px 1px 8px rgba(0, 255, 40)');                                    
        } else if (diferenciafehas <= 1 & diferenciafehas > -1) {
            //rojo 0 dias o menos de 0 dias
            $(row).css('background', 'rgba(255, 1, 1, 0.38)');
            //$(row).css('box-shadow', 'rgb(255, 0, 0) 2px 1px 8px');           
            $(row).find('td').css('color', 'rgb(60, 53, 53)');
        }        
        else {
            //Gris vencidos 
            $(row).find('td').css('background-color', 'rgb(139 135 135 / 31%)');
            $(row).find('td').css('color', 'rgb(80 80 80 / 50%)');
        }
    },    
    columns:[    
            
        { "mRender": function(data, type, row){  
                 
            
            let actual_fecha = moment(); 
            let f = moment(row.audiencia);
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
                var accionj=row.accion;                        
                return `<a  onclick="mostrar_modal_juicio(${ligajuicio},'${accionj}')" title="Desglose de Juicio" ;><button class="button2"> <span> ${row.id_juicio} </span> </button></a>`;                                   
            }
        },
       
        // {"mRender":function(data,type,row){
        //     return `${row.nombrecompleto}`
        //     }
        // },
        // //{data:'nombre_completo', name:'nombre_completo'},
        // {data:'audiencia',name:'audiencia'},        
        // {data:'expediente',name:'expediente'},
        // {data:'accion',name:'accion'},
        // {data:'adscripcion', name:'adscripcion'},                
        // {"mRender":function(data,type,row){
        //     let actual_fecha = moment(); 
        //     let f = moment(row.fechaproxima);            
        //     let fechaproximaalert;
        //     if (row.fechaproxima !== null ) {                
        //          fechaproximaalert = f.diff(actual_fecha,'days') ;
        //          fechaproximaalert = f.diff(actual_fecha,'days') <= 0 ? ' Feacha Vencida '+row.fechaproxima:fechaproximaalert;                     
        //          fechaproximaalert = f.diff(actual_fecha,'days') <=2 && f.diff(actual_fecha,'days') >=0 ? '<span class=" requerimiento fa-beat-fade"> Faltan '+f.diff(actual_fecha,'days')+'- Dias '+f.diff(actual_fecha,'hours')+'- Horas </span><br> <span class=" requerimiento fa-beat-fade" >Proxima Fecha: '+row.fechaproxima+'</span>':  fechaproximaalert;      
        //        }               
        //        else{
        //         fechaproximaalert = 'Sin Fecha';
        //        }            
        //         return fechaproximaalert
                       
        // }},  

        // { 
        //     "mRender": function(data, type, row){               
        //       var editUrl = url+"editar/" + row.id_juicio;
        //       var deleteUrl =url+"eliminar/" + row.id_juicio;                           
        //       var ligajuicio=row.id_juicio;                         
        //     if (row.status_us == true) {
        //         return `<button type="button" class="btn btn-outline-brand btn-icon" disabled><i class="fa fa-pencil" title="Logueate para poder Editar"></i></button>`
        //     }
        //     return `<button value="Editar" title="Editar" type="button" class="btn btn-outline-brand btn-icon" onclick="editarJuicio(${ligajuicio})" ><i class="fa fa-pencil" ></i></button>`                            
        //     }
        // }     

        {data:'noti_demanda',name:'noti_demanda'}, 
        {data:'presentacion_de_demanda',name:'presentacion_de_demanda'},
        {data:'nombre_sala', name:'nombre_sala'},
        {"mRender": function(data,type,row){
            return `${row.expediente} - ${row.año_juicio} ` 
        }},
        {data:'clasificacion_año', name:'clasificacion_año'},
        {data:'clasificacion_exp', name:'clasificacion_exp'},
        {data:'tipo', name:'tipo'},
        {data:'accion', name:'accion'},  
        {data:'nombre_completo', name:'nombre_completo'},   
        {data:'adscripcion', name:'adscripcion'},
        {data:'ur', name:'ur'},
        {data:'denominacion', name:'denominacion'},
        {data:'puesto' , name:'puesto'},
        {data:'nivel' , name:'nivel'},
        {data:'salarioMen' , name:'salarioMen'},
        {data:'inicio_rellab' , name:'inicio_rellab'},
        {data:'terminacion_rellab' , name:'terminacion_rellab'},
        {data:'exp_personal_rh_solicitud' , name:'exp_personal_rh_solicitud'},
        {data:'exp_personal_rh_devolucion' , name:'exp_personal_rh_devolucion'},
        {data:'fojas' , name:'fojas'},
        {data:'exp_adscripcion_solicitud' , name:'exp_adscripcion_solicitud'},
        {data:'exp_adscripcion_devolucion' , name:'exp_adscripcion_devolucion'},
        


        


        
        




    ],
//filtro arriba de las columnas por fila
//     initComplete: function() {
//         this.api().columns([2,9]).every(function() {
//             var column = this;

//             var select = $('<select><option value=""></option></select>')
//                 .appendTo($(column.header()))
//                 .on('change', function() {
//                     var val = $.fn.dataTable.util.escapeRegex(
//                         $(this).val()
//                     );
                     
//                         column
//                         .search(val ? '^' + val + '$' : '', true, false)
//                         .draw();
                    
                    
//                 });
//                 //Este codigo sirve para que no se active el ordenamiento junto con el filtro
//             $(select).click(function(e) {
//                 e.stopPropagation();
//             });
//             //===================

//             column.data().unique().sort().each(function(d, j) {
//                 // select.append('<option value="' + d + '">' + d + '</option>')
               
//                     select.append('<option value="' + d + '">' + d + '</option>')
                
//             });

            

//         });
//     },
//     "aoColumnDefs": [
//      { "bSearchable": false, "aTargets": [ 1 ] }
//    ] 
    });


    
            
   // setInterval(table.ajax.reload(),5000);
});
//fin de datatable







//se genera filtro por actoer y por expediente
// document.querySelectorAll('input.column_filter').forEach((el) => {
//     let tr = el.closest('tr');
//     let columnIndex = tr.getAttribute('data-column'); 
//     el.addEventListener(el.type === 'text' ? 'keyup' : 'change', () =>
//         filterColumn(table, columnIndex)
//     );
// });

//filtro experimental **********
document.querySelectorAll('input.filtro').forEach((el) =>{
    let label = el.previousElementSibling;    
    let indicecolum = label.getAttribute('data-column');
    el.addEventListener(el.type === 'text' ? 'keyup' : 'change', () =>
         filterColumn(table, indicecolum)
    );
    
});

 let filtro_looco = document.getElementById('filtrox');
 let fila_filtro = document.getElementById('filtro_completo');
 let filaseleccionada = fila_filtro.value ;
 fila_filtro.addEventListener('change',()=>{
     filaseleccionada =  fila_filtro.value;
     filtro_seleccion(filaseleccionada);
 }) 
 function filtro_seleccion(filaseleccionada) {
    filtro_looco.addEventListener('change', () => {    
       // console.log(filaseleccionada);
        table.column(filaseleccionada).search(filtro_looco.value).draw();
     });
 }

 // filtro por seleccion de los elemntos dentro de la columna
//  let filtro_accion_auto = document.addEventListener('click' , () => {
//     let select = $('#por_accion');
//     //let seleccion = document.getElementById('por_accion');
//     let option_unica = new Set();
//   table.column(9).data().each(function (value) {
//    if (!option_unica.has(value)) {
//         select.append($('<option>', {
//             value: value,
//             text: value
//         }));    
//    }  
//    option_unica.add(value);   
//   });
 
//  });
 
  
//fin del filtro ****************

//modal desgloce de juicio 
function mostrar_modal_juicio(data,accion) {    
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

// agregando  js propio 
             let hrasextra = $('#horas_extra')[0];             
             let caracteres = /^[0-9.]+$/;   
             let prestaciones_1 = document.getElementById('prestaciones_legales');
             let coco = document.getElementById('cocodi_value');  
             let coco_value = document.getElementById('cocodi_value').textContent;    
             let indemnizacion_value = document.getElementById('indemnizacion_value').value;
             let nsuma = document.getElementById('n_cocodi').textContent;             
             let valor_prestaciones_legales= document.getElementById('prestaciones_legales').innerHTML.replace(/,/g, ""); 

                let checkbox = document.getElementById('horasextracheck');
                checkbox.addEventListener('change', () => {
                    let estaactiva = checkbox.checked;
                    const horasExtraInput = document.getElementById('horas_extra');
                    if (estaactiva) {
                        horasExtraInput.disabled = false;
                    }else{
                        horasExtraInput.disabled = true;
                        let prestaciones_1 = document.getElementById('prestaciones_legales');
                        prestaciones_1.innerHTML =valor_prestaciones_legales;
                    }
                });

          
             // se crea un escuchador para el input de horas extra al ingresar un numero se suma a la cantidad 
             
    hrasextra.addEventListener('change', () =>{                            
               let prestaciones_2 = document.getElementById('horas_extra').value;                               
                if (prestaciones_2 === "" || !caracteres.test(prestaciones_2))   {
                    prestaciones_1.innerHTML = "Por favor ingresa un valor válido";
                    document.querySelector('#prestaciones_legales').classList.add('fa-beat-fade')
                }else{                    
                    let res = (parseFloat(prestaciones_2)+parseFloat(valor_prestaciones_legales));
                    prestaciones_1.innerHTML =res.toFixed(2);                                      
                    document.querySelector('#prestaciones_legales').classList.remove('fa-beat-fade')                 
                }                                            
    })


    
             let operacioncoco = coco_value
            //  var labelElement = document.querySelector('#trimestre');
            let sum_salarios_caidos = 0 ;
            let res_salarios_caidos = document.getElementById('res_salarioscaidos');
            let res_salarios_caidos_valor = document.getElementById('res_salarioscaidos').textContent;

             var checkboxes = document.querySelectorAll('input[name="saltrime"]');
             checkboxes.forEach(
                element => element.addEventListener('change' , () =>{
                    if (element.checked) {

                        operacioncoco =  parseFloat(operacioncoco)+ parseFloat(element.value) ;
                        sum_salarios_caidos = parseFloat(sum_salarios_caidos)+parseFloat(element.value)                        
                        res_salarios_caidos.innerHTML = sum_salarios_caidos.toFixed(2);
                        
                    }else{
                        operacioncoco = parseFloat(operacioncoco)- parseFloat(element.value);
                        sum_salarios_caidos = parseFloat(sum_salarios_caidos)- parseFloat(element.value);                       
                        res_salarios_caidos.innerHTML = sum_salarios_caidos.toFixed(2);                        
                    }
                        
                    
                    

                })    
            );
    
        //ocultamos el elemento reinstalacion ya que cuando la accion es indemnizacion no se requiere mostrar salariois caidos reinstalacion           
        if (accion === "Indemnización") {                 
                    document.querySelector('#salarioscaidos').classList.add('oculto');

                    let empezar_cocodi= document.getElementById('empezar_cocodi');    
                    empezar_cocodi.addEventListener('change',() =>{
                        if (empezar_cocodi.checked) { //revisamos si el imput de cocodi nueva suma esta activado                    
                         let res_new_cocodi =  parseFloat(document.getElementById('indemnizacion_value').value) + parseFloat(document.getElementById('prestaciones_legales').innerHTML.replace(/,/g, ""));
                         n_cocodi.value = res_new_cocodi.toFixed(2);
                                            
                        }else{
                            n_cocodi.value = 0;
                        }   
                    })
            }else if (accion === "Reinstalación"){
                    document.querySelector('#indemnizacion').classList.add('oculto');
                    document.querySelector('#trimestres').classList.remove('oculto')
                    let checkboxes = $("input[type=checkbox][name=saltrime]")
                    let enabledSettings = [];
                            // Attach a change event handler to the checkboxes.
                            checkboxes.change(function() {
                            enabledSettings = checkboxes
                                .filter(":checked") // Filter out unchecked boxes.
                                .map(function() { // Extract values using jQuery map.
                                return this.value;
                                }) 
                                .get()                            
                            });
            //creando nueva suma para cocodi
               let empezar_cocodi= document.getElementById('empezar_cocodi');    
               empezar_cocodi.addEventListener('change',() =>{
                   if (empezar_cocodi.checked) { //revisamos si el imput de cocodi nueva suma esta activado                    
                    let res_new_cocodi =  parseFloat(document.getElementById('res_salarioscaidos').textContent) + parseFloat(document.getElementById('prestaciones_legales').innerHTML.replace(/,/g, ""));
                    n_cocodi.value = res_new_cocodi.toFixed(2);
                                      
                   }else{
                    n_cocodi.value = 0;
                   }   
               })

               }    
               else{
                document.querySelector('#indemnizacion').classList.add('oculto');
                document.querySelector('#salarioscaidos').classList.add('oculto');
                document.querySelector('#cocodi').classList.add('oculto');
                document.querySelector('#guardarcocodi').classList.add('oculto');
               }  

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


