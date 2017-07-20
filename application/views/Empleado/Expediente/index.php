<section class="content-header">
    <h1>
        Listado de Expedientes
        <small>Registrados</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Empleado/Inicio'); ?>"><i class="fa fa-home"></i> Empleado  </a></li>
        <li><a href="#"> Menú Atención</a></li>
        <li class="active">Expediente</li>
    </ol>
</section>
<section class="content">
    <form class="form-horizontal" action="<?php echo base_url(); ?>Zootecnico/Expediente/generar" method="POST">

        <!-- /.Datos Principales -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Datos para expediente</h3>
            </div>
            <div class="box-body">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Clínica asignada:</label>
                        <div class="col-sm-5">
                            <select id="cboClinicas" name="id_clinica" class="col-sm-12 form-control select2" required>
                                <option value="">Selecciona una Clínica</option>
                            </select>
                        </div>
                    </div>                  
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Zootécnico asignado:</label>
                        <div class="col-sm-5">
                            <select id="cboZootecnicos" name="id_zootecnico" class="col-sm-12 form-control select2" required>
                                <option value="">--------------------------------------------------------</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Cliente:</label>
                        <div class="col-sm-5">
                            <select id="cboClientes" name="id_cliente" class="col-sm-12 form-control select2" required>
                                <option value="">--------------------------------------------------------</option>
                            </select>
                        </div>                        
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Mascota:</label>
                        <div class="col-sm-5">
                            <select id="cboMascotas" name="id_mascota" class="col-sm-12 form-control select2" required>
                                <option value="">--------------------------------------------------------</option>
                            </select>
                        </div>                        
                    </div>                                                                               
                </div>
                <div class="box-footer">
                    <label for="inputEmail3" class="col-sm-3 control-label"></label>
                    <button type="submit" class="btn btn-info col-sm-6" value="Guardar">Generar Expediente</button>
                </div>
            </div>
        </div><!-- /.Datos Principales -->

    </form>

</section>
<script>
    var baseurl = "<?php echo base_url(); ?>";
</script>