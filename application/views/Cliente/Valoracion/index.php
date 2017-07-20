<section class="content">
    <h2 class="page-header"><?php echo $title; ?></h2>
    <?php if(empty($valoracion)){        echo "<h3>Aun no hay datos, por favor agrega una valoracion.</h3>";    }else{        ?>

    <div class="row">
            <div class="col-md-3"></div>

        <?php foreach ($valoracion as $valoracion_item): ?>

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
                                        <?php for ($i=1; $i <= $valoracion_item['valoracion'] ; $i++) 
                                            echo "&nbsp;&nbsp;" . " <i class='fa fa-paw text-yellow fa-2x'></i> ";
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        <?php endforeach; ?>            
    </div>
    <?php } ?>
</section>