<section class="content">
  <div class="row">
    <div class="col-md-12">

      <style type="text/css">
        .tg_H  {border-collapse:collapse;border-spacing:0;border:none;}
        .tg_H td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;}
        .tg_H th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;}
        .tg_H .tg_H-u9lb{font-weight:bold;text-decoration:underline;font-size:22px;font-family:"Comic Sans MS", cursive, sans-serif !important;;text-align:center;vertical-align:middle;}
        .tg_H .tg_H-t9ra{font-size:12px;font-family:Arial, Helvetica, sans-serif !important;;text-align:center;vertical-align:top}

        .tg  {border-collapse:collapse;border-spacing:0;border-color:#999;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
        .tg .tg-qzks{font-size:18px;font-family:"Lucida Console", Monaco, monospace !important;;text-align:center;vertical-align:top}
        .tg .tg-l2oz{font-weight:bold;text-align:right;vertical-align:top}
        .tg .tg-9hbo{font-weight:bold;vertical-align:top}
        .tg .tg-yw4l{vertical-align:top}
      </style>
      <!-- Cabecera -->
      <center>
        <table class="tg_H" style="undefined;table-layout: fixed; width: 100%">
          <tr>
            <th class="tg_H-031e" rowspan="2"><img src="<?php echo base_url(); ?>assets/dist/img/healthy-logo.png" width="210px" height="100px"></th>
            <th class="tg_H-u9lb" rowspan="2">Clinic Pet</th>
            <th class="tg_H-031e" rowspan="2"><img src="<?php echo base_url(); ?>assets/dist/img/healthy-logo.png" width="210px" height="100px"></th>
          </tr>
        </table>
      </center>
      <br>
      <!-- Cabecera -->
      <center>
        <table class="tg" style="undefined;table-layout: fixed; width: 100%">
          <tr>
            <th class="tg-qzks" colspan="6">Comprobante de Cita</th>
          </tr>
          <tr>
            <td class="tg-l2oz">Fecha:</td>
            <td class="tg-9hbo"><?php echo $citas['start']; ?></td>
            <td class="tg-l2oz">Turno:</td>
            <td class="tg-9hbo"><?php echo ucwords($citas['turno']); ?></td>
            <td class="tg-l2oz">Clave:</td>
            <td class="tg-yw4l"><?php echo $citas['clave']; ?></td>
          </tr>
          <tr>
            <td class="tg-l2oz">Cliente:</td>
            <td class="tg-9hbo" colspan="2">
              <?php echo ucwords($citas['cli'] . " " . $citas['cli_p'] . " " . $citas['cli_m']); ?>
            </td>
            <td class="tg-l2oz">Zootécnico:</td>
            <td class="tg-9hbo" colspan="2">
              <?php echo ucwords($citas['zoo'] . " " . $citas['zoo_p'] . " " . $citas['zoo_m']); ?>
            </td>
          </tr>
          <tr>
            <td class="tg-l2oz">Mascota:</td>
            <td class="tg-9hbo" colspan="2"><?php echo ucwords($citas['mascota']); ?></td>
            <td class="tg-l2oz">Motivo: </td>
            <td class="tg-9hbo" colspan="2"><?php echo ucwords($citas['motivo']); ?></td>
          </tr>
        </table>
      </center>
    </div>     
  </div>
</section>
