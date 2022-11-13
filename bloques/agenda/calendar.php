  <!DOCTYPE html>
<html lang="es">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale/es.js"></script>
<?php 
        
    include 'conexion.php';
    $id_doctor=$_SESSION['id_usuario'];

 ?>
 <script type="text/javascript" >
    $(function() {
    "use strict"; 

    $(document).ready(function() {
            $('#calendar1').fullCalendar({
                lang:'es',
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            defaultView: 'agendaWeek',
            allDaySlot: false,
            defaultTimedEventDuration: '00:30:00',
            forceEventDuration: false,
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            selectable:true,
            selectHelper:true,
            select: function(start, end, allDay)
            {
            moment.locale('es');
            var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
            var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
            var citar_hora=moment(start).format('HH:mm');
            var citar_fecha=moment(start).format('Y-MM-DD');
            $("#agendar_start").val(start);
            $("#agendar_end").val(end);
            $("#agendar_fecha").val(citar_fecha);
            $("#agendar_hora").val(citar_hora);
            $("#modalDia").modal();
            },
            events: [

                <?php 
                
                $sql="SELECT * FROM agenda AS A INNER JOIN pacientes AS P ON (A.id_doctor = P.id_doctor) AND (A.id_Paciente = P.id_Paciente) WHERE A.id_doctor=$id_doctor ORDER BY A.start ASC";
                $query = $pdo->prepare($sql);
                //$query->bindParam(':idDoctor', $id_doctor, PDO::PARAM_STR);
                $query->execute();
                $list = $query->fetchAll();
                foreach ($list as $fila) {                         

              //$result=mysql_query($sql);
              //while($fila=mysql_fetch_assoc($result)){

                    ?>
                        {   
                            id:"<?php echo $fila["id"]; ?>",
                            title:"<?php echo $fila["nb_Paciente"]; ?>",
                            start:"<?php echo $fila["start"]; ?>",
                            end:"<?php echo $fila["end"]; ?>",
                            celular:"<?php echo $fila["nu_Celular"]; ?>",
                            color:"<?php echo $fila["color"]; ?>",
                            txtColor:"<?php echo $fila["txtColor"]; ?>",
                            descripcion:"<?php echo $fila["descripcion"]; ?>",
                            id_paciente:"<?php echo $fila["id_paciente"]; ?>",
                            status:"<?php echo $fila["status"]; ?>"
                        },
                    <?php
                    } 
                    ?>
            ],
            
          eventClick:function(calEvents,jsEvent,view){
            var moment_hora=moment(calEvents.start).format('HH:mm:ss');
            var moment_fecha=moment(calEvents.start).format('Y-MM-DD');
            var id_cita = calEvents.id_paciente;
            $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id_cita:id_cita},  
                dataType:"json",  
                success:function(data){  
                $('#foto_pacU').val(data.fl_File);
                var img_pac=data.fl_File;
                document.getElementById('img_foto_pacU').setAttribute('src', img_pac);

                   }
               });
            $('#id_cita').val(calEvents.id);
            $('#busquedaU').val(calEvents.title);
            $('#nu_CelularU').val(calEvents.celular);
            $('#descripcionU').val(calEvents.descripcion);
            $('#status_detalles').val(calEvents.status);
            $('#startU').val(moment_fecha);
            $('#starthoraU').val(moment_hora);
            $('#id_pacU').val(calEvents.id_paciente);
            
            $("#modalEvento").modal(); 
          }
        });

    });
  
   
    $(document).ready(function() {


        /* initialize the external events
        -----------------------------------------------------------------*/

        $('#external-events .fc-event').each(function() {

            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true // maintain when user navigates (see docs on the renderEvent method)
            });

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true, // will cause the event to go back to its
                revertDuration: 0 //  original position after the drag
            });

        });


        

    });


 });
</script>

<div id="modalEvento" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title"><i class="fa fa-edit"></i>&nbsp;&nbsp;Detalles de la cita</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
    <form action="agenda.php" method="POST">
        
            <div class="row">
            
              <div class="col-md-4">
                   <div class="row">
                       <div class="col-md-12 text-center">
                           <img id="img_foto_pacU" src="assets/images/defect.jpg" class="img-responsive" style="max-width: 190px; border-radius: 5%">
                           <div class="form-group has-feedback">
                                <br>
                                <div class="input-group mb-3">
                                    <input type="file" id="filePacU" class="form-control" multiple="multiple" accept="image/gif, image/jpg, image/jpeg, image/png, image/bmp" onchange="preFotoPacU()">
                                </div>
                            </div>
                       </div>
                    </div>
                    <input type="text" name="foto_pacU" id="foto_pacU" class="form-control" value="assets/images/defect.jpg" placeholder="Base-64 value" / hidden="false" >
              </div>

              <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <label>Nombre:</label>
                        <input type="text" name="id_cita" id="id_cita" style="visibility: hidden;">
                        <input type="text" name="id_pacU" id="id_pacU" style="visibility: hidden;">
                        <input type="text" name="busquedaU" id="busquedaU" class="form-control" required="true">
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-12 col-md-6">
                        <label>Celular:</label>
                        <input type="text" name="nu_CelularU" id="nu_CelularU" class="form-control" required="true">
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <label>Status del Citado:</label>
                      <select type="color" name="status_detalles" id="status_detalles" class="form-control">
                        <option value="Por Definir">Por Definir</option>
                        <option value="Confirmado">Confirmado</option>
                        <option value="Cancelado">Cancelado</option>
                        <option value="Reagendado">Reagendado</option>
                        <option value="En Sala de Espera">En Sala de Espera</option>
                        <option value="Cirugia">Cirugía</option>

                      </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <label>Fecha de la cita:</label>
                        <input type="date" name="startU" id="startU" class="form-control myTextInput">
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label>Hora:</label>
                        <input type="text" name="starthoraU" id="starthoraU" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <label>Descripcion:</label>
                        <input type="text" name="descripcionU" id="descripcionU" class="form-control">
                    </div>
                </div>
              </div>
            </div>
        </div>
      
        <div class="modal-footer">
            <input type="submit" class="btn btn-success" name="btn_actualizar" value="Guardar Cambios">
            <input type="submit" class="btn btn-danger" name="btn_eliminar" value="Eliminar Cita">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar Ventana</button>
        </div>
    </div>
</form>

  </div>
</div>


<div id="modalDia" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title"><i class="fa fa-plus"></i>&nbsp;&nbsp;Agendar Cita</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
    <form action="agenda.php" method="POST">
        
        <div class="row">
            
              <div class="col-md-4">
                               <div class="row">
                                   <div class="col-md-12 text-center">
                                       <img id="img_foto_pac" src="assets/images/defect.jpg" class="img-responsive" style="max-width: 190px; border-radius: 5%">
                                       <div class="form-group has-feedback">
                                            <br>
                                            <div class="input-group mb-3">
                                                <input type="file" id="filePac" class="form-control" multiple="multiple" accept="image/gif, image/jpg, image/jpeg, image/png, image/bmp" onchange="preFotoPac()">
                                            </div>
                                        </div>
                                   </div>
                                </div>
                            <input type="text" id="foto_pac" name="foto_pac" class="form-control" value="assets/images/defect.jpg" placeholder="Base-64 value" hidden="false">
              </div>

              <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-12 col-md-12">               
                        <label for="nb_Paciente">Nombre Completo:</label>
                        <input type="text" name="id_pac" id="id_pac" style="visibility: hidden;">
                        <input type="text" name="agendar_start" id="agendar_start" style="visibility: hidden;">
                        <input type="text" name="busqueda" id="busqueda" class="form-control" style="position: relative;">
                        <div id="tabla_res_pacientes" class="col-md-11" style="position: absolute; z-index: 1000; font-size: 18px;"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <label>Fecha de nac:</label>
                        <input type="date" name="fh_Nacimiento" id="fh_Nacimiento" class="form-control" onchange="calcularEdad();">
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label>Edad:</label>
                        <input type="text" name="nu_Edad" id="nu_Edad" class="form-control">
                    </div>
                </div>

              <div class="row">
                    <div class="col-sm-6 col-md-6">
                      <label for="id_Sexo">Sexo:</label>
                      <select name="id_Sexo" id="id_Sexo" class="form-control">
                        <option value="">Seleccionar...</option>
                        <option value="M">Masculíno</option>
                        <option value="F">Femenino</option>
                      </select>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label>Ocupación:</label>
                        <input type="text" name="de_Ocupacion" id="de_Ocupacion" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <label>Celular:</label>
                        <input type="text" name="nu_Celular" id="nu_Celular" class="form-control">
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label>Email:</label>
                        <input type="text" name="de_Email" id="de_Email" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <label>Descripcion:</label>
                        <input type="text" name="descripcion" id="descripcion" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        agregar cita para el <input type="date" name="agendar_fecha" id="agendar_fecha" style="border: none;"> a las <input type="time" name="agendar_hora" id="agendar_hora" style="border: none;">
                    </div>
                </div>
              </div>
            </div>
      </div>
      
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" name="agregar_cita" value="Agregar Cita">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar Ventana</button>
      </div>
    </div>
</form>

  </div>
</div>
    <script type="text/javascript">
        function preFotoPac(){
            var filesSelected = document.getElementById("filePac").files;
                if (filesSelected.length > 0) {
                    var fileToLoad = filesSelected[0];
                    var fileReader = new FileReader();
                    fileReader.onload = function(fileLoadedEvent) {
                    var base64value = fileLoadedEvent.target.result;
                    console.log(base64value);
                    $("#foto_pac").val(base64value);
                    document.getElementById('img_foto_pac').setAttribute('src', $("#foto_pac").val());
                    $("#img_foto_pac").show();
                    };
                    fileReader.readAsDataURL(fileToLoad);
                }
                
               //myVar = setTimeout(load, 1700);  
            }

        //function preFotoPacU(){
            //var filesSelected = document.getElementById("filePacU").files;
                //if (filesSelected.length > 0) {
                //    var fileToLoad = filesSelected[0];
                //    var fileReader = new FileReader();
                //    fileReader.onload = function(fileLoadedEvent) {
                //    var data = fileLoadedEvent.target.result;
                //    document.getElementById('img_foto_pacU').setAttribute('src', data);
                //    $("#foto_pacU").val(data);
                //    };
                //    fileReader.readAsDataURL(fileToLoad);
                //}
                
               //myVar = setTimeout(load, 1700);  
            //}
        function preFotoPacU(){
            var filesSelected = document.getElementById("filePacU").files;
                if (filesSelected.length > 0) {
                    var fileToLoad = filesSelected[0];
                    var fileReader = new FileReader();
                    fileReader.onload = function(fileLoadedEvent) {
                       var data = fileLoadedEvent.target.result;
                        $.ajax({
                            type:"POST",
                            url:"db/archivos.php",
                            data:{update_foto_pac:data},
                            success:function(r){
                                $("#foto_pacU").val(r);
                                document.getElementById('img_foto_pacU').setAttribute('src', r);
                            }
                        });
                    };
                    fileReader.readAsDataURL(fileToLoad);
                }
                
               //myVar = setTimeout(load_perfil, 1700);  
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
    </script>
</html>
