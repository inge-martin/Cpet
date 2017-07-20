  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  	<div class="pull-right hidden-xs">
  		<b>Version</b> 3.0
  	</div>
  	<center><strong>Copyright &copy; México 2016-2017 <a href="http://digitaljaguar.com.mx/" target="_blank">Digital Jaguar S.R.L de R.L de C.V.</a></strong> Todos los derechos reservados.</center>
  </footer>

</div>
<!-- ./wrapper -->

<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $(".select2").select2();

    $("#datatable1").DataTable( {
      "lengthMenu": [ [ 10, 15, 25, 50, 100, -1], [ 10, 15, 25, 50, 100, "Todos"] ],
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

<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>

<?php  
if($this->uri->segment(2) == 'Perfil') { ?>
<script src="<?php echo base_url(); ?>js/Combo_domicilio.js"></script>
<?php } ?>

<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {

    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
  });
</script>

<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>

</body>
</html>