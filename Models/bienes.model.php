<?php

require_once "Conexion.php";

class Bienes
{
  private $conn;

  function __construct()
  {
    $link = new Conexion();
    $this->conn = $link->Conectar();
    return $this->conn;
  }

  function Buscar($tabla, $condicion)
  {
    $sql = "SELECT * FROM $tabla WHERE $condicion";

    if(!$result = $this->conn->query($sql))
    {
      echo "Error Buscando" . mysqli_error($this->conn);
      exit();
    }

    return $result;
    mysqli_close($this->conn);
  }

  function ShowBienes($cadena)
  {
    $sql = "SELECT * FROM bienes WHERE bien_nombre LIKE '%".$cadena."%';";

    if(!$result = $this->conn->query($sql))
    {
      echo "Error mostrando Bienes" . mysqli_error($this->conn);
      exit();
    }

    return $result;
    mysqli_close($this->conn);
  }

  function ShowClasificador($cadena)
  {
    $sql = "SELECT idclasificador,anio,clasificador,descripcion,descripcion_det FROM clasificador WHERE descripcion LIKE '%".$cadena."%';";

    if(!$result = $this->conn->query($sql))
    {
      echo "Error mostrando clasificador" . mysqli_error($this->conn);
      exit();
    }

    return $result;
    mysqli_close($this->conn);
  }

  function SearchCode($codigo)
  {
    $sql = "SELECT idclasificador,anio,clasificador,descripcion,descripcion_det FROM clasificador WHERE clasificador LIKE '%".$codigo."%'";

    if(!$result = $this->conn->query($sql))
    {
      echo "Error Buscando por Codigo. " . mysqli_error($this->conn);
      exit();
    }

    return $result;
    mysqli_close($this->conn);
  }
}

// $bienes = new Bienes();
// $data = $bienes->ShowBienes('tinta%gel');
// while($fila = $data->fetch_array(MYSQLI_ASSOC))
// {
//   echo $fila['idbienes']."\t";
//   echo $fila['bien_nombre']."\t";
//   echo $fila['tipogast_id']."\t";
//   echo $fila['clasificador']."\t";
//   echo $fila['nombre_clasificador']."\t";
//   echo $fila['unidad_medida']."\t";
//   echo $fila['pre_init_soles']."<br>";
// }
