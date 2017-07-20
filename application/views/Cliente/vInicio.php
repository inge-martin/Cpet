<section class="content">
  <!-- START ACCORDION & CAROUSEL-->
  <!-- <h2 class="page-header">Bienvenido al Sistema Clinic Pet</h2> -->

  <div class="row">

    <!-- Carrousel -->
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Avisos</h3>
        </div>
        <!-- /.box-header -->
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
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /Carrousel -->

    <!-- Panel -->
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Nosotros</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="box-group" id="accordion">
            <div class="panel box box-success">
              <div class="box-header with-border">
                <h4 class="box-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    ¿Quienes somos?
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse in">
                <div class="box-body">
                  Somos un equipo de Médicos Veterinarios Zootecnistas egresados de la Facultad de Estudios Superiores Cuautitlán de la UNAM dedicados a la clínica de pequeñas especies, enfocados a la salud y bien estar animal.<br>
                  Nos comprometemos a atender con profesionalismo, dedicación, cariño y respeto a todos nuestros pacientes sin importar raza, edad, o estatus social.
                </div>
              </div>
            </div>        
            <div class="panel box box-info">
              <div class="box-header with-border">
                <h4 class="box-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    Misión
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse">
                <div class="box-body">
                  Enriquecemos tu vida y la de tu maskota. Creemos que las mascotas nos hacen mejores personas porque enriquecen nuestras vidas y fortalecen nuestras bondades, así nace nuestra misión.<br>
                  Dar seguimiento a los animales agresores llevando a cabo una observación clínica de estos y, en el marco de la nueva imagen estos centros, atiende animales enfermos en consulta externa y el control de la reproducción.
                </div>
              </div>
            </div>
            <div class="panel box box-danger">
              <div class="box-header with-border">
                <h4 class="box-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    Visión
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="box-body">
                  Ser la cadena de tiendas especializada líder en el mercado de las mascotas en México. <br>
                  Contar con un Hospital Veterinario de Especialidades único en la zona, con sucursales que abarquen toda el área metropolitana, satisfaciendo la necesidad de servicios veterinarios para personas que buscan trato profesional y especializado.
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.Panel -->

  </div>
  <!-- /.row -->

  <div class="row">
    <div class="col-xs-12">
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title">En Clinic Pet contamos con...</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row margin">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                <h3><?php echo $clinicas; ?></h3>

                  <p>Clínicas</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <p class="small-box-footer">Especializadas y Certificadas.</p>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $zootecnicos; ?></h3>

                  <p>Zootécnicos</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <p class="small-box-footer">Profesionales y de confianza.</p>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $tratamientos; ?></h3>
                  <p>Tratamientos</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <p class="small-box-footer">Garantizados y de calidad.</p>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $servicios; ?></h3>
                  <p>Servicios</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <p class="small-box-footer">Garantizados y de calidad.</p>
              </div>
            </div>
            <!-- ./col -->
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->  

</section>