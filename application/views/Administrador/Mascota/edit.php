<section class="content">
    <h2 class="page-header"><?php echo $title; ?></h2>

    <div class="row">
      <div class="col-md-6">

          <?php echo validation_errors(); ?>
          
          <?php echo form_open('Administrador/Adopcion/edit/'.$adopcion['id_animales_adopcion']); ?>
          <table>
            <tr>
                <td><label for="nombre">Nombre</label></td>
                <td><input type="text" name="nombre" size="50" value="<?php echo $adopcion['nombre'] ?>" /></td>
            </tr>
            <tr>
                <td><label for="raza">Raza</label></td>
                <td><input type="text" name="raza" size="50" value="<?php echo $adopcion['raza'] ?>" /></td>
            </tr>
            <tr>
                <td><label for="edad">Edad</label></td>
                <td><input type="numeric" name="edad" size="50" value="<?php echo $adopcion['edad'] ?>" /></td>
            </tr>
             <tr>
                <td><label for="color">Color</label></td>
                <td><input type="text" name="color" size="50" value="<?php echo $adopcion['color'] ?>" /></td>
            </tr>
             <tr>
                <td><label for="especie">Especie</label></td>
                <td><input type="text" name="especie" size="50" value="<?php echo $adopcion['especie'] ?>" /></td>
            </tr>
             <tr>
                <td><label for="foto">Foto</label></td>
                <td><input type="text" name="foto" size="50" value="<?php echo $adopcion['foto'] ?>" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Guardar" /></td>
            </tr>
        </table>
    </form>

</div>
</div>
</section>