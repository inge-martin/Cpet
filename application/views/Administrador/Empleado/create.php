<section class="content">
  <?php 
  if($error != ' '){
    echo "
    <div class='box box-danger'>
      <div class='box-header with-border'>
        <h3 class='box-title'>Error: $error</h3>
      </div> 
    </div>";
  }
  ?>
  <form class="form-horizontal" action="<?php echo base_url(); ?>Administrador/Empleados/nuevoEmpleado" method="POST" enctype="multipart/form-data" name="formulario">

    <!-- /.Datos Principales -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Datos Principales del Empleado</h3>
      </div>
      <div class="box-body">
        <div class="box-body">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Zootécnico asignado:</label>
            <div class="col-sm-4">
              <select class="col-sm-3 form-control select2" name="id_zootecnico" required>
                <option value="">Selecciona uno</option>
                <?php if (count($zootecnico)) {
                  foreach ($zootecnico as $list) {
                    echo "<option value='". $list['id_zootecnico'] . "'>" . ucwords($list['nombre'] . " " .$list['ap_paterno'] . " " .$list['ap_materno']) . "</option>";
                  }
                }
                ?>
              </select>                        
            </div>          
            <label for="input1" class="col-sm-2 control-label">Nombre:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre" name="txtNombre" required onkeypress="return soloLetras(event)" maxlength="15">
            </div>                    
          </div>           
          <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Apellido Paterno:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="paterno" placeholder="Ingresa tu Apellido Paterno" name="txtApPaterno" required onkeypress="return soloLetras(event)" maxlength="15">
            </div>           
            <label for="input1" class="col-sm-2 control-label">Apellido Materno:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="materno" placeholder="Apellido Materno" name="txtApMaterno" required onkeypress="return soloLetras(event)" maxlength="15">
            </div>            
          </div> 
        </div><!-- /.box-body -->
      </div>
    </div><!-- /.Datos Principales -->

    <!-- Datos Personales -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Datos Personales</h3>
      </div>
      <div class="box-body">
        <div class="box-body">
          <div class="form-group">        
            <label for="input1" class="col-sm-2 control-label">Fecha de Nacimiento:</label>
            <div class="col-sm-4">
              <?php
              $fecha_actual = date("Y-m-d");
              $fecha_min = date('Y-m-d', strtotime("$fecha_actual - 70 year"));
              $fecha_max = date('Y-m-d', strtotime("$fecha_actual - 18 year"));
              ?>
              <input type="date" class="form-control" id="input1" name="txtFechaNaci" required  
              min="<?php echo $fecha_min; ?>" max="<?php echo $fecha_max; ?>" >
            </div>            
            <label for="input1" class="col-sm-2 control-label">Sexo:</label>
            <div class="col-sm-4">
              <select class="col-sm-3 form-control" name="txtSexo" required>
                <option value="">Selecciona una opción</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
              </select>
            </div>
          </div>           
          <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Teléfono Local:</label>
            <div class="col-sm-4">
              <input type="tel" class="form-control" id="input1" placeholder="Ingresa tu Teléfono" name="txtTelCasa" required onkeypress="return soloNumeros(event)" maxlength="10">
            </div>
            <label for="input1" class="col-sm-2 control-label">Teléfono Celular:</label>
            <div class="col-sm-4">
              <input type="tel" class="form-control" id="input1" placeholder="Ingresa tu Teléfono (5512345678)" name="txtTelCel" onkeypress="return soloNumeros(event)" maxlength="10" data-inputmask='"mask": "(55) 57-31-69-78"' data-mask>
            </div>              
          </div>           
          <div class="form-group">
            <label for="exampleInputFile" class="col-sm-2 control-label">Fotografia:</label>
            <div class="col-sm-4">
              <input type="file" class="form-control" id="exampleInputFile" name="txtFotografia" required>
            </div>   
            <label for="input1" class="col-sm-2 control-label">Rol empleado:</label>
            <div class="col-sm-4">
              <select class="form-control" name="id_rol_empleado">
                <?php if (count($rol)) {
                  foreach ($rol as $list) {
                    echo "<option value='". $list['id_rol_empleado'] . "'>" . $list['nombre'] . "</option>";
                  }
                }
                ?>
              </select>          
            </div>                 
          </div>
        </div><!-- /.box-body -->
      </div>
    </div><!-- /.Datos Personales -->

    <!-- Dirección -->
    <div class="box  box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Dirección</h3>
      </div>
      <div class="box-body">
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label">Estado:</label>
              <div class="col-sm-8">
                <select id="cboEstados" name="txtEstado" class="col-sm-8 form-control select2" required>
                  <option value="">Selecciona uno</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label">Municipio:</label>
              <div class="col-sm-8">
                <select id="cboMunicipios" name="txtMunicipio" class="col-sm-8 form-control select2" required>
                  <option value="">Selecciona uno</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label">Localidad:</label>
              <div class="col-sm-8">
                <select id="cboLocalidades" name="txtLocalidad" class="col-sm-8 form-control select2" required>
                  <option value="">Selecciona uno</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label">Colonia:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="input1" placeholder="Ingresa tu Colonia" name="txtColonia" required onkeypress="return letraNumero(event)" maxlength="100">
              </div>                                    
            </div>
            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label">CP:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="input1" placeholder="Ingresa tu CP" name="txtCp" required onkeypress="return soloNumeros(event)" maxlength="5">
              </div>                                    
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label">Calle:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="input1" placeholder="Ingresa tu Calle" name="txtCalle" required onkeypress="return letraNumero(event)" maxlength="50">
              </div>
            </div>
            <div class="form-group">                             
              <label for="input1" class="col-sm-4 control-label">Número:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="input1" placeholder="Número" name="txtNumero" required onkeypress="return soloNumeros(event)" maxlength="5">
              </div>
            </div>
            <div class="form-group">                             
              <label for="input1" class="col-sm-4 control-label">Número interior:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="input1" placeholder="Número interior" name="txtNumero_int" required onkeypress="return letraNumero(event)" maxlength="5">
              </div>
            </div>            
            <div class="form-group">                         
              <label for="input1" class="col-sm-4 control-label">Manzana:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="input1" placeholder="Manzana opcional" name="txtManzana" maxlength="13" onkeypress="return letraNumero(event)">
              </div>                                                            
            </div>
            <div class="form-group">                               
              <label for="input1" class="col-sm-4 control-label">Lote:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="input1" placeholder="Lote opcional" name="txtLote" maxlength="10" onkeypress="return letraNumero(event)">
              </div>
            </div>
          </div>
        </div><!-- /.box-body -->
      </div>
    </div><!-- /.Dirección -->

    <!-- Datos de Acceso -->
    <div class="box  box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Datos De Acceso</h3>
      </div>
      <div class="box-body">
        <div class="box-body">
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">E-mail:</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputPassword3" placeholder="Ingresa tu E-mail" name="txtEmail" required>
            </div>
            <label for="inputEmail3" class="col-sm-2 control-label">Usuario:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" autocomplete="false" id="usuario" placeholder="Ingresa tu Usuario" name="txtUsuario" required maxlength="15" onkeypress="return letraNumero(event)">
              <div id="resultado1"></div>                
            </div>                                        
          </div>
          <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Pregunta de seguridad:</label>
            <div class="col-sm-4">
              <select class="col-sm-3 form-control" name="id_pregunta" required>
                <option value="">Selecciona una</option>
                <?php if (count($pregunta)) {
                  foreach ($pregunta as $list) {
                    echo "<option value='". $list['id_pregunta'] . "'>" . $list['pregunta'] . "</option>";
                  }
                }
                ?>
              </select>
            </div>
            <label for="inputEmail3" class="col-sm-2 control-label">Respuesta:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="respuesta" placeholder="Ingresa tu Respuesta" name="txtRespuesta" required maxlength="15" onkeypress="return letraNumero(event)">
            </div>             
          </div>                        
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Contraseña:</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Ingresa tu Contraseña" name="txtContrasena" required minlength="5" maxlength="15">
            </div>   
            <div id="Info"></div>
            <label for="inputPassword3" class="col-sm-2 control-label">Repite Contraseña:</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Ingresa de nuevo tu Contraseña" name="txtContrasena1" required minlength="5" maxlength="15">
            </div>               
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right" value="Guardar" onClick="return comprobarClave()">Guardar</button>
        </div>
        <!-- /.box-footer -->
      </div>
    </div><!-- /.Datos de Acceso -->

  </form>
</section>

<script type="text/javascript" src="<?php echo base_url(); ?>js/funciones.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/comprobarUsuario.js"></script>
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