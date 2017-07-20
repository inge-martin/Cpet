<section class="content">
    <form class="form-horizontal" action="<?php echo base_url(); ?>Zootecnico/Adopciones/editar_adopcion" method="POST">

        <div class="box box-primary"><!-- Datos Principales -->

            <div class="box-header with-border">
                <h3 class="box-title">Edición de la mascota en adopción</h3>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id_adopcion" value="<?php echo $adopcion['id_adopcion'] ?>">
                    <input type="hidden" class="form-control" name="fotografia" value="<?php echo $adopcion['Foto_adopcion'] ?>">
                    <label for="inputEmail3" class="col-sm-2 control-label">Clínica encargada de la mascota:</label>
                    <div class="col-sm-4">
                        <p class="form-control-static"><?php echo ucwords($adopcion['Clinica']); ?></p>
                    </div>
                    <label for="input1" class="col-sm-2 control-label">Estatus:</label>
                    <div class="col-sm-4">
                        <select class="col-sm-3 form-control" name="status" required>
                            <option value="En Adopción">En Adopción</option>
                            <option value="Adoptado">Adoptado</option>
                        </select>
                    </div>                 
                </div>                
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nombre Mascota:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="nombre" required="true"  onkeypress="return soloLetras(event)" maxlength="50" value="<?php echo ucwords($adopcion['Adopcion_Nombre']); ?>">
                    </div>                    

                    <label for="inputEmail3" class="col-sm-2 control-label">Edad(Años):</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="edad" required="true" onkeypress="return soloNumeros(event)" value="<?php echo $adopcion['edad']; ?>">
                    </div>          
                </div>
                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Sexo:</label>
                    <div class="col-sm-4">
                        <p class="form-control-static"><?php echo ucwords($adopcion['sexo']); ?></p>
                    </div> 
                    <label for="input1" class="col-sm-2 control-label">Alergias:</label>
                    <div class="col-sm-4">
                        <p class="form-control-static"><?php echo ucwords($adopcion['alergias']); ?></p>
                    </div>             
                </div>                
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Especie:</label>
                    <div class="col-sm-4">
                        <p class="form-control-static"><?php echo ucwords($adopcion['especie']); ?></p>
                    </div>        
                    <label for="inputEmail3" class="col-sm-2 control-label">Raza:</label>
                    <div class="col-sm-4">
                        <p class="form-control-static"><?php echo ucwords($adopcion['raza']); ?></p>
                    </div> 
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Vacunado:</label>
                    <div class="col-sm-4">
                        <p class="form-control-static"><?php echo ucwords($adopcion['vacunas']); ?></p>
                    </div> 
                    <label for="inputEmail3" class="col-sm-2 control-label">Esterilizado:</label>
                    <div class="col-sm-4">
                        <p class="form-control-static"><?php echo ucwords($adopcion['esterilizado']); ?></p>
                    </div> 
                </div>           
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Talla:</label>
                    <div class="col-sm-4">
                        <p class="form-control-static"><?php echo ucwords($adopcion['talla']); ?></p>
                    </div> 
                    <label for="inputEmail3" class="col-sm-2 control-label">Color:</label>
                    <div class="col-sm-4">
                        <p class="form-control-static"><?php echo ucwords($adopcion['color']); ?></p>
                    </div>         
                </div>
                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Caracteristicas<br> descripción de Alergias, Vacunas etc.:</label>
                    <div class="col-sm-10">
                        <textarea class="col-sm-3 form-control" rows="4" placeholder="Descripción o caracteristicas adicionales de la mascota" name="descripcion" style="resize: none"><?php echo $adopcion['descripcion']; ?></textarea>
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