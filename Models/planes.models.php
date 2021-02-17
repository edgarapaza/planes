<?php
require_once "Conexion.php";

class Planes
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();

		return $this->conn;
	}


	function Guardar1($idgerencia,$ccosto,$tarea,$meta,$objetivo,$objespecifico1,$objespecifico2,$objespecifico3,$fecha,$idpersonal,$idoe,$idae)
	{
		$fecha = date('Y-m-d H:i:s');
		$sql = "INSERT INTO planes1 VALUES (null,'$idgerencia','$ccosto','$tarea','$meta','$objetivo','$objespecifico1','$objespecifico2','$objespecifico3','$fecha','$idpersonal','$idoe','$idae');";


		if(!$this->conn->query($sql))
		{
			echo "Error guardando. " .mysqli_error($this->conn);

		}

		$sqlSubgerencia = "SELECT idplanes1 FROM planes1 ORDER BY idplanes1 DESC LIMIT 1;";
		

		$res1 = $this->conn->query($sqlSubgerencia);
		
		$resdata1 = $res1->fetch_array();
	
		return $resdata1;
		mysqli_close($this->conn);
	}

	function SaveActivity($idplanes,$actividad,$descripcion,$tarea,$unimedida,$prioridad,$enero,$febrero,$marzo,$abril,$mayo,$junio,$julio,$agosto,$setiembre,$octubre,$noviembre,$diciembre,$total)
	{
		$fecha = date('Y-m-d H:i:s');
		$sql = "INSERT INTO progfisica VALUES (null,'$idplanes','$actividad','$descripcion','$tarea','$unimedida','$prioridad','$enero','$febrero','$marzo','$abril','$mayo','$junio','$julio','$agosto','$setiembre','$octubre','$noviembre','$diciembre','$total','$fecha','$fecha');";

		if(!$this->conn->query($sql))
		{
			echo "Error guardando Activity. " .mysqli_error($this->conn);
			exit();
		}
		return true;
		mysqli_close($this->conn);
	}

	function ListActivities()
	{
		
		$sql = "SELECT idplanes1,idsubgerencia,tarea, meta, objetivo FROM planes1;";


		if(!$result = $this->conn->query($sql))
		{
			echo "Error guardando. " .mysqli_error($this->conn);
			exit();
		}
		return $result;
		mysqli_close($this->conn);
	}

	function ListSubActivities()
	{
		
		$sql = "SELECT idsubgerencia, count(*) as cantidad FROM planes1 group by idsubgerencia;";


		if(!$result = $this->conn->query($sql))
		{
			echo "Error guardando. " .mysqli_error($this->conn);
			exit();
		}
		return $result;
		mysqli_close($this->conn);
	}

	function ListaActividadesDetalle($idsubgerencia)
	{
		$sql = "SELECT idplanes1,idgerencia,idsubgerencia,tarea,meta,objetivo,idoe,idae FROM planes1 WHERE idsubgerencia = ". $idsubgerencia;


		if(!$result = $this->conn->query($sql))
		{
			echo "Error guardando. " .mysqli_error($this->conn);
			exit();
		}
		return $result;
		mysqli_close($this->conn);
	}

	function ActivitiNames($idsubgerencia)
	{
		$sql = "SELECT idsubgerencias,codigo,subgerencia,idgerencia,abreviatura,idsede,idresponsable  FROM subgerencia WHERE idsubgerencias = " . $idsubgerencia ;


		if(!$result = $this->conn->query($sql))
		{
			echo "Error guardando. " .mysqli_error($this->conn);
			exit();
		}
		$data = $result->fetch_array(MYSQLI_ASSOC);
		return $data;
		mysqli_close($this->conn);
	}

	function SubActivitiNames($idssubgerencia)
	{
		$sql = "SELECT idssubgerencia,codigo,centrocosto,abreviatura,idsede,idresponsable,dasa,idsubgerencia FROM subsubgerencia WHERE idssubgerencia= " . $idssubgerencia;


		if(!$result = $this->conn->query($sql))
		{
			echo "Error guardando. " .mysqli_error($this->conn);
			exit();
		}
		$data = $result->fetch_array(MYSQLI_ASSOC);
		return $data;
		mysqli_close($this->conn);
	}

	function AccionesResumen($idplan)
	{
		$sql = "SELECT idprogfis,idplanes,actividad,descripcion,tarea,unimedida,prioridad,enero,febrero,marzo,abril,mayo,junio,julio,agosto,setiembre,octubre,noviembre,diciembre,total FROM progfisica WHERE idplanes = " . $idplan;

		if(!$result = $this->conn->query($sql))
		{
			echo "Error guardando. " .mysqli_error($this->conn);
			exit();
		}

		return $result;
		mysqli_close($this->conn);
	}

	function AccionesResumenSub($idsubsudgerencia)
	{
		$sql ="SELECT * FROM planes1 WHERE idsubsubgerencia=" .$idsubsudgerencia;
		if(!$result = $this->conn->query($sql))
		{
			echo "Error guardando. " .mysqli_error($this->conn);
			exit();
		}

		return $result;
		mysqli_close($this->conn);
	}

	function ShowGerencia()
	{
		$sql ="SELECT * FROM planes1 WHERE idsubsubgerencia=" .$idsubsudgerencia;
		if(!$result = $this->conn->query($sql))
		{
			echo "Error guardando. " .mysqli_error($this->conn);
			exit();
		}

		return $result;
		mysqli_close($this->conn);
	}

	function ShowSubGerencia($idsubsudgerencia)
	{
		$sql ="SELECT idsubgerencias,codigo,subgerencia,idgerencia,abreviatura,idsede,idresponsable,idsubsubgerencia FROM subgerencia WHERE idsubgerencias = " .$idsubsudgerencia;

		if(!$result = $this->conn->query($sql))
		{
			echo "Error guardando. " .mysqli_error($this->conn);
			exit();
		}
		$data = $result->fetch_array(MYSQLI_ASSOC);
		return $data;
		mysqli_close($this->conn);
	}

	function CentroCosto()
	{

		$sql ="SELECT idsubgerencias AS idcc, subgerencia as ccosto, abreviatura FROM subgerencia;";

		if(!$result = $this->conn->query($sql))
		{
			echo "Error guardando. " .mysqli_error($this->conn);
			exit();
		}
		
		return $result;
		mysqli_close($this->conn);
	}

	function GuardarFinanciera($idplanes,$idprogfis,$espgasto,$descripcion,$enero,$febrero,$marzo,$abril,$mayo,$junio,$julio,$agosto,$setiembre,$octubre,$noviembre,$diciembre,$total)
	{
		$fecha = date('Y-m-d H:i:s');
		
		$sql ="INSERT INTO progfinanciera VALUES (null,'$idplanes','$idprogfis','$espgasto','$descripcion','$enero','$febrero','$marzo','$abril','$mayo','$junio','$julio','$agosto','$setiembre','$octubre','$noviembre','$diciembre','$total','$fecha','$fecha');";

		if(!$result = $this->conn->query($sql))
		{
			echo "Error guardando. " .mysqli_error($this->conn);
			exit();
		}
		
		return $result;
		mysqli_close($this->conn);
	}

	function ListaProgrActividades($idplanes)
	{

		$sql ="SELECT idprogfis, idplanes, actividad FROM progfisica WHERE idplanes = ".$idplanes." ORDER BY prioridad LIMIT 1;";

		if(!$result = $this->conn->query($sql))
		{
			echo "Error guardando. " .mysqli_error($this->conn);
			exit();
		}
		
		return $result;
		mysqli_close($this->conn);
	}
}

/*
while ($fila = $data->fetch_array()) {
	echo $fila['idplanes1'];
	echo $fila['tarea'];
	echo $fila['meta'];
	echo $fila['objetivo'];
}
*/
