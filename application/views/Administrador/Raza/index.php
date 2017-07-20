<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registradas</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Administrador/Inicio'); ?>"><i class="fa fa-home"></i> Administrador  </a></li>
        <li><a href="#"> Menú Mascotas</a></li>
        <li class="active">Raza</li>
    </ol>
</section>
<section class="content">
    <?php     if(empty($raza)){        echo "<h3>Aun no hay datos, por favor agrega un Raza.</h3>";    }else{        ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Razas</h3> <a href="<?php echo base_url('Administrador/Raza/create'); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Nueva Raza</a>
                </div>  
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 5%">ID</th>
                                <th style="width: 15%">Nombre Raza</th>
                                <th style="width: 50%">Descripción</th>
                                <th style="width: 5%">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($raza as $raza_item): ?>
                                <tr>
                                    <td><?php echo $raza_item['id_raza']; ?></td>
                                    <td><?php echo $raza_item['nombre']; ?></td>
                                    <td><?php echo $raza_item['descripcion']; ?></td>
                                    <td>
<!--                                         <a href="<?php echo base_url('Administrador/Raza/view/'.$raza_item['id_raza']); ?>">
                                            <span class="label label-primary">Ver</span>
                                        </a> -->
                                        <a href="<?php echo base_url('Administrador/Raza/edit/'.$raza_item['id_raza']); ?>">
                                            <span class="label label-success">Editar</span>
                                        </a>  
<!--                                         <a href="<?php echo base_url('Administrador/Raza/delete/'.$raza_item['id_raza']); ?>" onClick="return confirm('¿Estas seguro que quieres borrarlo?')">
                                            <span class="label label-danger">Borrar</span>
                                        </a>   -->                                 
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID raza</th>
                                <th>Nombre Raza</th>
                                <th>Descripción</th>
                                <th>Acción</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div> 
    <?php 
} 
?>
</section>
