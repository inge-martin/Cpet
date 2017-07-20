<script type="text/javascript" src="<?php echo base_url(); ?>js/funciones.js"></script>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <form class="form-horizontal" action="<?php echo base_url(); ?>Zootecnico/Consulta/nuevaConsulta" method="POST">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo $title; ?></h3>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label for="input1" class="col-sm-2 control-label">Mascota:</label>
              <div class="col-sm-10">
                <select class="col-sm-3 form-control select2" name="id_mascota" required>
                  <?php 
                  if (count($mascota)) {
                    foreach ($mascota as $list) {
                      echo "<option value='". $list['id_mascota'] . "'>" 
                      . " Nombre: " .  ucwords($list['nombre']) . " / Sexo: " . $list['sexo'] 
                      . " / Color: " . $list['color']  . " / Raza: " . $list['raza'] 
                      . "</option>";
                    }
                  }else{
                    echo "<option value=''>No hay mascotas externas, para consulta.</option>";
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="inputMotivo" class="col-sm-2 control-label">Detalle de revisión:</label>
              <div class="col-sm-10">
                <textarea style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px; resize: none" placeHolder="Ingresa Motivo" onkeypress="return letraNumero(event)" maxlength="500" name="detalle_revision" required="true"></textarea>                        
              </div>
            </div>        
            <div class="form-group">
              <label for="inputHora" class="col-sm-2 control-label">Tratamiento:</label>
              <div class="col-sm-10">
                <select class="col-sm-3 form-control" name="id_tratamiento" required>
                  <?php if (count($tratamiento)) {
                    foreach ($tratamiento as $list) {
                      echo "<option value='". $list['id_tratamiento'] . "'>" . ucwords($list['nombre']) . "</option>";
                    }
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="inputHora" class="col-sm-2 control-label">Servicio:</label>
              <div class="col-sm-10">
                <select class="col-sm-3 form-control" name="id_servicios" required>
                  <?php if (count($servicios)) {
                    foreach ($servicios as $list) {
                      echo "<option value='". $list['id_servicios'] . "'>" . ucwords($list['nombre']) . "</option>";
                    }
                  }
                  ?>
                </select>
              </div>
            </div>            
            <div class="form-group">
              <label for="inputFecha" class="col-sm-2 control-label">Fecha:</label>
              <div class="col-sm-10">
                <?php date_default_timezone_set("America/Mexico_City"); ?>
                <input type="hidden" class="form-control" name="fecha_consulta" value="<?php echo date("Y-m-d");?>">
                <p class="form-control-static"><?php echo date("d/m/Y");?></p>
              </div>
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">Guardar</button>
          </div>
        </form>
      </div>
    </div>     
  </div>
</section>
