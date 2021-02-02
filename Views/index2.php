<?php
	session_start();
	include "header.php";
	require_once "../Models/planes.models.php";
	$idplanes = $_REQUEST['id'];

	$_SESSION['idplanes1'] = $idplanes;
	

	$planes = new Planes();
	$data = $planes->AccionesResumen($idplanes);
	
?>
	<center>
	<div class="h3"> 1 -------- <span class="badge bg-secondary">2</span> -------- 3 -------- 4</div>	
	</center>
	
<div class="container-fluid">
	

	<form action="../Controllers/guardarplanesactivities.controller.php" method="post">
		<!-- LISTADO DE ACTIVIDADES -->
		<div class="row">
			<div class="col-sm-10">
				<h2>Actividades planes</h2>
			</div>
			<div class="col-sm-2">
				<a href="#formulario" class="btn btn-success">+Agregar</a>
				
			</div>
		</div>
		<!-- TABLA DE DATOS -->
		<div class="row">
			
			<div class="col-sm-12">
				
				<table class="table">
					<thead>
						<th>Actividad</th>
						<th>Ene</th>
						<th>Feb</th>
						<th>Mar</th>
						<th>Abr</th>
						<th>May</th>
						<th>Jun</th>
						<th>Jul</th>
						<th>Ago</th>
						<th>Set</th>
						<th>Oct</th>
						<th>Nov</th>
						<th>Dic</th>
						<th>Total</th>
						<th>Opt</th>
					</thead>
					
					<tbody>
						<?php 
						#idprogfis,idplanes,actividad,descripcion,tarea,unimedida,prioridad,enero,febrero,marzo,abril,mayo,junio,julio,agosto,setiembre,octubre,noviembre,diciembre,total
						while ($fila = $data->fetch_array()):
						echo "idProgFisica: 	".$fila['idprogfis'];		
						 ?>
						<tr>
							<td><?php  echo $fila['actividad']; ?></td>
							<td><?php  echo $fila['enero']; ?></td>
							<td><?php  echo $fila['febrero']; ?></td>
							<td><?php  echo $fila['marzo']; ?></td>
							<td><?php  echo $fila['abril']; ?></td>
							<td><?php  echo $fila['mayo']; ?></td>
							<td><?php  echo $fila['junio']; ?></td>
							<td><?php  echo $fila['julio']; ?></td>
							<td><?php  echo $fila['agosto']; ?></td>
							<td><?php  echo $fila['setiembre']; ?></td>
							<td><?php  echo $fila['octubre']; ?></td>
							<td><?php  echo $fila['noviembre']; ?></td>
							<td><?php  echo $fila['diciembre']; ?></td>
							<td><?php  echo $fila['total']; ?></td>
							<td>
								<!-- <a href="indexsub.php?idprogfis=<?php echo $fila['idprogfis']; ?>">SA</a> -->
								<a href="index3.php?id=<?php echo $fila['idprogfis'];?>" class="btn btn-danger">Prog.Finan.>></a>
							</td>
						</tr>
						<?php 
							endwhile; 
						?>
					</tbody>
				</table>

			</div>
		</div>

		<br>
		<hr>

		<div class="row" id="formulario">

			<div class="col-md-12">
				<h3>Agregar nueva actividad</h3>
				<input type="hidden" name="idplanes" id="idplanes" value="<?php echo $idplanes;?>">

				
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
</div>
	<script src="js/inicio.js" type="text/javascript"></script>
	<script src="js/index.js"></script>

</body>

</html>

