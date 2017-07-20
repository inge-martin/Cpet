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
  <form class="form-horizontal" action="<?php echo base_url(); ?>Administrador/Clinicas/create" method="POST" enctype="multipart/form-data" name="formulario">

    <!-- Datos Principales -->
    <div class="box box-primary">

      <div class="box-header with-border">
        <h3 class="box-title">Datos principales de la clinica</h3>
      </div>

      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nombre:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="nombre" required="true" placeHolder="Ingresa Nombre" placeHolder="Escribe el nombre" onkeypress="return soloLetras(event)" maxlength="50">
          </div>
          <label for="inputEmail3" class="col-sm-2 control-label">E-mail:</label>
          <div class="col-sm-4">
            <input type="email" class="form-control" name="email" required="true" placeHolder="Ingresa E-mail">
          </div>          
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Telefono 1:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="telefono1" required="true"  placeHolder="Ingresa Telefono" onkeypress="return soloNumeros(event)" maxlength="10">
          </div>        
          <label for="inputEmail3" class="col-sm-2 control-label">Telefono 2:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="telefono2" placeHolder="Ingresa Telefono Secundario" onkeypress="return soloNumeros(event)" maxlength="10">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Días:</label>
          <div class="col-sm-4">
            <select class="col-sm-3 form-control" name="dias" required>
              <option value="(Lunes a Viernes) - (Sábado y Domingo)">(Lunes a Viernes) - (Sábado y Domingo)</option>
              <option value="(Lunes a Viernes) - (Sábado)">(Lunes a Viernes) - (Sábado)</option>
              <option value="(Lunes a Viernes)">(Lunes a Viernes)</option>
            </select>
          </div>
          <label for="inputEmail3" class="col-sm-2 control-label">Horario:</label>
          <div class="col-sm-4">
          <select class="col-sm-3 form-control" name="horario" required>
              <option value="(09:00 a 18:00) - (09:00 - 13:00)">(09:00 a 18:00) - (09:00 - 13:00)</option>
              <option value="(09:00 a 18:00) - (10:00 - 13:00)">(09:00 a 18:00) - (10:00 - 13:00)</option>
              <option value="(09:00 a 18:00)">(09:00 a 18:00)</option>
              <option value="(10:00 a 19:00)">(10:00 a 19:00)</option>
            </select>
          </div>
        </div>           
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Sitio web:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="sitioweb" placeHolder="Ingresa Sitio Web">
          </div>
          <label for="exampleInputFile" class="col-sm-2 control-label">Fotografia:</label>
          <div class="col-sm-4">
            <input type="file" class="form-control" id="exampleInputFile" name="txtFotografia" required>
          </div>
        </div>
      </div>
    </div><!-- Datos Principales -->

    <!-- Dirección -->
    <div class="box box-primary">

      <div class="box-header with-border">
        <h3 class="box-title">Dirección</h3>
      </div>

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
            <label for="input1" class="col-sm-4 control-label">C.P.:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="input1" placeholder="Ingresa tu CP" name="txtCp" required onkeypress="return soloNumeros(event)" maxlength="6">
            </div>                                    
          </div>
          <div class="form-group">
            <label for="input1" class="col-sm-4 control-label">Colonia:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="input1" placeholder="Ingresa tu Colonia" name="txtColonia" required onkeypress="return letraNumero(event)" maxlength="50">
            </div>                                    
          </div>          
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="input1" class="col-sm-4 control-label">Calle:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="input1" placeholder="Ingresa tu Calle" name="txtCalle" required onkeypress="return letraNumero(event)" maxlength="20">
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
              <input type="text" class="form-control" id="input1" placeholder="Número interior" name="txtNumero_int" onkeypress="return letraNumero(event)" maxlength="5">
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

        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right" value="Guardar" onClick="return comprobarClave()">Guardar</button>
        </div>

      </div>
    </div><!-- /.Dirección -->   

  </form>
</section>
<script type="text/javascript" src="<?php echo base_url(); ?>js/funciones.js"></script>
<script>
  var baseurl = "<?php echo base_url(); ?>";
</script>