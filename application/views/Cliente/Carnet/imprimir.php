<!DOCTYPE html>
<html>
<head>       
  <meta charset="utf-8"> 
  <title>Clinic Pet | Clinica Veterinaria</title>
  <style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;border-color:#999;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
    .tg .tg-zv89{font-size:22px;font-family:"Comic Sans MS", cursive, sans-serif !important;;background-color:#00a5ac;text-align:center;vertical-align:center}
    .tg .tg-baqh{text-align:center;vertical-align:center;}
    .tg .tg-ibml{font-weight:bold;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif !important;;text-align:right;vertical-align:center}
    .tg .tg-ump51{text-align:center;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif !important;;vertical-align:center}
  </style>
  <style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;border-color:#999;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
    .tg .tg-zlxi{text-align:center;font-weight:bold;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif !important;;vertical-align:center}
    .tg .tg-1lgf{font-size:22px;font-family:"Comic Sans MS", cursive, sans-serif !important;;background-color:#d94560;text-align:center;vertical-align:center}
    .tg .tg-9hbo{font-weight:bold;vertical-align:center;text-align:center;}
    .tg .tg-yw4l{vertical-align:center;text-align:center;}
    .tg .tg-ump5{font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif !important;;vertical-align:top}
    /*.tg .tg-ump5{font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif !important;;vertical-align:center;text-align:center;}*/
  </style>
</head>
<body>

  <?php 
  for($i=0; $i<1; $i++)
  {
    ?>
    <center>

      <table class="tg" style="undefined;table-layout: fixed; width: 100%">
        <colgroup>
        <col style="width: 40%">
        <col style="width: 30%">
        <col style="width: 30%">
      </colgroup>
      <tr>
        <th class="tg-zv89" colspan="3">Carnet de Vacunación</th>
      </tr>
      <tr>
        <td class="tg-baqh" rowspan="11">
          <img src="<?php echo base_url(); ?>assets/image/fotos/mascota/<?php echo $carnet[$i]['fotografia']; ?>" style="height: auto; width: 300px;">
        </td>
        <td class="tg-ibml">Nombre:</td>
        <td class="tg-ump5"><?php echo ucwords($carnet[$i]['mascota']); ?></td>
      </tr>
      <tr>
        <td class="tg-ibml">F. Nacimiento:</td>
        <td class="tg-ump5"><?php echo date("d-m-Y", strtotime($carnet[$i]['fecha_nacimiento'])); ?></tr>
          <tr>
            <td class="tg-ibml">Peso:</td>
            <td class="tg-ump5"><?php echo ucwords($carnet[$i]['peso']); ?> Kg</td>
          </tr>
          <tr>
            <td class="tg-ibml">Sexo:</td>
            <td class="tg-ump5"><?php echo ucwords($carnet[$i]['sexo']); ?></td>
          </tr>
          <tr>
            <td class="tg-ibml">Alergias:</td>
            <td class="tg-ump5"><?php echo ucwords($carnet[$i]['alergias']); ?></td>
          </tr>
          <tr>
            <td class="tg-ibml">Habitad:</td>
            <td class="tg-ump5"><?php echo ucwords($carnet[$i]['Habitad']); ?></td>
          </tr>
          <tr>
            <td class="tg-ibml">Especie:</td>
            <td class="tg-ump5"><?php echo ucwords($carnet[$i]['Especie']); ?></td>
          </tr>
          <tr>
            <td class="tg-ibml">Raza:</td>
            <td class="tg-ump5"><?php echo ucwords($carnet[$i]['raza']); ?></td>
          </tr>
          <tr>
            <td class="tg-ibml">Dueño:</td>
            <td class="tg-ump5"><?php echo ucwords($carnet[$i]['cliente'] . " " .$carnet[$i]['cli_p'] . " " .$carnet[$i]['cli_m']); ?></td>
          </tr>
          <tr>
            <td class="tg-ibml">Zootécnico:</td>
            <td class="tg-ump5"><?php echo ucwords($carnet[$i]['zoo'] . " " .$carnet[$i]['zoo_p'] . " " .$carnet[$i]['zoo_m']); ?></td>
          </tr>
          <tr>
            <td class="tg-ibml">Clínica:</td>
            <td class="tg-ump5"><?php echo ucwords($carnet[$i]['clinica']); ?></td>
          </tr>
        </table>
        <?php } ?>

        <br>
        <table class="tg" style="undefined;table-layout: fixed; width: 100%">
          <colgroup>
          <col>
          <col>
          <col>
        </colgroup>
        <tr>
          <th class="tg-1lgf" colspan="3">Vacunas Aplicadas</th>
        </tr>
        <tr>
          <td class="tg-9hbo">Nombre de vacuna</td>
          <td class="tg-zlxi">Fecha de aplicación:</td>
          <td class="tg-zlxi">Proxima aplicación:</td>
        </tr>
        <?php 
        if (count($carnet)) {
          foreach ($carnet as $list) {
            ?>
            <tr>
              <td class="tg-yw4l"><?php echo ucwords($list['vacuna']); ?></td>
              <td class="tg-ump51"><?php echo date("d-m-Y", strtotime($list['fecha_aplicacion'])); ?></td>
              <td class="tg-ump51"><?php echo date("d-m-Y", strtotime($list['siguiente_aplicacion'])); ?></td>
            </tr>
            <?php
          }
        }
        ?>
      </table>
    </center>

  </body>
  </html>
