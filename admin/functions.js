    function agregarRepre(){ 
        var datos=$('#form_repres').serialize();
        $.ajax({
            type:"POST",
            url:"db/admin/guardar_datos.php",
            data:datos,
            success:function(r){
                if(r==1){
                        
                    location.href='index.php';
                    }else{
                    
                    }
            }
       });
        return false;
    }

    function agregarDoctor(){ 
        var datos=$('#form_doctor').serialize();
        $.ajax({
            type:"POST",
            url:"db/admin/guardar_datos.php",
            data:datos,
            success:function(r){
                if(r==1){
                        location.href='index.php';
                    }else{
                        alert('Algo salio mal');
                    }
            }
       });
        return false;
    }

    function add_med(){ 
        var datos=$('#form_medicamentos').serialize();
        $.ajax({
            type:"POST",
            url:"db/admin/guardar_datos.php",
            data:datos,
            success:function(r){
                if(r==1){
                        
                    location.href='index.php';
                    }else{
                    
                    }
            }
       });
        return false;
    }

    function load_doctor(load_doc)
    {
        $.ajax({
            url : 'db/fetch.php',
            type : 'POST',
            dataType : 'json',
            data : { load_doc: load_doc },
            })

        .done(function(r){

           /* $("#id_doctor_add").val(r.id_doctor);
            $("#nombre_doctor").val(r.nombre);
            $("#atencion").val(r.atencion);
            $("#nu_cEsp").val(r.de_cEsp);
            $("#nu_cProf").val(r.de_cProf);
            $("#domicilio_doctor").val(r.direccion);
            $("#celular_doctor").val(r.celular);
            $("#correo_doctor").val(r.correo);
            $("#id_especialidad").val(r.id_especialidad);
            $("#metodo").hide();
            $("#nuevo_doctor").modal();*/
        
            document.getElementById("id_doctor_add").value = r.id_doctor;
            document.getElementById("nombre_doctor").value = r.nombre;
            document.getElementById("atencion").value = r.atencion;
            document.getElementById("nu_cEsp").value = r.de_cEsp;
            document.getElementById("nu_cProf").value = r.de_cProf;
            document.getElementById("domicilio_doctor").value = r.direccion;
            document.getElementById("celular_doctor").value = r.celular;
            document.getElementById("correo_doctor").value = r.correo;
            document.getElementById("id_especialidad").value = r.id_especialidad;
            document.getElementById("metodo").style.visibility = "hidden";
            document.getElementById("nuevo_doctor").style.visibility = "hidden";
            
            
        })
    }
    function limpiar_modal_doc()
    {

        /*
        $("#id_doctor_add").val("");
        $("#nombre_doctor").val("");
        $("#atencion").val("");
        $("#nu_cEsp").val("");
        $("#nu_cProf").val("");
        $("#domicilio_doctor").val("");
        $("#celular_doctor").val("");
        $("#correo_doctor").val("");
        $("#id_especialidad").val("");
        $("#nuevo_doctor").modal();
        */

        
        document.getElementById("id_doctor_add").value = "";
        document.getElementById("nombre_doctor").value = "";
        document.getElementById("atencion").value = "";
        document.getElementById("nu_cEsp").value = "";
        document.getElementById("nu_cProf").value = "";
        document.getElementById("domicilio_doctor").value = "";
        document.getElementById("celular_doctor").value = "";
        document.getElementById("correo_doctor").value = "";
        document.getElementById("id_especialidad").value = "";
        document.getElementById("metodo").style.visibility = "";
    
    }


// BUSCADOR MED
    $(res_add_med());

    function res_add_med(nombre_med)
    {
        $.ajax({
            url : 'db/buscar.php',
            type : 'POST',
            dataType : 'html',
            data : { nombre_med: nombre_med },
            })

        .done(function(resultado){
            $("#tabla_res_add_med").html(resultado);
        })
    }

    $(document).on('keyup', '#buscar_med', function()
    {
        var valorBusqueda=$(this).val();
        if (valorBusqueda!="")
        {
            res_add_med(valorBusqueda);
        }
        else
            {
                res_add_med();
            }
    });

        function cargar_add_med(id_med){ 
        var id_med = id_med;
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id_med:id_med},  
                dataType:"json",  
                success:function(data){  
                    $('#id_med').val(data.id);
                    $('#nombre_med').val(data.nombrecomercial);
                    $('#presentacion_med').val(data.presentacion);
                    $('#envoltura').val(data.envoltura);
                    $('#ingrediente').val(data.ingrediente);
                    $('#concentracion').val(data.concentracion);
                    $('#unidad').val(data.unidad);
                    $('#tabla_res_add_med').html('');

           }
       });
        return false;
    }
// BUSCADOR MED