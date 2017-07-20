<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registradas</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Cliente/Inicio'); ?>"><i class="fa fa-home"></i> Cliente  </a></li>
        <li><a href="#"> Mi Menú</a></li>
        <li class="active"> Mascotas</li>
    </ol>
</section>
<section class="content">
  <?php     if(empty($mascota)){        echo "<h3>Aun no hay mascotas.</h3>";    }else{        ?>

  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
        <h3 class="box-title">Mascotas</h3>
        </div>
        <div class="box-body">
          <table id="datatable1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Estado</th>
                <th>Nombre</th>
                <th>Sexo</th>
                <th>Descripción</th>
                <th>F. Nacimiento</th>
                <th>Peso(Kg)</th>
                <th>Color</th>
                <th>Alergias</th>
                <th>Acción</th>
              </tr>
            </thead>
            <tbody>
            </tr>
            <?php foreach ($mascota as $mascota_item): ?>
              <tr>
                <td><?php echo ucfirst($mascota_item['status']); ?></td>
                <td><?php echo ucfirst($mascota_item['nombre']); ?></td>
                <td><?php echo ucfirst($mascota_item['sexo']); ?></td>
                <td><?php echo ucfirst($mascota_item['descripcion']); ?></td>
                <td><?php echo date("d-m-Y", strtotime($mascota_item['fecha_nacimiento'])); ?></td>
                <td><?php echo ucfirst($mascota_item['peso']); ?></td>
                <td><?php echo ucfirst($mascota_item['color']); ?></td>
                <td><?php echo ucfirst($mascota_item['alergias']); ?></td>
                <td>
                 <a href="<?php echo base_url('Cliente/Mascotas/view/'.$mascota_item['id_mascota']); ?>">
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
