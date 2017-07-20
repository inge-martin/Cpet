<section class="content">
	<div class="row text-center">
		<h1>Bienvenido Empleado</h1><br>
	</div>

	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<a href="<?php echo base_url(); ?>Empleado/Clientes"><span class="info-box-icon bg-aqua"><i class="ion ion-person-stalker"></i></span></a>
				<div class="info-box-content">
					<span class="info-box-text">Clientes</span>
					<span class="info-box-number"><?php echo $clientes; ?><small> Registrados</small></span>
					<div class="progress">
						<div class="progress-bar" style="width: 0%"></div>
					</div>
					<a href="<?php echo base_url('Empleado/Clientes/newCli'); ?>" class="pull-right"><span class="progress-description">
						<i class="ion ion-android-person-add"></i> Nuevo 
					</span></a>
				</div>
			</div>
		</div>
		
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<a href="<?php echo base_url(); ?>Empleado/Mascotas"><span class="info-box-icon bg-red"><i class="ion ion-social-github"></i></span></a>
				<div class="info-box-content">
					<span class="info-box-text">Mascotas</span>
					<span class="info-box-number"><?php echo $mascotas; ?><small> Registradas</small></span>
					<div class="progress">
						<div class="progress-bar" style="width: 0%"></div>
					</div>
					<a href="<?php echo base_url('Empleado/Mascotas/newPet'); ?>" class="pull-right"><span class="progress-description">
						<i class="ion ion-android-person-add"></i> Nueva 
					</span></a>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<a href="<?php echo base_url(); ?>Empleado/Adopciones"><span class="info-box-icon bg-green"><i class="ion ion-heart"></i></span></a>
				<div class="info-box-content">
					<span class="info-box-text">Adopciones</span>
					<span class="info-box-number"><?php echo $adopcion; ?><small> Registradas</small></span>
					<div class="progress">
						<div class="progress-bar" style="width: 0%"></div>
					</div>
					<a href="<?php echo base_url('Empleado/Adopciones/newAdopcion'); ?>" class="pull-right"><span class="progress-description">
						<i class="ion ion-android-person-add"></i> Nueva 
					</span></a>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<a href="<?php echo base_url(); ?>Empleado/Citas"><span class="info-box-icon bg-yellow"><i class="ion ion-android-calendar"></i></span></a>
				<div class="info-box-content">
					<span class="info-box-text">Citas</span>
					<span class="info-box-number"><?php echo $citas; ?><small> Pendientes</small></span>
					<div class="progress">
						<div class="progress-bar" style="width: 0%"></div>
					</div>
					<a href="<?php echo base_url('Empleado/Citas/newCita'); ?>" class="pull-right"><span class="progress-description">
						<i class="ion ion-android-person-add"></i> Nueva 
					</span></a>
				</div>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Ultimas mascotas registradas</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<table class="table table-striped">
						<tr>
							<th>Nombre</th>
							<th>Sexo</th>
							<th>Descripción</th>
							<th>Color</th>
						</tr>
						<?php foreach ($mascotas_5 as $value) {
							?>
							<tr>
								<td><?php echo ucwords($value['nombre']); ?></td>
								<td><?php echo ucwords($value['sexo']); ?></td>
								<td><?php echo ucfirst($value['descripcion']); ?></td>
								<td><?php echo $value['color']; ?></td>
							</tr>
							<?php  } ?>
						</table>
				</div>
				<!-- /.box-body -->
			</div>
		</div>

		<div class="col-md-6">

			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">Citas pendientes para hoy</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<table class="table table-striped">
						<tr>
							<th>Dueño</th>
							<th>Motivo</th>
							<th>Turno</th>
							<th>Status</th>
						</tr>
						<?php foreach ($citas_hoy as $value) {
							?>
							<tr>
								<td><?php echo ucwords($value['nombre'] . " " . $value['ap_paterno']); ?></td>
								<td><?php echo ucfirst($value['motivo']); ?></td>
								<td><?php echo $value['turno']; ?></td>
								<td><?php echo $value['status']; ?></td>
							</tr>
							<?php  } ?>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
		</div>

	</section>