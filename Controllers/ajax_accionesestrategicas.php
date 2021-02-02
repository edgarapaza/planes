<?php
require_once("../Models/listas.model.php");
	
	$oe = $_REQUEST['oe'];

	$lista = new Listas();
	$data = $lista->ListaAccionesEstrategicas($oe);

	$datgerencia = "<select name='acciones_estrategicas' id='acciones_estrategicas' class='form-control'>
					<option value='0'>[Seleccionar]</option>";
	foreach ($data as $value) {
		$datgerencia.= "<option value='".$value['idae']."'>".$value['descripcion']."</option>";
	}
	
	$datgerencia .="</select>";

	echo $datgerencia;
