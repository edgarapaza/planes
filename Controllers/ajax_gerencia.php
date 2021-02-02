<?php
require_once("../Models/listas.model.php");

	$lista = new Listas();
	$data = $lista->ListaGerencias();

	$datgerencia = "<select name='gerencia' id='gerencia' class='form-control'>
					<option value='0'>[Seleccionar]</option>";
	foreach ($data as $value) {
		$datgerencia.= "<option value='".$value['iduniorganica']."'>".$value['uniorganica']."</option>";
	}
	
	$datgerencia .="</select>";

	echo $datgerencia;
