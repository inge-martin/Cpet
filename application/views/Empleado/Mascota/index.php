<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registradas</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Empleado/Inicio'); ?>"><i class="fa fa-home"></i> Empleado  </a></li>
        <li><a href="#"> Menú Clientes</a></li>
        <li class="active">Mascotas Registradas</li>
    </ol>
</section>
<section class="content">
    <?php  if(empty($mascota)){     ?>
    <h3>Aun no hay datos, por favor agrega una Mascota.</h3> 
    <a href="<?php echo base_url('Empleado/Mascotas/newPet'); ?>" class='btn btn-success'>
        <i class='fa fa-plus'></i> Nueva Mascota
    </a>    
    <?php  }else{  ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Mascotas Registradas</h3> <a href="<?php echo base_url('Empleado/Mascotas/newPet'); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Nueva Mascota</a>
                    <br><a href="<?php echo base_url('Empleado/Mascotas/finadas'); ?>" style="padding: 0; margin: 0; font-size: 12px">Mascotas finadas</a>
                </div>
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Estado</th>
                                <th>Dueño</th>
                                <th>Nombre</th>
                                <th>Sexo</th>
                                <th>F. Nacimiento</th>
                                <th>Peso(Kg)</th>
                                <th>Color</th>
                                <th>Alergias</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tr>
                        <?php foreach ($mascota as $mascota_item): ?>
                            <tr>
                                <td><?php echo ucwords($mascota_item['status']); ?></td>
                                <td><?php echo ucwords($mascota_item['dueño'] . " " . $mascota_item['ap_paterno']); ?></td>
                                <td><?php echo ucwords($mascota_item['nombre']); ?></td>
                                <td><?php echo ucwords($mascota_item['sexo']); ?></td>
                                <td><?php echo date("d-m-Y", strtotime($mascota_item['fecha_nacimiento'])); ?></td>
                                <td><?php echo ucwords($mascota_item['peso']); ?></td>
                                <td><?php echo ucwords($mascota_item['color']); ?></td>
                                <td><?php echo ucwords($mascota_item['alergias']); ?></td>
                                <td>
                                    <a href="<?php echo base_url('Empleado/Mascotas/view/'.$mascota_item['id_mascota']); ?>">
                                        <span class="label label-primary">Ver Detalles</span>
                                    </a>
                                    <a href="<?php echo base_url('Empleado/Mascotas/finado/'.$mascota_item['id_mascota']); ?>" onClick="return confirm('¿Estas seguro que la mascota: <?php echo ucwords($mascota_item['nombre']); ?> fallecio?')">
                                        <span class="label label-danger">Finado</span>
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
