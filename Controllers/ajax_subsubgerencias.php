<?php
require_once("../Models/listas.model.php");

$centrocosto = $_REQUEST['centrocosto'];

	$lista = new Listas();
	$data = $lista->ListaCentroCosto($centrocosto);

	$num_data =  $data->num_rows;

	if($num_data>0){
		
		$cadena = "<select name='centrocosto' id='centrocosto' class='form-control'>
						<option value='0'>[Seleccionar]</option>";
		foreach ($data as $value) {
			$cadena.= "<option value='".$value['idsubgerencias']."'>".$value['subgerencia']."</option>";
		}

		$cadena .="</select>";
	}else{
		echo "-";
	}

echo $cadena;