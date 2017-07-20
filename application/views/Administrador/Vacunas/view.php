<script type="text/javascript" src="<?php echo base_url(); ?>js/funciones.js"></script>
<section class="content">
  <?php 
  if(!empty(validation_errors())){
    ?>
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Error: <?php echo validation_errors(); ?></h3>
      </div> 
    </div> 
    <?php }?>
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <?php echo form_open('Administrador/Vacunas/edit/'.$vacunas['id_vacuna'], array('class' => 'form-horizontal')); ?>
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo $title; ?></h3>
          </div>
          <div class="box-body">

            <div class="form-group">
              <label for="inputNombre" class="col-sm-2 control-label">Nombre:</label>
              <div class="col-sm-10">
                <p type="text" class="form-control-static"><?php echo $vacunas['nombre'] ?></p>
              </div>
            </div>
            <div class="form-group">
              <label for="inputDescripcion" class="col-sm-2 control-label">Descripción:</label>
              <div class="col-sm-10">
              <p type="text" class="form-control-static" style="width: 100%; height: 50px; font-size: 14px; line-height: 18px; border: 0px solid #dddddd; padding: 10px; resize: none"><?php echo $vacunas['descripcion'] ?></p>
              </div>
            </div>
            <div class="form-group">
              <label for="inputId_Consulta" class="col-sm-2 control-label">Costo:</label>
              <div class="col-sm-10">
                <p type="text" class="form-control-static"><?php echo $vacunas['costo'] ?></p>
              </div>
            </div>

          </div>
          <div class="box-footer">
            <td><a href="<?php echo base_url('Administrador/Vacunas'); ?>" class="btn btn-info pull-right">Regresar</a></td>
          </div>
        </form>
      </div>
    </div>     
  </div>
</section>
