<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Perfil del Empleado</h3>
					<?php 
					echo ($empleado['status'] == 1) ? 
					"<a class='btn btn-success  pull-right'>Activo</a>" : 
					"<a class='btn btn-danger   pull-right'>Inactivo</a>" ;
					?>
				</div>			
				<div class="box-body box-profile">
					<center>
						<img class="img-responsive img-thumbnail" style="height: 150px; width: 150px;"
						src="<?php echo base_url('assets/image/fotos/empleado/') . $empleado['fotografia']; ?>">
					</center>
					<h3 class="profile-username text-center">
						<?php echo ucwords($empleado['nombre'] . " " . $empleado['ap_paterno'] . " " . $empleado['ap_materno']); ?>
					</h3>
					<br>
					<ul class="list-group list-group-unbordered">
<!-- 						<li class="list-group-item">
							<b>Usuario:</b> <a class="pull-right"><?php //echo $empleado['usuario']; ?></a>
						</li> -->
						<li class="list-group-item">
							<b>Sexo:</b> <a class="pull-right"><?php echo ucwords($empleado['sexo']); ?></a>
						</li>						
						<li class="list-group-item">
							<b>F. Nacimiento:</b> <a class="pull-right"><?php echo ucwords($empleado['fecha_nacimiento']); ?></a>
						</li>
						<li class="list-group-item">
							<b>Email:</b> <a class="pull-right"><?php echo $empleado['email']; ?></a>
						</li>
						<li class="list-group-item">
							<b>Rol:</b> <a class="pull-right"><?php echo $empleado['Rol']; ?></a>
						</li>											
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<form class="form-horizontal">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Detalles</h3>
					</div>
					<div class="box-body">
						<strong><i class="fa fa-phone margin-r-5"></i> Contacto</strong>
						<div class="form-group">
							<label for="nombre" class="col-sm-4 control-label">Teléfono Local:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($empleado['telefono_local']); ?></a></p>
							</div>
							<label for="costo" class="col-sm-4 control-label">Teléfono Celular:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($empleado['telefono_celular']); ?></a></p>
							</div>
						</div>
						<strong><i class="fa fa-map-marker margin-r-5"></i> Domicilio</strong>
						<div class="form-group">
							<label for="nombre" class="col-sm-4 control-label">Estado:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($empleado['Estado']); ?></a></p>
							</div>
							<label for="costo" class="col-sm-4 control-label">Municipio:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($empleado['Municipio']); ?></a></p>
							</div>
							<label for="nombre" class="col-sm-4 control-label">Localidad:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($empleado['Localidad']); ?></a></p>
							</div>
							<label for="costo" class="col-sm-4 control-label">C.P.:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($empleado['cp']); ?></a></p>
							</div>
							<label for="costo" class="col-sm-4 control-label">Colonia:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($empleado['colonia']); ?></a></p>
							</div>							
							<label for="costo" class="col-sm-4 control-label">Calle:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($empleado['calle']); ?></a></p>
							</div>
							<label for="nombre" class="col-sm-4 control-label">Numero / Interior:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo $empleado['numero']. " / " . $empleado['numero_int']; ?></a> </p>
							</div>
							<label for="nombre" class="col-sm-4 control-label">Lote / Manzana:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($empleado['lote']); ?> /<?php echo ucwords($empleado['manzana']); ?></a></p>
							</div>
						</div>
						<td><a href="<?php echo base_url('Zootecnico/Empleados'); ?>" class="btn btn-info pull-right">Regresar</a></td>
					</div>
				</div>
			</form>
		</div>		
	</div>
</section>