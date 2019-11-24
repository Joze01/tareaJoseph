<?php
include '../bll/functions.php';
$method = isset($_POST["method"]) ? $_POST["method"] : "";

if(isset($_GET["method"])){
  $method = $_GET["method"];
}

$nombre = "";
$precio = 0;
$cantidad = 0;
$idProducto = 0;
$funciones = new Functions();

switch ($method) {
  case 'insertar':
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $precio = isset($_POST["precio"]) ? $_POST["precio"] : "";
    $cantidad = isset($_POST["cantidad"]) ? $_POST["cantidad"] : "";
    if($funciones->insertarProducto($nombre,$cantidad,$precio)){
      header("Location: ../index.php?completado=1");
    }else{
      header("Location: ../index.php?completado=2");
    }
    break;
    case 'modificar':
      $idProduto =  isset($_POST["idproducto"]) ? $_POST["idproducto"] : "";
      $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
      $precio = isset($_POST["precio"]) ? $_POST["precio"] : "";
      $cantidad = isset($_POST["cantidad"]) ? $_POST["cantidad"] : "";
      if($funciones->modificarProducto($nombre,$cantidad,$precio)){
        header("Location: ../index.php?completado=1");
      }else{
        header("Location: ../index.php?completado=2");
      }
      break;
      case 'eliminar':
        $idProduto =  isset($_GET["idproducto"]) ? $_GET["idproducto"] : "";
        if($funciones->deleteProducto($idProduto)){
          header("Location: ../index.php?completado=1");
        }else{
          header("Location: ../index.php?completado=2");
        }
        break;
  default:
  header("Location: ../index.php");
    break;
}

 ?>
