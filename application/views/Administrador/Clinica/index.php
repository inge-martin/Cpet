<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registradas</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Administrador/Inicio'); ?>"><i class="fa fa-home"></i> Administrador  </a></li>
        <li><a href="#"> Menú Servicios</a></li>
        <li class="active">Clínicas</li>
    </ol>
</section>
<section class="content">
    <?php  if(empty($clinica)){     ?>
    <h3>Aun no hay datos, por favor agrega una clínica.</h3> 
    <a href="<?php echo base_url('Administrador/Clinicas/newCli'); ?>" class='btn btn-success'>
        <i class='fa fa-plus'></i> Nueva Clínica
    </a>    
    <?php  }else{  ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Clínicas</h3> <a href="<?php echo base_url('Administrador/Clinicas/newCli'); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Nueva Clínica</a>
                </div>
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nombre clínica</th>
                                <th>Teléfono</th>
                                <th>Horario de atención</th>
                                <th>Email</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tr>
                        <?php foreach ($clinica as $clinica_item): ?>
                            <tr>
                                <td><?php echo ucfirst($clinica_item['nombre']); ?></td>
                                <td><?php echo $clinica_item['telefono1']; ?></td>
                                <td>
                                    <?php echo $clinica_item['dias']; ?><br>
                                    <?php echo $clinica_item['horario']; ?>
                                </td>
                                <td><?php echo $clinica_item['email']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('Administrador/Clinicas/view/'.$clinica_item['id_clinica']); ?>">
                                        <span class="label label-primary">Ver</span>
                                    </a>
                                    <a href="<?php echo base_url('Administrador/Clinicas/edit/'.$clinica_item['id_clinica']); ?>">
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
