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
        <p class="login-box-msg"><b>Escribe tu nueva contraseña</b></p>

        <form action="<?php echo base_url(); ?>Recupera/cambiar" method="post" name="formulario">
          <div class="form-group has-feedback">
          <input type="hidden" name="id_sesiones" value="<?php echo $id_sesiones; ?>">
            <input type="password" class="form-control" name="txtContrasena" placeholder="Ingrese su Contrasena" required="required" minlength="5" maxlength="15" autofocus>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div> 
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="txtContrasena1" placeholder="Repite tu Contrasena" required="required" minlength="5" maxlength="15">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>                     
          <div class="row">
            <div class="social-auth-links text-center">
              <button type="submit" class="btn btn-primary btn-block btn-flat pull-right" onClick="return comprobarClave()">Reestablecer</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <script>
      var baseurl = "<?php echo base_url(); ?>";

  //Comprobar clave
  function comprobarClave(){ 
    clave1 = document.formulario.txtContrasena.value 
    clave2 = document.formulario.txtContrasena1.value 

    if (clave1 != clave2) {
      alert("Las contraseñas deben de coincidir");
      return false;
    } else {
      //alert("Todo esta correcto");
      return true; 
    }

    var espacios = false;
    var cont = 0;

    while (!espacios && (cont < clave1.length)) {
      if (clave1.charAt(cont) == " ")
        espacios = true;
      cont++;
    }

    if (espacios) {
      alert ("La contraseña no puede contener espacios en blanco");
      return false;
    }
  }

  </script>
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
