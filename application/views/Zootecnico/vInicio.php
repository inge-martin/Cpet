<section class="content">
<!-- 	<div class="row text-center">
		<h3>Bienvenido Zootécnico</h3><br>
	</div>
-->

<!-- 	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Ultimas mascotas registradas</h3>
				</div>
				<div class="box-body no-padding">
					<table class="table table-striped">
						<tr>
							<th>Nombre</th>
							<th>Sexo</th>
							<th>Descripción</th>
							<th>Color</th>
						</tr>
						<?php foreach ($mascotas_5 as $value) {	?>
						<tr>
							<td><?php echo ucwords($value['nombre']); ?></td>
							<td><?php echo ucwords($value['sexo']); ?></td>
							<td><?php echo ucfirst($value['descripcion']); ?></td>
							<td><?php echo $value['color']; ?></td>
						</tr>
						<?php  } ?>
					</table>
				</div>
			</div>
		</div>
	</div> -->

	<div class="row">
		<!-- Carrousel -->
		<div class="col-md-8">
			<div class="box box-primary">
				<div class="box-header">
					<center><h3 class="box-title">Citas pendientes</h3></center>
				</div>
				<div class="box-body no-padding">
					<!-- THE CALENDAR -->
					<div id="calendar"></div>
				</div>
			</div>
		</div>
		<!-- /Carrousel -->

		<!-- <br> -->

		<!-- Accesos -->
		<div class="col-md-4">
			<div class="box-success">
				<div class="box-header">
					<center><h3 class="box-title">Accesos directos</h3></center>
				</div>
				<div class="box-body no-padding">
					<div class="col-md-12">
						<div class="info-box">
							<a href="<?php echo base_url(); ?>Zootecnico/Clientes"><span class="info-box-icon bg-aqua"><i class="ion ion-person-stalker"></i></span></a>
							<div class="info-box-content">
								<span class="info-box-text">Clientes</span>
								<span class="info-box-number"><?php echo $clientes; ?><small> Registrados</small></span>
								<div class="progress">
									<div class="progress-bar" style="width: 0%"></div>
								</div>
								<a href="<?php echo base_url('Zootecnico/Clientes/newCli'); ?>" class="pull-right"><span class="progress-description">
									<i class="ion ion-android-person-add"></i> Nuevo 
								</span></a>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="info-box">
							<a href="<?php echo base_url(); ?>Zootecnico/Mascotas"><span class="info-box-icon bg-red"><i class="ion ion-social-github"></i></span></a>
							<div class="info-box-content">
								<span class="info-box-text">Mascotas</span>
								<span class="info-box-number"><?php echo $mascotas; ?><small> Registradas</small></span>
								<div class="progress">
									<div class="progress-bar" style="width: 0%"></div>
								</div>
								<a href="<?php echo base_url('Zootecnico/Mascotas/newPet'); ?>" class="pull-right"><span class="progress-description">
									<i class="ion ion-android-person-add"></i> Nueva 
								</span></a>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="info-box">
							<a href="<?php echo base_url(); ?>Zootecnico/Empleados"><span class="info-box-icon bg-green"><i class="ion ion-android-contacts"></i></span></a>
							<div class="info-box-content">
								<span class="info-box-text">Empleados</span>
								<span class="info-box-number"><?php echo $empleados; ?><small> Registrados</small></span>
								<div class="progress">
									<div class="progress-bar" style="width: 0%"></div>
								</div>
								<a href="<?php echo base_url('Zootecnico/Empleados/newEmpleado'); ?>" class="pull-right"><span class="progress-description">
									<i class="ion ion-android-person-add"></i> Nuevo 
								</span></a>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="info-box">
							<a href="<?php echo base_url(); ?>Zootecnico/Citas"><span class="info-box-icon bg-yellow"><i class="ion ion-android-calendar"></i></span></a>
							<div class="info-box-content">
								<span class="info-box-text">Citas</span>
								<span class="info-box-number"><?php echo $citas; ?><small> Pendientes</small></span>
								<div class="progress">
									<div class="progress-bar" style="width: 0%"></div>
								</div>
								<a href="<?php echo base_url('Zootecnico/Citas/newCita'); ?>" class="pull-right"><span class="progress-description">
									<i class="ion ion-android-person-add"></i> Nueva 
								</span></a>
							</div>
						</div>
					</div>

					<div class="col-md-12">
					</div>
				</div>
			</div>
		</div>
		<!-- /Accesos -->
	</div>
</section>

<script>
	$(function () {

		$.post('<?php echo base_url(); ?>Zootecnico/Inicio/getCalendar',
			function(data){
				// alert(data);


				var initialLocaleCode = 'es';
				$('#calendar').fullCalendar({
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'month,agendaWeek,agendaDay,listMonth'
					},
					defaultDate: new Date(),
					locale: initialLocaleCode,
					hiddenDays: [ 0 ],
					weekNumbersWithinDays: true,
					buttonIcons: false, // show the prev/next text
					weekNumbers: true,
					navLinks: true, // can click day/week names to navigate views
					editable: false,
					eventLimit: true, // allow "more" link when too many events
					events: $.parseJSON(data),
					eventRender: function(event, element) {
						element.qtip({
							content: {
								title: '<h5>Detalle de cita</h5>',
								text: 
								'<b>Cliente: '+event.cliente+'</b><br>'+
								'<b>'+event.title+'</b><br>'+
								'<b>Turno: '+event.turno+'</b><br>'	+
								'<b>Clave: '+event.clave+'</b><br>'+
								'<b>Motivo: '+event.description+'</b>'
							},
							position: {
								 my: 'left bottom'
								// at: 'bottom left'
							},
							style: {
								classes: 'qtip-bootstrap qtip-shadow'
							},
							show: {
								effect: function() {
									$(this).show('puff', 100);
								}
							},
							hide: {
								effect: function() {
									$(this).hide('puff', 300);
								}
							}
						});
					}	
				});

				// build the locale selector's options
				$.each($.fullCalendar.locales, function(localeCode) {
					$('#locale-selector').append(
						$('<option/>')
						.attr('value', localeCode)
						.prop('selected', localeCode == initialLocaleCode)
						.text(localeCode)
						);
				});
				
			// when the selected option changes, dynamically change the calendar option
			$('#locale-selector').on('change', function() {
				if (this.value) {
					$('#calendar').fullCalendar('option', 'locale', this.value);
				}
			});
		});



	});

</script>