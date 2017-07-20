<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>en Adopción</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Zootecnico/Inicio'); ?>"><i class="fa fa-home"></i> Zootecnico  </a></li>
        <li><a href="#"> Menú Clientes</a></li>
        <li class="active">Adopción</li>
    </ol>
</section>
<section class="content">

    <?php  if(empty($adopcion)){     ?>
    <h3>Aun no hay datos, por favor agrega una adopción.</h3> 
    <a href="<?php echo base_url('Zootecnico/Adopciones/newAdopcion'); ?>" class='btn btn-success'>
        <i class='fa fa-plus'></i> Nueva Adopción
    </a>    
    <?php  }else{  ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"><?php echo $title; ?></h3> <a href="<?php echo base_url('Zootecnico/Adopciones/newAdopcion'); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Nueva Adopción</a>
                </div> 
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Estatus</th>
                                <th>Clínica</th>
                                <th>Nombre</th>
                                <!-- <th>Especie</th> -->
                                <th>Raza</th>
                                <th>Sexo</th>
                                <th>Edad</th>
                                <th>Color</th>
                                <th>Talla</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($adopcion as $adopcion_item): ?>
                                <tr>
                                    <td><?php echo ucfirst($adopcion_item['status']); ?></td>
                                    <td><?php echo ucwords($adopcion_item['clinica']); ?></td>
                                    <td><?php echo ucfirst($adopcion_item['nombre']); ?></td>
                                    <!-- <td><?php echo ucfirst($adopcion_item['especie']); ?></td> -->
                                    <td><?php echo ucfirst($adopcion_item['raza']); ?></td>
                                    <td><?php echo ucfirst($adopcion_item['sexo']); ?></td>
                                    <td><?php echo $adopcion_item['edad']; ?> años</td>
                                    <td><?php echo $adopcion_item['color']; ?></td>
                                    <td><?php echo $adopcion_item['talla']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('Zootecnico/Adopciones/view/'.$adopcion_item['id_adopcion']); ?>">
                                            <span class="label label-primary">Ver</span>
                                        </a>
                                        <a href="<?php echo base_url('Zootecnico/Adopciones/edit/'.$adopcion_item['id_adopcion']); ?>">
                                            <span class="label label-success">Editar</span>
                                        </a>  
                                        <a href="<?php echo base_url('Zootecnico/Adopciones/delete/'.$adopcion_item['id_adopcion']); ?>" onClick="return confirm('¿Estas seguro que quieres borrarlo?')">
                                            <span class="label label-danger">Borrar</span>
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
