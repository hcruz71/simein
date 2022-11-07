   // BUSCADOR PACIENTES AGENDA
    $(res_pac_agenda());

    function res_pac_agenda(busqueda)
    {
        $.ajax({
            url : 'db/buscar.php',
            type : 'POST',
            dataType : 'html',
            data : { busqueda: busqueda },
            })

        .done(function(resultado){
            $("#tabla_res_pacientes").html(resultado);
        })
    }

    $(document).on('keyup', '#busqueda', function()
    {
        var valorBusqueda=$(this).val();
        if (valorBusqueda!="")
        {
            res_pac_agenda(valorBusqueda);
        }
        else
            {
                res_pac_agenda();
            }
    });

        function cargarcita(id_pac){ 
        var id_pac_cita = id_pac;
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id_pac_cita:id_pac_cita},  
                dataType:"json",  
                success:function(data){  
                    $('#id_pac').val(data.id_Paciente);
                    $('#busqueda').val(data.nb_Paciente);
                    $('#nu_Edad').val(data.nu_Edad);
                    $('#de_Ocupacion').val(data.de_Ocupacion);
                    $('#fh_Nacimiento').val(data.fh_Nacimiento);
                    $('#id_Sexo').val(data.id_Sexo);
                    $('#nu_Celular').val(data.nu_Celular);
                    $('#de_Email').val(data.de_Email);
                    $('#de_Ocupacion').val(data.de_Ocupacion);
                    $('#foto_pac').val(data.fl_File);
                    document.getElementById('img_foto_pac').setAttribute('src', data.fl_File);
                    $('#tabla_res_pacientes').html("");

           }
       });
    }
// BUSCADOR PACIENTESS AGENDA

   // BUSCADOR PACIENTES AGENDA
    $(res_doc_agenda());

    function res_doc_agenda(busqueda2)
    {
        $.ajax({
            url : 'db/buscar.php',
            type : 'POST',
            dataType : 'html',
            data : { busqueda2: busqueda2 },
            })

        .done(function(resultado){
            $("#tabla_res_doc").html(resultado);
        })
    }

    $(document).on('keyup', '#busqueda2', function()
    {
        var valorBusqueda=$(this).val();
        if (valorBusqueda!="")
        {
            res_doc_agenda(valorBusqueda);
        }
        else
            {
                res_doc_agenda();
            }
    });

        function cargardoc(id_pac){ 
        var id_pac_cita = id_pac;
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id_pac_cita:id_pac_cita},  
                dataType:"json",  
                success:function(data){  
                    $('#id_pac').val(data.id_Paciente);
                    $('#busqueda2').val(data.nb_Paciente);
                    $('#de_Otros_datos').val(data.de_Otros_datos);
                    $('#is_Aseguradora').val(data.is_Aseguradora);
                    $('#nu_Celular').val(data.nu_Celular);
                    $('#de_Email').val(data.de_Email);
                    $('#nb_Emergencia').val(data.nb_Emergencia);
                    $('#de_Domicilio').val(data.de_Domicilio);
                    $('#de_Ocupacion').val(data.de_Ocupacion);
                    $('#tabla_res_doc').html("");

           }
       });
    }
// BUSCADOR PACIENTESS AGENDA