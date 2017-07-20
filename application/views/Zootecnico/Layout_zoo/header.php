<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Clinic Pet | Clinica Veterinaria</title>
  <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.ico">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">

  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fullcalendar/jquery.qtip.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar.print.css" media="print">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
  <script src="<?php echo base_url(); ?>assets/plugins/jquery1.11.2/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/jquery1.12.4/jquery.min.js" type="text/javascript"></script>
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
      <a href="<?php echo base_url(); ?>Zootecnico/Inicio" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>C</b>PET</span>
        <span class="logo-lg"><b>Clinic </b>Pet</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url(); ?>assets/image/fotos/zootecnico/<?php echo $this->session->userdata('s_fotografia'); ?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo strtoupper($this->session->userdata('s_nombre') . " " .  $this->session->userdata('s_ap_paterno')); ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url(); ?>assets/image/fotos/zootecnico/<?php echo $this->session->userdata('s_fotografia'); ?>" class="img-circle" alt="User Image">

                  <p>
                    <?php echo strtoupper($this->session->userdata('s_nombre') . " " .  $this->session->userdata('s_ap_paterno')); ?>
                    <!-- <small>Zootecnico del sistema</small> -->
                    <small>Clínica: <?php echo ucwords($this->session->userdata('s_nombreClinica')); ?></small>
                  </p>
                </li>
                <!-- Menu Body -->
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo base_url(); ?>Zootecnico/Perfil" class="btn btn-default btn-flat">
                      <i class="fa fa-fw fa-user"></i>Perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>Login/logout" class="btn btn-default btn-flat">
                        <i class="fa fa-fw fa-power-off"></i>Cerrar Sessión</a>
                      </div>
                    </li> 
                  </ul>
                </li>         
              </ul>
            </div>      
          </nav>
        </header>