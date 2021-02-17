<?php
session_start();
require_once "../Models/planes.models.php";


$idplanes     = $_SESSION['idplanes1'];
$idprogfis    = $_REQUEST['idprogfis'];
$idespecifica = $_REQUEST['idespecifica'];
$espgasto     = $_REQUEST['especifica'];
$descripcion  = $_REQUEST['descripcion'];
$enero        = $_REQUEST['txtEnero'];
$febrero      = $_REQUEST['txtFebrero'];
$marzo        = $_REQUEST['txtMarzo'];
$abril        = $_REQUEST['txtAbril'];
$mayo         = $_REQUEST['txtMayo'];
$junio        = $_REQUEST['txtJunio'];
$julio        = $_REQUEST['txtJulio'];
$agosto       = $_REQUEST['txtAgosto'];
$setiembre    = $_REQUEST['txtSetiembre'];
$octubre      = $_REQUEST['txtOctubre'];
$noviembre    = $_REQUEST['txtNoviembre'];
$diciembre    = $_REQUEST['txtDiciembre'];
$total        = $_REQUEST['txtTotal'];



$planes = new Planes();
$planes->GuardarFinanciera($idplanes,$idprogfis,$espgasto,$descripcion,$enero,$febrero,$marzo,$abril,$mayo,$junio,$julio,$agosto,$setiembre,$octubre,$noviembre,$diciembre,$total);

//header("Location: ../Views/index3.php?idplan=".$idplanes);