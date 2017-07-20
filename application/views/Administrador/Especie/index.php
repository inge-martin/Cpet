<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registradas</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Administrador/Inicio'); ?>"><i class="fa fa-home"></i> Administrador  </a></li>
        <li><a href="#"> Menú Mascotas</a></li>
        <li class="active">Especie</li>
    </ol>
</section>
<section class="content">
    <?php     if(empty($especie)){        echo "<h3>Aun no hay datos, por favor agrega un Especie.</h3>";    }else{        ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Especies</h3> <a href="<?php echo base_url('Administrador/Especie/create'); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Nueva Especie</a>
                </div>                
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 5%">ID</th>
                                <th style="width: 15%">Nombre Especie</th>
                                <th style="width: 50%">Descripción</th>
                                <th style="width: 5%">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($especie as $especie_item): ?>
                                <tr>
                                    <td><?php echo $especie_item['id_especie']; ?></td>
                                    <td><?php echo $especie_item['nombre']; ?></td>
                                    <td><?php echo $especie_item['descripcion']; ?></td>
                                    <td>
<!--                                         <a href="<?php echo base_url('Administrador/Especie/view/'.$especie_item['id_especie']); ?>">
                                            <span class="label label-primary">Ver</span>
                                        </a> -->
                                        <a href="<?php echo base_url('Administrador/Especie/edit/'.$especie_item['id_especie']); ?>">
                                            <span class="label label-success">Editar</span>
                                        </a>  
<!--                                         <a href="<?php echo base_url('Administrador/Especie/delete/'.$especie_item['id_especie']); ?>" onClick="return confirm('¿Estas seguro que quieres borrarlo?')">
                                            <span class="label label-danger">Borrar</span>
                                        </a>   -->                                 
                                    </td>
                                </tr> 
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 
    <?php     }     ?>
</section>
