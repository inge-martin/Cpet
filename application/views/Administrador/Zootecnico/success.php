<?php 
$ruta = base_url().'Administrador/Zootecnicos';
header( "refresh:5; url=$ruta" );
?>
<section class="content">
	<div class="row">
		<br><br>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="callout callout-success">
				<h4>¡Felicidades!</h4>

				<p>¡Zootecnico añadido con éxito!</p>
			</div>
			<a href="<?php echo base_url('Administrador/Zootecnicos'); ?>" class="btn btn-info pull-right">Ver Zootecnicos</a>
		</div>
	</div>
</section>


