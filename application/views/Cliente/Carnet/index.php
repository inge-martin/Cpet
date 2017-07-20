<section class="content-header">
    <h1>
        Listado de Carnets
        <small>de vacunación</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Cliente/Inicio'); ?>"><i class="fa fa-home"></i> Cliente  </a></li>
        <li><a href="#"> Menú Atención</a></li>
        <li class="active">Carnet</li>
    </ol>
</section>
<section class="content">
    <?php     if(empty($carnet)){        echo "<h3>Aun no hay tienes mascotas vacunadas.</h3>";    }else{        ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Carnet</h3>
                </div>
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Mascota</th>
                                <th>Raza</th>
                                <th>Sexo</th>
                                <th>Color</th>
                                <th>Fecha de nacimiento</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($carnet as $carnet_item): ?>
                                <tr>
                                    <td><?php echo ucwords($carnet_item['mascota']); ?></td>
                                    <td><?php echo ucwords($carnet_item['raza']); ?></td>
                                    <td><?php echo ucwords($carnet_item['sexo']); ?></td>
                                    <td><?php echo ucwords($carnet_item['color']); ?></td>
                                    <td><?php echo date("d-m-Y", strtotime($carnet_item['fecha_nacimiento'])); ?></td>
                                    <td>
                                        <a href="<?php echo base_url('Cliente/Carnet/view/'.$carnet_item['id_mascota']); ?>">
                                            <span class="label label-primary">Ver</span>
                                        </a>
                                        <a href="<?php echo base_url('Cliente/Carnet/descargar/'.$carnet_item['id_mascota']); ?>">
                                            <span class="label label-success">Imprimir</span>
                                        </a>  
                                    </td>
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
