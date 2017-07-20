  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Expediente Medico</title>
    <style type="text/css">
      .tg_H  {border-collapse:collapse;border-spacing:0;border:none;}
      .tg_H td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;}
      .tg_H th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;}
      .tg_H .tg_H-u9lb{font-weight:bold;text-decoration:underline;font-size:22px;font-family:"Comic Sans MS", cursive, sans-serif !important;;text-align:center;vertical-align:middle;}
      .tg_H .tg_H-t9ra{font-size:12px;font-family:Arial, Helvetica, sans-serif !important;;text-align:center;vertical-align:top}

      .tg_Cli  {border-collapse:collapse;border-spacing:0;border-color:#999;}
      .tg_Cli td{font-family:Arial, sans-serif;font-size:14px;padding:3px 5px;;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;border-top-width:1px;border-bottom-width:1px;}
      .tg_Cli th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:3px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;border-top-width:1px;border-bottom-width:1px;}
      .tg_Cli .tg_Cli-lqy6{text-align:right;vertical-align:top;font-weight:bold;}
      .tg_Cli .tg_Cli-13pz{font-size:18px;text-align:center;vertical-align:top}
      .tg_Cli .tg_Cli-yw4l{vertical-align:top}
      .tg_Cli .tg_Cli-zi9w{font-size:14px;text-align:center;vertical-align:top;font-weight:bold;}

      .tg_Zoo  {border-collapse:collapse;border-spacing:0;border-color:#999;}
      .tg_Zoo td{font-family:Arial, sans-serif;font-size:14px;padding:3px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
      .tg_Zoo th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:3px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
      .tg_Zoo .tg_Zoo-13pz{font-size:18px;text-align:center;vertical-align:top}
      .tg_Zoo .tg_Zoo-izya{font-size:18px;text-align:center}
      .tg_Zoo .tg_Zoo-hgcj{font-weight:bold;text-align:center}
      .tg_Zoo .tg_Zoo-34fq{font-weight:bold;text-align:right}

      .tg_Cli  {border-collapse:collapse;border-spacing:0;border-color:#999;}
      .tg_Cli td{font-family:Arial, sans-serif;font-size:14px;padding:3px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
      .tg_Cli th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:3px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
      .tg_Cli .tg_Cli-13pz{font-size:18px;text-align:center;vertical-align:top}
      .tg_Cli .tg_Cli-izya{font-size:18px;text-align:center}
      .tg_Cli .tg_Cli-hgcj{font-weight:bold;text-align:center}
      .tg_Cli .tg_Cli-34fq{font-weight:bold;text-align:right}

      .tg_Mas  {border-collapse:collapse;border-spacing:0;border-color:#999;}
      .tg_Mas td{font-family:Arial, sans-serif;font-size:14px;padding:3px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
      .tg_Mas th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:3px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
      .tg_Mas .tg_Mas-s6z2{font-size:18px;text-align:center;vertical-align:top}
      .tg_Mas .tg_Mas-lqy6{font-weight: bold;text-align:right;vertical-align:top}
      .tg_Mas .tg_Mas-yw4l{vertical-align:top}

      .tg_Vac  {border-collapse:collapse;border-spacing:0;border-color:#999;}
      .tg_Vac td{font-family:Arial, sans-serif;font-size:14px;padding:3px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
      .tg_Vac th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:3px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
      .tg_Vac .tg_Vac-izya{font-size:18px;text-align:center}
      .tg_Vac .tg_Vac-34fq{font-weight:bold;text-align:right}
      .tg_Vac .tg_Vac-yw4l{vertical-align:top}

      .tg_Con  {border-collapse:collapse;border-spacing:0;border-color:#999;}
      .tg_Con td{font-family:Arial, sans-serif;font-size:14px;padding:3px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
      .tg_Con th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:3px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
      .tg_Con .tg_Con-izya{font-size:18px;text-align:center}
      .tg_Con .tg_Con-l2oz{font-weight:bold;text-align:right;vertical-align:top}
      .tg_Con .tg_Con-yw4l{vertical-align:top}
      .tg_Con .tg_Con-34fq{font-weight:bold;text-align:right}
    </style>
  </head>
  <body>

    <!-- Cabecera -->
    <center>
      <table class="tg_H" style="undefined;table-layout: fixed; width: 100%">
        <tr>
          <th class="tg_H-031e" rowspan="2"><img src="<?php echo base_url(); ?>assets/dist/img/healthy-logo.png" width="210px" height="100px"></th>
          <th class="tg_H-u9lb" rowspan="2">Expediente Clinico</th>
          <th class="tg_H-031e" rowspan="2"><img src="<?php echo base_url(); ?>assets/dist/img/healthy-logo.png" width="210px" height="100px"></th>
        </tr>
      </table>
    </center>
    <br>
    <!-- Cabecera -->

    <!-- Clinica -->
    <center>
      <table class="tg_Cli" style="undefined;table-layout: fixed; width: 100%">
        <tr>
          <th class="tg_Cli-13pz" colspan="4">Clínica</th>
        </tr>
        <tr>
          <td class="tg_Cli-lqy6">Nombre:</td>
          <td class="tg_Cli-yw4l"><?php echo ucwords($clinica['nombre']); ?></td>
          <td class="tg_Cli-lqy6">Sitio Web:</td>
          <td class="tg_Cli-yw4l"><?php echo ucwords($clinica['sitioweb']); ?></td>
        </tr>
        <tr>
          <td class="tg_Cli-lqy6">Días de atención:</td>
          <td class="tg_Cli-yw4l"><?php echo ucwords($clinica['dias']); ?></td>
          <td class="tg_Cli-lqy6">Horario:</td>
          <td class="tg_Cli-yw4l"><?php echo ucwords($clinica['horario']); ?></td>
        </tr>
        <tr>
          <td class="tg_Cli-lqy6">Email:</td>
          <td class="tg_Cli-yw4l"><?php echo ucwords($clinica['email']); ?></td>
          <td class="tg_Cli-lqy6">Teléfonos de atención:</td>
          <td class="tg_Cli-yw4l"><?php echo ucwords($clinica['telefono1']. " / ". $clinica['telefono2']); ?></td>
        </tr>
        <tr>
          <td class="tg_Cli-zi9w" colspan="4">Domicilio</td>
        </tr>
        <tr>
          <td class="tg_Cli-lqy6">Estado:</td>
          <td class="tg_Cli-yw4l"><?php echo ucwords($clinica['estado']); ?></td>
          <td class="tg_Cli-lqy6">Calle:</td>
          <td class="tg_Cli-yw4l"><?php echo ucwords($clinica['calle']); ?></td>
        </tr>
        <tr>
          <td class="tg_Cli-lqy6">Municipio:</td>
          <td class="tg_Cli-yw4l"><?php echo ucwords($clinica['municipio']); ?></td>
          <td class="tg_Cli-lqy6">Número:</td>
          <td class="tg_Cli-yw4l"><?php echo ucwords($clinica['numero']); ?></td>
        </tr>
        <tr>
          <td class="tg_Cli-lqy6">Localidad:</td>
          <td class="tg_Cli-yw4l"><?php echo ucwords($clinica['localidad']); ?></td>
          <td class="tg_Cli-lqy6">Lote:</td>
          <td class="tg_Cli-yw4l"><?php echo ucwords($clinica['lote']); ?></td>
        </tr>
        <tr>
          <td class="tg_Cli-lqy6">C.P.:</td>
          <td class="tg_Cli-yw4l"><?php echo ucwords($clinica['cp']); ?></td>
          <td class="tg_Cli-lqy6">Manzana:</td>
          <td class="tg_Cli-yw4l"><?php echo ucwords($clinica['manzana']); ?></td>
        </tr>
      </table>
    </center>
    <br>
    <br>
    <!-- Clinica -->

    <!-- Zootecnico -->
    <center>
      <table class="tg_Zoo" style="undefined;table-layout: fixed; width: 100%">
        <tr>
          <th class="tg_Zoo-13pz" colspan="6">Zootécnico</th>
        </tr>
        <tr>
          <td class="tg_Zoo-hgcj" colspan="2"><?php echo ucwords($zootecnico['nombre'] . " ". $zootecnico['ap_paterno'] . " " . $zootecnico['ap_materno']); ?></td>
          <td class="tg_Zoo-34fq">Cédula:</td>
          <td class="tg_Zoo-031e"><?php echo ucwords($zootecnico['cedula']); ?></td>
          <td class="tg_Zoo-34fq">Email:</td>
          <td class="tg_Zoo-031e"><?php echo ucwords($zootecnico['email']); ?></td>
        </tr>
        <tr>
          <td class="tg_Zoo-031e" colspan="2" rowspan="7">
            <center>
              <img class="img-responsive img-thumbnail" style="height: 150px; width: 150px;"
              src="<?php echo base_url('assets/image/fotos/zootecnico/') . $zootecnico['fotografia']; ?>">
            </center>
          </td>
          <td class="tg_Zoo-34fq">Teléfono Local:</td>
          <td class="tg_Zoo-031e"><?php echo ucwords($zootecnico['telefono_local']); ?></td>
          <td class="tg_Zoo-34fq">Teléfono Celular</td>
          <td class="tg_Zoo-031e"><?php echo ucwords($zootecnico['telefono_celular']); ?></td>
        </tr>
        <tr>
          <td class="tg_Zoo-34fq">Sexo:</td>
          <td class="tg_Zoo-031e"><?php echo ucwords($zootecnico['sexo']); ?></td>
          <td class="tg_Zoo-34fq">F. Nacimiento:</td>
          <td class="tg_Zoo-031e"><?php echo date("d-m-Y", strtotime($zootecnico['fecha_nacimiento'])); ?></td>
        </tr>
        <tr>
          <td class="tg_Zoo-hgcj" colspan="4">Domicilio</td>
        </tr>
        <tr>
          <td class="tg_Zoo-34fq">Estado:</td>
          <td class="tg_Zoo-031e"><?php echo ucwords($zootecnico['estado']); ?></td>
          <td class="tg_Zoo-34fq">Calle:</td>
          <td class="tg_Zoo-031e"><?php echo ucwords($zootecnico['calle']); ?></td>
        </tr>
        <tr>
          <td class="tg_Zoo-34fq">Municipio:</td>
          <td class="tg_Zoo-031e"><?php echo ucwords($zootecnico['municipio']); ?></td>
          <td class="tg_Zoo-34fq">Número:</td>
          <td class="tg_Zoo-031e"><?php echo ucwords($zootecnico['numero']); ?></td>
        </tr>
        <tr>
          <td class="tg_Zoo-34fq">Localidad:</td>
          <td class="tg_Zoo-031e"><?php echo ucwords($zootecnico['localidad']); ?></td>
          <td class="tg_Zoo-34fq">Lote:</td>
          <td class="tg_Zoo-031e"><?php echo ucwords($zootecnico['lote']); ?></td>
        </tr>
        <tr>
          <td class="tg_Zoo-34fq">C.P.:</td>
          <td class="tg_Zoo-031e"><?php echo ucwords($zootecnico['cp']); ?></td>
          <td class="tg_Zoo-34fq">Manzana:</td>
          <td class="tg_Zoo-031e"><?php echo ucwords($zootecnico['manzana']); ?></td>
        </tr>
      </table>
    </center>
    <br>
    <br>
    <!-- Zootecnico -->

    <!-- Cliente -->
    <center>
      <table class="tg_Cli" style="undefined;table-layout: fixed; width: 100%">
        <tr>
          <th class="tg_Cli-13pz" colspan="6">Cliente</th>
        </tr>
        <tr>
          <td class="tg_Cli-hgcj" colspan="2"><?php echo ucwords($cliente['nombre'] . " ". $cliente['ap_paterno'] . " " . $cliente['ap_materno']); ?></td>
          <td class="tg_Cli-34fq">Email:</td>
          <td class="tg_Cli-031e"><?php echo ucwords($cliente['email']); ?></td>
          <td class="tg_Cli-34fq"></td>
          <td class="tg_Cli-031e"></td>
        </tr>
        <tr>
          <td class="tg_Cli-031e" colspan="2" rowspan="7">
            <center>
              <img class="img-responsive img-thumbnail" style="height: 150px; width: 150px;"
              src="<?php echo base_url('assets/image/fotos/cliente/') . $cliente['fotografia']; ?>">
            </center>
          </td>
          <td class="tg_Cli-34fq">Sexo:</td>
          <td class="tg_Cli-031e"><?php echo ucwords($cliente['sexo']); ?></td>
          <td class="tg_Cli-34fq">F. Nacimiento:</td>
          <td class="tg_Cli-031e"><?php echo date("d-m-Y", strtotime($cliente['fecha_nacimiento'])); ?></td>
        </tr>               
        <tr>
          <td class="tg_Cli-34fq">Teléfono Local:</td>
          <td class="tg_Cli-031e"><?php echo ucwords($cliente['telefono_local']); ?></td>
          <td class="tg_Cli-34fq">Teléfono Celular:</td>
          <td class="tg_Cli-031e"><?php echo ucwords($cliente['telefono_celular']); ?></td>
        </tr>
        <tr>
          <td class="tg_Cli-hgcj" colspan="4">Domicilio</td>
        </tr>
        <tr>
          <td class="tg_Cli-34fq">Estado:</td>
          <td class="tg_Cli-031e"><?php echo ucwords($cliente['estado']); ?></td>
          <td class="tg_Cli-34fq">Calle:</td>
          <td class="tg_Cli-031e"><?php echo ucwords($cliente['calle']); ?></td>
        </tr>
        <tr>
          <td class="tg_Cli-34fq">Municipio:</td>
          <td class="tg_Cli-031e"><?php echo ucwords($cliente['municipio']); ?></td>
          <td class="tg_Cli-34fq">Número:</td>
          <td class="tg_Cli-031e"><?php echo ucwords($cliente['numero']); ?></td>
        </tr>
        <tr>
          <td class="tg_Cli-34fq">Localidad:</td>
          <td class="tg_Cli-031e"><?php echo ucwords($cliente['localidad']); ?></td>
          <td class="tg_Cli-34fq">Lote:</td>
          <td class="tg_Cli-031e"><?php echo ucwords($cliente['lote']); ?></td>
        </tr>
        <tr>
          <td class="tg_Cli-34fq">C.P.:</td>
          <td class="tg_Cli-031e"><?php echo ucwords($cliente['cp']); ?></td>
          <td class="tg_Cli-34fq">Manzana:</td>
          <td class="tg_Cli-031e"><?php echo ucwords($cliente['manzana']); ?></td>
        </tr>
      </table>
    </center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Cliente -->

    <!-- Mascota -->
    <center>
      <table class="tg_Mas" style="undefined;table-layout: fixed; width: 100%">
        <tr>
          <th class="tg_Mas-s6z2" colspan="6">Mascota</th>
        </tr>
        <tr>
          <td class="tg_Mas-s6z2" colspan="2" rowspan="5">
            <center>
              <img class="img-responsive img-thumbnail" style="height: 150px; width: 150px;"
              src="<?php echo base_url('assets/image/fotos/mascota/') . $mascota['fotografia']; ?>">
            </center>            
          </td>
          <td class="tg_Mas-lqy6">Nombre:</td>
          <td class="tg_Mas-yw4l"><?php echo ucwords($mascota['nombre']); ?></td>
          <td class="tg_Mas-lqy6">Sexo:</td>
          <td class="tg_Mas-yw4l"><?php echo ucwords($mascota['sexo']); ?></td>
        </tr>
        <tr>
          <td class="tg_Mas-lqy6">F. Nacimiento:</td>
          <td class="tg_Mas-yw4l"><?php echo date("d-m-Y", strtotime($mascota['fecha_nacimiento'])); ?></td>
          <td class="tg_Mas-lqy6">Color:</td>
          <td class="tg_Mas-yw4l"><?php echo ucwords($mascota['color']); ?></td>
        </tr>
        <tr>
          <td class="tg_Mas-lqy6">Peso:</td>
          <td class="tg_Mas-yw4l"><?php echo ucwords($mascota['peso']); ?> Kg.</td>
          <td class="tg_Mas-lqy6">Habitad:</td>
          <td class="tg_Mas-yw4l"><?php echo ucwords($mascota['habitad']); ?></td>
        </tr>
        <tr>
          <td class="tg_Mas-lqy6">Especie:</td>
          <td class="tg_Mas-yw4l"><?php echo ucwords($mascota['especie']); ?></td>
          <td class="tg_Mas-lqy6">Raza:</td>
          <td class="tg_Mas-yw4l"><?php echo ucwords($mascota['raza']); ?></td>
        </tr>
        <tr>
          <td class="tg_Mas-lqy6">Alergias:</td>
          <td class="tg_Mas-yw4l"><?php echo ucwords($mascota['alergias']); ?></td>
          <td class="tg_Mas-lqy6">Descripción:</td>
          <td class="tg_Mas-yw4l"><?php echo ucwords($mascota['descripcion']); ?></td>
        </tr>
      </table>
    </center>
    <br>
    <br>
    <!-- Mascota -->

    <!-- Vacunas -->
    <center>
      <table class="tg_Vac" style="undefined;table-layout: fixed; width: 100%">
        <tr>
          <th class="tg_Vac-izya" colspan="6">Vacunas Aplicadas</th>
        </tr>
        <?php foreach ($vacuna as $vacuna_item): ?>
          <tr>
            <td class="tg_Vac-34fq">Nombre de vacuna:</td>
            <td class="tg_Vac-031e"><?php echo ucwords($vacuna_item['nombre']); ?></td>
            <td class="tg_Vac-34fq">Fecha de aplicación:</td>
            <td class="tg_Vac-yw4l"><?php echo  date("d-m-Y", strtotime($vacuna_item['fecha_aplicacion'])); ?></td>
            <td class="tg_Vac-34fq">Proxima aplicación:</td>
            <td class="tg_Vac-yw4l"><?php echo  date("d-m-Y", strtotime($vacuna_item['siguiente_aplicacion'])); ?></td>
          </tr>
        <?php endforeach; ?>            
      </table>
    </center>
    <br>
    <br>
    <!-- Vacunas -->

    <!-- Consultas -->
    <center>
      <table class="tg_Con" style="undefined;table-layout: fixed; width: 100%">
        <tr>
          <th class="tg_Con-izya" colspan="4">Consultas Realizadas</th>
        </tr>
        <?php foreach ($consulta as $consulta_item): ?>
          <tr>
            <td class="tg_Con-l2oz">Fecha:</td>
            <td class="tg_Con-yw4l"><?php echo date('d-m-Y', strtotime($consulta_item['fecha_consulta'])); ?></td>
            <td class="tg_Con-l2oz">Detalle:</td>
            <td class="tg_Con-yw4l"><?php echo ucwords($consulta_item['detalle_revision']); ?></td>
          </tr>
          <tr>
            <td class="tg_Con-34fq">Tratamiento:</td>
            <td class="tg_Con-031e"><?php echo ucwords($consulta_item['tratamiento']); ?></td>
            <td class="tg_Con-34fq">Servicio:</td>
            <td class="tg_Con-yw4l"><?php echo ucwords($consulta_item['servicio']); ?></td>
          </tr>
          <tr>
            <th class="tg_Con-izya" colspan="4"></th>
          </tr>
        <?php endforeach; ?>            
      </table>
    </center>
    <br>
    <!-- Consultas -->

  </body>
  </html>