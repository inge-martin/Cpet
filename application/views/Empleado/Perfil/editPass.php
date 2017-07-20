<section class="content-header">
    <h1>
        Mi Perfil
        <small>Edición</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Empleado/Inicio'); ?>"><i class="fa fa-home"></i> Empleado  </a></li>
        <li><a href="#"> Perfil</a></li>
        <li class="active">Edición</li>
    </ol>
</section>
<section class="content">

  <form class="form-horizontal" action="<?php echo base_url(); ?>Empleado/Perfil/editar_pass" name="formulario" method="POST">
    <!-- /.Datos Principales -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Mis Datos Principales</h3>
      </div>
      <div class="box-body">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box-body">       
            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label">Contraseña actual:</label>
              <div class="col-sm-6">
              <input type="text" class="form-control" name="old_contrasena" required onkeypress="return letraNumero(event)" minlength="5" maxlength="15" autofocus>
              </div>     
            </div>
            <div class="form-group">                          
              <label for="input1" class="col-sm-4 control-label">Contraseña nueva:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="txtContrasena" name="contrasena" required onkeypress="return letraNumero(event)" minlength="5" maxlength="15">
              </div>
            </div>            
            <div class="form-group">                    
              <label for="input1" class="col-sm-4 control-label">Repite Contraseña:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="txtContrasena1" required onkeypress="return letraNumero(event)" minlength="5" maxlength="15">
              </div>
            </div>         
            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right" onClick="return comprobarClave()">Cambiar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</form>
<div class="help-block text-center">
  <center><h4><span class="label label-danger"><?php echo $mensaje; ?></span></h4></center>
</div>
</section>

<script type="text/javascript" src="<?php echo base_url(); ?>js/funciones.js"></script>
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