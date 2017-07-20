<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Perfil de la Mascota</h3>
						<?php
						if ($mascota['status'] == 'Finado') {
							echo "<a class='btn btn-danger   pull-right'>Finado</a>" ;
						}elseif ($mascota['status'] == 'Activo') {
							echo "<a class='btn btn-success  pull-right'>Activo</a>";
						}elseif ($mascota['status'] == 'Perdido') {
							echo "<a class='btn btn-warning  pull-right'>Perdido</a>";
						}
						?>					
					</div>					
					<div class="box-body box-profile">
						<center>
							<img class="img-responsive img-thumbnail" style="height: 150px; width: 150px;"
							src="<?php echo base_url(); ?>assets/image/fotos/mascota/<?php echo $mascota['fotografia']; ?>">
						</center>
						<h3 class="profile-username text-center">
							<?php echo ucwords($mascota['nombre']); ?>
						</h3>
						<h4 class="text-center">Dueño: <a href="<?php echo base_url('Zootecnico/Clientes/view/'.$mascota['id_cliente']); ?>"><?php echo ucwords($mascota['dueño'] . " " . $mascota['ap_paterno']); ?></a>
						</h4>												
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item">
								<b>Sexo:</b> <a class="pull-right"><?php echo ucwords($mascota['sexo']); ?></a>
							</li>
							<li class="list-group-item">
								<b>F. Nacimiento:</b> <a class="pull-right">
								<?php echo date("d-m-Y", strtotime($mascota['fecha_nacimiento'])); ?>
							</a>
						</li>
						<li class="list-group-item">
							<b>Peso:</b> <a class="pull-right"><?php echo $mascota['peso']; ?> Kg</a>
						</li>
						<li class="list-group-item">
							<b>Color:</b> <a class="pull-right"><?php echo ucwords($mascota['color']);; ?></a>
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
						<div class="form-group">
							<label for="nombre" class="col-sm-4 control-label">Habitad:</label>
							<div class="col-sm-8">
								<a><p class="form-control-static"><?php echo ucwords($mascota['Habitad']); ?></p></a>
							</div>
						</div>
						<div class="form-group">
							<label for="costo" class="col-sm-4 control-label">Especie:</label>
							<div class="col-sm-8">
								<a><p class="form-control-static"><?php echo ucwords($mascota['Especie']); ?></p></a>
							</div>
						</div>
						<div class="form-group">
							<label for="nombre" class="col-sm-4 control-label">Raza:</label>
							<div class="col-sm-8">
								<a><p class="form-control-static"><?php echo ucfirst($mascota['Raza']); ?></p></a>
							</div>
						</div>
						<div class="form-group">
							<label for="costo" class="col-sm-4 control-label">Alergias:</label>
							<div class="col-sm-8">
								<a><p class="form-control-static"><?php echo ucwords($mascota['alergias']); ?></p></a>
							</div>
						</div>
						<div class="form-group">
							<label for="descripcion" class="col-sm-4 control-label">Descripción:</label>
							<div class="col-sm-8">
								<a><p class="form-control-static" style="height: 107px;" ><?php echo ucfirst($mascota['descripcion']); ?></p></a>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<td><a href="<?php echo base_url('Zootecnico/Mascotas'); ?>" class="btn btn-info pull-right">Regresar</a></td>
					</div>
				</div>
			</form>
		</div>
	</div>     
</div>
</section>


