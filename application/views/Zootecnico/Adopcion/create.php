<section class="content">
    <form class="form-horizontal" action="<?php echo base_url(); ?>Zootecnico/Adopciones/nuevaAdopcion" method="POST" enctype="multipart/form-data" name="formulario">

        <div class="box box-primary"><!-- Datos Principales -->

            <div class="box-header with-border">
                <h3 class="box-title">Datos principales de la mascota en adopción</h3>
            </div>

            <div class="box-body">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Clínica encargada de la mascota:</label>
                    <div class="col-sm-4">
                        <select class="col-sm-3 form-control" name="id_clinica" required>
                            <option value="">Selecciona uno</option>
                            <?php if (count($clinica)) {
                                foreach ($clinica as $list) {
                                    echo "<option value='". $list['id_clinica'] . "'>" . ucwords($list['nombre']) . "</option>";
                                }
                            }
                            ?>
                        </select>                        
                    </div>
                    <label for="inputEmail3" class="col-sm-2 control-label">Nombre Mascota:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="nombre" required="true" placeHolder="Ingresa Nombre" onkeypress="return soloLetras(event)" maxlength="50">
                        <input type="hidden" class="form-control" name="status" value="En Adopción">
                    </div>                    
                </div>                
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Color:</label>
                    <div class="col-sm-4">
                        <select class="col-sm-3 form-control" name="color" required>
                            <option value="">Selecciona uno</option>
                            <option value="Blanco">Blanco</option>
                            <option value="Cafe">Cafe</option>
                            <option value="Negro">Negro</option>
                            <option value="Gris">Gris</option>
                            <option value="Perla">Perla</option>
                            <option value="Manchado">Manchado</option>
                            <option value="Verde">Verde</option>
                            <option value="Blanco/Negro">Blanco/Negro</option>
                        </select>
                    </div>
                    <label for="inputEmail3" class="col-sm-2 control-label">Edad(Años):</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="edad" required="true" onkeypress="return soloNumeros(event)" placeholder="Ingresa Edad">
                    </div>          
                </div>
                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Sexo:</label>
                    <div class="col-sm-4">
                        <select class="col-sm-3 form-control" name="sexo" required>
                            <option value="">Selecciona uno</option>
                            <option value="Macho">Macho</option>
                            <option value="Hembra">Hembra</option>
                        </select>
                    </div>
                    <label for="inputEmail3" class="col-sm-2 control-label">Esterilizado:</label>
                    <div class="col-sm-4">
                        <select class="col-sm-3 form-control" name="esterilizado" required>
                            <option value="">Selecciona uno</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>             
                </div>                
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Especie:</label>
                    <div class="col-sm-4">
                        <select id="cboEspecie" name="especie" class="col-sm-4 form-control select2" required>
                            <option value="">Selecciona uno</option>
                        </select>
                    </div>       
                    <label for="inputEmail3" class="col-sm-2 control-label">Raza:</label>
                    <div class="col-sm-4">
                        <select id="cboRaza" name="raza" class="col-sm-4 form-control select2" required>
                            <option value="">Selecciona uno</option>
                        </select>
                    </div>
                </div>          
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Talla:</label>
                    <div class="col-sm-4">
                        <select class="col-sm-3 form-control" name="talla" required>
                            <option value="">Selecciona uno</option>
                            <option value="Chica">Chica</option>
                            <option value="Mediana">Mediana</option>
                            <option value="Grande">Grande</option>
                        </select>
                    </div>
                    <label for="exampleInputFile" class="col-sm-2 control-label">Fotografia:</label>
                    <div class="col-sm-4">
                        <input type="file" class="form-control" id="exampleInputFile" name="fotografia" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Vacunado:</label>
                    <div class="col-sm-4">
                        <select class="col-sm-3 form-control" name="vacunas" required>
                            <option value="">Selecciona uno</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <label for="input1" class="col-sm-2 control-label">Alergias:</label>
                    <div class="col-sm-4">
                        <select class="col-sm-3 form-control" name="alergias" required>
                            <option value="">Selecciona uno</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div> 
                </div>
                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Caracteristicas<br> descripción de Alergias, Vacunas etc.:</label>
                    <div class="col-sm-10">
                        <textarea class="col-sm-3 form-control" rows="4" placeholder="Descripción o caracteristicas adicionales de la mascota" name="descripcion" style="resize: none">N/A</textarea>
                    </div>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" value="Guardar">Guardar</button>
            </div>
        </div><!-- Datos Principales -->

    </form>
</section>
<script type="text/javascript" src="<?php echo base_url(); ?>js/funciones.js"></script>
<script>
    var baseurl = "<?php echo base_url(); ?>";
</script>