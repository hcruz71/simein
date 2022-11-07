
<div class="row" id="recetas">
  <div class="col-md-12">
    <div class="accrodion-regular">
      <div id="accordion2">
          <div class="card">
            <div class="card-header" id="headingOne">
              <div class="row">
                <div class="col-sm-8">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#recetacollapse" aria-expanded="true" aria-controls="recetacollapse">
                  <h3 class="mb-0">Recetas</h3>
                  </button>
                </div>
                <div class="col-sm-3">
                  <button class="btn btn-info" onclick="add_receta();" style="width: 100%"><i class="fa fa-plus"></i>&nbsp;Nuevo Formato
                  </button>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-default" data-toggle="popover" title="" data-content="Solo relige el formato de receta de la lista de opciones y se quedara configurada automaticamente, si eliges la opción Personalizado tienes que configurar tu receta manualmente (se quedaran lo cambios guardados automaticamente)." data-original-title="Formatos Receta"><i class="fa fa-info-circle" style="float: right;"></i></button>
                </div>
                
              </div>
              
            </div>
              <div id="recetacollapse" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion2">
                 <div id="receta_tabla"></div>     
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 
<!-- Modal -->
<div id="" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-lg" >

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">vista Previa</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div id="div_rec" style="border: none;">
        </div>
      </div>
      <div class="modal-footer">

        <button onclick="printContent('div_rec')">Imprimir</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="edit_modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Editar Recetas</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form id="from_update_recetas">
        <div class="modal-body">
        <h3 id="descripcion"></h3>
        <input type="text" name="id_template_modal" id="id_template" hidden="false">
        <div id="div_descipcion">
          <label>Nombra la Receta</label>
          <input type="text" name="descripcion_text" id="descripcion_text" class="form-control">
        </div>
        <div class="row">
          <div class="col-sm-6">
            <label>Nombre Margen Arriba</label>
            <select class="form-control" name="nom_top" id="nom_top">
              <option value="0">0cm</option>
               <option value="23">0.5cm</option>
               <option value="46">1cm</option>
               <option value="69">1.5cm</option>
               <option value="92">2cm</option>
               <option value="115">2.5cm</option>
               <option value="138">3.0cm</option>
               <option value="161">3.5cm</option>
               <option value="184">4cm</option>
               <option value="207">4.5cm</option>
               <option value="126">5cm</option>
               <option value="230">5.5cm</option>
               <option value="253">6cm</option>
               <option value="276">6.5cm</option>
               <option value="299">7cm</option>
               <option value="322">7.5cm</option>
               <option value="345">8cm</option>
               <option value="368">8.5cm</option>
               <option value="391">9cm</option>
               <option value="414">9.5cm</option>
               <option value="437">10cm</option>
               <option value="460">10.5cm</option>
               <option value="483">11cm</option>
               <option value="506">11.5cm</option>
               <option value="529">12cm</option>
               <option value="552">12.5cm</option>
               <option value="575">13cm</option>
               <option value="598">13.5cm</option>
               <option value="621">14cm</option>
               <option value="644">14.5cm</option>
               <option value="667">15cm</option>
               <option value="690">15.5cm</option>
               <option value="713">16cm</option>
               <option value="736">16.5cm</option>
               <option value="759">17cm</option>
               <option value="782">17.5cm</option>
               <option value="805">18cm</option>
               <option value="828">18.5cm</option>
               <option value="851">19cm</option>
               <option value="874">19.5cm</option>
               <option value="897">20cm</option>
             </select>
          </div>
          <div class="col-sm-6">
            <label>Nombre Margen Derecho</label>
            <select class="form-control" name="nom_left" id="nom_left">
               <option value="0">0cm</option>
               <option value="23">0.5cm</option>
               <option value="46">1cm</option>
               <option value="69">1.5cm</option>
               <option value="92">2cm</option>
               <option value="115">2.5cm</option>
               <option value="138">3.0cm</option>
               <option value="161">3.5cm</option>
               <option value="184">4cm</option>
               <option value="207">4.5cm</option>
               <option value="126">5cm</option>
               <option value="230">5.5cm</option>
               <option value="253">6cm</option>
               <option value="276">6.5cm</option>
               <option value="299">7cm</option>
               <option value="322">7.5cm</option>
               <option value="345">8cm</option>
               <option value="368">8.5cm</option>
               <option value="391">9cm</option>
               <option value="414">9.5cm</option>
               <option value="437">10cm</option>
               <option value="460">10.5cm</option>
               <option value="483">11cm</option>
               <option value="506">11.5cm</option>
               <option value="529">12cm</option>
               <option value="552">12.5cm</option>
               <option value="575">13cm</option>
               <option value="598">13.5cm</option>
               <option value="621">14cm</option>
               <option value="644">14.5cm</option>
               <option value="667">15cm</option>
               <option value="690">15.5cm</option>
               <option value="713">16cm</option>
               <option value="736">16.5cm</option>
               <option value="759">17cm</option>
               <option value="782">17.5cm</option>
               <option value="805">18cm</option>
               <option value="828">18.5cm</option>
               <option value="851">19cm</option>
               <option value="874">19.5cm</option>
               <option value="897">20cm</option>
             </select>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <label>Fecha Margen Arriba</label>
            <select class="form-control" name="fecha_top" id="fecha_top">
               <option value="0">0cm</option>
               <option value="23">0.5cm</option>
               <option value="46">1cm</option>
               <option value="69">1.5cm</option>
               <option value="92">2cm</option>
               <option value="115">2.5cm</option>
               <option value="138">3.0cm</option>
               <option value="161">3.5cm</option>
               <option value="184">4cm</option>
               <option value="207">4.5cm</option>
               <option value="126">5cm</option>
               <option value="230">5.5cm</option>
               <option value="253">6cm</option>
               <option value="276">6.5cm</option>
               <option value="299">7cm</option>
               <option value="322">7.5cm</option>
               <option value="345">8cm</option>
               <option value="368">8.5cm</option>
               <option value="391">9cm</option>
               <option value="414">9.5cm</option>
               <option value="437">10cm</option>
               <option value="460">10.5cm</option>
               <option value="483">11cm</option>
               <option value="506">11.5cm</option>
               <option value="529">12cm</option>
               <option value="552">12.5cm</option>
               <option value="575">13cm</option>
               <option value="598">13.5cm</option>
               <option value="621">14cm</option>
               <option value="644">14.5cm</option>
               <option value="667">15cm</option>
               <option value="690">15.5cm</option>
               <option value="713">16cm</option>
               <option value="736">16.5cm</option>
               <option value="759">17cm</option>
               <option value="782">17.5cm</option>
               <option value="805">18cm</option>
               <option value="828">18.5cm</option>
               <option value="851">19cm</option>
               <option value="874">19.5cm</option>
               <option value="897">20cm</option>
             </select>

          </div>
          <div class="col-sm-6">
            <label>Fecha Margen Izquierdo</label>
            <select class="form-control" name="fecha_right" id="fecha_right">
               <option value="0">0cm</option>
               <option value="23">0.5cm</option>
               <option value="46">1cm</option>
               <option value="69">1.5cm</option>
               <option value="92">2cm</option>
               <option value="115">2.5cm</option>
               <option value="138">3.0cm</option>
               <option value="161">3.5cm</option>
               <option value="184">4cm</option>
               <option value="207">4.5cm</option>
               <option value="126">5cm</option>
               <option value="230">5.5cm</option>
               <option value="253">6cm</option>
               <option value="276">6.5cm</option>
               <option value="299">7cm</option>
               <option value="322">7.5cm</option>
               <option value="345">8cm</option>
               <option value="368">8.5cm</option>
               <option value="391">9cm</option>
               <option value="414">9.5cm</option>
               <option value="437">10cm</option>
               <option value="460">10.5cm</option>
               <option value="483">11cm</option>
               <option value="506">11.5cm</option>
               <option value="529">12cm</option>
               <option value="552">12.5cm</option>
               <option value="575">13cm</option>
               <option value="598">13.5cm</option>
               <option value="621">14cm</option>
               <option value="644">14.5cm</option>
               <option value="667">15cm</option>
               <option value="690">15.5cm</option>
               <option value="713">16cm</option>
               <option value="736">16.5cm</option>
               <option value="759">17cm</option>
               <option value="782">17.5cm</option>
               <option value="805">18cm</option>
               <option value="828">18.5cm</option>
               <option value="851">19cm</option>
               <option value="874">19.5cm</option>
               <option value="897">20cm</option>
             </select>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <label>Receta Margen Arriba</label>
            <select class="form-control" name="rec_top" id="rec_top">
               <option value="0">0cm</option>
               <option value="23">0.5cm</option>
               <option value="46">1cm</option>
               <option value="69">1.5cm</option>
               <option value="92">2cm</option>
               <option value="115">2.5cm</option>
               <option value="138">3.0cm</option>
               <option value="161">3.5cm</option>
               <option value="184">4cm</option>
               <option value="207">4.5cm</option>
               <option value="126">5cm</option>
               <option value="230">5.5cm</option>
               <option value="253">6cm</option>
               <option value="276">6.5cm</option>
               <option value="299">7cm</option>
               <option value="322">7.5cm</option>
               <option value="345">8cm</option>
               <option value="368">8.5cm</option>
               <option value="391">9cm</option>
               <option value="414">9.5cm</option>
               <option value="437">10cm</option>
               <option value="460">10.5cm</option>
               <option value="483">11cm</option>
               <option value="506">11.5cm</option>
               <option value="529">12cm</option>
               <option value="552">12.5cm</option>
               <option value="575">13cm</option>
               <option value="598">13.5cm</option>
               <option value="621">14cm</option>
               <option value="644">14.5cm</option>
               <option value="667">15cm</option>
               <option value="690">15.5cm</option>
               <option value="713">16cm</option>
               <option value="736">16.5cm</option>
               <option value="759">17cm</option>
               <option value="782">17.5cm</option>
               <option value="805">18cm</option>
               <option value="828">18.5cm</option>
               <option value="851">19cm</option>
               <option value="874">19.5cm</option>
               <option value="897">20cm</option>
             </select>

          </div>
          <div class="col-sm-6">
            <label>Receta Margen Derecho</label>
            <select class="form-control" name="rec_left" id="rec_left">
               <option value="0">0cm</option>
               <option value="23">0.5cm</option>
               <option value="46">1cm</option>
               <option value="69">1.5cm</option>
               <option value="92">2cm</option>
               <option value="115">2.5cm</option>
               <option value="138">3.0cm</option>
               <option value="161">3.5cm</option>
               <option value="184">4cm</option>
               <option value="207">4.5cm</option>
               <option value="126">5cm</option>
               <option value="230">5.5cm</option>
               <option value="253">6cm</option>
               <option value="276">6.5cm</option>
               <option value="299">7cm</option>
               <option value="322">7.5cm</option>
               <option value="345">8cm</option>
               <option value="368">8.5cm</option>
               <option value="391">9cm</option>
               <option value="414">9.5cm</option>
               <option value="437">10cm</option>
               <option value="460">10.5cm</option>
               <option value="483">11cm</option>
               <option value="506">11.5cm</option>
               <option value="529">12cm</option>
               <option value="552">12.5cm</option>
               <option value="575">13cm</option>
               <option value="598">13.5cm</option>
               <option value="621">14cm</option>
               <option value="644">14.5cm</option>
               <option value="667">15cm</option>
               <option value="690">15.5cm</option>
               <option value="713">16cm</option>
               <option value="736">16.5cm</option>
               <option value="759">17cm</option>
               <option value="782">17.5cm</option>
               <option value="805">18cm</option>
               <option value="828">18.5cm</option>
               <option value="851">19cm</option>
               <option value="874">19.5cm</option>
               <option value="897">20cm</option>
             </select>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-6">
            <label>tamaño de Letra</label>
            <select class="form-control" name="font_size" id="font_size">
              <option value="8">8</option>
               <option value="9">9</option>
               <option value="10">10</option>
               <option value="11">11</option>
               <option value="12">12</option>
               <option value="13">13</option>
               <option value="14">14</option>
               <option value="15">15</option>
               <option value="16">16</option>
               <option value="17">17</option>
               <option value="18">18</option>
               <option value="19">19</option>
               <option value="20">20</option>
               <option value="21">21</option>
               <option value="22">22</option>
               <option value="23">23</option>
               <option value="24">24</option>
               <option value="25">25</option>
               <option value="26">26</option>
               <option value="27">27</option>
               <option value="28">28</option>
               <option value="29">29</option>
               <option value="30">30</option>
             </select>
          </div>
          <div class="col-sm-6">
            <label>Seleccionar una Receta</label>
            <input type="file" name="file_update_receta" id="file_update_receta" class="form-control" onchange="cargar_receta();"> 
            <textarea name="file_update_receta_text" id="file_update_receta_text" hidden="false"></textarea>
          </div>
        </div>
        <br>
        <img src="" id="img_rec" style="width: 100%" >
      </div>
      </form>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-info" onclick="guardarCambiosReceta()">Guardar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

