<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Perfil del Zootécnico</h3>
					<?php 
					echo ($zootecnico['status'] == 1) ? 
					"<a class='btn btn-success  pull-right'>Activo</a>" : 
					"<a class='btn btn-danger   pull-right'>Inactivo</a>" ;
					?>					
				</div>			
				<div class="box-body box-profile">
					<center>
						<img class="img-responsive img-thumbnail" style="height: 150px; width: 150px;"
						src="<?php echo base_url('assets/image/fotos/zootecnico/') . $zootecnico['fotografia']; ?>">
					</center>
					<h3 class="profile-username text-center">
						<?php echo ucwords($zootecnico['nombre'] . " " . $zootecnico['ap_paterno'] . " " . $zootecnico['ap_materno']); ?>
					</h3>
					<h4 class="text-center">Labora en: <a href="<?php echo base_url('Administrador/Clinicas/view/'.$zootecnico['id_clinica']); ?>"><?php echo ucwords($zootecnico['clinica']); ?></a>
					</h4>										
					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Usuario:</b> <a class="pull-right"><?php echo $zootecnico['usuario']; ?></a>
						</li>
						<li class="list-group-item">
							<b>Sexo:</b> <a class="pull-right"><?php echo ucwords($zootecnico['sexo']); ?></a>
						</li>						
						<li class="list-group-item">
							<b>F. Nacimiento:</b> <a class="pull-right"><?php echo ucwords($zootecnico['fecha_nacimiento']); ?></a>
						</li>
						<li class="list-group-item">
							<b>Email:</b> <a class="pull-right"><?php echo $zootecnico['email']; ?></a>
						</li>
						<li class="list-group-item">
							<b>Cedula:</b> <a class="pull-right"><?php echo $zootecnico['cedula']; ?></a>
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
								<p class="form-control-static"><a><?php echo ucwords($zootecnico['telefono_local']); ?></a></p>
							</div>
							<label for="costo" class="col-sm-4 control-label">Teléfono Celular:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($zootecnico['telefono_celular']); ?></a></p>
							</div>
						</div>
						<strong><i class="fa fa-map-marker margin-r-5"></i> Domicilio</strong>
						<div class="form-group">
							<label for="nombre" class="col-sm-4 control-label">Estado:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($zootecnico['Estado']); ?></a></p>
							</div>
							<label for="costo" class="col-sm-4 control-label">Municipio:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($zootecnico['Municipio']); ?></a></p>
							</div>
							<label for="nombre" class="col-sm-4 control-label">Localidad:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($zootecnico['Localidad']); ?></a></p>
							</div>
							<label for="costo" class="col-sm-4 control-label">C.P.:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($zootecnico['cp']); ?></a></p>
							</div>
							<label for="costo" class="col-sm-4 control-label">Colonia:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($zootecnico['colonia']); ?></a></p>
							</div>
							<label for="costo" class="col-sm-4 control-label">Calle:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($zootecnico['calle']); ?></a></p>
							</div>							
							<label for="nombre" class="col-sm-4 control-label">Numero / Interior:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo $zootecnico['numero'] ." / " . $zootecnico['numero_int'] ; ?></a> </p>
							</div>
							<label for="nombre" class="col-sm-4 control-label">Lote / Manzana:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($zootecnico['lote']); ?> /<?php echo ucwords($zootecnico['manzana']); ?></a></p>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<td><a href="<?php echo base_url('Administrador/Zootecnicos'); ?>" class="btn btn-info pull-right">Regresar</a></td>
					</div>
					<br>
				</div>
			</form>
		</div>		
	</div>
</section>