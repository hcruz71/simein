    $(document).ready(function(){
        load(1);
    });

    function load(page){
        var parametros = {"action":"ajax","page":page};
        $("#loader").fadeIn('slow');
        $.ajax({
            url:'bloques/consultas/historial_c.php',
            data: parametros,
             beforeSend: function(objeto){
            $("#loader").html("");
            },
            success:function(data){
                $(".outer_div").html(data).fadeIn('slow');
                $("#loader").html("");
            }
        })
    }

            function fotoEdit(){
            var filesSelected = document.getElementById("filePacEdit").files;
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
                                     $("#foto_pacEdit").val(data);
                                    document.getElementById('img_foto_pacEdit').setAttribute('src', data);
                            }
                        });
                    };
                    fileReader.readAsDataURL(fileToLoad);
                }
               //myVar = setTimeout(load, 1700);  
            }
function isValidDate(day,month,year)
{
    var dteDate;
 
    // En javascript, el mes empieza en la posicion 0 y termina en la 11 
    //   siendo 0 el mes de enero
    // Por esta razon, tenemos que restar 1 al mes
    month=month-1;
    // Establecemos un objeto Data con los valore recibidos
    // Los parametros son: año, mes, dia, hora, minuto y segundos
    // getDate(); devuelve el dia como un entero entre 1 y 31
    // getDay(); devuelve un num del 0 al 6 indicando siel dia es lunes,
    //   martes, miercoles ...
    // getHours(); Devuelve la hora
    // getMinutes(); Devuelve los minutos
    // getMonth(); devuelve el mes como un numero de 0 a 11
    // getTime(); Devuelve el tiempo transcurrido en milisegundos desde el 1
    //   de enero de 1970 hasta el momento definido en el objeto date
    // setTime(); Establece una fecha pasandole en milisegundos el valor de esta.
    // getYear(); devuelve el año
    // getFullYear(); devuelve el año
    dteDate=new Date(year,month,day);
 
    //Devuelva true o false...
    return ((day==dteDate.getDate()) && (month==dteDate.getMonth()) && (year==dteDate.getFullYear()));
}
 
/**
 * Funcion para validar una fecha
 * Tiene que recibir:
 *  La fecha en formato ingles yyyy-mm-dd
 * Devuelve:
 *  true-Fecha correcta
 *  false-Fecha Incorrecta
 */
function validate_fecha(fecha)
{
    var patron=new RegExp("^(19|20)+([0-9]{2})([-])([0-9]{1,2})([-])([0-9]{1,2})$");
 
    if(fecha.search(patron)==0)
    {
        var values=fecha.split("-");
        if(isValidDate(values[2],values[1],values[0]))
        {
            return true;
        }
    }
    return false;
}

function calcularEdad()
{
    var fecha=document.getElementById("fh_Nacimiento").value;
    if(validate_fecha(fecha)==true)
    {
        // Si la fecha es correcta, calculamos la edad
        var values=fecha.split("-");
        var dia = values[2];
        var mes = values[1];
        var ano = values[0];
 
        // cogemos los valores actuales
        var fecha_hoy = new Date();
        var ahora_ano = fecha_hoy.getYear();
        var ahora_mes = fecha_hoy.getMonth()+1;
        var ahora_dia = fecha_hoy.getDate();
 
        // realizamos el calculo
        var edad = (ahora_ano + 1900) - ano;
        if ( ahora_mes < mes )
        {
            edad--;
        }
        if ((mes == ahora_mes) && (ahora_dia < dia))
        {
            edad--;
        }
        if (edad > 1900)
        {
            edad -= 1900;
        }
 
        // calculamos los meses
        //09 -- 08 = 01 // 08 -- 09 = 11
        var meses=0;
        if(ahora_mes>mes)
            meses=ahora_mes-mes;
        if(ahora_mes<mes)
            meses=12-(mes-ahora_mes);
        if(ahora_mes==mes && dia>ahora_dia)
            meses=11;
        if(ahora_mes==mes+1)
            meses=0;
 
        // calculamos los dias
        var dias=0;
        if(ahora_dia>dia)
            dias=ahora_dia-dia;
        if(ahora_dia<dia)
        {
            ultimoDiaMes=new Date(ahora_ano, ahora_mes, 0);
            dias=ultimoDiaMes.getDate()-(dia-ahora_dia);
        }
 
        document.getElementById("nu_Edad").value=edad+" Años";
    }else{
        document.getElementById("nu_Edad").value="La fecha "+fecha+" es incorrecta";
    }
}

// BUSCADORDIAGNOSTICOS
    $(res_dx());

    function res_dx(dx)
    {
        $.ajax({
            url : 'db/buscar.php',
            type : 'POST',
            dataType : 'html',
            data : { dx: dx },
            })

        .done(function(resultado){
            $("#tabla_res_dx").html(resultado);
        })
    }

    $(document).on('keyup', '#dx', function()
    {
        var valorBusqueda=$(this).val();
        if (valorBusqueda!="")
        {
            res_dx(valorBusqueda);
        }
        else
            {
                res_dx();
            }
    });

        function cargardx(id_dx){ 
        var id_dx = id_dx;
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id_dx:id_dx},  
                dataType:"json",  
                success:function(data){  
                    $('#txt_diagnosticos').val($('#txt_diagnosticos').val() + data.literal+ ('\n'));
                    $('#dx').val("");
                    $('#dx').focus();
                    $('#tabla_res_dx').html('');

           }
       });
    }
// BUSCADOR DIAGNOSTICOS

// BUSCADORDIAGNOSTICOS
    $(res_concept());

    function res_concept(concept)
    {
        $.ajax({
            url : 'db/buscar.php',
            type : 'POST',
            dataType : 'html',
            data : { concept: concept },
            })

        .done(function(resultado){
            $("#tabla_res_conceptos").html(resultado);
        })
    }

    $(document).on('keyup', '#concept', function()
    {
        var valorBusqueda=$(this).val();
        if (valorBusqueda!="")
        {
            res_concept(valorBusqueda);
        }
        else
            {
                res_concept();
            }
    });

        function cargarconceptos(id_carga_conceptos){ 
        var id_carga_conceptos = id_carga_conceptos;
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id_carga_conceptos:id_carga_conceptos},  
                dataType:"json",  
                success:function(data){  
                    $('#concept').val(data.concepto);
                    $('#total_concept').val(data.total);
                    $('#tabla_res_conceptos').html("");

           }
       });
    }
// BUSCADOR DIAGNOSTICOS

// BUSCADOR ESTUDIOS
    $(res_gab());

    function res_gab(gab)
    {
        $.ajax({
            url : 'db/buscar.php',
            type : 'POST',
            dataType : 'html',
            data : { gab: gab },
            })

        .done(function(resultado){
            $("#tabla_res_gabinete").html(resultado);
        })
    }

    $(document).on('keyup', '#gab', function()
    {
        var valorBusqueda=$(this).val();
        if (valorBusqueda!="")
        {
            res_gab(valorBusqueda);
        }
        else
            {
                res_gab();
            }
    });

        function cargargab(id_gab){ 
        var id_gab = id_gab;
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id_gab:id_gab},  
                dataType:"json",  
                success:function(data){  
                    $('#txt_gabinete').val($('#txt_gabinete').val() + data.laboratorio+ ('\n'));
                    $('#gab').val("");
                    $('#gab').focus();
                    $('#tabla_res_gabinete').html('');

           }
       });
    }
// BUSCADOR ESTUDIOS

// BUSCADOR MED
    $(res_med());

    function res_med(med)
    {
        $.ajax({
            url : 'db/buscar.php',
            type : 'POST',
            dataType : 'html',
            data : { med: med },
            })

        .done(function(resultado){
            $("#tabla_res_med").html(resultado);
        })
    }

    $(document).on('keyup', '#med', function()
    {
        var valorBusqueda=$(this).val();
        if (valorBusqueda!="")
        {
            res_med(valorBusqueda);
        }
        else
            {
                res_med();
            }
    });

        function cargarmed(id_med){ 
        var id_med = id_med;
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id_med:id_med},  
                dataType:"json",  
                success:function(data){  
                    $('#txt_recetas').val($('#txt_recetas').val() + data.nombrecomercial +' '+data.presentacion+' '+data.envoltura+' '+data.ingrediente+' '+data.concentracion+' '+data.unidad+('\n') );
                    $('#med').val("");
                    $('#txt_recetas').focus();
                    $('#tabla_res_med').html('');

           }
       });
    }
// BUSCADOR MED

// BUSCADOR ALERGIAS
    $(obtener_registros_alergias());

    function obtener_registros_alergias(add_ant_alergicos)
    {
        $.ajax({
            url : 'db/buscar.php',
            type : 'POST',
            dataType : 'html',
            data : { add_alergias: add_ant_alergicos },
            })

        .done(function(resultado_hf){
            $("#tabla_res_alergias").html(resultado_hf);
        })
    }

    $(document).on('keyup', '#add_ant_alergicos', function()
    {
        var valorBusqueda=$(this).val();
        if (valorBusqueda!="")
        {
            obtener_registros_alergias(valorBusqueda);
        }
        else
            {
                obtener_registros_alergias();
            }
    });

    function enviaralergias(id_hf){ 
        var id = id_hf;
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
                    $('#ant_alergicos').val($('#ant_alergicos').val()+ ('\n') + data.listado);
                    $("#tabla_res_alergias").html("");
                    $("#add_ant_alergicos").val("");
                    $("#add_ant_alergicos").focus("");
           }
       });
    }


    $('#btn_add_alergias').click(function(e){
    e.preventDefault();
    var datos=$('#form_add_alergias').serialize();
    $.ajax({
        type:"POST",
        url:"db/antecedentes/antecedentes.php",
        data:datos,
        success:function(r){
            $('#add_alergias').val($('#add_alergias').val()+ ('\n') + r);
            guardarAnt();
            $("#tabla_res_alergias").html("");
        }
    });

    return false;
    });
    
// BUSCADOR ALERGIAS

// BUSCADOR HEREDO-FAMILIARES
    $(obtener_registros_hf());

    function obtener_registros_hf(add_listado)
    {
        $.ajax({
            url : 'db/buscar.php',
            type : 'POST',
            dataType : 'html',
            data : { add_listado: add_listado },
            })

        .done(function(resultado_hf){
            $("#tabla_res_hf").html(resultado_hf);
        })
    }

    $(document).on('keyup', '#add_listado', function()
    {
        var valorBusqueda=$(this).val();
        if (valorBusqueda!="")
        {
            obtener_registros_hf(valorBusqueda);
        }
        else
            {
                obtener_registros_hf();
            }
    });

    function enviarhf(id_hf){ 
        var id = id_hf;
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
                    $('#ant_hf').val($('#ant_hf').val()+ data.listado+ ('\n') );
                    guardarAnt();
                    $('#add_listado').val("");
                    $('#add_listado').focus();
                    $('#tabla_res_hf').html("");

           }
       });
    }



// BUSCADOR HEREDO-FAMILIARES

// BUSCADOR P-P
    $(obtener_registros_pp());

    function obtener_registros_pp(add_ant_pp)
    {
        $.ajax({
            url : 'db/buscar.php',
            type : 'POST',
            dataType : 'html',
            data : { add_ant_pp: add_ant_pp },
            })

        .done(function(resultado){
            $("#tabla_res_ant_pp").html(resultado);
        })
    }

    $(document).on('keyup', '#add_ant_pp', function()
    {
        var valorBusqueda=$(this).val();
        if (valorBusqueda!="")
        {
            obtener_registros_pp(valorBusqueda);
        }
        else
            {
                obtener_registros_pp();
            }
    });

    function enviarpp(id_hf){ 
        var id = id_hf;
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
                    $('#ant_pp').val($('#ant_pp').val() + data.listado+ ('\n'));
                    guardarAnt();
                    $('#add_listado').val("");
                    $('#add_listado').focus();
                    $('#tabla_res_ant_pp').html("");

           }
       });
    }


    $('#btn_add_ant_pp').click(function(e){
    e.preventDefault();
    var datos=$('#form_add_ant_pp').serialize();
    $.ajax({
        type:"POST",
        url:"db/antecedentes/antecedentes.php",
        data:datos,
        success:function(r){
            $('#ant_pp').val($('#ant_pp').val() + r+ ('\n'));
            guardarAnt();
            $('#add_listado').val("");
            $('#add_listado').focus();
            $('#tabla_res_ant_pp').html("");
        }
    });

    return false;
    });
// BUSCADOR P-P

// BUSCADOR NO-P
    $(obtener_registros_np());

    function obtener_registros_np(add_ant_np)
    {
        $.ajax({
            url : 'db/buscar.php',
            type : 'POST',
            dataType : 'html',
            data : { add_ant_np: add_ant_np },
            })

        .done(function(resultado){
            $("#tabla_res_ant_np").html(resultado);
        })
    }

    $(document).on('keyup', '#add_ant_np', function()
    {
        var valorBusqueda=$(this).val();
        if (valorBusqueda!="")
        {
            obtener_registros_np(valorBusqueda);
        }
        else
            {
                obtener_registros_np();
            }
    });

    function enviarnp(id_hf){ 
        var id = id_hf;
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
                    $('#ant_np').val($('#ant_np').val() + data.listado+ ('\n'));

                    guardarAnt();
                    $('#add_ant_np').val("");
                    $('#add_ant_np').focus();
                    $('#tabla_res_ant_np').html("");    
           }
       });
    }
    $('#btn_add_ant_np').click(function(e){
    e.preventDefault();
    var datos=$('#form_add_ant_np').serialize();
    $.ajax({
        type:"POST",
        url:"db/antecedentes/antecedentes.php",
        data:datos,
        success:function(r){
            $('#ant_go').val($('#ant_go').val()+ r+ ('\n') );
            guardarAnt();
            $('#add_ant_np').val("");
            $('#add_ant_np').focus();
            $('#tabla_res_ant_np').html("");
            alertSuccess();
        }
    });

    return false;
    });

// BUSCADOR GO
    $(obtener_registros_go());

    function obtener_registros_go(add_ant_go)
    {
        $.ajax({
            url : 'db/buscar.php',
            type : 'POST',
            dataType : 'html',
            data : { add_ant_go: add_ant_go },
            })

        .done(function(resultado){
            $("#tabla_res_ant_go").html(resultado);
        })
    }

    $(document).on('keyup', '#add_ant_go', function()
    {
        var valorBusqueda=$(this).val();
        if (valorBusqueda!="")
        {
            obtener_registros_go(valorBusqueda);
        }
        else
            {
                obtener_registros_go();
            }
    });

    function enviargo(id_hf){ 
        var id = id_hf;
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
                    $('#ant_go').val($('#ant_go').val() + data.listado+ ('\n'));

                    guardarAnt();
                    $('#add_ant_go').val("");
                    $('#add_ant_go').focus();
                    $('#tabla_res_ant_go').html("");

           }
       });
    }

    $('#btn_add_ant_go').click(function(e){
    e.preventDefault();
    var datos=$('#form_add_ant_go').serialize();
    $.ajax({
        type:"POST",
        url:"db/antecedentes/antecedentes.php",
        data:datos,
        success:function(r){
            $('#ant_go').val($('#ant_go').val() + r+ ('\n'));
            guardarAnt();
            $('#add_ant_go').val("");
            $('#add_ant_go').focus();
            $('#tabla_res_ant_go').html("");
            alertSuccess();
        }
    });

    return false;
    });
// BUSCADOR GO
    $('#btn_add_ant_np').click(function(e){
    e.preventDefault();
    var datos=$('#form_add_ant_np').serialize();
    $.ajax({
        type:"POST",
        url:"db/antecedentes/antecedentes.php",
        data:datos,
        success:function(r){
            $('#ant_np').val($('#ant_np').val()+ ('\n') + r);
            $('#add_ant_np').val("");
            guardarAnt();
        }
    });

    return false;
    });

        function guardarAnt(){ 
        var datos=$('#form_ant').serialize();
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


    function guardarHistorial(){ 
        var datos=$('#form_historial').serialize();
        var id_vacio=$('#id_historial').val();
        if (id_vacio=="") {
            $.ajax({
                type:"POST",
                url:"db/guardar_datos.php",
                data:datos,
                success:function(r){
                    if(r==1){

                    }else{
                        load(1);
                        alertSuccess();
                    }
                }
            });
        }else{
            $.ajax({
                type:"POST",
                url:"db/guardar_datos.php",
                data:datos,
                success:function(r){
                    if(r==1){

                    }else{
                        alertSuccess();
                    }
                }
            });
        }     
    }

 
function subirImagenes(){
    var filesSelected = document.getElementById("file_imagenes").files;
        if (filesSelected.length > 0) {
            var fileToLoad = filesSelected[0];
            var fileReader = new FileReader();
            fileReader.onload = function(fileLoadedEvent) {
                var base64value = fileLoadedEvent.target.result;
                //console.log(base64value);
                var datos=base64value;
                $.ajax({
                    type:"POST",
                    url:"db/archivos.php",
                    data:{datos:datos},
                    success:function(r){
                        $('#tabla_imagenes').load('bloques/consultas/tablas/imagenes.php'); 
                            alertSuccess();
                    }
                });
            };
            fileReader.readAsDataURL(fileToLoad);
        }
        
       //myVar = setTimeout(load_perfil, 1700);  
    }

function subirDocumentos(){
    var filesSelected = document.getElementById("file_documentos").files;
        if (filesSelected.length > 0) {
            var fileToLoad = filesSelected[0];
            var fileReader = new FileReader();
            fileReader.onload = function(fileLoadedEvent) {
                var base64value = fileLoadedEvent.target.result;
                //console.log(base64value);
                var documentos=base64value;
                $.ajax({
                    type:"POST",
                    url:"db/archivos.php",
                    data:{documentos:documentos},
                    success:function(r){
                        $('#tabla_documentos').load('bloques/consultas/tablas/documentos.php');
                        $('#file_documentos').files(""); 
                            alertSuccess();
                    }
                });
            };
            fileReader.readAsDataURL(fileToLoad);
        }
        
       //myVar = setTimeout(load_perfil, 1700);  
    }
    
 function deleteDocumentos(id_delete_doc){
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id_delete_doc:id_delete_doc},  
                dataType:"json",  
                success:function(data){  
                    $('#tabla_documentos').load('bloques/consultas/tablas/documentos.php');

           }
       });
 }


 function deleteImagenes(id_delete_img){
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id_delete_img:id_delete_img},  
                dataType:"json",  
                success:function(data){  
                    $('#tabla_imagenes').load('bloques/consultas/tablas/imagenes.php');

           }
       });
 }

 
 function limpiarConsultas(){
    $('#id_historial').val("");
    $('#txt_padecimiento').val("");
    $('#txt_exploracion').val("");
    $('#txt_gabinete').val("");
    $('#txt_recetas').val("");
    $('#peso').val("");
    $('#talla').val("");
    $('#fc').val("");
    $('#fr').val("");
    $('#fur').val("");
    $('#semanas').val("");
    $('#temperatura').val("");
    $('#imc').val("");
    $('#txt_honorarios').val("");
    $('#txt_diagnosticos').val("");
 }

    function eliminarConsulta(delete_consulta){ 
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{delete_consulta:delete_consulta},  
                dataType:"json",  
                success:function(data){  
                    load(1);    
           }
       });
    }
