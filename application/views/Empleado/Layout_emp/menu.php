<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div align="center">
        <a href="<?php echo base_url(); ?>Empleado/Inicio">
          <img src="<?php echo base_url(); ?>assets/dist/img/logo-clinic-pet.png" width="170" height="170">
        </a>
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <center><li ><span style="color: blue; font-size: 18px;">«Menú Empleado»</span></li></center>

      <!-- Menu Clientes -->
      <?php if($this->uri->segment(2) == 'Clientes' || $this->uri->segment(2) == 'Mascotas' || $this->uri->segment(2) == 'Extravio' || $this->uri->segment(2) == 'Adopciones' ) { ?>
      <li class="treeview active">
        <?php }else{ ?>
        <li class="treeview">
          <?php } ?>
          <a href="#">
            <i class="fa fa-users"></i> <span>Menú Clientes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url(); ?>Empleado/Clientes">
                <i class="fa fa-fw fa-users"></i><span> Clientes </span>
              </a>
            </li>       
            <li>
              <a href="<?php echo base_url(); ?>Empleado/Mascotas">
                <i class="fa fa-fw fa-paw"></i><span> Mascotas </span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Empleado/Extravio">
                <i class="fa fa-fw fa-question"></i><span> Extraviós </span>
              </a>
            </li>           
            <li>
              <a href="<?php echo base_url(); ?>Empleado/Adopciones">
                <i class="fa fa-fw fa-heart"></i><span> Adopciones</span>
              </a>
            </li>                   
          </ul>
        </li>

        <!-- Menu Atender -->
        <?php if($this->uri->segment(2) == 'Citas' || $this->uri->segment(2) == 'Consulta' || $this->uri->segment(2) == 'Vacunacion' || $this->uri->segment(2) == 'Expediente' ) { ?>
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
                <a href="<?php echo base_url(); ?>Empleado/Citas">
                  <i class="fa fa-fw fa-calendar-plus-o"></i><span> Citas </span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>Empleado/Consulta">
                  <i class="fa fa-fw fa-list-ul"></i><span> Consultas </span>
                </a>
              </li>      
              <li>
                <a href="<?php echo base_url(); ?>Empleado/Vacunacion">
                  <i class="fa fa-fw fa-list-alt"></i><span> Carnet de vacunación </span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>Empleado/Expediente">
                  <i class="fa fa-fw fa-calendar-plus-o"></i><span> Expediente </span>
                </a>
              </li>                          
            </ul>
          </li>

          <!-- Menu Informativo -->
          <?php if($this->uri->segment(2) == 'Clinicas' || $this->uri->segment(2) == 'Servicios' || $this->uri->segment(2) == 'Tratamientos' ) { ?>
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
                  <a href="<?php echo base_url(); ?>Empleado/Clinicas">
                    <i class="fa fa-fw fa-hospital-o"></i><span> Ver Clinicas </span>
                  </a>
                </li>             
                <li>
                  <a href="<?php echo base_url(); ?>Empleado/Servicios">
                    <i class="fa fa-fw fa-medkit"></i><span> Ver Servicios</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url(); ?>Empleado/Tratamientos">
                    <i class="fa fa-fw fa-heartbeat"></i><span> Ver Tratamientos </span>
                  </a>
                </li>                    
              </ul>
            </li>

            <!-- Menu 6 -->
            <?php if($this->uri->segment(3) == 'editPerfil' || $this->uri->segment(3) == 'editDir' || $this->uri->segment(3) == 'editPass' ) { ?>
            <li class="treeview active">
              <?php }else{ ?>
              <li class="treeview">
                <?php } ?>
                <a href="#">
                  <i class="fa fa-pencil-square-o"></i> <span>Editar mis Datos </span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="<?php echo base_url(); ?>Empleado/Perfil/editPerfil">
                      <i class="fa fa-fw fa-user"></i><span> Editar mi Perfil</span>
                    </a>
                  </li>                              
                  <li>
                    <a href="<?php echo base_url(); ?>Empleado/Perfil/editDir">
                      <i class="fa fa-fw fa-map"></i><span> Editar mi Dirección</span>
                    </a>
                  </li> 
                  <li>
                    <a href="<?php echo base_url(); ?>Empleado/Perfil/editPass">
                      <i class="fa fa-fw fa-key"></i><span> Cambiar mi Contraseña</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>Empleado/Perfil">
                  <i class="fa fa-fw fa-user"></i><span> Ver mi perfil </span>
                </a>
              </li>              
            </ul>
          </section>
          <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">