<?php
	session_start();
	require_once("header.php");
	require_once "../Models/planes.models.php";
	
	$id = $_REQUEST['id'];
	$idplanes = $_SESSION['idplanes1'];

	$planes = new Planes();
	$dataprog = $planes->ListaProgrActividades($idplanes);

?>
	<style type="text/css" media="screen">
	  .display_box{
		border: 1px solid blue;
		background-color: #e3e3e3;
		padding: 2px;
		height: 200px;
		width: 900px;

	  }
	  .caja{
		display: block;
	  }
	  li{
		list-style: none;
	  }
	  .clasificador{
		color: green;
	  }
	  .texto{
		/*border: 1px solid orange;*/
		color: blue;
	  }
	</style>
	

<h3>PROGRAMACIÓN FINANCIERA</h3>
<center>
	<div> 1 -------- 2 -------- <span class="">3</span> -------- 4</div>	
</center>


<button type="button" name="btnClasificador" id="btnClasificador" class="button success">Clasificador +</button>


<div class="grid-x grid-margin-x">
	
	<input type="hidden" class="" name="idespecifica" id="idespecifica">
	<label for="">Equipos/servicio: *</label>
	<input type="text" class="cell medium-3" name="equipos" id="equipos">
	<label for="">Codigo  : </label>
	<input type="text" class="cell medium-3" name="especifica" id="especifica">
	<label for="">Descripcion: </label>
	<input type="text" class="cell medium-7" name="descripcion" id="descripcion">
	
	<label for="">Nombre:</label>
	<input type="text" class="cell medium-3" name="nombre" id="nombre">
	
	<label for="">Cantidad:</label>
	<input type="number" min="1" value="1" class="cell medium-3" name="cantidad" id="cantidad">

	<input type="hidden" name="idplanes" value="<?php echo $idplanes;?>">
	<input type="hidden" name="idprogfis" value="<?php echo $id;?>">
</div>

<div class="grid-x">
	<table class="">
			<thead>
				<tr>
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
				</tr>
			</thead>
			<tbody>
	  			<td><input type="text" value="0" name="txtEnero" id="txtEnero" size="4"></td>
	  			<td><input type="text" value="0" name="txtFebrero" id="txtFebrero" size="4"></td>
	  			<td><input type="text" value="0" name="txtMarzo" id="txtMarzo" size="4"></td>
	  			<td><input type="text" value="0" name="txtAbril" id="txtAbril" size="4"></td>
	  			<td><input type="text" value="0" name="txtMayo" id="txtMayo" size="4"></td>
	  			<td><input type="text" value="0" name="txtJunio" id="txtJunio" size="4"></td>
	  			<td><input type="text" value="0" name="txtJulio" id="txtJulio" size="4"></td>
	  			<td><input type="text" value="0" name="txtAgosto" id="txtAgosto" size="4"></td>
	  			<td><input type="text" value="0" name="txtSetiembre" id="txtSetiembre" size="4"></td>
	  			<td><input type="text" value="0" name="txtOctubre" id="txtOctubre" size="4"></td>
	  			<td><input type="text" value="0" name="txtNoviembre" id="txtNoviembre" size="4"></td>
	  			<td><input type="text" value="0" name="txtDiciembre" id="txtDiciembre" size="4"></td>
	  			<td><input type="text" name="txtTotal" id="txtTotal" size="4" readonly=""></td>
			</tbody>
		</table>
	</div>

	<form action="../Controllers/guardarfinanciera.controller.php" method="post">
				<!-- LISTADO DE ACTIVIDADES -->

		<button type="submit" class="btn btn-success">Guardar</button>
	
	</form>



	<div class="">
		<label for="xcodigo">Codigo</label>
		<div class="col-sm-2">
			<input type="text" name="xcodigo" id="xcodigo" class="form-control">
		</div>
		<label for="" class="col-sm-1">Buscador</label>
		<div class="col-sm-6">
			<input type="text" name="bien" id="bien" value="<?php echo $cadena;?>" class="form-control">
		</div>
	</div>

	<div id="resultado"></div>

<script src="js/inicio.js" type="text/javascript"></script>
<script src="js/index.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function(){

		$("#resultado").on('click', 'a', function () {
	  
			var idgasto    = $(this).attr('id');
			var especifica = $(this).attr('especifica');
			var mides      = $(this).attr('mides');

			var caja   = $("#idespecifica");
			var espe   = $("#especifica");
			var descri = $("#descripcion");

			caja.val(idgasto);
			espe.val(especifica);
			descri.val(mides);
		});

		$("#xcodigo").keyup(function(){
		  var cod = document.getElementById("xcodigo").value;

		  var param = {
			"codigo": cod
		  };

		  $.ajax({
			method:'post',
			url: '../Controllers/bienes.controller.php',
			data: param,
			beforeSend: function(){

			},
			success: function(res){
			  $("#resultado").html(res);
			},
			error: function(){
			  console.log("Error");
			}
		  })

		});

		$('#xcodigo').blur(function() { 
		  $('.display_box').hide();
		});

		$("#bien").keyup(function(){
		  var cod = document.getElementById("bien").value;

		  var param = {
			"bien": cod
		  };

		  $.ajax({
			method:'post',
			url: '../Controllers/bienesxNombre.controller.php',
			data: param,
			beforeSend: function(){

			},
			success: function(res){
			  $("#resultado").html(res);
			},
			error: function(){
			  console.log("Error");
			}
		  })

		});

	});

</script>

