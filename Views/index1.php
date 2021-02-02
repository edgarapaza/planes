<?php
	session_start();
	include "header.php";
	require_once "../Models/planes.models.php";

	echo $idsubgerencia = $_REQUEST['idsubgerencia'];

	$_SESSION['idplanes1'] = $idsubgerencia;

	$planes = new Planes();
	$listaact = $planes->ListaActividadesDetalle($idsubgerencia);

	/*$info = $listaact->fetch_array(MYSQLI_ASSOC);
	
	$dataSG = $planes->ShowSubGerencia($info['idsubgerencia']);
	

	#echo $info['idgerencia'];*/
	
?>
	<center>
	<div class="h3"> 1 -------- <span class="badge bg-secondary">2</span> -------- 3 -------- 4</div>	
	</center>
	

	<form action="" method="post">
		<!-- LISTADO DE ACTIVIDADES -->
		<div class="row">
			
			<div class="col-sm-12">
				<div class="col-md-11">
				<h3>Acciones: <span class="bg-info"><?php echo $dataSG['subgerencia'];?></span></h3>
				<table class="table">
					<thead>
						<th>Num</th>
						<th>Tarea</th>
						<th>Meta</th>
						<th>Objetivo</th>
						
						<th>Opt</th>
					</thead>
					
					<tbody>
						<?php 
						$i=1;
						while ($fila3 = $listaact->fetch_array(MYSQLI_ASSOC)) :
							
						 ?>
						<tr>
							<?php  echo $fila3['idplanes1']; ?>
							<td><?php  echo $i; ?></td>
							<td><?php  echo $fila3['tarea']; ?></td>
							<td><?php  echo $fila3['meta']; ?></td>
							<td><?php  echo $fila3['objetivo']; ?></td>
							
							<td>
								<a href="indexsub.php?idprogfis=<?php echo 1; ?>">+Sub Act</a>
								
							</td>
						</tr>
						<?php 
							$i++;
							endwhile; 
						?>
					</tbody>
				</table>
				
			</div>	
			</div>
		</div>
			
	</form>

	<script src="js/inicio.js" type="text/javascript"></script>
	<script src="js/index.js"></script>

</body>

</html>

