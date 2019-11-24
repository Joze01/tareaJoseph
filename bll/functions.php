<?php
require 'conection.php';

/**
 * Clase para manejo de funciones de logica de negocios de la aplicacion
 */
class Functions
{

  private $dbConfig;
  private $connection;
  private $query;

  public function __construct()
  {
      $this->dbConfig = new Conection();
  }

  public function insertarProducto($name, $cantidad, $precio)
  {
    $this->connection = $this->dbConfig->getConnection();
    $resultado=false;
    if($this->connection){
      $this->query = "INSERT INTO productos(nombre_producto, cantidad_producto, precio_producto) VALUES ('".$name."',$cantidad,$precio)";
      if($this->connection->query($this->query))
      {
        $resultado=true;
      }else {
        $resultado=false;
      }
    }
    return $resultado;
  }

  public function modificarProducto($id, $nombre,$cantidad,$precio)
  {
    $this->connection = $this->dbConfig->getConnection();
    $resultado=false;
    if($this->connection){
      $this->query = "UPDATE productos SET nombre_producto = '".$nombre."', cantidad_producto = ".$cantidad.", precio_producto=".$precio." WHERE id_producto=".$id;
      if($this->connection->query($this->query))
      {
        $resultado=true;
      }else {
        $resultado=false;
      }
    }
    return $resultado;
  }

  public function deleteProducto($id)
  {
    $this->connection = $this->dbConfig->getConnection();
    $resultado=false;
    if($this->connection){
      $this->query = "DELETE FROM productos WHERE id_producto=".$id;
      if($this->connection->query($this->query))
      {
        $resultado=true;
      }else {
        $resultado=false;
      }
    }
    echo $this->query;
    return $resultado;
  }

  public function venderProducto($id, $cantidad)
  {
    $connection = $this->dbConfig.connect();
    $cantidad = 0.0;


    return  $cantidad;
  }

  public function getProductoList()
  {
    $this->connection = $this->dbConfig->getConnection();
    if($this->connection){
      $this->query = "select * from productos";
      $result = $this->connection->query($this->query);
      if($result->num_rows > 0)
      {
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>";
            echo $row["id_producto"];
            echo "</td>";
            echo "<td>";
            echo $row["nombre_producto"];
            echo "</td>";
            echo "<td>";
            echo $row["cantidad_producto"];
            echo "</td>";
            echo "<td>$";
            echo $row["precio_producto"];
            echo "</td>";
            echo "<td>";
            echo '<a class="btn btn-danger" href="controller/productos.php?idproducto='.$row["id_producto"].'&method=eliminar" role="button">Eliminar</a>';
            echo "</td>";
            echo "</tr>";
          }
      }
    }
  }

};

 ?>
