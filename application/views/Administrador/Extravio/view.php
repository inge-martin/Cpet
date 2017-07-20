<section class="content">
  <div class="row">
    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Perfil de la Mascota Extraviada</h3>
        </div>      
        <div class="box-body box-profile">
          <center>
            <img class="img-responsive img-thumbnail" style="height: 150px; width: 150px;"
            src="<?php echo base_url(); ?>assets/image/fotos/mascota/<?php echo $extravio['Foto_mascota']; ?>">
          </center>
          <h3 class="profile-username text-center">
            <?php echo ucwords($extravio['Mascota']); ?>
          </h3>
          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Raza:</b> <a class="pull-right"><?php echo ucwords($extravio['Raza']); ?></a>
            </li>
            <li class="list-group-item">
              <b>Sexo:</b> <a class="pull-right"><?php echo ucwords($extravio['sexo']); ?></a>
            </li>
            <li class="list-group-item">
              <b>Color:</b> <a class="pull-right"><?php echo ucwords($extravio['color']);; ?></a>
            </li>                       
            <li class="list-group-item">
              <b>Descripción:</b> <a class="pull-right"><?php echo $extravio['descripcion']; ?></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Perfil del Dueño</h3>          
        </div>      
        <div class="box-body box-profile">
          <center>
            <img class="img-responsive img-thumbnail" style="height: 150px; width: 150px;"
            src="<?php echo base_url('assets/image/fotos/cliente/') . $extravio['fotografia']; ?>">
          </center>
          <h3 class="profile-username text-center">
            <?php echo ucwords($extravio['Cliente'] . " " . $extravio['ap_paterno'] . " " . $extravio['ap_materno']); ?>
          </h3>
          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Teléfono Local:</b> <a class="pull-right"><?php echo $extravio['telefono_local']; ?></a>
            </li>
            <li class="list-group-item">
              <b>Teléfono Celular:</b> <a class="pull-right"><?php echo $extravio['telefono_celular']; ?></a>
            </li>           
            <li class="list-group-item">
              <b>F. Nacimiento:</b> <a class="pull-right"><?php echo date("d-m-Y", strtotime($extravio['fecha_nacimiento'])); ?></a>
            </li>
            <li class="list-group-item">
              <b>Email:</b> <a class="pull-right"><?php echo $extravio['email']; ?></a>
            </li>           
          </ul>
        </div>
      </div>
    </div>  
    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Detalles del Extravió</h3>
        </div>
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputPassword1">Fecha de extravió:</label>
            <p class="form-control-static"><a><?php echo date("d-m-Y", strtotime($extravio['fecha_extravio'])); ?></a></p>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Señas particulares:</label>
            <p class="form-control-static"><a><?php echo ucwords($extravio['senas_particulares']); ?></a></p>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Donde se extravió:</label>
            <p class="form-control-static"><a><?php echo ucwords($extravio['ubicacion']); ?></a></p>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Estado de la mascota:</label>
            <p class="form-control-static"><a><?php echo ucwords($extravio['status']); ?></a></p>
          </div>                        
        </div>
        <br>
        <div class="box-footer">
          <a href="<?php echo base_url('Administrador/Extravio'); ?>" class="btn btn-info pull-right">Regresar</a>
        </div>
      </div>
    </div>  
  </div>
</section>


