<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registradas</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Administrador/Inicio'); ?>"><i class="fa fa-home"></i> Administrador  </a></li>
        <li><a href="#"> Menú Personal</a></li>
        <li class="active">Mascotas Registradas</li>
    </ol>
</section>
<section class="content">

    <?php  if(empty($mascota)){     ?>
    <h3>Aun no hay datos, por favor agrega una Mascota.
    <a href="<?php echo base_url('Administrador/Mascotas/finadas'); ?>" style="padding: 0; margin: 0; font-size: 12px">Listado de mascotas finadas</a></h3> 
    <a href="<?php echo base_url('Administrador/Mascotas/newPet'); ?>" class='btn btn-success'>
        <i class='fa fa-plus'></i> Nueva Mascota
    </a>
    <?php  }else{  ?>
    
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Mascotas Registradas</h3> <a href="<?php echo base_url('Administrador/Mascotas/newPet'); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Nueva Mascota</a>
                    <br><a href="<?php echo base_url('Administrador/Mascotas/finadas'); ?>" style="padding: 0; margin: 0; font-size: 12px">Mascotas finadas</a>
                </div>
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
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
                                <td><?php echo ucwords($mascota_item['id_mascota']); ?></td>
                                <td><?php echo ucwords($mascota_item['status']); ?></td>
                                <td><?php echo ucwords($mascota_item['dueño'] . " " . $mascota_item['ap_paterno']); ?></td>
                                <td><?php echo ucwords($mascota_item['nombre']); ?></td>
                                <td><?php echo ucwords($mascota_item['sexo']); ?></td>
                                <td><?php echo date("d-m-Y", strtotime($mascota_item['fecha_nacimiento'])); ?></td>
                                <td><?php echo ucwords($mascota_item['peso']); ?></td>
                                <td><?php echo ucwords($mascota_item['color']); ?></td>
                                <td><?php echo ucwords($mascota_item['alergias']); ?></td>
                                <td>
                                    <a href="<?php echo base_url('Administrador/Mascotas/view/'.$mascota_item['id_mascota']); ?>">
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
