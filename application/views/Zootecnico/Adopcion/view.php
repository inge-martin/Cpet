<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Mascota en Adopción</h3>
					<?php 
					echo ($adopcion['status'] == 'En Adopción') ? 
					"<a class='btn btn-success  pull-right'>En Adopción</a>" : 
					"<a class='btn btn-danger   pull-right'>Adoptado</a>" ;
					?>	
				</div>			
				<div class="box-body box-profile">
					<center>
						<img style="width: 460px; height: 262px;" class="img-thumbnail"
						src="<?php echo base_url('assets/image/fotos/adopcion/'.$adopcion['Foto_adopcion']); ?>">
					</center>
					<h3 class="profile-username text-center">
						<?php echo ucwords($adopcion['Adopcion_Nombre']); ?>
					</h3>
					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Sexo:</b> <a class="pull-right"><?php echo $adopcion['sexo']; ?></a>
						</li>
						<li class="list-group-item">
							<b>Edad:</b> <a class="pull-right"><?php echo $adopcion['edad']; ?> años</a>
						</li>
						<li class="list-group-item">
							<b>Talla:</b> <a class="pull-right"><?php echo $adopcion['talla']; ?></a>
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
							<label for="costo" class="col-sm-4 control-label">Especie:</label>
							<div class="col-sm-8">
								<a><p class="form-control-static"><?php echo ucwords($adopcion['especie']); ?></p></a>
							</div>
							<label for="nombre" class="col-sm-4 control-label">Raza:</label>
							<div class="col-sm-8">
								<a><p class="form-control-static"><?php echo ucwords($adopcion['raza']); ?></p></a>
							</div>
							<label for="costo" class="col-sm-4 control-label">Color:</label>
							<div class="col-sm-8">
								<a><p class="form-control-static"><?php echo $adopcion['color']; ?></p></a>
							</div>							
							<label for="nombre" class="col-sm-4 control-label">Vac. / Aler. / Esteri.:</label>
							<div class="col-sm-8">
								<a><p class="form-control-static"><?php echo $adopcion['vacunas'] . " / " 
								. $adopcion['esterilizado'] . " / " . $adopcion['esterilizado']; ?></p></a>
							</div>
							<label for="nombre" class="col-sm-4 control-label">Caracteristicas:</label>
							<div class="col-sm-8">
								<a><p class="form-control-static"><?php echo ucfirst($adopcion['descripcion']); ?></p></a>
							</div>
							</div>
							<strong class="pull-center">
								<i class="fa fa-phone margin-r-5"></i> 
								Contacto de la clínica donde se encuentra la mascota
							</strong>
							<div class="form-group">
							<label for="descripcion" class="col-sm-4 control-label">Nombre Clínica:</label>
							<div class="col-sm-8">
								<a><p class="form-control-static"><?php echo ucwords($adopcion['Clinica']); ?></p></a>
							</div>
							<label for="descripcion" class="col-sm-4 control-label">Teléfono 1:</label>
							<div class="col-sm-8">
								<a><p class="form-control-static"><?php echo $adopcion['telefono1']; ?></p></a>
							</div>
							<label for="descripcion" class="col-sm-4 control-label">Teléfono 2:</label>
							<div class="col-sm-8">
								<a><p class="form-control-static"><?php echo $adopcion['telefono2']; ?></p></a>
							</div>
							<label for="descripcion" class="col-sm-4 control-label">Email:</label>
							<div class="col-sm-8">
								<a><p class="form-control-static"><?php echo $adopcion['email']; ?></p></a>
							</div>
							<label for="descripcion" class="col-sm-4 control-label">Días:</label>
							<div class="col-sm-8">
								<a><p class="form-control-static"><?php echo $adopcion['dias']; ?></p></a>
							</div>
							<label for="descripcion" class="col-sm-4 control-label">Horario:</label>
							<div class="col-sm-8">
								<a><p class="form-control-static"><?php echo $adopcion['horario']; ?></p></a>
							</div>
							<div class="col-sm-12">
								<td><a href="<?php echo base_url('Zootecnico/Adopciones'); ?>" class="btn btn-info pull-right">Regresar</a></td>
							</div>
						</div>												
					</div>
				</div>
			</form>
		</div>
	</div>
</section>


