<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Finadas</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Administrador/Inicio'); ?>"><i class="fa fa-home"></i> Administrador  </a></li>
        <li><a href="#"> Menú Personal</a></li>
        <li class="active">Mascotas Finadas</li>
    </ol>
</section>
<section class="content">
    <?php     if(empty($mascota)){        echo "<h3>Aun no hay mascotas.</h3>";    }else{        ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                <h3 class="box-title">Mascotas Finadas</h3> 
                    <br><a href="<?php echo base_url('Administrador/Mascotas'); ?>" style="padding: 0; margin: 0; font-size: 12px">Mascotas Registradas</a>
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
                                    <a href="<?php echo base_url('Administrador/Mascotas/viewF/'.$mascota_item['id_mascota']); ?>">
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
