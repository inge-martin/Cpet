<section class="content">
  <?php 
  for($i=0; $i<1; $i++)
  {
    ?>
    <div class="row">
      <div class="col-md-12">

        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Perfil de la Mascota</h3>
            </div>      
            <div class="box-body box-profile">
              <center>
                <img class="img-responsive img-thumbnail" style="height: 150px; width: 150px;"
                src="<?php echo base_url(); ?>assets/image/fotos/mascota/<?php echo $carnet[$i]['fotografia']; ?>">
              </center>
              <h3 class="profile-username text-center">
                <a href="<?php echo base_url('Cliente/Mascotas/view/'.$carnet[$i]['id_mascota']); ?>"><?php echo ucwords($carnet[$i]['mascota']); ?> / <?php echo ucwords($carnet[$i]['raza']); ?></a>
              </h3>                      
              <ul class="list-group list-group-unbordered">             
                <li class="list-group-item">
                  <b>F. Nacimiento:</b> <a class="pull-right"><?php echo date('d-m-Y', strtotime($carnet[$i]['fecha_nacimiento'])); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Peso:</b> <a class="pull-right"><?php echo $carnet[$i]['peso']; ?> Kg</a>
                </li>
                <li class="list-group-item">
                  <b>Alergias:</b> <a class="pull-right"><?php echo ucwords($carnet[$i]['alergias']); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Dueño:</b> <a class="pull-right" href="<?php echo base_url('Cliente/Perfil'); ?>"><?php echo ucwords($carnet[$i]['cliente'] . " " .$carnet[$i]['cli_p'] . " " .$carnet[$i]['cli_m']); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Zootécnico:</b><a href="<?php echo base_url('Cliente/Zootecnico'); ?>" class="pull-right"><?php echo ucwords($carnet[$i]['zoo'] . " " .$carnet[$i]['zoo_p'] . " " .$carnet[$i]['zoo_m']); ?></a>
                </li>  
                <li class="list-group-item">
                  <b>Clínica:</b> <a class="pull-right" href="<?php echo base_url('Cliente/Clinicas/view/'.$carnet[$i]['id_clinica']); ?>"><?php echo ucwords($carnet[$i]['clinica']); ?></a>
                </li>                                  
              </ul>
            </div>
          </div>
        </div>
        <?php } ?>

        <div class="col-md-6"> 
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Vacunas aplicadas</h3>
            </div>
            <div class="box-body box-profile">
              <?php 
              if (count($carnet)) {
                foreach ($carnet as $list) {
                  ?>
                  <div class="col-md-12">
                    <div class="info-box bg-aqua">
                      <span class="info-box-icon"><i class="fa fa-medkit"></i></span>
                      <!-- <span class="info-box-icon"><img src="<?php echo base_url(); ?>assets/image/fotos/icon-syringe.png"></span> -->
                      <div class="info-box-content">
                        <span class="info-box-text"><?php echo ucwords($list['vacuna']); ?></span>
                        <div class="progress">
                          <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                          Aplicada el: <?php echo date('d-m-Y', strtotime($list['fecha_aplicacion'])); ?>
                        </span>
                        <span class="progress-description">
                          Siguiente aplicación: <?php echo date('d-m-Y', strtotime($list['siguiente_aplicacion'])); ?>
                        </span>
                      </div>
                    </div>
                  </div>
                  <?php
                }
              }
              ?>
            </div>
            <div class="box-footer">
            <td><a href="<?php echo base_url('Cliente/Carnet'); ?>" class="btn btn-info pull-right">Regresar</a></td>
            </div>
          </div>
        </div>  

      </div>
    </div>
  </section>