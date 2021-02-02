<?php

require_once 'Conexion.php';
// Listas para los COMBOX
class Listas
{
  private $conn;

  function __construct()
  {
		$conexion = new Conexion();
		$this->conn = $conexion->Conectar();
		return $this->conn;
  }

  function ListaGerencias()
  {
      $sql = "SELECT iduniorganica,codigo,uniorganica,abreviatura,sede,idresponsable FROM uniorganica;";

      if(!$datos = $this->conn->query($sql))
      {
        echo "Error listado subgerencias. ". mysqli_error($this->conn);
      }
			return $datos;
      mysqli_close($this->conn);
	}

  function ListaSubgerencia($idgerencia)
  {
      $sql = "SELECT idsubgerencias,codigo,subgerencia,idgerencia,abreviatura,idsede,idresponsable FROM subgerencia WHERE idgerencia = ". $idgerencia;

      if(!$datos = $this->conn->query($sql))
      {
        echo "Error listado subgerencias". mysqli_error($this->conn);
      }
			return $datos;
      mysqli_close($this->conn);
  }
//
  function ListaCentroCosto($idsubgerencia)
  {
      $sql = "SELECT idsubgerencias,codigo,subgerencia,idgerencia,abreviatura,idsede,idresponsable FROM subgerencia WHERE idsubsubgerencia = ". $idsubgerencia;

      if(!$datos = $this->conn->query($sql))
      {
        echo "Error listado subgerencias". mysqli_error($this->conn);
      }
      return $datos;
      mysqli_close($this->conn);
  }

  function Catalogo($codigo)
  {
      $sql = "SELECT idsubgerencias,subgerencia,idgerencia FROM subgerencias WHERE idgerencia = ". $idorganica ;

      if(!$datos = $this->conn->query($sql))
      {
        echo "Error listado subgerencias". mysqli_error($this->conn);
      }
			return $datos;
      mysqli_close($this->conn);
	}

  function ListaObjetivosEstrategicos()
  {
      $sql = "SELECT idoe,codigo,prioridad,objestrategico,idsubgerencia,apoyos FROM objestrategicos;";

      if(!$datos = $this->conn->query($sql))
      {
        echo "Error listado subgerencias". mysqli_error($this->conn);
      }
      return $datos;
      mysqli_close($this->conn);
  }

  function ListaAccionesEstrategicas($idoe)
  {
      $sql = "SELECT idae,idobjestra,prioridad,codigo,descripcion FROM accionesestrategicas WHERE idobjestra = " .$idoe;

      if(!$datos = $this->conn->query($sql))
      {
        echo "Error listado subgerencias". mysqli_error($this->conn);
      }
      return $datos;
      mysqli_close($this->conn);
  }
}

/*$lista = new Listas();
$data = $lista->ListaSubgerencia(2);

while ($fila2 = $data->fetch_array(MYSQLI_ASSOC)) {
  echo $fila2['idsubgerencias'];
  echo $fila2['codigo'];
  echo $fila2['subgerencia'];
  echo $fila2['abreviatura']; 
}*/