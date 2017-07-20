<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registrados</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Administrador/Inicio'); ?>"><i class="fa fa-home"></i> Administrador  </a></li>
        <li><a href="#"> Menú Servicios</a></li>
        <li class="active">Tratamientos</li>
    </ol>
</section>
<section class="content">

    <?php  if(empty($tratamiento)){     ?>
    <h3>Aun no hay datos, por favor agrega un tratamiento.</h3> 
    <a href="<?php echo base_url('Administrador/Tratamiento/create'); ?>" class='btn btn-success'>
        <i class='fa fa-plus'></i> Nuevo tratamiento
    </a>    
    <?php  }else{  ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Tratamientos</h3> <a href="<?php echo base_url('Administrador/Tratamiento/create'); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Nuevo Tratamiento</a>
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
                        <?php foreach ($tratamiento as $tratamiento_item): ?>
                            <tr>
                                <td><?php echo ucfirst($tratamiento_item['nombre']); ?></td>
                                <td><?php echo ucfirst($tratamiento_item['descripcion']); ?></td>
                                <td><?php echo $tratamiento_item['costo']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('Administrador/Tratamiento/view/'.$tratamiento_item['id_tratamiento']); ?>">
                                        <span class="label label-primary">Ver</span>
                                    </a>
                                    <a href="<?php echo base_url('Administrador/Tratamiento/edit/'.$tratamiento_item['id_tratamiento']); ?>">
                                        <span class="label label-success">Editar</span>
                                    </a>  
                                    <a href="<?php echo base_url('Administrador/Tratamiento/delete/'.$tratamiento_item['id_tratamiento']); ?>" onClick="return confirm('¿Estás seguro de que quieres borrar este tratamiento?')">
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
