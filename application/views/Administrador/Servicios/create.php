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
          <?php echo form_open('Administrador/Servicios/create', array('class' => 'form-horizontal')); ?>
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo $title; ?></h3>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nombre:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre" required="true" placeHolder="Ingresa Nombre" onkeypress="return soloLetras(event)" maxlength="500">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Descripción:</label>
              <div class="col-sm-10">
                <textarea style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px; resize: none" placeHolder="Ingresa Descripcion" onkeypress="return letraNumero(event)" maxlength="1000" name="descripcion" required="true"></textarea>                        
              </div>
            </div>            
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Costo:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="costo" required="true" onkeypress="return soloPrecios(event)" maxlength="10">
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