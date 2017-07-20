<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Registradas</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Administrador/Inicio'); ?>"><i class="fa fa-home"></i> Administrador  </a></li>
        <li><a href="#"> Menú Ayudas</a></li>
        <li class="active">Valoraciones</li>
    </ol>
</section>
<section class="content">
    <!-- <h2 class="page-header"><?php echo $title; ?></h2> -->
    <?php if(empty($valoracion)){        echo "<h3>Aun no realizan valoraciones.</h3>";    }else{        ?>

    <div class="row">
        <?php foreach ($valoracion as $valoracion_item): ?>
            <!-- <div class="col-md-3"></div> -->

            <div class="col-md-6">

                <div class="box box-widget widget-user">

                    <div class="widget-user-header bg-black" style="background: url('<?php echo base_url('assets/image/fotos/clinica/clinic.jpg'); ?>') center center;">
                        <center>
                            <h3 class="widget-user-username" style="color: black"><?php echo ucwords($valoracion_item['clinica']); ?></h3>
                            <h5 class="widget-user-desc" style="color: black"><?php echo $valoracion_item['telefono1']; ?></h5>
                        </center>
                    </div>

                    <div class="widget-user-image">
                        <img class="img-circle" src="<?php echo base_url('assets/image/fotos/zootecnico/') . $valoracion_item['foto_zoo']; ?>">
                    </div>

                    <div class="box-footer">
                        <div class="row">
                            <div class="col-sm-12 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">
                                        <?php echo ucwords($valoracion_item['zootecnico'] . " " . 
                                        $valoracion_item['ap_paterno'] . " " . $valoracion_item['ap_materno']);?>
                                    </h5>
                                    <span><?php echo ucfirst($valoracion_item['cedula']); ?></span>
                                </div>
                            </div>
                            <div class="col-sm-12 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">Valoración</h5>
                                    <br>
                                    <span class="description-text">
                                        <?php 
                                        if($valoracion_item['valoracion'] == 0){
                                            echo "Aún no realiza la valoración";
                                        }else{

                                            ?>
                                            <?php 
                                            for ($i=1; $i <= $valoracion_item['valoracion'] ; $i++) 
                                                echo "&nbsp;&nbsp;" . " <i class='fa fa-paw text-yellow fa-2x'></i> ";
                                        }
                                        ?>
                                    </span>
                                    <br>
                                    <br>
                                    <h5 class="description-header">Por el cliente: 
                                        <?php echo ucwords($valoracion_item['cli'] . " " . 
                                        $valoracion_item['cli_p'] . " " . $valoracion_item['cli_m']);?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
            <!-- <div class="col-md-3"></div>            -->
        <?php endforeach; ?> 
    </div>
    <?php } ?>
</section>