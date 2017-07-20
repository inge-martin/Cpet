<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registrados</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Zootecnico/Inicio'); ?>"><i class="fa fa-home"></i> Zootecnico  </a></li>
        <li><a href="#"> Menú Informativo</a></li>
        <li class="active">Servicios</li>
    </ol>
</section>
<section class="content">
    <?php     if(empty($servicios)){        echo "<h3>Aun no hay datos, por favor agrega un servicio.</h3>";    }else{        ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Servicios</h3>
                </div>
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 20%"><strong>Nombre</strong></th>
                                <th style="width: 70%"><strong>Descripción</strong></th>
                                <th style="width: 10%"><strong>Costo</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tr>
                        <?php foreach ($servicios as $servicios_item): ?>
                            <tr>
                                <td><?php echo ucfirst($servicios_item['nombre']); ?></td>
                                <td><?php echo ucfirst($servicios_item['descripcion']); ?></td>
                                <td><?php echo $servicios_item['costo']; ?></td>
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
