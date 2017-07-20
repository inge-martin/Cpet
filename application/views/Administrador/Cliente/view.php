<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Perfil del Cliente</h3>
					<?php 
					echo ($cliente['status'] == 1) ? 
					"<a class='btn btn-success  pull-right'>Activo</a>" : 
					"<a class='btn btn-danger   pull-right'>Inactivo</a>" ;
					?>					
				</div>			
				<div class="box-body box-profile">
					<center>
						<img class="img-responsive img-thumbnail" style="height: 150px; width: 150px;"
						src="<?php echo base_url('assets/image/fotos/cliente/') . $cliente['fotografia']; ?>">
					</center>
					<h3 class="profile-username text-center">
						<?php echo ucwords($cliente['nombre'] . " " . $cliente['ap_paterno'] . " " . $cliente['ap_materno']); ?>
					</h3>
					<h5 class="text-center">Usuario: <?php echo $cliente['usuario']; ?></h5>
					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Zotécnico encargado:</b> <a class="pull-right" href="<?php echo base_url('Administrador/Zootecnicos/view/'.$cliente['id_zootecnico']); ?>"><?php echo ucwords($cliente['zoo'] . " " . $cliente['zoo_p']); ?></a>
						</li>

						<?php 
						foreach ($mascota as $list) {
							?>
							<li class="list-group-item">
								<b>Mascota:</b> 
								<a href="<?php echo base_url('Administrador/Mascotas/view/'.$list['id_mascota']); ?>" class="pull-right">
									<?php echo ucwords($list['nombre']); ?>
								</a>
							</li>
							<?php
						}
						?>

						<li class="list-group-item">
							<b>Sexo:</b> <a class="pull-right"><?php echo ucwords($cliente['sexo']); ?></a>
						</li>						
						<li class="list-group-item">
							<b>F. Nacimiento</b> <a class="pull-right"><?php echo ucwords($cliente['fecha_nacimiento']); ?></a>
						</li>
						<li class="list-group-item">
							<b>Email</b> <a class="pull-right"><?php echo $cliente['email']; ?></a>
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
								<p class="form-control-static"><a><?php echo ucwords($cliente['telefono_local']); ?></a></p>
							</div>
							<label for="costo" class="col-sm-4 control-label">Teléfono Celular:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($cliente['telefono_celular']); ?></a></p>
							</div>
						</div>
						<strong><i class="fa fa-map-marker margin-r-5"></i> Domicilio</strong>
						<div class="form-group">
							<label for="nombre" class="col-sm-4 control-label">Estado:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($cliente['Estado']); ?></a></p>
							</div>
							<label for="costo" class="col-sm-4 control-label">Municipio:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($cliente['Municipio']); ?></a></p>
							</div>
							<label for="nombre" class="col-sm-4 control-label">Localidad:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($cliente['Localidad']); ?></a></p>
							</div>
							<label for="costo" class="col-sm-4 control-label">C.P.:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($cliente['cp']); ?></a></p>
							</div>
							<label for="costo" class="col-sm-4 control-label">Colonia:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($cliente['colonia']); ?></a></p>
							</div>							
							<label for="costo" class="col-sm-4 control-label">Calle:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($cliente['calle']); ?></a></p>
							</div>
							<label for="nombre" class="col-sm-4 control-label">Numero / Interior:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo $cliente['numero'] ." / " . $cliente['numero_int'] ; ?></a> </p>
							</div>
							<label for="nombre" class="col-sm-4 control-label">Lote / Manzana:</label>
							<div class="col-sm-8">
								<p class="form-control-static"><a><?php echo ucwords($cliente['lote']); ?> /<?php echo ucwords($cliente['manzana']); ?></a></p>
							</div>
						</div>
						<td><a href="<?php echo base_url('Administrador/Clientes'); ?>" class="btn btn-info pull-right">Regresar</a></td>
					</div>
				</div>
			</form>
		</div>		
	</div>
</section>