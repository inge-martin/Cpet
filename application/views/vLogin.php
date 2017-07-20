<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Clinic Pet | Clinica Veterinaria</title>
  <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="lockscreen">
  <div class="container">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
      <div class="lockscreen-logo">
        <a href="http://healthy-puppies.com/"><img src="<?php echo base_url(); ?>assets/dist/img/healthy-logo.png" alt="HEALTHY PUPPIES"></a>
      </div>

      <!-- User name -->
      <div class="lockscreen-name">Logueate para iniciar sesión</div>
      <!-- lockscreen image -->
      <!-- /.lockscreen-image -->

      <form class="lockscreen-credentials"  action="<?php echo base_url(); ?>Login/validar" method="post" >
        <div class="lockscreen-item">

          <div class="form-group">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            <input type="text" class="form-control" name="txtUsuario" placeholder="Ingrese su Usuario" required="required" autofocus>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="txtContrasena" placeholder="Ingrese su Contrasena" required="required">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>      
          <div class="lockscreen-name">
            <div>
              <button type="submit" class="btn btn-info pull-right" style="background:#00a5ac;">
                Iniciar Sesión
              </button>
              <a href="<?php echo base_url('Recupera'); ?>" type="submit" class="btn btn-info pull-left" style="background:#d94560;">Olvide mi contraseña</a>
            </div>
            <br>
          </div>
          <div class="lockscreen-name">
          </div>
        </div>
      </form>
      <!-- /.lockscreen-item -->

      <div class="help-block text-center">
        <center><h4><span class="label label-danger"><?php echo $mensaje; ?></span></h4></center>
      </div>
    </div>
  </div>
  <br>
  <br>

  <footer>
    <center><strong>Copyright &copy; México 2016-2017 <a href="http://digitaljaguar.com.mx/" target="_blank">DIGITAL JAGUAR</a></strong> Todos los derechos reservados.</center>
  </footer>
  <!-- /.center -->

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
