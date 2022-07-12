<?php
include "conexion.php"; 

$fecha_orden=$_POST["fecha_orden"];
$fecha_envio=$_POST["fecha_envio"];
$barco=$_POST["barco"];

$sql = "INSERT  `orders`( `order_date`, `shipped_date`,  `ship_name`)
VALUES ('".$fecha_orden."', '".$fecha_envio."', '".$barco."')";

if ($conn->query($sql) === TRUE) {
  echo "GUARDADO CON EXITO";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>