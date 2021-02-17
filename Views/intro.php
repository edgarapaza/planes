<?php 
include "header.php"; 
require_once "../Models/planes.models.php";
$planes = new Planes();
$data = $planes->ListActivities();

?>

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h3>Listado de Planes registrados</h3>
		</div>
		<div class="col-md-2">
			<select name="anio" class="form-control">
				<option value="2021">2021</option>
				<option value="2022">2022</option>
				<option value="2023">2023</option>
				<option value="2024">2024</option>
				<option value="2025">2015</option>
			</select>
		</div>

	</div>

	<div class="row">
		<div class="col-sm-12">
			
			<table class="table">
				<thead>
					<tr>
						<th>Num</th>
						<th>Centro de Costo</th>
						<th>Tarea presupuestal</th>
						<th>META</th>
						<th>Opc</th>
					</tr>
				</thead>
				<tbody>
					<?php
						
						while ($fila = $data->fetch_array(MYSQLI_ASSOC)):
							/*idplanes1,idsubgerencia,tarea, meta, objetivo*/
					?>
						<tr>
							<td>1 <?php echo $fila['idplanes1'];?></td>
							<td>
								<?php 
									$subgerenc = $planes->ActivitiNames($fila['idsubgerencia']);
									echo $subgerenc['subgerencia'];
								?>
							</td>
							<td><?php echo $fila['tarea'];?></td>
							<td>
								<?php echo $fila['meta'];?>
							</td>
								 
							<td><a href="#" class="button" onclick="Codigo(<?php echo $fila['idplanes1'];?>)"> >> </a></td>
						</tr>
					
					<?php

						
						endwhile;
					?>
				</tbody>
			</table>
		</div>
		
	</div>
</div>


<script type="text/javascript">
	var codver
	function Codigo(micodigo)
	{
	
		location.href = "index2.php?id=" + micodigo;
	}
	
</script>