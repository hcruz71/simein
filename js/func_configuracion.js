 $(document).ready(function(){
    $('#tabla_asistentes').load('bloques/configuracion/tablas/asistentes.php');
    $('#receta_tabla').load('bloques/configuracion/tablas/recetas.php');
        
  });


        function guardarConfConsultas(){ 
            id_alergicos=$( "#id_alergicos" ).prop( "checked");
            id_hf=$( "#id_hf" ).prop( "checked");
            id_pp=$( "#id_pp" ).prop( "checked");
            id_np=$( "#id_np" ).prop( "checked");
            id_go=$( "#id_go" ).prop( "checked");
            id_exploracion=$( "#id_exploracion" ).prop( "checked");
            id_signos_vitales=$( "#id_signos_vitales" ).prop( "checked");
            id_diagnosticos=$( "#id_diagnosticos" ).prop( "checked");
            id_gabinete=$( "#id_gabinete" ).prop( "checked");
            id_honorarios=$( "#id_honorarios" ).prop( "checked");



            if (id_alergicos==1) {
                $( "#id_alergicos" ).val(1);
            }
            if (id_alergicos==0) {
                $( "#id_alergicos" ).val(0);
            }


            if (id_hf==1) {
                $( "#id_hf" ).val(1);
            }
            if (id_hf==0) {
                $( "#id_hf" ).val(0);
            }

            if (id_pp==1) {
                $( "#id_pp" ).val(1);
            }
            if (id_pp==0) {
                $( "#id_pp" ).val(0);
            }

            if (id_np==1) {
                $( "#id_np" ).val(1);
            }
            if (id_np==0) {
                $( "#id_np" ).val(0);
            }

            if (id_go==1) {
                $( "#id_go" ).val(1);
            }
            if (id_go==0) {
                $( "#id_go" ).val(0);
            }

            if (id_exploracion==1) {
                $( "#id_exploracion" ).val(1);
            }
            if (id_exploracion==0) {
                $( "#id_exploracion" ).val(0);
            }

             if (id_signos_vitales==1) {
                $( "#id_signos_vitales" ).val(1);
            }
            if (id_signos_vitales==0) {
                $( "#id_signos_vitales" ).val(0);
            }

             if (id_diagnosticos==1) {
                $( "#id_diagnosticos" ).val(1);
            }
            if (id_diagnosticos==0) {
                $( "#id_diagnosticos" ).val(0);
            }

             if (id_gabinete==1) {
                $( "#id_gabinete" ).val(1);
            }
            if (id_gabinete==0) {
                $( "#id_gabinete" ).val(0);
            }

             if (id_honorarios==1) {
                $( "#id_honorarios" ).val(1);
            }
            if (id_honorarios==0) {
                $( "#id_honorarios" ).val(0);
            }




        var datos=$('#form_conf_consultas').serialize();
            $.ajax({
                type:"POST",
                url:"db/guardar_datos.php",
                data:datos,
                success:function(r){
                    if(r==1){
    
                    }else{
                        
                    }
                }
            });
    }
$("#prefijo").focusout(function(){
      guardarDoctor();
    });
$("#telefono").focusout(function(){
      guardarDoctor();
    });

$("#celular").focusout(function(){
      guardarDoctor();
    });

$("#correo").focusout(function(){
      guardarDoctor();
    });

$("#direccion").focusout(function(){
      guardarDoctor();
    });

$("#de_cProf").focusout(function(){
      guardarDoctor();
    });

$("#de_cEsp").focusout(function(){
      guardarDoctor();
    });
        //Convert Image to Base64
        //$(document).ready(function() {
            $("#upload_receta").change(function() {
                var filesSelected = document.getElementById("upload_receta").files;
                if (filesSelected.length > 0) {
                    var fileToLoad = filesSelected[0];
                    var fileReader = new FileReader();
                    fileReader.onload = function(fileLoadedEvent) {
                        var datos = fileLoadedEvent.target.result;
                        var id = $('#id_load_receta').val();
                        $.ajax({
                            type:"POST",
                            url:"db/guardar_datos.php",
                            data:{
                                load_receta:datos,
                                id:id
                            },
                            success:function(r){
                                if (r=="") {
                                    alertDanger();
                                }else{
                                     alertSuccess();
                                //document.getElementById('img_loader').setAttribute('src', r);
                                }
    
                            }
                        });

                    };
                    fileReader.readAsDataURL(fileToLoad);
                }
            });
      //  });

function replace2(){
    var data = $('#div_rec').html();
    nombre = 'jesus ALBERTO';
    fecha = '12-12-2018';
    fright=$('#fr').val();
    ftop=$('#ft').val();
    data = data.replace('_PACIENTE', nombre);
    data = data.replace('_FECHA', fecha);
    data = data.replace('_fright', fright);
    data = data.replace('_fright', fright);
    $('#div_replace').html(data);
    printContent('div_rec');
    

}

function replace(id_template){
    
    
            $.ajax({  
                url:"print/receta_prueba.php",  
                method:"POST",  
                data:{id_template:id_template},   
                success:function(data){  
                 nombre = 'Nombre del Paceinte Aquí';
                fecha = 'Fecha Aquí';
                receta = 'Receta Aquí';
                data = data.replace('_PACIENTE', nombre);
                data = data.replace('_FECHA', fecha);
                data = data.replace('_RECETA', fecha);
                $('#div_rec').html(data);
                printContent('div_rec');
           }
       });
    

}

    function edit_receta(id_template){ 
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id_template:id_template},  
                dataType:"json",  
                success:function(data){  
                    $("#id_template").val(data.id_template);
                    $("#descripcion").text(data.descripcion);
                    $("#descripcion_text").val(data.descripcion);
                    $("#nom_top").val(data.nom_top);
                    $("#nom_left").val(data.nom_left);
                    $("#fecha_top").val(data.fecha_top);
                    $("#fecha_right").val(data.fecha_right);
                    $("#rec_top").val(data.rec_top);
                    $("#rec_left").val(data.rec_left);
                    $("#font_size").val(data.font_size);
                    $("#file_update_receta_text").val(data.img_rec);
                    document.getElementById('img_rec').setAttribute('src', data.img_rec);
                    //$("#div_descipcion").hide();
                    $("#edit_modal").modal();
           }
       });
    }

    function delete_receta(id_delete_receta){ 
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id_delete_receta:id_delete_receta},  
                dataType:"json",  
                success:function(data){ 
                    if (data==1) {
                $('#receta_tabla').load('bloques/configuracion/tablas/recetas.php');
                    alertSuccess();
                }else{
                $('#receta_tabla').load('bloques/configuracion/tablas/recetas.php');
                    alertDanger();
                }
           }
       });
    }


    function add_receta(){  
                    $("#id_template").val('');
                    $("#descripcion").text('');
                    $("#descripcion_text").val('');
                    $("#nom_top").val('');
                    $("#nom_left").val('');
                    $("#fecha_top").val('');
                    $("#fecha_right").val('');
                    $("#rec_top").val('');
                    $("#rec_left").val('');
                    $("#font_size").val('');
                    $("#file_update_receta_text").val('');
                    document.getElementById('img_rec').setAttribute('src', '');
                    
                    $("#edit_modal").modal();
    }


function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}


    function guardarDoctor(){ 
        var datos=$('#form_doctor').serialize();
            $.ajax({
                type:"POST",
                url:"db/guardar_datos.php",
                data:datos,
                success:function(r){
                    if(r==1){

                    }else{

                    }
                }
            });
    }



function guardarCambiosReceta(){
    var datos=$('#from_update_recetas').serialize();
    $.ajax({
        type:"POST",
        url:"db/guardar_datos.php",
        data:datos,
        success:function(r){
            if (r==1) {
                alertSuccess();
                $('#receta_tabla').load('bloques/configuracion/tablas/recetas.php');
                $("#edit_modal").modal('hide');
            }else{
                alertDanger();
                $('#receta_tabla').load('bloques/configuracion/tablas/recetas.php');
            }
        }
    });

    return false;
    }

        function cargar_receta(){
            var filesSelected = document.getElementById("file_update_receta").files;
                if (filesSelected.length > 0) {
                    var fileToLoad = filesSelected[0];
                    var fileReader = new FileReader();
                    fileReader.onload = function(fileLoadedEvent) {
                        var data = fileLoadedEvent.target.result;
                        $.ajax({
                            type:"POST",
                            url:"db/archivos.php",
                            data:{foto_pac:data},
                            success:function(r){
                                document.getElementById('img_rec').setAttribute('src', data);
                                $('#file_update_receta_text').val(data);
                                alertSuccess();
                                
                            }
                        });
                    };
                    fileReader.readAsDataURL(fileToLoad);
                }
                
               //myVar = setTimeout(load, 1700);  
            }

 function deleteAsistente(id_delete){
    var id_delete = id_delete;
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id_delete:id_delete},  
                dataType:"json",  
                success:function(data){  
                    $('#nombre_asistente').val("");
                    $('#correo_asistente').val("");
                    $('#pass_asistente').val("");
                    $('#id_asistente').val("");
                    $( "#id_antecedente_asistente" ).prop( "checked", false);
                    $( "#id_historial_asistente" ).prop( "checked", false);
                    $('#tabla_asistentes').load('bloques/configuracion/tablas/asistentes.php');

           }
       });
 }

    function editarAsistente(id_asistente){ 
        var id_asistente = id_asistente;
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id_asistente:id_asistente},  
                dataType:"json",  
                success:function(data){  
                    var id_antecedente = data.id_antecedentes;
                    var id_historial = data.id_historial;
                    $('#nombre_asistente').val(data.usuario);
                    $('#correo_asistente').val(data.nb_usuario);
                    $('#pass_asistente').val(data.pw_usuario);
                    $('#id_asistente').val(data.id);
                    if (id_antecedente==1) {
                        $( "#id_antecedente_asistente" ).prop( "checked", true);
                    }else{
                        $( "#id_antecedente_asistente" ).prop( "checked", false);
                    }

                    if (id_historial==1) {
                        $( "#id_historial_asistente" ).prop( "checked", true);
                    }else{
                        $( "#id_historial_asistente" ).prop( "checked", false);
                    }

           }
       });
    }

    $('#btn_asistentes').click(function(e){ 
            e.preventDefault();
        var datos=$('#form_asistentes').serialize();
        $.ajax({
            type:"POST",
            url:"db/guardar_datos.php",
            data:datos,
            success:function(r){
                if(r==1){
                        alert('shs');
                    }else{
                    $('#nombre_asistente').val("");
                    $('#correo_asistente').val("");
                    $('#pass_asistente').val("");
                    $('#id_asistente').val("");
                    $( "#id_historial_asistente" ).prop( "checked", false);
                    $( "#id_antecedente_asistente" ).prop( "checked", false);
                    $('#tabla_asistentes').load('bloques/configuracion/tablas/asistentes.php');

                    }
            }
       });
        return false;
    });
    
    $('#btn_pass').click(function(e){ 
            e.preventDefault();
        var datos=$('#form_pass').serialize();
        $.ajax({
            type:"POST",
            url:"db/guardar_datos.php",
            data:datos,
            success:function(r){
                if(r==1){
                    $('#pass').val("");
                    $('#re_pass').val("");
                    $('#pass_actual').val("");
                    alertSuccess();
                }else{
                    alertDanger();
                    $('#pass').val("");
                    $('#re_pass').val("");
                    $('#pass_actual').val("");
                }
            }
       });
        return false;
    });

    $('#btn_guardar_h').click(function(){
        console.log('dio clic');
        guardarHistorial();
        
    });