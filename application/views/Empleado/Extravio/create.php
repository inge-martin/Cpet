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
        <form class="form-horizontal" action="<?php echo base_url(); ?>Empleado/Extravio/create" method="POST">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Nuevo Extravió</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Que mascota se extravió:</label>
                <div class="col-sm-8">
                  <select class="col-sm-3 form-control" name="id_mascota" required>
                    <?php if (count($mascota)) {
                      foreach ($mascota as $list) {
                        echo "<option value='". $list['id_mascota'] . "'>" 
                        . " Nombre: " .  ucwords($list['nombre']) . " / Sexo: " . $list['sexo'] 
                        . " / Color: " . $list['color']  . " / Raza: " . $list['raza'] 
                        . "</option>";
                      }
                    }else{
                      echo "<option value=''>No hay mascotas registradas</option>";
                    }
                    ?>
                  </select>                       
                </div>
              </div>          
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Fecha de Extravió:</label>
                <div class="col-sm-8">
                  <?php $fecha_actual = date("Y-m-d"); ?>
                  <input type="date" class="form-control" name="fecha_extravio" required  max="<?php echo $fecha_actual; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Señas Particulares:</label>
                <div class="col-sm-8">
                  <textarea style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; resize: none" placeHolder="Ingresa Descripción" onkeypress="return letraNumero(event)" maxlength="500" name="senas_particulares" required="true"></textarea> 
                </div>
              </div>                    
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Donde se Extravio:</label>
                <div class="col-sm-8">
                  <textarea style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; resize: none" placeHolder="Ingresa Descripción" onkeypress="return letraNumero(event)" maxlength="500" name="ubicacion" required="true"></textarea>                        
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