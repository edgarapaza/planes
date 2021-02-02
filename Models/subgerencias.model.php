<?php
require_once("Conexion.php");
/**
 * 
 */
class SubGerencia
{
	private $conn;
	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	function ListaSubGerencias($codgerencia)
	{
		$sql ="SELECT idsubgerencias,subgerencia FROM subgerencia WHERE idgerencia = " . $codgerencia;
		
		if(!$result = $this->conn->query($sql))
		{
			echo "Error listando. " . mysqli_error($this->conn);
			exit();
		}
		return $result;
		mysqli_close($this->conn);
	}

}

/*$sg = new SubGerencia();
$data = $sg->ListaSubGerencias(5);
while ($fila = $data->fetch_array()) {
	echo $fila[0]."<br>";
	echo $fila[1]."<br>";
}*/