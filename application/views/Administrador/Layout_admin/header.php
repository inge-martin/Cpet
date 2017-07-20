<!DOCTYPE html>
<html>
<head>
  <title>Clinic Pet | Clinica Veterinaria</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.ico">

  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
  <!-- AdminLTE Skins. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
  <script src="<?php echo base_url(); ?>assets/plugins/jquery-3.2.1.min.js" type="text/javascript"></script> 


  <!-- <link href="<?php echo base_url(); ?>assets/plugins/jquery-3.2.1.min.js"> -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jquery.min.js"> -->
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

</head>
<?php 
$sesionU = $this->session->userdata('s_id_sesiones');
if(empty($sesionU)){
  redirect(base_url()."Login");
}
?>
<!-- fixed -->
<body class="hold-transition skin-green-light layout-fixed sidebar-mini">

  <!-- <body class="hold-transition skin-green-light layout-boxed sidebar-mini"> -->
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo base_url(); ?>Administrador/Inicio" class="logo">
        <span class="logo-mini"><b>C</b>PET</span>
        <span class="logo-lg"><b>Clinic </b>Pet</span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url(); ?>assets/image/fotos/administrador/<?php echo $this->session->userdata('s_fotografia'); ?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo strtoupper($this->session->userdata('s_nombre') . " " .  $this->session->userdata('s_ap_paterno')); ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?php echo base_url(); ?>assets/image/fotos/administrador/<?php echo $this->session->userdata('s_fotografia'); ?>" class="img-circle" alt="User Image">

                  <p>
                    <?php echo strtoupper($this->session->userdata('s_nombre') . " " .  $this->session->userdata('s_ap_paterno')); ?>
                    <small>Administrador del sistema</small>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo base_url(); ?>Administrador/Perfil" class="btn btn-default btn-flat">
                      <i class="fa fa-fw fa-user"></i>Perfil
                    </a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url(); ?>Login/logout" class="btn btn-default btn-flat">
                      <i class="fa fa-fw fa-power-off"></i>Cerrar Sessión
                    </a>
                  </div>
                </li> 
              </ul>
            </li>         
          </ul>
        </div>      
      </nav>
    </header>