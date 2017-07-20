<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>en Adopción</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Cliente/Inicio'); ?>"><i class="fa fa-home"></i> Cliente  </a></li>
        <li><a href="#"> Menú Informativo</a></li>
        <li class="active">Adopciones</li>
    </ol>
</section>
<section class="content">
    <?php     if(empty($adopcion)){        echo "<h3>Aun no hay animales para adopción.</h3>";    }else{        ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Adopciones</h3> 
                    <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#m"><i class="fa fa-info"></i> Información</button>
                </div> 
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Estatus</th>
                                <th>Clínica</th>
                                <th>Nombre</th>
                                <th>Especie</th>
                                <th>Raza</th>
                                <th>Sexo</th>
                                <th>Edad</th>
                                <th>Color</th>
                                <th>Talla</th>
                                <th>Esterilizado</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($adopcion as $adopcion_item): ?>
                                <tr>
                                    <td><?php echo ucfirst($adopcion_item['status']); ?></td>
                                    <td><?php echo ucwords($adopcion_item['clinica']); ?></td>
                                    <td><?php echo ucfirst($adopcion_item['nombre']); ?></td>
                                    <td><?php echo ucfirst($adopcion_item['especie']); ?></td>
                                    <td><?php echo ucfirst($adopcion_item['raza']); ?></td>
                                    <td><?php echo ucfirst($adopcion_item['sexo']); ?></td>
                                    <td><?php echo $adopcion_item['edad']; ?> años</td>
                                    <td><?php echo $adopcion_item['color']; ?></td>
                                    <td><?php echo $adopcion_item['talla']; ?></td>
                                    <td><?php echo $adopcion_item['esterilizado']; ?></td>

                                    <td>
                                        <a href="<?php echo base_url('Cliente/Adopciones/view/'.$adopcion_item['id_adopcion']); ?>">
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
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="m">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Información</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-8">
                            <p>
                                Para tener mas detalles acerca de la mascota en adopción, te recomendamos visitar a la mascota en la clinica encargada, ahí el 
                                zootécnico puede comenzar con los tramites de adopción.
                            </p>
                            <p>
                                Agradeceremos tu interés.
                            </p>
                        </div>
                        <div class="col-md-2">

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</section>