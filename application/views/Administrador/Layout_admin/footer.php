  </div>

  <footer class="main-footer">
  	<div class="pull-right hidden-xs">
  		<b>Version</b> 3.0
  	</div>
  	<center>
      <strong>Copyright &copy; México 2016-2017 <a href="http://digitaljaguar.com.mx/" target="_blank">Digital Jaguar S.R.L de R.L de C.V.</a></strong> Todos los derechos reservados.
    </center>
  </footer>

</div>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<!-- <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>

<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>

<script>
	$(function () {
    $(".select2").select2();

    $("#datatable1").DataTable( {
      "lengthMenu": [ [10, 20, 30, 40, 50, 100, -1], [10, 20, 30, 40, 50, 100, "Todos"] ],
      "language": {
        "sEmptyTable": "No hay registros disponibles",
        "sInfo": "Hay _TOTAL_ registros. Mostrando de (_START_ a _END_)",
        "infoFiltered": "(Filtrado de un total de _MAX_ registros.)",
        "sLoadingRecords": "Por favor espera - Cargando...",
        "sSearch": "Filtro:",
        "sLengthMenu": "Mostrar _MENU_ registros por página",
        "oPaginate": {
          "sLast": "Última página",
          "sFirst": "Primera",
          "sNext": "Siguiente",
          "sPrevious": "Anterior"
        }
      }
    } );
  } );
</script>

<?php
// Administrador
if($this->uri->segment(3) == 'nuevoAdmin' || $this->uri->segment(3) == 'newAdmin') { ?>
<script src="<?php echo base_url(); ?>js/Combo_domicilio.js"></script>
<?php } ?>

<?php  
// Zootecnico
if($this->uri->segment(3) == 'nuevoZoo' || $this->uri->segment(3) == 'newZoo') { ?>
<script src="<?php echo base_url(); ?>js/Combo_domicilio.js"></script>
<?php } ?>

<?php  
if($this->uri->segment(2) == 'Clientes') { ?>
<script src="<?php echo base_url(); ?>js/Combo_domicilio.js"></script>
<?php } ?>

<?php  
if($this->uri->segment(2) == 'Empleados') { ?>
<script src="<?php echo base_url(); ?>js/Combo_domicilio.js"></script>
<?php } ?>

<?php  
if($this->uri->segment(2) == 'Clinicas') { ?>
<script src="<?php echo base_url(); ?>js/Combo_domicilio.js"></script>
<?php } ?>

<?php  
if($this->uri->segment(2) == 'Perfil') { ?>
<script src="<?php echo base_url(); ?>js/Combo_domicilio.js"></script>
<?php } ?>

<?php  
if($this->uri->segment(2) == 'Mascotas') { ?>
<script src="<?php echo base_url(); ?>js/Combo_mascota.js"></script>
<?php } ?>

<?php  
if($this->uri->segment(2) == 'Adopcion') { ?>
<script src="<?php echo base_url(); ?>js/Combo_adopcion.js"></script>
<?php } ?>

<?php  
if($this->uri->segment(2) == 'Expediente') { ?>
<script src="<?php echo base_url(); ?>js/Combo_expediente.js"></script>
<?php } ?>

</body>
</html>