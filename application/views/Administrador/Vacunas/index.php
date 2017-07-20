<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registradas</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Administrador/Inicio'); ?>"><i class="fa fa-home"></i> Administrador  </a></li>
        <li><a href="#"> Menú Servicios</a></li>
        <li class="active">Vacunas</li>
    </ol>
</section>
<section class="content">

    <?php  if(empty($vacunas)){     ?>
    <h3>Aun no hay datos, por favor agrega una vacuna.</h3> 
    <a href="<?php echo base_url('Administrador/Vacunas/create'); ?>" class='btn btn-success'>
        <i class='fa fa-plus'></i> Nueva Vacuna
    </a>    
    <?php  }else{  ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Vacunas</h3> <a href="<?php echo base_url('Administrador/Vacunas/create'); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Nueva Vacuna</a>
                </div>
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 25%">Nombre</th>
                                <th style="width: 50%">Descripción</th>
                                <th style="width: 10%">Costo</th>
                                <th style="width: 15%">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tr>
                        <?php foreach ($vacunas as $vacunas_item): ?>
                            <tr>
                                <td><?php echo ucwords($vacunas_item['nombre']); ?></td>
                                <td><?php echo ucfirst($vacunas_item['descripcion']); ?></td>
                                <td><?php echo $vacunas_item['costo']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('Administrador/Vacunas/view/'.$vacunas_item['id_vacuna']); ?>">
                                        <span class="label label-primary">Ver</span>
                                    </a>
                                    <a href="<?php echo base_url('Administrador/Vacunas/edit/'.$vacunas_item['id_vacuna']); ?>">
                                        <span class="label label-success">Editar</span>
                                    </a>  
                                    <a href="<?php echo base_url('Administrador/Vacunas/delete/'.$vacunas_item['id_vacuna']); ?>" onClick="return confirm('¿Estas seguro que quieres borrarlo?')">
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
