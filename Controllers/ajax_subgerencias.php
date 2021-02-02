<?php
require_once("../Models/listas.model.php");

$idsubgerencia = $_REQUEST['idsubgerencia'];

	$lista = new Listas();
	$data = $lista->ListaSubgerencia($idsubgerencia);

	$subgerencia = "<select name='subgerencia' id='subgerencia' class='form-control'>
					<option value='0'>[Seleccionar]</option>";
	foreach ($data as $value) {
		$subgerencia.= "<option value='".$value['idsubgerencias']."'>".$value['subgerencia']."</option>";
	}
	
	$subgerencia .="</select>";

	echo $subgerencia;
