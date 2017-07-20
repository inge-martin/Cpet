<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div align="center">
        <a href="<?php echo base_url(); ?>Cliente/Inicio">
          <img src="<?php echo base_url(); ?>assets/dist/img/logo-clinic-pet.png" width="170" height="170">
        </a>
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <center><li ><span style="color: blue; font-size: 18px;">«Menú Cliente»</span></li></center>

      <!-- Mi Menu -->
      <?php if($this->uri->segment(2) == 'Zootecnico' || $this->uri->segment(2) == 'Mascotas' || $this->uri->segment(2) == 'Valoracion' ) { ?>
      <li class="treeview active">
        <?php }else{ ?>
        <li class="treeview">
          <?php } ?>
          <a href="#">
            <i class="fa fa-user-md"></i> <span>Mi Menú</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url(); ?>Cliente/Zootecnico">
                <i class="fa fa-fw fa-user"></i><span> Ver mi Zootécnico </span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Cliente/Mascotas">
                <i class="fa fa-fw fa-paw"></i><span> Ver mi Mascota </span>
              </a>
            </li> 

            <li>
              <a href="<?php echo base_url(); ?>Cliente/Valoracion">
                <i class="fa fa-fw fa-star-half-full"></i><span> Valoración </span>
              </a>
            </li>               
          </ul>
        </li>

        <!-- Menu Atención -->
        <?php if($this->uri->segment(2) == 'Citas' || $this->uri->segment(2) == 'Consulta' || $this->uri->segment(2) == 'Carnet') { ?>
        <li class="treeview active">
          <?php }else{ ?>
          <li class="treeview">
            <?php } ?>
            <a href="#">
              <i class="fa fa-black-tie"></i> <span>Menú Atención</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="<?php echo base_url(); ?>Cliente/Citas">
                  <i class="fa fa-fw fa-calendar-plus-o"></i><span> Citas </span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>Cliente/Consulta">
                  <i class="fa fa-fw fa-list-ul"></i><span> Consultas </span>
                </a>
              </li>      
              <li>
                <a href="<?php echo base_url(); ?>Cliente/Carnet">
                  <i class="fa fa-fw fa-list-alt"></i><span> Carnet de vacunación </span>
                </a>
              </li>                  
            </ul>
          </li>

          <!-- Menu Informativo -->
          <?php if($this->uri->segment(2) == 'Clinicas' || $this->uri->segment(2) == 'Servicios' || $this->uri->segment(2) == 'Tratamientos' || $this->uri->segment(2) == 'Adopciones' ) { ?>
          <li class="treeview active">
            <?php }else{ ?>
            <li class="treeview">
              <?php } ?>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Menú Informativo</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?php echo base_url(); ?>Cliente/Clinicas">
                    <i class="fa fa-fw fa-hospital-o"></i><span> Ver Clinicas </span>
                  </a>
                </li>             
                <li>
                  <a href="<?php echo base_url(); ?>Cliente/Servicios">
                    <i class="fa fa-fw fa-medkit"></i><span> Ver Servicios</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url(); ?>Cliente/Tratamientos">
                    <i class="fa fa-fw fa-heartbeat"></i><span> Ver Tratamientos </span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url(); ?>Cliente/Adopciones">
                    <i class="fa fa-fw fa-heart"></i><span> Ver Adopciones </span>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Menu personal -->
            <?php if($this->uri->segment(3) == 'editPerfil' || $this->uri->segment(3) == 'editDir' || $this->uri->segment(3) == 'editPass' ) { ?>
            <li class="treeview active">
              <?php }else{ ?>
              <li class="treeview">
                <?php } ?>
                <a href="#">
                  <i class="glyphicon glyphicon-pencil"></i> Editar mis Datos 
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="<?php echo base_url(); ?>Cliente/Perfil/editPerfil">
                      <i class="fa fa-fw fa-user"></i><span> Editar mi Perfil</span>
                    </a>
                  </li>                              
                  <li>
                    <a href="<?php echo base_url(); ?>Cliente/Perfil/editDir">
                      <i class="fa fa-fw fa-map"></i><span> Editar mi Dirección</span>
                    </a>
                  </li> 
                  <li>
                    <a href="<?php echo base_url(); ?>Cliente/Perfil/editPass">
                      <i class="fa fa-fw fa-key"></i><span> Editar mi Contraseña</span>
                    </a>
                  </li>
                </ul>
              </li> 
              <li>
                <a href="<?php echo base_url(); ?>Cliente/Perfil">
                  <i class="fa fa-fw fa-user"></i><span> Ver mi perfil </span>
                </a>
              </li>              
            </ul>
          </section>
          <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">