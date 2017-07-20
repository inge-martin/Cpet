<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registradas</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Empleado/Inicio'); ?>"><i class="fa fa-home"></i> Empleado  </a></li>
        <li><a href="#"> Menú Informativo</a></li>
        <li class="active">Clínicas</li>
    </ol>
</section>
<section class="content">
    <?php     if(empty($clinica)){        echo "<h3>Aun no hay clinicas.</h3>";    }else{        ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Clínicas</h3>
                </div>
                <div class="box-body">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 20%">Nombre</th>
                                <th style="width: 13%">Telefono1</th>
                                <th style="width: 13%">Telefono2</th>
                                <th style="width: 15%">Email</th>
                                <th style="width: 20%">Sitio Web</th>
                                <th style="width: 10%">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tr>
                        <?php foreach ($clinica as $clinica_item): ?>
                            <tr>
                                <td><?php echo ucwords($clinica_item['nombre']); ?></td>
                                <td><?php echo $clinica_item['telefono1']; ?></td>
                                <td><?php echo $clinica_item['telefono2']; ?></td>
                                <td><?php echo $clinica_item['email']; ?></td>
                                <td><?php echo $clinica_item['sitioweb']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('Empleado/Clinicas/view/'.$clinica_item['id_clinica']); ?>">
                                        <span class="label label-primary">Ver detalles</span>
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
