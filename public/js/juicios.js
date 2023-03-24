$(function() {
    $("#juicio_sala_seleccionada").change(function() {        
        let data = {"valor":$(this).val()};        
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},                        
            url: url+"juicios/data",
            dataType : 'json',
            type: 'POST',
            data:  data ,
            success: function(abogadesdesalas) {
                if (abogadesdesalas.success == true) {
                    const abogadoss=[];
                    abogadesdesalas.abogados.forEach(element => {
                        abogadoss.push(element.nombre);                                               
                   });                   
                   $("#abogados_asignados").val(abogadoss.join(" , "));                                                                
                }                              
            },
        })        
    });
});

