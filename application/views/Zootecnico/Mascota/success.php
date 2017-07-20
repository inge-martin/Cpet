<?php 
	$ruta = base_url().'Zootecnico/Mascotas';
	header( "refresh:5; url=$ruta" );
?>
<section class="content">
	<div class="row">
	<br><br>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="callout callout-success">
				<h4>¡Felicidades!</h4>

				<p>¡Mascota añadida con éxito!</p>
			</div>
			<a href="<?php echo base_url('Zootecnico/Mascotas'); ?>" class="btn btn-info pull-right">Ver Mascotas</a>
		</div>
	</div>
</section>

