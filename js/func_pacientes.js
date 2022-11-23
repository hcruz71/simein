    $(res_pac());

    function res_pac(buscar_pac)
    {
        $.ajax({
            url : 'db/buscar_pac.php',
            type : 'POST',
            dataType : 'html',
            data : { buscar_pac: buscar_pac },
            })

        .done(function(resultado){
            $("#res_pacientes").html(resultado);
        })
    }

    $(document).on('keyup', '#buscar_pac', function()
    {
        var valorBusqueda=$(this).val();
        if (valorBusqueda!="")
        {
            res_pac(valorBusqueda);
        }
        else
            {
                res_pac();
            }
    });
// BUSCADOR PACIENTES
        function preFotoPac(){
            var filesSelected = document.getElementById("filePac").files;
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
                                     $("#foto_pac").val(data);
                                    document.getElementById('img_foto_pac').setAttribute('src', data);
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

function borra_registro(reg)
{
   if (confirm('Esta seguro de borrar el registro?','Eliminando Registro')) {

    var sendInfo = {
           value: reg
    };
 
    $.ajax({
      url: 'db/pacientes/eliminar_paciente.php',
      type: 'POST',
      dataType: 'json',
      data: sendInfo
    })

    .done(function(respdone) {
        console.log(respdone);
        location.href = "pacientes.php"
    })
      
    .fail(function(respfail) {
        console.log(respfail);
    })
    
    .always(function() {
        console.log("complete");
    });







   } 
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

$('#btn_editar_pac').click(function(e){ 
            e.preventDefault();
        var datos=$('#form_editar_pac').serialize();
        $.ajax({
            type:"POST",
            url:"db/pacientes/editar.php",
            data:datos,
            success:function(r){
                if(r==1){
                        alert('shs');
                    }else{
                        //CORIGE MODAL
                       location.href='consultas_2.php?id_Paciente='+r;
                    }
            }
       });
        return false;
    });



    $('#btn_add_paciente').click(function(e){
    e.preventDefault();
    var datos=$('#form_agregar').serialize();
    $.ajax({
        type:"POST",
        url:"db/pacientes/guardar.php",
        data:datos,
        success:function(r){
            alertSuccess();
        }
    });

    return false;
    })

