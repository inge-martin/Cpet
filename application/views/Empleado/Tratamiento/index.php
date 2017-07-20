<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registrados</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Empleado/Inicio'); ?>"><i class="fa fa-home"></i> Empleado  </a></li>
        <li><a href="#"> Menú Informativo</a></li>
        <li class="active">Tratamientos</li>
    </ol>
</section>
<section class="content">
    <?php     if(empty($tratamiento)){        echo "<h3>Aun no hay datos, por favor agrega un tratamiento.</h3>";    }else{        ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Tratamientos</h3>
                </div>
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 25%">Nombre</th>
                                <th style="width: 50%">Descripción</th>
                                <th style="width: 10%">Costo</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tr>
                        <?php foreach ($tratamiento as $tratamiento_item): ?>
                            <tr>
                                <td><?php echo ucfirst($tratamiento_item['nombre']); ?></td>
                                <td><?php echo ucfirst($tratamiento_item['descripcion']); ?></td>
                                <td><?php echo $tratamiento_item['costo']; ?></td>
                            </tr>  
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
<?php } ?>
</section>
