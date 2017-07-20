<?php 
$ruta = base_url().'Administrador/Empleados';
header( "refresh:5; url=$ruta" );
?>
<section class="content">
	<div class="row">
		<br><br>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="callout callout-success">
				<h4>¡Felicidades!</h4>

				<p>¡Empleado añadido con éxito!</p>
			</div>
			<a href="<?php echo base_url('Administrador/Empleados'); ?>" class="btn btn-info pull-right">Ver Empleados</a>
		</div>
	</div>
</section>


