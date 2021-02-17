<?php
session_start();
include "header.php";

require_once '../Models/planes.models.php';
$planes = new Planes();
$datacc = $planes->CentroCosto();
/*idcc, ccosto, abreviatura*/

$msg=$_REQUEST['msg'];
if(empty($msg))
{
}else{
	echo "<div class='alert alert-danger'>".$msg."</div>";
}

?>
<script src="js/index.js" type="text/javascript"></script>

	<center>
	<div class="h3"> <span class="">1</span> -------- 2 -------- 3 -------- 4</div>	
	</center>

	<form action="../Controllers/guardarplanes1.controller.php" method="post" enctype="multipart/form-data">


	<div class="container">
	<div class="input-field col s12">
    <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Materialize Select</label>
  </div>
	</div>
		<!-- Cabecera  -->
		<div class="row">

			<div class="">
			  <h3 class="h3 text-center bg-info">DATOS GENERALES</h3>
			  
				  <label for="centro_costo" class="col-sm-2">Centro de costo</label>
				<div class="input-field col s12">
				  
					<select name="ccosto" id="centro_costo" class="">
					 	<?php
					 		while ($fila= $datacc->fetch_array(MYSQLI_ASSOC)) :
					 	?>
					 	<option value="<?php echo $fila['idcc'];?>"><?php echo $fila['ccosto'];?></option>
					 	<?php 
					 		endwhile;
					 	?>
					</select>
					<label>Hola</label>
				  
				</div>
				<!-- <div class="form-group row">
					<label for="gerencia" class="col-sm-2 col-form-label">Municipalidad</label>
					<div class="col-sm-10">
          				<div id="d_gerencia"></div>
					</div>
				</div>

				<div class="form-group row">
				  <label for="unidad_organica" class="col-sm-2 col-form-label">Gerencia</label>
				  <div class="col-sm-10">
				  	<div id="d_subgerencia"></div>
				  </div>
				</div> -->


				<div class="form-group row">
				  <label for="tarea_presupuestal" class="col-sm-2 col-form-label">Tarea presupuestal</label>
				  <div class="col-sm-10">
					<input type="text" name="tarea_presupuestal" class="form-control" id="tarea_presupuestal" placeholder="">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="meta_presupuestal" class="col-sm-2 col-form-label">Meta Presupuestal</label>
				  <div class="col-sm-1">
					<input type="text" name="meta_presupuestal" class="form-control" id="meta_presupuestal" placeholder="">
				  </div>
				</div>

				<h3>Articulacion al Planeamiento Estrategico Institucional 2021</h3>
			  	<div class="form-group row">
					<label for="objetivo_general" class="col-sm-10 col-form-label">Alineado al Objetivo Estrategico</label>
					<div class="col-sm-6">
					  <div id="d_objetivo_estrategico"></div>
					</div>
					<div class="col-sm-6">
					  <button type="button" class="btn btn-success" ="btnAgregar">+ Agregar</button>
					</div>
			  	</div>

			  	<div class="form-group">
					<label for="objetivo_general" class="col-sm-10 col-form-label">Alineado a la Accion Estratégica</label>
					<div class="col-sm-12">
					  <div id="d_accion_estrategica"></div>
					</div>
			  	</div>

			</div>
		</div>
		<!-- Fin Cabecera -->
		<br>
		<div class="row">
			<div class="col">
				<button type="submit" class="btn btn-primary">Guardar</button>

			</div>
		</div>

  	</form>

<script type="text/javascript">
	$(document).ready(function(){
		$("#btnAgregar").click(function(){
			alert("aqui");
		});
	});
</script>