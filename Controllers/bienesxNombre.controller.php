<?php
include "../Models/bienes.model.php";

$cadena = trim(strtolower($_REQUEST['bien']));
#echo $cadena;
$separado = explode(" ",$cadena);

$union = implode("%",$separado);
echo $union;
#echo "Recibido: ".$codigo;

$bienes = new Bienes();
$data = $bienes->ShowClasificador($union);

#echo "Recibido: ".$codigo;


$lista = array();
#idclasificador,anio,clasificador,descripcion,descripcion_det 


$cadena =  "";
while($fila = $data->fetch_array(MYSQLI_ASSOC)):
  
  $cadena .= "<div>
  				<a especifica='".$fila['clasificador']."' mides='".$fila['descripcion']."' id='".$fila['idclasificador']."' href='#' data-toggle='tab' aria-expandend='false'><span class='clasificador'>".$fila['clasificador']."</span> <span class='texto'>".$fila['descripcion']."</span></a>
  			</div>
      		";

endwhile;

$cadena .= "";


echo $cadena;
    
