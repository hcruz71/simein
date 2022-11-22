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
            $('#calendar2').fullCalendar({
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
            var citar_hora=moment(start).format('hh:mm');
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

                $query->execute();
                $list = $query->fetchAll();
                foreach ($list as $filas) {

                    ?>
                        {   
                            id:"<?php echo $fila["id"]; ?>",
                            title:"<?php echo $fila["nb_Paciente"]; ?>",
                            start:"<?php echo $fila["start"]; ?>",
                            nb_Emergencia:"<?php echo $fila["nb_Emergencia"]; ?>",
                            celular:"<?php echo $fila["nu_Celular"]; ?>",
                            color:"<?php echo $fila["color"]; ?>",
                            txtColor:"<?php echo $fila["txtColor"]; ?>",
                            descripcion:"<?php echo $fila["descripcion"]; ?>",
                            id_paciente:"<?php echo $fila["id_paciente"]; ?>",
                            de_Email:"<?php echo $fila["de_Email"]; ?>",
                            de_Domicilio:"<?php echo $fila["de_Domicilio"]; ?>",
                            de_Ocupacion:"<?php echo $fila["de_Ocupacion"]; ?>",
                            id_Aseguradora:"<?php echo $fila["id_Aseguradora"]; ?>",
                            de_Otros_datos:"<?php echo $fila["de_Otros_datos"]; ?>",
                            status:"<?php echo $fila["status"]; ?>"
                        },
                    <?php
                    } 
                    ?>
            ],
          eventClick:function(calEvents,jsEvent,view){
            var moment_hora=moment(calEvents.start).format('hh:mm:ss');
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
            $('#status_detalles').val(calEvents.status);
            $('#de_Email').val(calEvents.de_Email);
            $('#de_Domicilio').val(calEvents.de_Domicilio);
            $('#de_Ocupacion').val(calEvents.de_Ocupacion);
            $('#id_Aseguradora').val(calEvents.id_Aseguradora);
            $('#de_Otros_datos').val(calEvents.de_Otros_datos);
            $('#nb_Emergencia').val(calEvents.nb_Emergencia);
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
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title"><i class="fa fa-edit"></i>&nbsp;&nbsp;Detalles de la Actividad</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
    <form action="agenda2.php" method="POST">
        
            <div class="row">
            

              <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <label>Nombre:</label>
                        <input type="text" name="id_cita" id="id_cita" style="visibility: hidden;">
                        <input type="text" name="id_pacU" id="id_pacU" style="visibility: hidden;">
                        <input type="text" name="busquedaU" id="busquedaU" class="form-control" required="true">
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <label>Teléfono/Celular:</label>
                        <input type="text" name="nu_CelularU" id="nu_CelularU" class="form-control" onchange="calcularEdad();">
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label>Email:</label>
                        <input type="text" name="de_Email" id="de_Email" class="form-control">
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-12 col-md-6">
                        <label>Clínica:</label>
                        <input type="text" name="nb_Emergencia" id="nb_Emergencia" class="form-control">
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <label>Status del Citado:</label>
                      <select type="color" name="status_detalles" id="status_detalles" class="form-control">
                        <option value="Por Definir">Por Definir</option>
                        <option value="Confirmado">Confirmado</option>
                        <option value="Cancelado">Cancelado</option>
                        <option value="Reagendado">Visitado</option>
                        <option value="En Sala de Espera">Venta</option>

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
                        <label>Domicilio:</label>
                        <input type="text" name="de_Domicilio" id="de_Domicilio" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <label>Nota:</label>
                        <textarea type="text" name="de_Otros_datos" id="de_Otros_datos" class="form-control"></textarea> 
                    </div>
                </div>
              </div>
            </div>
      </div>
      
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" name="btn_actualizar" value="Guardar Cambios">
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
        <h3 class="modal-title"><i class="fa fa-plus"></i>&nbsp;&nbsp;Agendar Actividad</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
    <form action="agenda2.php" method="POST">
        
        <div class="row">
              <div class="col-md-12">
                <div class="row">
                        <div class="col-md-3">
                                <label>Prefijo:</label>
                            <select class="form-control" name="de_Ocupacion" id="de_Ocupacion">
                                <option value="Dr.">Dr.</option>
                                <option value="Dra.">Dra.</option>
                                <option value="Lic.">Lic.</option>
                            </select>
                        </div>
                        <div class="col-md-9">
                            <label for="nb_Paciente">Nombre Completo:</label>
                            <input type="text" name="id_pac" id="id_pac2" style="visibility: hidden;">
                            <input type="text" name="busqueda" id="busqueda2" class="form-control" style="position: relative;">
                            <div id="tabla_res_doc" class="col-md-11" style="position: absolute; z-index: 1000; font-size: 18px;"></div>
                            
                        </div>  
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <label>Teléfono/Celular:</label>
                        <input type="text" name="nu_Celular" id="nu_Celular2" class="form-control">
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label>Email:</label>
                        <input type="text" name="de_Email" id="de_Email2" class="form-control">
                    </div>
                </div>

              <div class="row">
                    <div class="col-sm-6 col-md-6">
                      <label for="">Especialidad:</label>
                      <select name="id_Aseguradora" id="id_Aseguradora2" class="form-control">
                        <option value="0" selected disabled>Selecciona una opci&oacute;n</option>
                                <option value="2">Alergología</option>
                                <option value="3">Algología</option>
                                <option value="4">Anatomía</option>
                                <option value="5">Anestesiología</option>
                                <option value="6">Angiología</option>
                                <option value="133">Angiología, círugia vascular  y endovascular</option>
                                <option value="8">Cardiología</option>
                                <option value="96">Cardiología - intervencionista</option>
                                <option value="126">Cardiología pediátrica</option>
                                <option value="146">Cardiólogo pediatra intervencionista</option>
                                <option value="137">Cirugía de trasplante</option>
                                <option value="82">Cirugía endócrina</option>
                                <option value="103">Cirugía Estética</option>
                                <option value="79">Cirugía general</option>
                                <option value="83">Cirugía general y oncológica</option>
                                <option value="111">Cirugía metabólica, bariátrica</option><option value="81">Cirugía oncológica</option>
                                <option value="85">Cirugía plástica estética y reconstructiva</option>
                                <option value="9">Cirujano cardiovascular y torácico</option>
                                <option value="10">Cirujano de la mano</option>
                                <option value="86">Cirujano dentista</option>
                                <option value="11">Cirujano estético y cosmético</option>
                                <option value="97">Cirujano estético, medicina del deporte, urgenciologo</option>
                                <option value="12">Cirujano general</option>
                                <option value="121">Cirujano Mastólogo</option>
                                <option value="13">Cirujano Maxilofacial</option>
                                <option value="132">Cirujano oftalmólogo</option>
                                <option value="14">Cirujano oncológico</option>
                                <option value="94">Cirujano ortopedista cirugía de columna vertebral </option>
                                <option value="15">Cirujano pedíatrico</option>
                                <option value="16">Cirujano plástico</option>
                                <option value="77">Coloproctología</option>
                                <option value="116">Coloproctología; cirugía general</option>
                                <option value="91">Columna vertebral</option>
                                <option value="74">Cosmetología</option><option value="113">Dermato-oncológia y cirugía dermatológica</option>
                                <option value="90">Dermatología</option><option value="18">Diabetología</option>
                                <option value="19">Endocrinología</option>
                                <option value="124">Endodoncia</option>
                                <option value="148">Endourología</option>
                                <option value="110">Epidemiología y salud pública</option>
                                <option value="21">Especialista en medicina del deporte</option>
                                <option value="22">Especialista en medicina del trabajo</option>
                                <option value="23">Especialista en medicina integral</option>
                                <option value="24">Especialista en medicina nuclear</option>
                                <option value="25">Especialista en medicina preventiva</option>
                                <option value="26">Especialista en obesidad y delgadez</option><option value="27">Especialista en rehabilitación y medicina física</option>
                                <option value="28">Especialista en retina médica y quirúrgica</option>
                                <option value="20">Especialistas en medicina crítica y terapia intensiva</option>
                                <option value="29">Fisioterapia</option>
                                <option value="30">Gastroenterología</option>
                                <option value="89">Gastroenterología - Cirugía - Endoscopia - Laparoscopia</option>
                                <option value="99">Gastroenterología y endoscopia</option>
                                <option value="125">Gastroenterología y endoscopía pediátrica</option>
                                <option value="31">Genetica</option>
                                <option value="32">Geriatría</option>
                                <option value="33">Ginecología</option>
                                <option value="88">Ginecología y Obstetricia</option>
                                <option value="150">Ginecología y obstetricia-colposcopia</option>
                                <option value="139">Ginecología y obstetricia/biológica de la reproducción humana</option>
                                <option value="140">Ginecología y obstetricia/medicina crítica en obstetricia</option>
                                <option value="131">Ginecología y obstetricia/Medicina materno fetal</option>
                                <option value="34">Hematología</option>
                                <option value="136">Hepatología, gastroenterología e investigación Clínica</option>
                                <option value="35">Homeopatia</option>
                                <option value="127">IBCLC Consultor de lactancia certificado</option>
                                <option value="36">Infectología</option>
                                <option value="37">Inmunología</option>
                                <option value="38">Internista</option>
                                <option value="39">Logopedia</option>
                                <option value="147">Master en geriatría - Atención especializada en adultos mayores</option>
                                <option value="98">Medicina crítica y terapia intensiva</option>
                                <option value="135">Médicina estética y longevidad</option><option value="129">Medicina Interna</option>
                                <option value="101">Medicina interna y cardiologia</option><option value="120">Medicina interna y endocrinología</option>
                                <option value="106">Medicina interna y geriatría</option>
                                <option value="122">Medicina interna y nefrología</option>
                                <option value="40">Médico de familia</option>
                                <option value="41">Médico estético</option>
                                <option value="42">Médico general</option>
                                <option value="115">Médico internista</option>
                                <option value="95">Medico internista y reumatología; vasculitis sistémicas primarias</option>
                                <option value="43">Naturista</option>
                                <option value="44">Nefrología</option>
                                <option value="109">Nefrología pediátrica</option>
                                <option value="45">Neonatología</option>
                                <option value="46">Neumología</option>
                                <option value="128">Neumología Pediátrica</option>
                                <option value="105">Neurocirugía</option>
                                <option value="141">Neurocirugía/neurocirugía pediátrica</option>
                                <option value="47">Neurocirujano</option><option value="48">Neurofisiología</option>
                                <option value="49">Neurología</option>
                                <option value="143">Neurólogo y Neurofisiologo Clínico</option>
                                <option value="50">Nutrición</option>
                                <option value="102">Nutrición Clinica y Manejo integral de la obesidad</option>
                                <option value="17">Odontología</option>
                                <option value="145">Odontología, ortopedia y ortodoncia</option>
                                <option value="138">Odontopediatría, ortodoncia y odontología general</option>
                                <option value="51">Oftalmología</option>
                                <option value="118">Oído nariz y garganta</option>
                                <option value="52">Oncología</option>
                                <option value="53">Optometria</option>
                                <option value="123">Ortodoncia</option>
                                <option value="54">Ortopedia</option>
                                <option value="112">Ortopedia y traumatología; cirugía de pie y tobillo, lesiones deportivas y fracturas</option>
                                <option value="104">Ortopedia y traumatología; cirugía de rodilla y hombro</option>
                                <option value="87">Ortopedia y Trumatología; cirugía de columna</option>
                                <option value="56">Otorrinolaringología</option>
                                <option value="142">Ozonoterapia</option>
                                <option value="57">Patología</option>
                                <option value="78">Pediatra neumólogo</option>
                                <option value="114">Pediatra ortopedista</option>
                                <option value="58">Pediatria</option>
                                <option value="76">Podiatría</option>
                                <option value="59">Podología</option>
                                <option value="60">Proctología</option>
                                <option value="61">Profesional de medicina complementaria</option>
                                <option value="62">Psicoanalista</option>
                                <option value="151">Psicogeriatría</option>
                                <option value="63">Psicología</option>
                                <option value="64">Psiquiatria</option>
                                <option value="93">Q.F.B.</option>
                                <option value="65">Quiropraxia</option>
                                <option value="66">Radiología</option>
                                <option value="67">Radioterapeuta</option>
                                <option value="152">Rehabilitación oral</option>
                                <option value="68">Reumatología</option>
                                <option value="69">Sexología</option>
                                <option value="107">Terapeuta familiar</option>
                                <option value="70">Terapeuta ocupacional</option>
                                <option value="71">Traumatología</option>
                                <option value="84">Traumatología y ortopedia</option>
                                <option value="108">Traumatología y ortopedia; rodilla, cadera y hombro</option>
                                <option value="72">Urgenciología</option>
                                <option value="73">Urología</option>
                                <option value="100">Urología ginecológica</option>

                      </select>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label>Clínica:</label>
                        <input type="text" name="nb_Emergencia" id="nb_Emergencia2" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <label>Domicilio:</label>
                        <input type="text" name="de_Domicilio" id="de_Domicilio2" class="form-control">
                    </div>
                </div>

                 <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <label>Nota:</label>
                        <textarea type="text" name="de_Otros_datos" id="de_Otros_datos2" class="form-control"></textarea> 
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

<div id="modalDoc" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title"><i class="fa fa-plus"></i>&nbsp;&nbsp;Agendar Actividad</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
    <form action="agenda2.php" method="POST">
        
        <div class="row">
              <div class="col-md-12">
                <div class="row">
                        <div class="col-md-3">
                                <label>Prefijo:</label>
                            <select class="form-control" name="de_Ocupacion" id="de_Ocupacion">
                                <option value="Dr.">Dr.</option>
                                <option value="Dra.">Dra.</option>
                                <option value="Lic.">Lic.</option>
                            </select>
                        </div>
                        <div class="col-md-9">
                            <label for="nb_Paciente">Nombre Completo:</label>
                            <input type="text" name="id_pac" id="id_pac2" hidden="false">
                            <input type="text" name="busqueda" id="busqueda2" class="form-control" style="position: relative;">
                            <div id="tabla_res_doc" class="col-md-11" style="position: absolute; z-index: 1000; font-size: 18px;"></div>
                            
                        </div>  
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <label>Teléfono/Celular:</label>
                        <input type="text" name="nu_Celular" id="nu_Celular3" class="form-control" onchange="calcularEdad();">
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label>Email:</label>
                        <input type="text" name="de_Email" id="de_Email3" class="form-control">
                    </div>
                </div>

              <div class="row">
                    <div class="col-sm-6 col-md-6">
                      <label for="">Especialidad:</label>
                      <select name="id_Aseguradora" id="id_Aseguradora3" class="form-control">
                        <option value="0" selected disabled>Selecciona una opci&oacute;n</option>
                                <option value="2">Alergología</option>
                                <option value="3">Algología</option>
                                <option value="4">Anatomía</option>
                                <option value="5">Anestesiología</option>
                                <option value="6">Angiología</option>
                                <option value="133">Angiología, círugia vascular  y endovascular</option>
                                <option value="8">Cardiología</option>
                                <option value="96">Cardiología - intervencionista</option>
                                <option value="126">Cardiología pediátrica</option>
                                <option value="146">Cardiólogo pediatra intervencionista</option>
                                <option value="137">Cirugía de trasplante</option>
                                <option value="82">Cirugía endócrina</option>
                                <option value="103">Cirugía Estética</option>
                                <option value="79">Cirugía general</option>
                                <option value="83">Cirugía general y oncológica</option>
                                <option value="111">Cirugía metabólica, bariátrica</option><option value="81">Cirugía oncológica</option>
                                <option value="85">Cirugía plástica estética y reconstructiva</option>
                                <option value="9">Cirujano cardiovascular y torácico</option>
                                <option value="10">Cirujano de la mano</option>
                                <option value="86">Cirujano dentista</option>
                                <option value="11">Cirujano estético y cosmético</option>
                                <option value="97">Cirujano estético, medicina del deporte, urgenciologo</option>
                                <option value="12">Cirujano general</option>
                                <option value="121">Cirujano Mastólogo</option>
                                <option value="13">Cirujano Maxilofacial</option>
                                <option value="132">Cirujano oftalmólogo</option>
                                <option value="14">Cirujano oncológico</option>
                                <option value="94">Cirujano ortopedista cirugía de columna vertebral </option>
                                <option value="15">Cirujano pedíatrico</option>
                                <option value="16">Cirujano plástico</option>
                                <option value="77">Coloproctología</option>
                                <option value="116">Coloproctología; cirugía general</option>
                                <option value="91">Columna vertebral</option>
                                <option value="74">Cosmetología</option><option value="113">Dermato-oncológia y cirugía dermatológica</option>
                                <option value="90">Dermatología</option><option value="18">Diabetología</option>
                                <option value="19">Endocrinología</option>
                                <option value="124">Endodoncia</option>
                                <option value="148">Endourología</option>
                                <option value="110">Epidemiología y salud pública</option>
                                <option value="21">Especialista en medicina del deporte</option>
                                <option value="22">Especialista en medicina del trabajo</option>
                                <option value="23">Especialista en medicina integral</option>
                                <option value="24">Especialista en medicina nuclear</option>
                                <option value="25">Especialista en medicina preventiva</option>
                                <option value="26">Especialista en obesidad y delgadez</option><option value="27">Especialista en rehabilitación y medicina física</option>
                                <option value="28">Especialista en retina médica y quirúrgica</option>
                                <option value="20">Especialistas en medicina crítica y terapia intensiva</option>
                                <option value="29">Fisioterapia</option>
                                <option value="30">Gastroenterología</option>
                                <option value="89">Gastroenterología - Cirugía - Endoscopia - Laparoscopia</option>
                                <option value="99">Gastroenterología y endoscopia</option>
                                <option value="125">Gastroenterología y endoscopía pediátrica</option>
                                <option value="31">Genetica</option>
                                <option value="32">Geriatría</option>
                                <option value="33">Ginecología</option>
                                <option value="88">Ginecología y Obstetricia</option>
                                <option value="150">Ginecología y obstetricia-colposcopia</option>
                                <option value="139">Ginecología y obstetricia/biológica de la reproducción humana</option>
                                <option value="140">Ginecología y obstetricia/medicina crítica en obstetricia</option>
                                <option value="131">Ginecología y obstetricia/Medicina materno fetal</option>
                                <option value="34">Hematología</option>
                                <option value="136">Hepatología, gastroenterología e investigación Clínica</option>
                                <option value="35">Homeopatia</option>
                                <option value="127">IBCLC Consultor de lactancia certificado</option>
                                <option value="36">Infectología</option>
                                <option value="37">Inmunología</option>
                                <option value="38">Internista</option>
                                <option value="39">Logopedia</option>
                                <option value="147">Master en geriatría - Atención especializada en adultos mayores</option>
                                <option value="98">Medicina crítica y terapia intensiva</option>
                                <option value="135">Médicina estética y longevidad</option><option value="129">Medicina Interna</option>
                                <option value="101">Medicina interna y cardiologia</option><option value="120">Medicina interna y endocrinología</option>
                                <option value="106">Medicina interna y geriatría</option>
                                <option value="122">Medicina interna y nefrología</option>
                                <option value="40">Médico de familia</option>
                                <option value="41">Médico estético</option>
                                <option value="42">Médico general</option>
                                <option value="115">Médico internista</option>
                                <option value="95">Medico internista y reumatología; vasculitis sistémicas primarias</option>
                                <option value="43">Naturista</option>
                                <option value="44">Nefrología</option>
                                <option value="109">Nefrología pediátrica</option>
                                <option value="45">Neonatología</option>
                                <option value="46">Neumología</option>
                                <option value="128">Neumología Pediátrica</option>
                                <option value="105">Neurocirugía</option>
                                <option value="141">Neurocirugía/neurocirugía pediátrica</option>
                                <option value="47">Neurocirujano</option><option value="48">Neurofisiología</option>
                                <option value="49">Neurología</option>
                                <option value="143">Neurólogo y Neurofisiologo Clínico</option>
                                <option value="50">Nutrición</option>
                                <option value="102">Nutrición Clinica y Manejo integral de la obesidad</option>
                                <option value="17">Odontología</option>
                                <option value="145">Odontología, ortopedia y ortodoncia</option>
                                <option value="138">Odontopediatría, ortodoncia y odontología general</option>
                                <option value="51">Oftalmología</option>
                                <option value="118">Oído nariz y garganta</option>
                                <option value="52">Oncología</option>
                                <option value="53">Optometria</option>
                                <option value="123">Ortodoncia</option>
                                <option value="54">Ortopedia</option>
                                <option value="112">Ortopedia y traumatología; cirugía de pie y tobillo, lesiones deportivas y fracturas</option>
                                <option value="104">Ortopedia y traumatología; cirugía de rodilla y hombro</option>
                                <option value="87">Ortopedia y Trumatología; cirugía de columna</option>
                                <option value="56">Otorrinolaringología</option>
                                <option value="142">Ozonoterapia</option>
                                <option value="57">Patología</option>
                                <option value="78">Pediatra neumólogo</option>
                                <option value="114">Pediatra ortopedista</option>
                                <option value="58">Pediatria</option>
                                <option value="76">Podiatría</option>
                                <option value="59">Podología</option>
                                <option value="60">Proctología</option>
                                <option value="61">Profesional de medicina complementaria</option>
                                <option value="62">Psicoanalista</option>
                                <option value="151">Psicogeriatría</option>
                                <option value="63">Psicología</option>
                                <option value="64">Psiquiatria</option>
                                <option value="93">Q.F.B.</option>
                                <option value="65">Quiropraxia</option>
                                <option value="66">Radiología</option>
                                <option value="67">Radioterapeuta</option>
                                <option value="152">Rehabilitación oral</option>
                                <option value="68">Reumatología</option>
                                <option value="69">Sexología</option>
                                <option value="107">Terapeuta familiar</option>
                                <option value="70">Terapeuta ocupacional</option>
                                <option value="71">Traumatología</option>
                                <option value="84">Traumatología y ortopedia</option>
                                <option value="108">Traumatología y ortopedia; rodilla, cadera y hombro</option>
                                <option value="72">Urgenciología</option>
                                <option value="73">Urología</option>
                                <option value="100">Urología ginecológica</option>

                      </select>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label>Clínica:</label>
                        <input type="text" name="nb_Emergencia" id="nb_Emergencia3" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <label>Domicilio:</label>
                        <input type="text" name="de_Domicilio" id="de_Domicilio3" class="form-control">
                    </div>
                </div>

                 <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <label>Nota:</label>
                        <textarea type="text" name="de_Otros_datos" id="de_Otros_datos3" class="form-control"></textarea> 
                    </div>
                </div>
              </div>
            </div>
      </div>
      
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" name="agregar_cita" value="Agregar Doctor">
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
