<?php
	session_start();
	include "header.php";
	require_once "../Models/planes.models.php";
	echo $idprogfis = $_REQUEST['idprogfis'];

	
	
?>
	<center>
	<div class="h3"> 1 -------- <span class="badge bg-secondary">2</span> -------- 3 -------- 4</div>	
	</center>
	

	<form action="../Controllers/guardarplanesactivities.controller.php" method="post" enctype="multipart/form-data">
		<!-- LISTADO DE ACTIVIDADES -->
		<div class="row">
			<h3>SUB ACTIVIDADES</h3>
			<div class="col-md-12">

				<input type="text" name="idplanes" id="idplanes" value="<?php echo $idplanes;?>">

				
				<div class="form-group row">
				  <label for="actividad_princial" class="col-sm-2 col-form-label">Actividad:</label>
				  <div class="col-sm-10">
					<input type="text" name="actividad_princial" id="actividad_princial" class="form-control">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="description_princial" class="col-sm-2 col-form-label">Descripcion:</label>
				  <div class="col-sm-10">
					<input type="text" name="description_princial" id="description_princial" class="form-control">
				  </div>
				</div>

				<div class="row">

					<div class="col-md-8">
						<div class="form-group">
						  <label for="tarea" class="col-sm-2 col-form-label"></label>
						  <div class="col-sm-12">
						  	<input type="text" class="form-control" name="txtTarea" id="txtTarea">
						  </div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label for="tarea" class="col-sm-10 col-form-label">Unidad Medida:</label>
							<div class="col-sm-10">
							  	<select name="unidad_medida" id="unidad_medida" class="form-control">
							  		<option value="0">[Seleccionar]</option>
							  		<option value="1">Unidad</option>
							  		<option value="2">Millar</option>
							  		<option value="3">Litro</option>
							  		<option value="4">Galon</option>
							  		<option value="5">Metros</option>

							  	</select>
							</div>

							<label for="tarea" class="col-sm-3 col-form-label">Prioridad:</label>
							<div class="col-sm-10">
							  	<select name="prioridad" id="prioridad" class="form-control">
							  		<option value="0">[Seleccionar]</option>
							  		<option value="1">Baja</option>
							  		<option value="2">Media</option>
							  		<option value="3">Alta</option>
							  	</select>
							</div>

						</div>
					</div>

				</div>

				<div class="row">
					<div class="col-md-12">
						<table class="table table-sm">
						  		<thead>
						  			<tr>
						  				<th colspan="13">Programación Física</th>
						  			</tr>
						  			<tr>
						  				<th>Enero</th>
						  				<th>Febrero</th>
						  				<th>Marzo</th>
						  				<th>Abril</th>
						  				<th>Mayo</th>
						  				<th>Junio</th>
						  				<th>Julio</th>
						  				<th>Agosto</th>
						  				<th>Setiembre</th>
						  				<th>Octubre</th>
						  				<th>Noviembre</th>
						  				<th>Diciembre</th>
						  				<th>Total</th>
						  			</tr>
						  		</thead>
						  		<tbody>
						  			<td><input type="text" value="0" name="txtEnero" id="txtEnero" size="4" placeholder=""></td>
						  			<td><input type="text" value="0" name="txtFebrero" id="txtFebrero" size="4" placeholder=""></td>
						  			<td><input type="text" value="0" name="txtMarzo" id="txtMarzo" size="4" placeholder=""></td>
						  			<td><input type="text" value="0" name="txtAbril" id="txtAbril" size="4" placeholder=""></td>
						  			<td><input type="text" value="0" name="txtMayo" id="txtMayo" size="4" placeholder=""></td>
						  			<td><input type="text" value="0" name="txtJunio" id="txtJunio" size="4" placeholder=""></td>
						  			<td><input type="text" value="0" name="txtJulio" id="txtJulio" size="4" placeholder=""></td>
						  			<td><input type="text" value="0" name="txtAgosto" id="txtAgosto" size="4" placeholder=""></td>
						  			<td><input type="text" value="0" name="txtSetiembre" id="txtSetiembre" size="4" placeholder=""></td>
						  			<td><input type="text" value="0" name="txtOctubre" id="txtOctubre" size="4" placeholder=""></td>
						  			<td><input type="text" value="0" name="txtNoviembre" id="txtNoviembre" size="4" placeholder=""></td>
						  			<td><input type="text" value="0" name="txtDiciembre" id="txtDiciembre" size="4" placeholder=""></td>
						  			<td><input type="text" name="txtTotal" id="txtTotal" size="4" readonly=""></td>
						  		</tbody>
						</table>
					</div>
				</div>
			</div>

			
			<div class="col-md-1">
				<!-- Botón en HTML (lanza el modal en Bootstrap) -->
				<button type="submit" class="btn btn-info">Guardar </button>
				
			</div>
		</div>
		<!-- FIN DE LISTADO DE ACTIVIDADES -->	
	
	</form>

	<script src="js/inicio.js" type="text/javascript"></script>
	<script src="js/index.js"></script>

</body>

</html>
