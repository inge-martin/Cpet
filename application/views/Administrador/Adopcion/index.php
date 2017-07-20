<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>en Adopción</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Administrador/Inicio'); ?>"><i class="fa fa-home"></i> Administrador  </a></li>
        <li><a href="#"> Menú Ayudas</a></li>
        <li class="active">Adopción</li>
    </ol>
</section>
<section class="content">
    <?php     if(empty($adopcion)){        echo "<h3>Aun no hay animales para adopción.</h3>";    }else{        ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Mascotas en adopción</h3>
                </div>
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Estatus</th>
                                <th>Clínica</th>
                                <th>Nombre</th>
                                <th>Especie</th>
                                <th>Raza</th>
                                <th>Sexo</th>
                                <th>Edad</th>
                                <th>Color</th>
                                <th>Talla</th>
                                <th>Esterilizado</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($adopcion as $adopcion_item): ?>
                                <tr>
                                    <td><?php echo ucfirst($adopcion_item['status']); ?></td>
                                    <td><?php echo ucwords($adopcion_item['clinica']); ?></td>
                                    <td><?php echo ucfirst($adopcion_item['nombre']); ?></td>
                                    <td><?php echo ucfirst($adopcion_item['especie']); ?></td>
                                    <td><?php echo ucfirst($adopcion_item['raza']); ?></td>
                                    <td><?php echo ucfirst($adopcion_item['sexo']); ?></td>
                                    <td><?php echo $adopcion_item['edad']; ?> años</td>
                                    <td><?php echo $adopcion_item['color']; ?></td>
                                    <td><?php echo $adopcion_item['talla']; ?></td>
                                    <td><?php echo $adopcion_item['esterilizado']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('Administrador/Adopcion/view/'.$adopcion_item['id_adopcion']); ?>">
                                            <span class="label label-primary">Ver Detalles</span>
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
