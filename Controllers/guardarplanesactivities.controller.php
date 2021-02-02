<?php
session_start();
require_once "../Models/planes.models.php";

$idplanes      = $_SESSION['idplanes1'];
$actividad     = $_REQUEST['actividad_princial'];
$descripcion   = $_REQUEST['description_princial'];
$tarea         = $_REQUEST['txtTarea'];
$unimedida = $_REQUEST['unidad_medida'];
$prioridad     = $_REQUEST['prioridad'];
$enero         = $_REQUEST['txtEnero'];
$febrero       = $_REQUEST['txtFebrero'];
$marzo         = $_REQUEST['txtMarzo'];
$abril         = $_REQUEST['txtAbril'];
$mayo          = $_REQUEST['txtMayo'];
$junio         = $_REQUEST['txtJunio'];
$julio         = $_REQUEST['txtJulio'];
$agosto        = $_REQUEST['txtAgosto'];
$setiembre     = $_REQUEST['txtSetiembre'];
$octubre       = $_REQUEST['txtOctubre'];
$noviembre     = $_REQUEST['txtNoviembre'];
$diciembre     = $_REQUEST['txtDiciembre'];
$total         = $_REQUEST['txtTotal'];



$planes = new Planes();
$planes->SaveActivity($idplanes,$actividad,$descripcion,$tarea,$unimedida,$prioridad,$enero,$febrero,$marzo,$abril,$mayo,$junio,$julio,$agosto,$setiembre,$octubre,$noviembre,$diciembre,$total);

header("Location: ../Views/index2.php?id=".$idplanes);