<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div align="center">
        <a href="<?php echo base_url(); ?>Administrador/Inicio">
          <img src="<?php echo base_url(); ?>assets/dist/img/logo-clinic-pet.png" width="170" height="170">
        </a>
      </div>
    </div>
    <ul class="sidebar-menu">
      <center><li ><span style="color: blue; font-size: 18px;">«Menú Administrador»</span></li></center>
      <!-- Menu 1 -->
      <?php if($this->uri->segment(2) == 'Administradores' || $this->uri->segment(2) == 'Zootecnicos' || $this->uri->segment(2) == 'Empleados' || $this->uri->segment(2) == 'Clientes' || $this->uri->segment(2) == 'Mascotas' ) {?>
      <li class="treeview active">
        <?php }else{ ?>
        <li class="treeview">
          <?php } ?>

          <a href="#">
            <i class="fa fa-users"></i> <span>Menú Personal</span>
            <span class="pull-right-container">
              <i class="fa fa-fw fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url(); ?>Administrador/Administradores">
                <i class="fa fa-fw fa-users"></i> Administradores
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Administrador/Zootecnicos">
                <i class="fa fa-fw fa-users"></i> Zootecnicos
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Administrador/Empleados">
                <i class="fa fa-fw fa-users"></i> Empleados
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Administrador/Clientes">
                <i class="fa fa-fw fa-users"></i> Clientes
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Administrador/Mascotas">
                <i class="fa fa-fw fa-paw"></i> Mascotas
              </a>
            </li>                    
          </ul>
        </li> 

        <!-- Menu 2 -->
        <?php if($this->uri->segment(2) == 'Clinicas' || $this->uri->segment(2) == 'Servicios' || $this->uri->segment(2) == 'Tratamiento' || $this->uri->segment(2) == 'Vacunas' ) { ?>
        <li class="treeview active">
          <?php }else{ ?>
          <li class="treeview">
            <?php } ?>
            <a href="#">
              <i class="fa fa-exchange"></i> <span>Menú Servicios</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="<?php echo base_url(); ?>Administrador/Clinicas">
                  <i class="fa fa-fw fa-hospital-o"></i> Clinicas
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>Administrador/Servicios">
                  <i class="fa fa-fw fa-medkit"></i> Servicios
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>Administrador/Tratamiento">
                  <i class="fa fa-fw fa-heartbeat"></i> Tratamientos
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>Administrador/Vacunas">
                  <i class="fa fa-fw fa-location-arrow"></i> Vacunas
                </a>
              </li>                   
            </ul>
          </li>
          <!-- Menu  3-->
          <?php if($this->uri->segment(2) == 'Citas' || $this->uri->segment(2) == 'Consulta' || $this->uri->segment(2) == 'Carnet' || $this->uri->segment(2) == 'Expediente' ) { ?>
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
                  <a href="<?php echo base_url(); ?>Administrador/Citas">
                    <i class="fa fa-fw fa-calendar-plus-o"></i><span> Citas </span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url(); ?>Administrador/Consulta">
                    <i class="fa fa-fw fa-list-ul"></i><span> Consultas </span>
                  </a>
                </li>      
                <li>
                  <a href="<?php echo base_url(); ?>Administrador/Carnet">
                    <i class="fa fa-fw fa-list-alt"></i><span> Carnet de vacunación </span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url(); ?>Administrador/Expediente">
                    <i class="fa fa-fw fa-calendar-plus-o"></i><span> Expediente </span>
                  </a>
                </li>                          
              </ul>
            </li>
            <!-- Menu 4 -->
            <?php if($this->uri->segment(2) == 'Habitad' || $this->uri->segment(2) == 'Especie' || $this->uri->segment(2) == 'Raza' ) { ?>
            <li class="treeview active">
              <?php }else{ ?>
              <li class="treeview">
                <?php } ?>
                <a href="#">
                  <i class="fa fa-paw"></i> <span>Menú Mascotas</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="<?php echo base_url(); ?>Administrador/Habitad">
                      <i class="fa fa-fw fa-globe"></i> Habitat
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>Administrador/Especie">
                      <i class="fa fa-fw fa-globe"></i> Especie
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>Administrador/Raza">
                      <i class="fa fa-fw fa-globe"></i> Raza
                    </a>
                  </li>                   
                </ul>
              </li> 
              <!-- Menu 5 -->
              <?php if($this->uri->segment(2) == 'Adopcion' || $this->uri->segment(2) == 'Extravio' || $this->uri->segment(2) == 'Valoracion' ) { ?>
              <li class="treeview active">
                <?php }else{ ?>
                <li class="treeview">
                  <?php } ?>
                  <a href="#">
                    <i class="fa fa-info-circle"></i> <span>Menú Ayudas</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo base_url(); ?>Administrador/Adopcion">
                        <i class="fa fa-fw fa-heart"></i> Adopciones
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>Administrador/Extravio">
                        <i class="fa fa-fw fa-question"></i> Extravios
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>Administrador/Valoracion">
                        <i class="fa fa-fw fa-star"></i> Valoraciones
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
                        <a href="<?php echo base_url(); ?>Administrador/Perfil/editPerfil">
                          <i class="fa fa-fw fa-user"></i><span> Editar mi Perfil</span>
                        </a>
                      </li>                              
                      <li>
                        <a href="<?php echo base_url(); ?>Administrador/Perfil/editDir">
                          <i class="fa fa-fw fa-map"></i><span> Editar mi Dirección</span>
                        </a>
                      </li> 
                      <li>
                        <a href="<?php echo base_url(); ?>Administrador/Perfil/editPass">
                          <i class="fa fa-fw fa-key"></i><span> Cambiar mi Contraseña</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>Administrador/Perfil">
                      <i class="fa fa-fw fa-user"></i><span> Ver mi perfil </span>
                    </a>
                  </li>                       
                </ul>
              </section>
            </aside>

            <div class="content-wrapper">