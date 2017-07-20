<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <?php echo validation_errors(); ?>
                <?php echo form_open('Administrador/Raza/create', array('class' => 'form-horizontal')); ?>
                <div class="box-header with-border">

                    <h3 class="box-title"><?php echo $title; ?></h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Especie:</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="id_especie">
                              <?php if (count($especie)) {
                                foreach ($especie as $list) {
                                    echo "<option value='". $list['id_especie'] . "'>" . $list['nombre'] . "</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>                
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nombre:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Descripción:</label>
                    <div class="col-sm-10">
                        <textarea style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px; resize: none" name="descripcion" required="true"></textarea>                        
                    </div>
                </div>
            </div>
            <div class="box-footer">

                <button type="submit" class="btn btn-info pull-right">Guardar</button>
            </div>
        </form>
    </div>
</div>     
</div>
</section>