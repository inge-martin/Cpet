<script type="text/javascript" src="<?php echo base_url(); ?>js/funciones.js"></script>
<script>
  var baseurl = "<?php echo base_url(); ?>";
</script>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <form class="form-horizontal" action="<?php echo base_url(); ?>Zootecnico/Citas/nuevaCita" method="POST">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo $title; ?></h3>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label for="input1" class="col-sm-2 control-label">Cliente:</label>
              <div class="col-sm-10">
                <select id="cboCliente" name="id_cliente" class="col-sm-8 form-control" required>
                  <option value="">Selecciona uno</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="input1" class="col-sm-2 control-label">Mascota:</label>
              <div class="col-sm-10">
                <select id="cboMascota" name="id_mascota" class="col-sm-8 form-control" required>
                  <option value="">Selecciona uno</option>
                </select>
              </div>
            </div>            
            <div class="form-group">
              <label for="inputMotivo" class="col-sm-2 control-label">Motivo:</label>
              <div class="col-sm-10">
                <textarea style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px; resize: none" placeHolder="Ingresa Motivo" onkeypress="return letraNumero(event)" maxlength="500" name="motivo" required="true"></textarea>                        
              </div>
            </div>        
            <div class="form-group">
              <label for="inputFecha" class="col-sm-2 control-label">Fecha:</label>
              <div class="col-sm-10">
                <?php
                $fecha_actual = date("Y-m-d");
                $fecha_min = date('Y-m-d', strtotime("$fecha_actual + 1 day"));
                ?>
                <input type="date" class="form-control" name="fecha" required="true" min="<?php echo $fecha_min; ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputHora" class="col-sm-2 control-label">Turno:</label>
              <div class="col-sm-10">
                <select class="col-sm-3 form-control" name="turno" required>
                  <option value="">Selecciona horario</option>
                  <option value="Mañana">Mañana (09:00 - 14:00)</option>
                  <option value="Tarde">Tarde (15:00 - 20:00)</option>
                </select>
                <input type="hidden" name="status" value="Pendiente">
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
