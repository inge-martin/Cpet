<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registrados</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Empleado/Inicio'); ?>"><i class="fa fa-home"></i> Empleado  </a></li>
        <li><a href="#"> Menú Clientes</a></li>
        <li class="active">Clientes</li>
    </ol>
</section>
<section class="content">

    <?php  if(empty($cliente)){     ?>
    <h3>Aun no hay datos, por favor agrega un Cliente.</h3> 
    <a href="<?php echo base_url('Empleado/Clientes/newCli'); ?>" class='btn btn-success'>
        <i class='fa fa-plus'></i> Nuevo Cliente
    </a>    
    <?php  }else{  ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Clientes</h3> <a href="<?php echo base_url('Empleado/Clientes/newCli'); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Nuevo Cliente</a>
                </div> 
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nombre Cliente</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>F. Nacimiento</th>
                                <th>Sexo</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tr>
                        <?php foreach ($cliente as $cliente_item): ?>
                            <tr>
                                <td>
                                    <?php echo ucwords($cliente_item['cliente'] . " " .$cliente_item['ap_paterno'] . " " .$cliente_item['ap_materno']); ?>
                                </td>
                                <td><?php echo ucwords($cliente_item['telefono_local']); ?></td>
                                <td><?php echo $cliente_item['email']; ?></td>
                                <td><?php echo date("d-m-Y", strtotime($cliente_item['fecha_nacimiento'])); ?></td>
                                <td><?php echo $cliente_item['sexo']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('Empleado/Clientes/view/'.$cliente_item['id_cliente']); ?>">
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
</section>
