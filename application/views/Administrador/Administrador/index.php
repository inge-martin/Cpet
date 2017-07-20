<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registrados</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Administrador/Inicio'); ?>"><i class="fa fa-home"></i> Administrador  </a></li>
        <li><a href="#"> Menú Personal</a></li>
        <li class="active">Administradores</li>
    </ol>
</section>
<section class="content">
    <?php     if(empty($administrador)){        echo "<h3>Aun no hay administradores.</h3>";    }else{        ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Administradores</h3> <a href="<?php echo base_url('Administrador/Administradores/newAdmin'); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Nuevo Administrador</a>
                </div>
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Paterno</th>
                                <th>Materno</th>
                                <th>T. Local</th>
                                <th>T. Celular</th>
                                <th>Email</th>
                                <th>Sexo</th>
                                <th>F. Nacimiento</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($administrador as $administrador_item): ?>
                                <tr>
                                    <td><?php echo ucwords($administrador_item['id_admin']); ?></td>
                                    <td><?php echo ucwords($administrador_item['nombre']); ?></td>
                                    <td><?php echo ucwords($administrador_item['ap_paterno']); ?></td>
                                    <td><?php echo ucwords($administrador_item['ap_materno']); ?></td>
                                    <td><?php echo ucwords($administrador_item['telefono_local']); ?></td>
                                    <td><?php echo ucwords($administrador_item['telefono_celular']); ?></td>
                                    <td><?php echo $administrador_item['email']; ?></td>
                                    <td><?php echo ucwords($administrador_item['sexo']); ?></td>
                                    <td><?php echo date("d-m-Y", strtotime($administrador_item['fecha_nacimiento'])); ?></td>
                                    <td>
                                        <a href="<?php echo base_url('Administrador/Administradores/view/'.$administrador_item['id_admin']); ?>">
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
