<?php 
	$ruta = base_url().'Zootecnico/Consulta';
	header( "refresh:5; url=$ruta" );
?>
<section class="content">
	<div class="row">
		<br><br>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="callout callout-success">
				<h4>¡Felicidades!</h4>

				<p>Consulta añadida con éxito</p>
				<br>
			</div>
			<a href="<?php echo base_url('Zootecnico/Consulta'); ?>" class="btn btn-info pull-right">Ver mis Consulta</a>			
		</div>
	</div>
</section>

