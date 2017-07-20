<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registrados</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Zootecnico/Inicio'); ?>"><i class="fa fa-home"></i> Zootecnico  </a></li>
        <li><a href="#"> Menú Atención</a></li>
        <li class="active">Carnet</li>
    </ol>
</section>
<section class="content">

    <?php  if(empty($vacunas)){     ?>
    <h3>Aun no hay datos, por favor agrega una vacuna.</h3> 
    <a href="<?php echo base_url('Zootecnico/Vacunacion/newVacuna'); ?>" class='btn btn-success'>
        <i class='fa fa-plus'></i> Nueva Vacunación
    </a>    
    <?php  }else{  ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Carnets</h3> <a href="<?php echo base_url('Zootecnico/Vacunacion/newVacuna'); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Nueva Vacunación</a>
                </div>
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Clínica</th>
                                <th>Zootécnico</th>
                                <th>Cliente</th>
                                <th>Mascota</th>
                                <th>Raza</th>
                                <th>Sexo</th>
                                <!-- <th>Color</th> -->
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($vacunas as $vacunas_item): ?>
                                <tr>
                                    <td><?php echo ucwords($vacunas_item['clinica']); ?></td>
                                    <td><?php echo ucwords($vacunas_item['zoo'] . " " . $vacunas_item['zoo_p'] . " " . $vacunas_item['zoo_m']); ?></td>
                                    <td><?php echo ucwords($vacunas_item['cliente'] . " " . $vacunas_item['cli_p'] . " " . $vacunas_item['cli_m']); ?></td>
                                    <td><?php echo ucwords($vacunas_item['mascota']); ?></td>
                                    <td><?php echo ucwords($vacunas_item['raza']); ?></td>
                                    <td><?php echo ucwords($vacunas_item['sexo']); ?></td>
                                    <!-- <td><?php echo ucwords($vacunas_item['color']); ?></td> -->
                                    <td>
                                        <a href="<?php echo base_url('Zootecnico/Vacunacion/view/'.$vacunas_item['id_mascota']); ?>">
                                            <span class="label label-primary">Ver</span>
                                        </a>
                                        <a href="<?php echo base_url('Zootecnico/Vacunacion/descargar/'.$vacunas_item['id_mascota']); ?>">
                                            <span class="label label-success">Imprimir</span>
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
