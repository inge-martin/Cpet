<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registradas</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Administrador/Inicio'); ?>"><i class="fa fa-home"></i> Administrador  </a></li>
        <li><a href="#"> Menú Atención</a></li>
        <li class="active">Citas</li>
    </ol>
</section>
<section class="content">
    <?php     if(empty($citas)){        echo "<h3>No hay citas pendientes para los Zootécnicos.</h3>";     }else{        ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Citas</h3>
                </div>
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Estado</th>
                                <th>Zootécnico</th>
                                <th>Cliente</th>
                                <th>Mascota</th>
                                <th>Fecha</th>
                                <th>Horario</th>
                                <th>Clave de cita</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($citas as $citas_item): ?>
                                <tr>
                                    <td><?php echo $citas_item['status']; ?></td>
                                    <td><?php echo ucwords($citas_item['zoo'] . " " . $citas_item['zoo_p'] . " " . $citas_item['zoo_m']); ?></td>
                                    <td><?php echo ucwords($citas_item['cli']. " " . $citas_item['cli_p']. " " . $citas_item['cli_m']); ?></td>
                                    <td><?php echo ucwords($citas_item['mascota']); ?></td>
                                    <td><?php echo date("d-m-Y", strtotime($citas_item['start'])); ?></td>
                                    <td><?php echo $citas_item['turno']; ?></td>
                                    <td><?php echo $citas_item['clave']; ?></td>
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
