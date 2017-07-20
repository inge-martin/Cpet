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
        <form class="form-horizontal" action="<?php echo base_url(); ?>Zootecnico/Vacunacion/create" method="POST">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Nueva Vacunación</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Que mascota se vacunará:</label>
                <div class="col-sm-8">
                  <select class="col-sm-3 form-control select2" name="id_mascota" required>
                    <option value="">Selecciona uno</option>
                    <?php if (count($mascota)) {
                      foreach ($mascota as $list) {
                        echo "<option value='". $list['id_mascota'] . "'>" 
                        . " Nombre: " .  ucwords($list['nombre']) . " / Sexo: " . $list['sexo'] 
                        . " / Color: " . $list['color']  . " / Raza: " . $list['raza'] 
                        . "</option>";
                      }
                    }
                    ?>
                  </select>                        
                </div>
              </div> 
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Que vacuna se aplicó:</label>
                <div class="col-sm-8">
                  <select class="col-sm-3 form-control select2" name="id_vacuna" required>
                    <option value="">Selecciona uno</option>
                    <?php if (count($vacunas)) {
                      foreach ($vacunas as $list) {
                        echo "<option value='". $list['id_vacuna'] . "'>" 
                        . ucwords($list['nombre']) . ": " . $list['descripcion'] 
                        . "</option>";
                      }
                    }
                    ?>
                  </select>                        
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Fecha de Aplicación:</label>
                <div class="col-sm-8">
                  <input type="hidden" class="form-control" name="fecha_aplicacion" value="<?php echo date("Y-m-d");?>">
                  <p class="form-control-static"><?php echo date("d/m/Y");?></p>
                </div>
              </div>                                    
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Proxima Aplicación:</label>
                <div class="col-sm-3">
                  <?php
                  $fecha_actual = date("Y-m-d");
                  $fecha_min = date('Y-m-d', strtotime("$fecha_actual + 1 day"));
                  ?>
                  <input type="date" class="form-control" name="siguiente_aplicacion" required  
                  min="<?php echo $fecha_min; ?>" value="2017-07-01">
                </div>
                <div class="col-sm-7">
                  <label class="col-sm-12 control-label">Se recomienda que la siguiente aplicación sea: 01/07/2017</label>
                </div>
              </div> 
              <div class="col-sm-11">
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>              
            </div>
          </div>
        </form>
      </div>     
    </div>
  </section>