<script type="text/javascript" src="<?php echo base_url(); ?>js/funciones.js"></script>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <form class="form-horizontal" action="<?php echo base_url(); ?>Empleado/Citas/editar_cita" method="POST">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo $title; ?></h3>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label for="input1" class="col-sm-2 control-label">Estado de la cita:</label>
              <div class="col-sm-10">
                <label for="input1" class="col-sm-1 control-label">Pendiente</label>
                <input type="radio" name="status" class="col-sm-1 control-label" value="Pendiente" checked="true">
                <label for="input1" class="col-sm-1 control-label">Atendida</label>
                <input type="radio" name="status" class="col-sm-1 control-label" value="Atendida">
                <label for="input1" class="col-sm-1 control-label">Cancelada</label>
                <input type="radio" name="status" class="col-sm-1 control-label" value="Cancelada">
                <label for="input1" class="col-sm-2 control-label">No se presento</label>
                <input type="radio" name="status" class="col-sm-1 control-label" value="No se presento">
              </div>
            </div>
            <div class="form-group">
              <label for="inputMotivo" class="col-sm-2 control-label">Motivo:</label>
              <div class="col-sm-10">
                <p class="form-control-static"><?php echo ucwords($citas['motivo']); ?></p>
              </div>
            </div>        
            <div class="form-group">
              <label for="inputFecha" class="col-sm-2 control-label">Fecha:</label>
              <div class="col-sm-10">
                <p class="form-control-static"><?php echo ucwords($citas['start']); ?></p>
                <input type="hidden" name="id_citas" value="<?php echo $citas['id_citas']; ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputHora" class="col-sm-2 control-label">Turno:</label>
              <div class="col-sm-10">
                <p class="form-control-static"><?php echo ucwords($citas['turno']); ?></p>
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
