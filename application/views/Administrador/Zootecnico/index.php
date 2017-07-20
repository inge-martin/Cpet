<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registrados</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Administrador/Inicio'); ?>"><i class="fa fa-home"></i> Administrador  </a></li>
        <li><a href="#"> Menú Personal</a></li>
        <li class="active">Zootécnicos</li>
    </ol>
</section>
<section class="content">

    <?php  if(empty($zootecnico)){     ?>
    <h3>Aun no hay datos, por favor agrega un Zootécnico.</h3> 
    <a href="<?php echo base_url('Administrador/Zootecnicos/newZoo'); ?>" class='btn btn-success'>
        <i class='fa fa-plus'></i> Nuevo Zootécnico
    </a>    
    <?php  }else{  ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Zootécnicos</h3> <a href="<?php echo base_url('Administrador/Zootecnicos/newZoo'); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Nuevo Zootecnico</a>
                </div>            
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cínica</th>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <!-- <th>F. Nacimiento</th> -->
                                <th>Cedula</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tr>
                        <?php foreach ($zootecnico as $zootecnico_item): ?>
                            <tr>
                                <td><?php echo ucwords($zootecnico_item['id_zootecnico']); ?></td>
                                <td><?php echo ucwords($zootecnico_item['clinica']); ?></td>
                                <td><?php echo ucwords($zootecnico_item['nombre']); ?> <?php echo ucwords($zootecnico_item['ap_paterno']); ?> <?php echo ucwords($zootecnico_item['ap_materno']); ?></td>
                                <td><?php echo ucwords($zootecnico_item['telefono_local']); ?></td>
                                <td><?php echo $zootecnico_item['email']; ?></td>
                                <!-- <td><?php echo date("d-m-Y", strtotime($zootecnico_item['fecha_nacimiento'])); ?></td> -->
                                <td><?php echo ucwords($zootecnico_item['cedula']); ?></td>
                                <td>
                                    <a href="<?php echo base_url('Administrador/Zootecnicos/view/'.$zootecnico_item['id_zootecnico']); ?>">
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
