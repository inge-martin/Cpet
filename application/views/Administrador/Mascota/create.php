<section class="content">
  <?php 
  if($error != ' '){
    echo "
    <div class='box box-danger'>
      <div class='box-header with-border'>
        <h3 class='box-title'>Error: $error</h3>
      </div> 
    </div>";
  }
  ?>
  <form class="form-horizontal" action="<?php echo base_url(); ?>Administrador/Mascotas/nuevaMascota" method="POST" enctype="multipart/form-data" name="formulario">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Datos Principales de la Mascota</h3>
      </div>
      <div class="box-body">
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label">Dueño:</label>
              <div class="col-sm-8">
                <select class="col-sm-3 form-control select2" name="id_cliente" required>
                  <option value="">Selecciona uno</option>
                  <?php if (count($cliente)) {
                    foreach ($cliente as $list) {
                      echo "<option value='". $list['id_cliente'] . "'>" . ucwords($list['nombre'] . " " .$list['ap_paterno'] . " " .$list['ap_materno']) . "</option>";
                    }
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label">Nombre:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="nombre" placeholder="Ingresa nombre de la mascota" name="txtNombre" required onkeypress="return soloLetras(event)" maxlength="15">
              </div>
            </div>            
            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label">Sexo:</label>
              <div class="col-sm-8">
                <select class="col-sm-3 form-control" name="txtSexo" required>
                  <option value="">Selecciona uno</option>
                  <option value="Macho">Macho</option>
                  <option value="Hembra">Hembra</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label">Habitad:</label>
              <div class="col-sm-8">
                <select id="cboHabitad" name="txtHabitad" class="col-sm-4 form-control select2" required>
                  <option value="">Selecciona uno</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label">Especie:</label>
              <div class="col-sm-8">
                <select id="cboEspecie" name="txtEspecie" class="col-sm-4 form-control select2" required>
                  <option value="">Selecciona uno</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label">Raza:</label>
              <div class="col-sm-8">
                <select id="cboRaza" name="txtRaza" class="col-sm-4 form-control select2" required>
                  <option value="">Selecciona uno</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label">F. Nacimiento:</label>
              <div class="col-sm-8">
                <?php
                $fecha_actual = date("Y-m-d");
                $fecha_min = date('Y-m-d', strtotime("$fecha_actual - 1 day"));
                ?>
                <input type="date" class="form-control" name="txtFechaNaci" required  
                max="<?php echo $fecha_min; ?>">
              </div>              
            </div>
            <div class="form-group">                             
              <label for="input1" class="col-sm-4 control-label">Peso (Kg):</label>
              <div class="col-sm-8">
                <input type="text" step="any" class="form-control" name="txtPeso" required="true" onkeypress="return soloPrecios(event)" maxlength="10" placeholder="5.4">
              </div>
            </div>
            <div class="form-group">                         
              <label for="input1" class="col-sm-4 control-label">Color:</label>
              <div class="col-sm-8">
                <select class="col-sm-3 form-control" name="txtColor" required>
                  <option value="">Selecciona uno</option>
                  <option value="Blanco">Blanco</option>
                  <option value="Cafe">Cafe</option>
                  <option value="Negro">Negro</option>
                  <option value="Gris">Gris</option>
                  <option value="Perla">Perla</option>
                  <option value="Manchado">Manchado</option>
                  <option value="Blanco/Negro">Blanco/Negro</option>
                </select>
              </div>                                                           
            </div>
            <div class="form-group">                               
              <label for="input1" class="col-sm-4 control-label">Alergias:</label>
              <div class="col-sm-8">
                <select class="col-sm-3 form-control" name="txtAlergias" required>
                  <option value="">Selecciona uno</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputFile" class="col-sm-4 control-label">Fotografia:</label>
              <div class="col-sm-8">
                <input type="file" class="form-control" id="exampleInputFile" name="txtFotografia" required>
              </div> 
            </div>            
          </div>
          <div class="form-group">
            <div class="col-sm-8">
            </div>
          </div>                   
          <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Caracteristicas<br> descripción de Alergias etc.:</label>
            <div class="col-sm-10">
            <textarea class="col-sm-3 form-control" rows="3" placeholder="Descripción de la mascota" name="txtDescripcion" required="true" style="resize: none"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right" value="Guardar">Guardar</button>
      </div>
    </div>
    
  </form>
</section>

<script type="text/javascript" src="<?php echo base_url(); ?>js/funciones.js"></script>
<script>
  //baseurl para los combos
  var baseurl = "<?php echo base_url(); ?>";
</script>