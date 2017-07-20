<script type="text/javascript" src="<?php echo base_url(); ?>js/funciones.js"></script>
<script>
	var baseurl = "<?php echo base_url(); ?>";
</script>
<section class="content-header">
    <h1>
        Mi Perfil
        <small>Edición</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Administrador/Inicio'); ?>"><i class="fa fa-home"></i> Administrador  </a></li>
        <li><a href="#"> Perfil</a></li>
        <li class="active">Edición</li>
    </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" action="<?php echo base_url(); ?>Administrador/Perfil/editar_direccion" method="POST">
				<!-- Dirección -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Editar dirección</h3>
					</div>
					<div class="box-body">
						<div class="box-body">
							<div class="col-md-6">
								<div class="form-group">
									<label for="input1" class="col-sm-4 control-label">Estado:</label>
									<div class="col-sm-8">
										<select id="cboEstados" name="estado" class="col-sm-8 form-control select2" required>
											<option value="">Selecciona uno</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="input1" class="col-sm-4 control-label">Municipio:</label>
									<div class="col-sm-8">
										<select id="cboMunicipios" name="municipio" class="col-sm-8 form-control select2" required>
											<option value="">Selecciona uno</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="input1" class="col-sm-4 control-label">Localidad:</label>
									<div class="col-sm-8">
										<select id="cboLocalidades" name="localidad" class="col-sm-8 form-control select2" required>
											<option value="">Selecciona uno</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="input1" class="col-sm-4 control-label">CP:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="cp" value="<?php echo $domicilio['cp']; ?>" required  required onkeypress="return soloNumeros(event)" maxlength="6">
									</div>                                    
								</div>
								<div class="form-group">
									<label for="input1" class="col-sm-4 control-label">Colonia:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="colonia" value="<?php echo $domicilio['colonia']; ?>" required  required onkeypress="return letraNumero(event)" maxlength="50">
									</div>                                    
								</div>								
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="input1" class="col-sm-4 control-label">Calle:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="calle" value="<?php echo $domicilio['calle']; ?>" required required onkeypress="return letraNumero(event)" maxlength="20">
									</div>
								</div>
								<div class="form-group">                             
									<label for="input1" class="col-sm-4 control-label">Número:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="numero" value="<?php echo $domicilio['numero']; ?>" required onkeypress="return soloNumeros(event)" maxlength="5">
									</div>
								</div>
								<div class="form-group">                             
									<label for="input1" class="col-sm-4 control-label">Número interior:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="numero_int" value="<?php echo $domicilio['numero_int']; ?>" required onkeypress="return soloNumeros(event)" maxlength="5">
									</div>
								</div>								
								<div class="form-group">                         
									<label for="input1" class="col-sm-4 control-label">Manzana:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="manzana" value="<?php echo $domicilio['manzana']; ?>" onkeypress="return letraNumero(event)" maxlength="13" >
									</div>                                                            
								</div>
								<div class="form-group">                               
									<label for="input1" class="col-sm-4 control-label">Lote:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="lote" value="<?php echo $domicilio['lote']; ?>" onkeypress="return letraNumero(event)" maxlength="13" >
									</div>
								</div>
							</div>
						</div><!-- /.box-body -->
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Guardar</button>
					</div>
				</div><!-- /.Dirección -->
			</form>
		</div>     
	</div>
</section>













