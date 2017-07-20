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
        <form class="form-horizontal" action="<?php echo base_url(); ?>Administrador/Extravio/editar_extravio" method="POST">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edición de Extravió</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Que mascota se extravió:</label>
                <div class="col-sm-8">
                <p class="form-control-static"><a><?php echo ucwords($extravio['Mascota']); ?></a></p>
                </div>
              </div>          
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Fecha de Extravió:</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="fecha_extravio" required="true" value="<?php echo $extravio['fecha_extravio'] ?>">
                  <input type="hidden" class="form-control" name="id_mascota" required="true" value="<?php echo $extravio['id_mascota'] ?>">
                  <input type="hidden" class="form-control" name="id_extravio" required="true" value="<?php echo $extravio['id_extravio'] ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Señas Particulares:</label>
                <div class="col-sm-8">
                  <textarea style="width: 100%; height: 70px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; resize: none" placeHolder="Ingresa Descripción" onkeypress="return letraNumero(event)" maxlength="500" name="senas_particulares" required="true"><?php echo $extravio['senas_particulares'] ?></textarea> 
                </div>
              </div>                    
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Donde se Extravio:</label>
                <div class="col-sm-8">
                  <textarea style="width: 100%; height: 70px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; resize: none" placeHolder="Ingresa Descripción" onkeypress="return letraNumero(event)" maxlength="500" name="ubicacion" required="true"><?php echo $extravio['ubicacion'] ?></textarea>                        
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Estado de la mascota:</label>
                <div class="col-sm-8">
                  <select class="col-sm-3 form-control" name="status" required>
                    <option value="">Selecciona uno</option>
                    <option value="Perdido">Perdido</option>
                    <option value="Activo">Encontrado</option>
                  </select>                        
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