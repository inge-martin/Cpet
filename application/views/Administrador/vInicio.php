<section class="content">
  <!-- <h2 class="page-header">Bienvenido Administrador</h2> -->

  <div class="row">
    <!-- Carrousel -->
    <div class="col-md-8">
      <div>

        <div class="box-body">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="item active">
                <img class="img-responsive" src="<?php echo base_url(); ?>assets/image/carrusel/1.jpg" alt="Slide uno">
                <div class="carousel-caption">                      
                </div>
              </div>
              <div class="item">
                <img class="img-responsive" src="<?php echo base_url(); ?>assets/image/carrusel/2.jpg" alt="Slide dos">
                <div class="carousel-caption">                      
                </div>
              </div>
              <div class="item">
                <img class="img-responsive" src="<?php echo base_url(); ?>assets/image/carrusel/3.jpg" alt="Slide tres">
                <div class="carousel-caption">                      
                </div>
              </div>
              <div class="item">
                <img class="img-responsive" src="<?php echo base_url(); ?>assets/image/carrusel/4.jpg" alt="Slide cuatro">
                <div class="carousel-caption">                      
                </div>
              </div>
              <div class="item">
                <img class="img-responsive" src="<?php echo base_url(); ?>assets/image/carrusel/5.jpg" alt="Slide cinco">
                <div class="carousel-caption">                      
                </div>
              </div>                                                  
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="fa fa-angle-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="fa fa-angle-right"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- /Carrousel -->

    <br>

    <!-- Accesos -->
    <div class="col-md-4">
      <div class="  box-success">
        <div class="box-body">
          <div class="col-md-12">
            <div class="info-box">
              <a href="<?php echo base_url(); ?>Administrador/Zootecnicos"><span class="info-box-icon bg-yellow"><i class="ion ion-android-people"></i></span></a>
              <div class="info-box-content">
                <span class="info-box-text">Zootécnicos</span>
                <span class="info-box-number"><?php echo $zootecnico; ?><small> Registrados</small></span>
                <div class="progress">
                  <div class="progress-bar" style="width: 0%"></div>
                </div>
                <a href="<?php echo base_url('Administrador/Zootecnicos/newZoo'); ?>" class="pull-right"><span class="progress-description">
                  <i class="ion ion-android-person-add"></i> Nuevo 
                </span></a>
              </div>              
            </div>
          </div>
          <div class="col-md-12">
            <div class="info-box">
              <a href="<?php echo base_url(); ?>Administrador/Empleados"><span class="info-box-icon bg-green"><i class="ion ion-android-contacts"></i></span></a>
              <div class="info-box-content">
                <span class="info-box-text">Empleados</span>
                <span class="info-box-number"><?php echo $empleados; ?><small> Registrados</small></span>
                <div class="progress">
                  <div class="progress-bar" style="width: 0%"></div>
                </div>
                <a href="<?php echo base_url('Administrador/Empleados/newEmpleado'); ?>" class="pull-right"><span class="progress-description">
                  <i class="ion ion-android-person-add"></i> Nuevo 
                </span></a>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="info-box">
              <a href="<?php echo base_url(); ?>Administrador/Clientes"><span class="info-box-icon bg-aqua"><i class="ion ion-person-stalker"></i></span></a>
              <div class="info-box-content">
                <span class="info-box-text">Clientes</span>
                <span class="info-box-number"><?php echo $clientes; ?><small> Registrados</small></span>
                <div class="progress">
                  <div class="progress-bar" style="width: 0%"></div>
                </div>
                <a href="<?php echo base_url('Administrador/Clientes/newCli'); ?>" class="pull-right"><span class="progress-description">
                  <i class="ion ion-android-person-add"></i> Nuevo 
                </span></a>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="info-box">
              <a href="<?php echo base_url(); ?>Administrador/Mascotas"><span class="info-box-icon bg-red"><i class="ion ion-social-github"></i></span></a>
              <div class="info-box-content">
                <span class="info-box-text">Mascotas</span>
                <span class="info-box-number"><?php echo $mascotas; ?><small> Registradas</small></span>
                <div class="progress">
                  <div class="progress-bar" style="width: 0%"></div>
                </div>
                <a href="<?php echo base_url('Administrador/Mascotas/newPet'); ?>" class="pull-right"><span class="progress-description">
                  <i class="ion ion-android-person-add"></i> Nueva 
                </span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Accesos -->
  </div>

</section>

