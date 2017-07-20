<script type="text/javascript" src="<?php echo base_url(); ?>js/funciones.js"></script>
<section class="content">
  <?php 
  if(!empty(validation_errors())){
    ?>
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Error: <?php echo validation_errors(); ?></h3>
      </div> 
    </div> 
    <?php }?>
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <form class="form-horizontal" action="<?php echo base_url(); ?>Administrador/Clinicas/editar_clinica" method="POST">
            <div class="box-header with-border">
              <h3 class="box-title">Edición de clínica</h3>
            </div>
            <div class="box-body">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nombre:</label>
                    <div class="col-sm-8">
                      <input type="hidden" class="form-control" name="id_clinica" value="<?php echo $clinica['id_clinica'] ?>">
                      <input type="text" class="form-control" name="nombre" required="true" onkeypress="return soloLetras(event)" maxlength="30" value="<?php echo $clinica['nombre'] ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Telefono 1:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="telefono1" required="true" onkeypress="return soloNumeros(event)"  value="<?php echo $clinica['telefono1'] ?>" maxlength="10">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Telefono 2:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="telefono2" required="true" onkeypress="return soloNumeros(event)"  value="<?php echo $clinica['telefono2'] ?>" maxlength="10">
                    </div>
                  </div>   
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">E-mail:</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" name="email" required="true" placeHolder="Ingresa E-mail" value="<?php echo $clinica['email'] ?>">
                    </div>
                  </div>   
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Sitio web:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="sitioweb" required="true" placeHolder="Ingresa Sitio Web" value="<?php echo $clinica['sitioweb'] ?>">
                    </div>
                  </div>   
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Días:</label>
                    <div class="col-sm-8">
                      <select class="col-sm-3 form-control" name="dias" required>
                        <option value="(Lunes a Viernes) - (Sábado y Domingo)">(Lunes a Viernes) - (Sábado y Domingo)</option>
                        <option value="(Lunes a Viernes) - (Sábado)">(Lunes a Viernes) - (Sábado)</option>
                        <option value="(Lunes a Viernes)">(Lunes a Viernes)</option>
                      </select>
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Horario:</label>
                    <div class="col-sm-8">
                      <select class="col-sm-3 form-control" name="horario" required>
                        <option value="(09:00 a 18:00) - (09:00 - 13:00)">(09:00 a 18:00) - (09:00 - 13:00)</option>
                        <option value="(09:00 a 18:00) - (10:00 - 13:00)">(09:00 a 18:00) - (10:00 - 13:00)</option>
                        <option value="(09:00 a 18:00)">(09:00 a 18:00)</option>
                        <option value="(10:00 a 19:00)">(10:00 a 19:00)</option>
                      </select>
                    </div>
                  </div> 
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">C.P.:</label>
                    <div class="col-sm-8">
                      <input type="hidden" class="form-control" name="id_domicilio" value="<?php echo $clinica['id_domicilio'] ?>">
                      <input type="text" class="form-control" name="cp" required="true" onkeypress="return soloNumeros(event)" maxlength="6" value="<?php echo $clinica['cp'] ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Colonia:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="colonia" required="true" onkeypress="return letraNumero(event)"  value="<?php echo $clinica['colonia'] ?>" maxlength="50">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Calle:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="calle" required="true" onkeypress="return letraNumero(event)"  value="<?php echo $clinica['calle'] ?>" maxlength="20">
                    </div>
                  </div>   
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Número:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="numero" required="true" placeHolder="Ingresa E-mail" value="<?php echo $clinica['numero'] ?>" onkeypress="return soloNumeros(event)" maxlength="5">
                    </div>
                  </div>   
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Número interior:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="numero_int" value="<?php echo $clinica['numero_int'] ?>" onkeypress="return letraNumero(event)" maxlength="5">
                    </div>
                  </div>   
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Manzana:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="manzana" placeHolder="Manzana opcional" value="<?php echo $clinica['manzana'] ?>" maxlength="13" onkeypress="return letraNumero(event)">
                    </div>
                  </div>  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Lote:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="lote" placeHolder="Lote opcional" value="<?php echo $clinica['lote'] ?>" maxlength="10" onkeypress="return letraNumero(event)">
                    </div>
                  </div>  
                </div>

              </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">Guardar</button>
            </div>
          </form>
        </div>
      </div>     
    </div>
  </section>