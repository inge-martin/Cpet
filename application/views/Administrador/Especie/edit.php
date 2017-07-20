<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <?php echo validation_errors(); ?>
            <?php echo form_open('Administrador/Especie/edit/'.$especie['id_especie'], array('class' => 'form-horizontal')); ?>
                <div class="box-header with-border">
                
                    <h3 class="box-title"><?php echo $title; ?></h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nombre" value="<?php echo $especie['nombre'] ?>" required>
                            <input type="hidden" class="form-control" name="id_habitad" value="<?php echo $especie['id_habitad'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Descripción:</label>
                        <div class="col-sm-10">
                            <textarea style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px; resize: none" name="descripcion" required><?php echo $especie['descripcion'] ?></textarea>                        
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