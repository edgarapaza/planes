<?php
session_start();
$_SESSION['person'] = 1504;
require_once "../Models/planes.models.php";

$idgerencia    = 0;
$idsubgerencia = 0;
$ccosto        = $_REQUEST['ccosto'];
$tarea         = $_REQUEST['tarea_presupuestal'];
$meta          = $_REQUEST['meta_presupuestal'];
$objetivo      = $_REQUEST['objetivo_general'];
$objetivo1     = $_REQUEST['objetivo1'];
$objetivo2     = $_REQUEST['objetivo2'];
$objetivo3     = $_REQUEST['objetivo3'];
$fecha         = date('Y-m-d H:i:s');
$idpersonal    = $_SESSION['person'];
$idoe          = $_REQUEST['objetivo_estrategico'];
$idae          = $_REQUEST['acciones_estrategicas'];

if(empty($tarea) || empty($meta))
{
	header("Location: ../Views/index.php?msg=Campos Vacios");
}else{
	
	$planes = new Planes();
	$dat = $planes->Guardar1($idgerencia,$ccosto,$tarea,$meta,$objetivo,$objetivo1,$objetivo2,$objetivo3,$fecha,$idpersonal,$idoe,$idae);

	$_SESSION['idplan'] = $dat[0];

	/*$responseCode[0]; #CODIGO DE VERIFICACION SI ES PARA SUB O SUBSUB
	$responseCode[1]; #CODIGO QUE SE GUARDA EN BASE DE DATOS*/

	if($dat[0] > 0)
	{
		header("Location: ../Views/index2.php?idplan=".$dat[0]);
	}else{
		
		header("Location: ../Views/index.php?error=Error");
	}
	
}
