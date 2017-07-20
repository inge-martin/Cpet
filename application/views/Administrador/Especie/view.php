<section class="content">
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal">
        <div class="box box-primary">
         <div class="box-header with-border">
          <h3 class="box-title">Detalles de la Especie</h3>
        </div>
        <div class="box-body">
          <div class="form-group">
            <label for="nombre" class="col-sm-3 control-label">Nombre:</label>
            <div class="col-sm-9">
              <p type="text" class="form-control-static" disabled="true"><?php echo $especie['nombre'] ?></p>
            </div>
          </div>                 
          <div class="form-group">
            <label for="descripcion" class="col-sm-3 control-label">Descripción:</label>
            <div class="col-sm-8">
            <p type="text" class="form-control-static" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 0px solid #dddddd; resize: none"><?php echo $especie['descripcion'] ?></p>                       
            </div>
          </div>
        </div>
        <div class="box-footer">
          <td><a href="<?php echo base_url('Administrador/Especie/index'); ?>" class="btn btn-info pull-right">Regresar</a></td>
        </div>
      </form>
    </div>
  </div>     
</div>
</section>


