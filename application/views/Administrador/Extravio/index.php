<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registrados</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Administrador/Inicio'); ?>"><i class="fa fa-home"></i> Administrador  </a></li>
        <li><a href="#"> Menú Ayudas</a></li>
        <li class="active">Extravios</li>
    </ol>
</section>
<section class="content">
    <?php     if(empty($extravio)){        echo "<h3>Aun no hay mascotas extraviadas.</h3>";    }else{        ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Extravios</h3> <a href="<?php echo base_url('Administrador/Extravio/newEx'); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Nuevo Extravio</a>
                </div>
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 6%">Estado</th>
                                <!-- <th style="width: 6%">Raza</th> -->
                                <th style="width: 6%">Dueño</th>
                                <th style="width: 6%">Mascota</th>
                                <th style="width: 6%">Sexo</th>
                                <!-- <th style="width: 6%">Color</th> -->
                                <th style="width: 8%">F. extravio</th>
                                <th style="width: 15%">Donde se extravio</th>
                                <th style="width: 15%">Señas particulares</th>
                                <th style="width: 10%">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($extravio as $extravio_item): ?>
                                <tr>
                                    <td><?php echo $extravio_item['status']; ?></td>
                                    <td><?php echo ucwords($extravio_item['Cliente']); ?></td>
                                    <!-- <td><?php echo $extravio_item['Raza']; ?></td> -->
                                    <td><?php echo ucwords($extravio_item['Mascota']); ?></td>
                                    <td><?php echo $extravio_item['sexo']; ?></td>
                                    <!-- <td><?php echo $extravio_item['color']; ?></td> -->
                                    <td><?php echo date("d-m-Y", strtotime($extravio_item['fecha_extravio'])); ?></td>
                                    <td><?php echo ucfirst($extravio_item['ubicacion']); ?></td>
                                    <td><?php echo ucfirst($extravio_item['senas_particulares']); ?></td>
                                    <td>
                                        <a href="<?php echo base_url('Administrador/Extravio/view/'.$extravio_item['id_extravio']); ?>">
                                            <span class="label label-primary">Ver</span>
                                        </a>
                                        <a href="<?php echo base_url('Administrador/Extravio/edit/'.$extravio_item['id_extravio']); ?>">
                                            <span class="label label-success">Editar</span>
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
