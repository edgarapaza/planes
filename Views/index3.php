<?php
	session_start();
	include "header.php";
	require_once "../Models/planes.models.php";
	
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
	

	

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			
			<center>
				<div class="h3"> 1 -------- 2 -------- <span class="badge bg-secondary">3</span> -------- 4</div>	
			</center>

			<div class="row">
				<div class="col-sm-12">
					

	    				
				</div>
			</div>

			<form action="../Controllers/guardarfinanciera.controller.php" method="post">
				<!-- LISTADO DE ACTIVIDADES -->
				<div class="row">

					<div class="col-sm-12">
						<h3 class="h3 text-center bg-info">PROGRAMACIÓN FINANCIERA</h3>

					</div>

					
				</div>
				<div class="row">
					<div class="col-md-12">
						<table class="table">
						  		<thead>
						  			<tr>
						  				<th colspan="13">Programación FINANCIERA</th>
						  			</tr>
						  			<tr>
						  				<th>Actividad</th>
						  				<th></th>
						  				<th>Especifica</th>
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
						  			<?php
						  				$i=1;
						  				while ($fila= $dataprog->fetch_array(MYSQLI_ASSOC)) :		
						  			?>
						  			<tr>
						  				<?php echo $fila['idprogfis'];
												echo $fila['idplanes'];?>
						  				<td><?php echo $fila['actividad'];?></td>
						  				<td>
						  					<a href="#?idd=<?php echo $fila['idprogfis'];?>" class="btn btn-primary edgar" data-toggle="modal" data-target="#espe_gasto" codigo="<?php echo $fila['idprogfis'];?>">+</a>
						  					
						  				</td>
						  				<td>
						  					<input type="text" id="caja_codigo<?php echo $fila['idprogfis'];?>">
										    <input type="text" id="especifica<?php echo $fila['idprogfis'];?>">
										    <input type="text" id="descripcion<?php echo $fila['idprogfis'];?>">
						  				</td>

							  			<td><input type="text" value="0" name="txtEnero<?php echo $fila['idprogfis'];?>" id="txtEnero<?php echo $fila['idprogfis'];?>" size="4"></td>
							  			<td><input type="text" value="0" name="txtFebrero<?php echo $fila['idprogfis'];?>" id="txtFebrero<?php echo $fila['idprogfis'];?>" size="4"></td>
							  			<td><input type="text" value="0" name="txtMarzo<?php echo $fila['idprogfis'];?>" id="txtMarzo<?php echo $fila['idprogfis'];?>" size="4"></td>
							  			<td><input type="text" value="0" name="txtAbril<?php echo $fila['idprogfis'];?>" id="txtAbril<?php echo $fila['idprogfis'];?>" size="4"></td>
							  			<td><input type="text" value="0" name="txtMayo<?php echo $fila['idprogfis'];?>" id="txtMayo<?php echo $fila['idprogfis'];?>" size="4"></td>
							  			<td><input type="text" value="0" name="txtJunio<?php echo $fila['idprogfis'];?>" id="txtJunio<?php echo $fila['idprogfis'];?>" size="4"></td>
							  			<td><input type="text" value="0" name="txtJulio<?php echo $fila['idprogfis'];?>" id="txtJulio<?php echo $fila['idprogfis'];?>" size="4"></td>
							  			<td><input type="text" value="0" name="txtAgosto<?php echo $fila['idprogfis'];?>" id="txtAgosto<?php echo $fila['idprogfis'];?>" size="4"></td>
							  			<td><input type="text" value="0" name="txtSetiembre<?php echo $fila['idprogfis'];?>" id="txtSetiembre<?php echo $fila['idprogfis'];?>" size="4"></td>
							  			<td><input type="text" value="0" name="txtOctubre<?php echo $fila['idprogfis'];?>" id="txtOctubre<?php echo $fila['idprogfis'];?>" size="4"></td>
							  			<td><input type="text" value="0" name="txtNoviembre<?php echo $fila['idprogfis'];?>" id="txtNoviembre<?php echo $fila['idprogfis'];?>" size="4"></td>
							  			<td><input type="text" value="0" name="txtDiciembre<?php echo $fila['idprogfis'];?>" id="txtDiciembre<?php echo $fila['idprogfis'];?>" size="4"></td>
							  			<td><input type="text" name="txtTotal<?php echo $fila['idprogfis'];?>" id="txtTotal<?php echo $fila['idprogfis'];?>" size="4" readonly=""></td>
						  			</tr>
						  			<?php 
						  				$i++;
						  				endwhile;

						  				?>
						  		</tbody>
						</table>
					</div>
				</div>

				<div class="row">
					<div class="col-md-2">
						<!-- Botón en HTML (lanza el modal en Bootstrap) -->
						<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</div>
				<!-- FIN DE LISTADO DE ACTIVIDADES -->	
			</form>
		</div>
	</div>
</div>



<!-- Modal -->
<div class="modal fade" id="espe_gasto" tabindex="-1" role="dialog" aria-labelledby="titulo" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titulo">Seleccionar Especifica de Gasto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<div class="col-sm-12 form-group row">
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

		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>




<script type="text/javascript">
	$(document).ready(function(){

	  	ed = $(".edgar");
	  	ed.attr("codigo")

	  	$("#resultado").on('click', 'a', function () {
      
			var idgasto    = $(this).attr('id');
			var especifica = $(this).attr('especifica');
			var mides      = $(this).attr('mides');

			
			console.log(ed.attr("codigo"));
			var caja   = $("#caja_codigo1");
			var espe   = $("#especifica1");
			var descri = $("#descripcion1");

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