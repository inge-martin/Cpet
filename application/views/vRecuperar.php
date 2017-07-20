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
  <div class="">
    <div class="lockscreen-wrapper">
      <div class="lockscreen-logo">
        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/dist/img/healthy-logo.png" alt="HEALTHY PUPPIES"></a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg"><b>Recuperar mi contraseña</b></p>

        <form action="<?php echo base_url(); ?>Recupera/validar" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="usuario" class="form-control" placeholder="Escribe tu usuario" required autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <select class="form-control" name="id_pregunta" required>
              <option value="">Pregunta de seguridad</option>
              <?php if (count($pregunta)) {
                foreach ($pregunta as $list) {
                  echo "<option value='". $list['id_pregunta'] . "'>" . $list['pregunta'] . "</option>";
                }
              }
              ?>
            </select>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="respuesta" class="form-control" placeholder="Escribe tu Respuesta" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="social-auth-links text-center">
              <button type="submit" class="btn btn-primary btn-block btn-flat pull-right">Enviar</button>
            </div>
          </div>
          <div class="pull-right">
            <!-- <button type="submit" class="btn btn-primary btn-block btn-flat pull-right">Enviar</button> -->
            <a href="<?php echo base_url(); ?>" class="text-center"> Ó Inicia sesión</a>
          </div>
        </form>
      </div>
      <div class="help-block text-center">
        <center><h4><span class="label label-danger"><?php echo $mensaje; ?></span></h4></center>
      </div>
    </div>

    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
  </html>
