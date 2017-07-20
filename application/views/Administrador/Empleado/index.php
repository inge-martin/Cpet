<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registrados</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Administrador/Inicio'); ?>"><i class="fa fa-home"></i> Administrador  </a></li>
        <li><a href="#"> Menú Personal</a></li>
        <li class="active">Empleados</li>
    </ol>
</section>
<section class="content">

    <?php  if(empty($empleado)){     ?>
    <h3>Aun no hay datos, por favor agrega un Empleado.</h3> 
    <a href="<?php echo base_url('Administrador/Empleados/newEmpleado'); ?>" class='btn btn-success'>
        <i class='fa fa-plus'></i> Nuevo Empleado
    </a>    
    <?php  }else{  ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Empleados</h3> <a href="<?php echo base_url('Administrador/Empleados/newEmpleado'); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Nuevo Empleado</a>
                </div> 
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <!-- <th>Clínica</th> -->
                                <th>Zootécnico</th>
                                <th>Nombre Empleado</th>
                                <th>Teléfono</th>
                                <th>Puesto</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tr>
                        <?php foreach ($empleado as $empleado_item): ?>
                            <tr>
                                <td><?php echo ucwords($empleado_item['id_empleado']); ?></td>
                                <!-- <td><?php echo ucwords($empleado_item['clinica']); ?></td> -->
                                <td><?php echo ucwords($empleado_item['zootecnico'] . " " .$empleado_item['zoo_paterno'] . " " .$empleado_item['zoo_materno']); ?></td>
                                <td>
                                    <?php echo ucwords($empleado_item['nombre'] . " " .$empleado_item['ap_paterno'] . " " .$empleado_item['ap_materno']); ?>
                                </td>
                                <td><?php echo ucwords($empleado_item['telefono_local']); ?></td>
                                <td><?php echo ucwords($empleado_item['rol']); ?></td>
                                <td>
                                    <a href="<?php echo base_url('Administrador/Empleados/view/'.$empleado_item['id_empleado']); ?>">
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
