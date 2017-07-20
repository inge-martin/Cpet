<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Realizadas</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Cliente/Inicio'); ?>"><i class="fa fa-home"></i> Cliente  </a></li>
        <li><a href="#"> Menú Atención</a></li>
        <li class="active">Citas</li>
    </ol>
</section>
<section class="content">
    <?php  if(empty($citas)){     ?>
    <h3>Aun no hay datos, por favor agrega una cita.</h3> 
    <a href="<?php echo base_url('Cliente/Citas/newCita'); ?>" class='btn btn-success'>
        <i class='fa fa-plus'></i> Nueva Cita
    </a>    
    <?php  }else{  ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Citas</h3> <a href="<?php echo base_url('Cliente/Citas/newCita'); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Nueva Cita</a>
                </div> 
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Estado</th>
                                <th>Mascota</th>
                                <th>Motivo</th>
                                <th>Fecha</th>
                                <th>Horario</th>
                                <th>Clave de cita</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($citas as $citas_item): ?>
                                <tr>
                                    <td><?php echo $citas_item['status']; ?></td>
                                    <td><?php echo ucwords($citas_item['mascota']); ?></td>
                                    <td><?php echo ucfirst($citas_item['motivo']); ?></td>
                                    <td><?php echo date("d-m-Y", strtotime($citas_item['start'])); ?></td>
                                    <td><?php echo $citas_item['turno']; ?></td>
                                    <td><?php echo $citas_item['clave']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('Cliente/Citas/generar/'.$citas_item['id_citas']); ?>">
                                            <span class="label label-primary">Imprimir</span>
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
