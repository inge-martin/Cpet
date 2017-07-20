<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registrados</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Administrador/Inicio'); ?>"><i class="fa fa-home"></i> Administrador  </a></li>
        <li><a href="#"> Menú Servicios</a></li>
        <li class="active">Servicios</li>
    </ol>
</section>
<section class="content">
    <?php  if(empty($servicios)){     ?>
    <h3>Aun no hay datos, por favor agrega un servicio.</h3> 
    <a href="<?php echo base_url('Administrador/Servicios/create'); ?>" class='btn btn-success'>
        <i class='fa fa-plus'></i> Nuevo Servicio
    </a>    
    <?php  }else{  ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Servicios</h3> <a href="<?php echo base_url('Administrador/Servicios/create'); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Nuevo Servicio</a>
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
                        <?php foreach ($servicios as $servicios_item): ?>
                            <tr>
                                <td><?php echo ucfirst($servicios_item['nombre']); ?></td>
                                <td><?php echo ucfirst($servicios_item['descripcion']); ?></td>
                                <td><?php echo $servicios_item['costo']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('Administrador/Servicios/view/'.$servicios_item['id_servicios']); ?>">
                                        <span class="label label-primary">Ver</span>
                                    </a>
                                    <a href="<?php echo base_url('Administrador/Servicios/edit/'.$servicios_item['id_servicios']); ?>">
                                        <span class="label label-success">Editar</span>
                                    </a>  
                                    <a href="<?php echo base_url('Administrador/Servicios/delete/'.$servicios_item['id_servicios']); ?>" onClick="return confirm('¿Estás seguro de que quieres borrar este servicio?')">
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
