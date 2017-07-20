<section class="content">
  <div class="row">
    <div class="col-md-3">
    </div>

    <form action="<?php echo base_url(); ?>Cliente/Valoracion/guardar_valoracion" method="POST">
      <?php foreach ($valoracion as $valoracion_item): ?>

        <div class="col-md-6">

          <div class="box box-widget widget-user">

            <div class="widget-user-header bg-black" style="background: url('<?php echo base_url('assets/image/fotos/clinica/') . $valoracion_item['foto_cli']; ?>') center center;">
              <center>
                <h3 class="widget-user-username"><?php echo ucwords($valoracion_item['clinica']); ?></h3>
                <h5 class="widget-user-desc"><?php echo $valoracion_item['telefono1']; ?></h5>
              </center>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="<?php echo base_url('assets/image/fotos/zootecnico/') . $valoracion_item['foto_zoo']; ?>">
            </div>

            <div class="box-footer">
              <div class="row">
                <div class="col-sm-12 border-right">
                  <div class="description-block">
                    <h5 class="description-header">
                      <?php echo ucwords($valoracion_item['zootecnico'] . " " . 
                      $valoracion_item['ap_paterno'] . " " . $valoracion_item['ap_materno']);?>
                    </h5>
                    <span><?php echo ucfirst($valoracion_item['cedula']); ?></span>
                  </div>
                </div>
                <div class="col-sm-12 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Valoración</h5>
                    <input type="hidden" name="id_zootecnico" value="<?php echo $valoracion_item['id_zootecnico'] ?>">
                    <input type="hidden" name="id_cliente" value="<?php echo $valoracion_item['id_cliente'] ?>">
                    <br>
                    <label>
                      <input type="radio" name="valoracion" value="5" class="flat-red" checked="true">
                      <?php for ($i=1; $i <= 5; $i++) echo "&nbsp;&nbsp;" . " <i class='fa fa-paw text-yellow fa-2x'></i> "; ?>
                    </label>
                    <br>
                    <label>
                      <input type="radio" name="valoracion" value="4" class="flat-red">
                      <?php for ($i=1; $i <= 4; $i++) echo "&nbsp;&nbsp;" . " <i class='fa fa-paw text-yellow fa-2x'></i> "; ?>
                    </label>
                    <br>
                    <label>
                      <input type="radio" name="valoracion" value="3" class="flat-red">
                      <?php for ($i=1; $i <= 3; $i++) echo "&nbsp;&nbsp;" . " <i class='fa fa-paw text-yellow fa-2x'></i> "; ?>
                    </label>
                    <br>
                    <label>
                      <input type="radio" name="valoracion" value="2" class="flat-red">
                      <?php for ($i=1; $i <= 2; $i++) echo "&nbsp;&nbsp;" . " <i class='fa fa-paw text-yellow fa-2x'></i> "; ?>
                    </label>
                    <br>
                    <label>
                      <input type="radio" name="valoracion" value="1" class="flat-red">
                      <?php for ($i=1; $i <= 1; $i++) echo "&nbsp;&nbsp;" . " <i class='fa fa-paw text-yellow fa-2x'></i> "; ?>
                    </label>
                  </div>
                </div>
                <div class="col-sm-12 border-right">
                  <div class="description-block">
                    <button type="submit" class="btn btn-info pull-right" value="Guardar">Guardar</button>
                  </div>
                </div>  
              </div>
            </div>

          </div>
        </div>        
      <?php endforeach; ?>
    </form>            
  </div>
</section>