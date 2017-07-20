<section class="content">
	<div class="row">
		<br><br>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="callout callout-success">
				<h4>¡Felicidades!</h4>

				<p>Cita añadida con éxito</p>
				<br>
				<p>Folio de cita: <?php echo $clave; ?></p>
				<br>
				<p>¡Es importante que conserves tu folio, para cualquier duda o cancelación de tu cita!</p>
			</div>
			<a href="<?php echo base_url('Zootecnico/Citas/generar/'.$id_citas); ?>" class="btn btn-info">Imprimir Comprobante</a>
			<a href="<?php echo base_url('Zootecnico/Citas'); ?>" class="btn btn-info pull-right">Ver mis Citas</a>			
		</div>
	</div>
</section>

