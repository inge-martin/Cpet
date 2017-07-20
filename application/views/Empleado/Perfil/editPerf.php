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
  <form class="form-horizontal" action="<?php echo base_url(); ?>Empleado/Perfil/editar_emp" method="POST">

    <!-- /.Datos Principales -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Mis Datos Principales</h3>
      </div>
      <div class="box-body">
        <div class="box-body">
          <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Sexo:</label>
            <div class="col-sm-4">
              <select class="col-sm-3 form-control" name="txtSexo" required>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
              </select>
            </div>          
            <label for="input1" class="col-sm-2 control-label">Nombre:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre" name="txtNombre" required onkeypress="return soloLetras(event)" maxlength="15" value="<?php echo $empleado['nombre']; ?>">
            </div>          
          </div>
          <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Apellido Paterno:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="paterno" placeholder="Ingresa tu Apellido Paterno" name="txtApPaterno" required onkeypress="return soloLetras(event)" maxlength="15" value="<?php echo $empleado['ap_paterno']; ?>">
            </div>           
            <label for="input1" class="col-sm-2 control-label">Apellido Materno:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="materno" placeholder="Apellido Materno" name="txtApMaterno" required onkeypress="return soloLetras(event)" maxlength="15" value="<?php echo $empleado['ap_materno']; ?>">
            </div>
          </div>            
          <div class="form-group">        
            <label for="input1" class="col-sm-2 control-label">Fecha de Nacimiento:</label>
            <div class="col-sm-4">
              <input type="date" class="form-control" name="txtFechaNaci" required value="<?php echo $empleado['fecha_nacimiento']; ?>">
            </div>             
            <label for="input1" class="col-sm-2 control-label">Email:</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="nombre" placeholder="Ingresa tu nombre" name="txtEmail" required maxlength="50" value="<?php echo $empleado['email']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Teléfono Local:</label>
            <div class="col-sm-4">
              <input type="tel" class="form-control" id="input1" placeholder="Ingresa tu Teléfono" name="txtTelCasa" required onkeypress="return soloNumeros(event)" maxlength="10" value="<?php echo $empleado['telefono_local']; ?>">
            </div>
            <label for="input1" class="col-sm-2 control-label">Teléfono Celular:</label>
            <div class="col-sm-4">
              <input type="tel" class="form-control" id="input1" placeholder="Ingresa tu Teléfono (5512345678)" name="txtTelCel" required onkeypress="return soloNumeros(event)" maxlength="10" value="<?php echo $empleado['telefono_celular']; ?>">
            </div>              
          </div>           
        </div><!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right">Guardar</button>
        </div>
      </div>
    </div>
  </form>
</section>

<script type="text/javascript" src="<?php echo base_url(); ?>js/funciones.js"></script>