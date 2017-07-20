<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registrados</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Administrador/Inicio'); ?>"><i class="fa fa-home"></i> Administrador  </a></li>
        <li><a href="#"> Menú Atención</a></li>
        <li class="active">Carnet</li>
    </ol>
</section>
<section class="content">
    <?php     if(empty($carnet)){        echo "<h3>Aun no hay carnet's, espera a que un Zootécnico aplique una vacuna.</h3>";    }else{        ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Carnets</h3>
                </div>
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Clínica</th>
                                <th>Zootécnico</th>
                                <th>Cliente</th>
                                <th>Mascota</th>
                                <th>Raza</th>
                                <th>Sexo</th>
                                <th>Color</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($carnet as $carnet_item): ?>
                                <tr>
                                    <td><?php echo ucwords($carnet_item['clinica']); ?></td>
                                    <td><?php echo ucwords($carnet_item['zoo'] . " " . $carnet_item['zoo_p'] . " " . $carnet_item['zoo_m']); ?></td>
                                    <td><?php echo ucwords($carnet_item['cliente'] . " " . $carnet_item['cli_p'] . " " . $carnet_item['cli_m']); ?></td>
                                    <td><?php echo ucwords($carnet_item['mascota']); ?></td>
                                    <td><?php echo ucwords($carnet_item['raza']); ?></td>
                                    <td><?php echo ucwords($carnet_item['sexo']); ?></td>
                                    <td><?php echo ucwords($carnet_item['color']); ?></td>
                                    <td>
                                        <a href="<?php echo base_url('Administrador/Carnet/view/'.$carnet_item['id_mascota']); ?>">
                                            <span class="label label-primary">Ver</span>
                                        </a>
                                        <a href="<?php echo base_url('Administrador/Carnet/descargar/'.$carnet_item['id_mascota']); ?>">
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
