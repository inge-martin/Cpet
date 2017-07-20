<?php 
$ruta = base_url().'Administrador/Servicios';
header( "refresh:5; url=$ruta" );
?>
<section class="content">
	<div class="row">
		<br><br>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="callout callout-success">
				<h4>¡Felicidades!</h4>

				<p>¡Servicio añadido con éxito!</p>
			</div>
			<a href="<?php echo base_url('Administrador/Servicios'); ?>" class="btn btn-info pull-right">Ver Servicios</a>
		</div>
	</div>
</section>
