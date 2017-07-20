<section class="content">
  <div class="row">

    <div class="col-md-6">
      <form class="form-horizontal">
        <div class="box box-primary">
          <div class="box-header with-border">
            <div class="user-block">
              <img class="img-circle" src="<?php echo base_url('assets/image/fotos/clinica/hospital_icon.png'); ?>">
              <span class="username"><?php echo ucwords($clinica['nombre']); ?></span>
              <span class="description"><a href="http://<?php echo $clinica['sitioweb']; ?>" target="_blank"><?php echo $clinica['sitioweb']; ?></a></span>
            </div>
          </div>
          <div class="box-body">
            <img class="img-responsive pad" style="width: 460px; height: 268px;"
            src="<?php echo base_url('assets/image/fotos/clinica/') . $clinica['fotografia']; ?>" >
            <label for="nombre" class="col-sm-4 control-label">Días de atención:</label>
            <div class="col-sm-8">
              <p class="form-control-static"><a><?php echo $clinica['dias']; ?></a></p>
            </div>
            <label for="costo" class="col-sm-4 control-label">Horario de servicio:</label>
            <div class="col-sm-8">
              <p class="form-control-static"><a><?php echo $clinica['horario']; ?></a></p>
            </div>
            <label for="nombre" class="col-sm-4 control-label">Email:</label>
            <div class="col-sm-8">
              <p class="form-control-static"><a><?php echo $clinica['email']; ?></a></p><br>
            </div>         
          </div>
        </div>
      </form>
    </div>

    <div class="col-md-6">
      <form class="form-horizontal">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Detalles</h3>
          </div>
          <div class="box-body">
            <strong><i class="fa fa-phone margin-r-5"></i> Contacto</strong>
            <div class="form-group">
              <label for="nombre" class="col-sm-4 control-label">Teléfono 1:</label>
              <div class="col-sm-8">
                <p class="form-control-static"><a><?php echo $clinica['telefono1']; ?></a></p>
              </div>
              <label for="costo" class="col-sm-4 control-label">Teléfono 2:</label>
              <div class="col-sm-8">
                <p class="form-control-static"><a><?php echo $clinica['telefono2']; ?></a></p>
              </div>
            </div>
            <strong><i class="fa fa-map-marker margin-r-5"></i> Domicilio</strong>
            <div class="form-group">
              <label for="nombre" class="col-sm-4 control-label">Estado:</label>
              <div class="col-sm-8">
                <p class="form-control-static"><a><?php echo ucwords($clinica['Estado']); ?></a></p>
              </div>
              <label for="costo" class="col-sm-4 control-label">Municipio:</label>
              <div class="col-sm-8">
                <p class="form-control-static"><a><?php echo ucwords($clinica['Municipio']); ?></a></p>
              </div>
              <label for="nombre" class="col-sm-4 control-label">Localidad:</label>
              <div class="col-sm-8">
                <p class="form-control-static"><a><?php echo ucwords($clinica['Localidad']); ?></a></p>
              </div>
              <label for="costo" class="col-sm-4 control-label">C.P.:</label>
              <div class="col-sm-8">
                <p class="form-control-static"><a><?php echo ucwords($clinica['cp']); ?></a></p>
              </div>
              <label for="costo" class="col-sm-4 control-label">Colonia:</label>
              <div class="col-sm-8">
                <p class="form-control-static"><a><?php echo ucwords($clinica['colonia']); ?></a></p>
              </div>              
              <label for="costo" class="col-sm-4 control-label">Calle:</label>
              <div class="col-sm-8">
                <p class="form-control-static"><a><?php echo ucwords($clinica['calle']); ?></a></p>
              </div>
              <label for="nombre" class="col-sm-4 control-label">Numero / Interior:</label>
              <div class="col-sm-8">
                <p class="form-control-static"><a><?php echo ucwords($clinica['numero'] . " / " . $clinica['numero_int']); ?></a> </p>
              </div>
              <label for="nombre" class="col-sm-4 control-label">Lote / Manzana:</label>
              <div class="col-sm-8">
                <p class="form-control-static"><a><?php echo ucwords($clinica['lote'] . " / " . $clinica['manzana']); ?></a></p>
              </div>
            </div>
            <a href="<?php echo base_url('Administrador/Clinicas'); ?>" class="btn btn-info pull-right">Regresar</a>
          </div>
        </div>
      </form>
    </div>      
  </div>
</section>