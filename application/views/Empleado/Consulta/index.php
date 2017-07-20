<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Realizadas</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Empleado/Inicio'); ?>"><i class="fa fa-home"></i> Empleado  </a></li>
        <li><a href="#"> Menú Atención</a></li>
        <li class="active">Consultas</li>
    </ol>
</section>
<section class="content">
    <?php     if(empty($consultas)){        echo "<h3>Aun no hay consultas realizadas por los zootecnicos.</h3>";     }else{        ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Consultas</h3>
                </div>
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Cliente</th>
                                <th>Mascota</th>
                                <th>Detalle</th>
                                <th>Fecha</th>
                                <th>Tratamiento</th>
                                <th>Servicio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($consultas as $consultas_item): ?>
                                <tr>
                                    <td><?php echo ucwords($consultas_item['cliente']. " " . $consultas_item['cli_p']); ?></td>
                                    <td><?php echo ucwords($consultas_item['mascota']); ?></td>
                                    <td><?php echo ucfirst($consultas_item['detalle_revision']); ?></td>
                                    <td><?php echo date("d-m-Y", strtotime($consultas_item['fecha_consulta'])); ?></td>
                                    <td><?php echo ucfirst($consultas_item['tratamiento']); ?></td>
                                    <td><?php echo ucfirst($consultas_item['servicios']); ?></td>
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

