<?php
include "header.php";

$cadena = trim(strtolower($_REQUEST['bien']));
#echo $cadena;
$separado = explode(" ",$cadena);

$union = implode("%",$separado);
#echo $union;

require_once "../Models/bienes.model.php";

$bienes = new Bienes();
$data = $bienes->ShowBienes($union);

?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>Buscador de bienes</h2>
      <form action="" class="">

        <div class="col-md-12 form-group row">
          <label for="" class="col-sm-1">Buscador</label>
          <div class="col-sm-7">
            <input type="text" name="bien" id="bien" value="<?php echo $cadena;?>" class="form-control">
          </div>
          <div class="col-sm-4">
            <button type="submit" class="btn btn-primary">Buscar</button>
          </div>
        </div>
      </form>

      <div class="col-md-12">
        <div id="tabla">tabla</div>
        <table class="table">
          <thead>
            <th>Nombre Bien</th>
            <th>Tip. Gasto</th>
            <th>Clasificador</th>
            <th>Nombre Clasificador</th>
            <th>Unidad Medida</th>
            <th>Precio unitario en Soles</th>
          </thead>

          <tbody>
          <?php while($fila = $data->fetch_array(MYSQLI_ASSOC)):?>
            <tr>

              <td><?php echo $fila['bien_nombre']; ?> </td>
              <td><?php echo $fila['tipogast_id']; ?> </td>
              <td><?php echo $fila['clasificador']; ?> </td>
              <td><?php echo $fila['nombre_clasificador']; ?> </td>
              <td><?php echo $fila['unidad_medida']; ?> </td>
              <td><?php echo $fila['pre_unit_soles']; ?> </td>
              <td><button class="btn btn-success">+</button></td>
            </tr>

            <?php endwhile;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
