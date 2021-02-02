<?php
require_once("../Models/listas.model.php");

	$lista = new Listas();
	$data = $lista->ListaObjetivosEstrategicos();

	$datgerencia = "<select name='objetivo_estrategico' id='objetivo_estrategico' class='form-control'>
					<option value='0'>[Seleccionar]</option>";
	foreach ($data as $value) {
		$datgerencia.= "<option value='".$value['idoe']."'>".$value['objestrategico']."</option>";
	}
	
	$datgerencia .="</select>";

	echo $datgerencia;
