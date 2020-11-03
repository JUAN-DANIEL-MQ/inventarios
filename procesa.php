<?php 
require_once('conexion.php');


$id = $_POST ['id'];
$nombre = $_POST ['nombre'];
$precio = $_POST ['precio'];
$stock = $_POST ['stock'];
if ($id == 0) {
	$sql = "insert into productos (nombre,precio,stock) 
        values ('$nombre',$precio,$stock)";
}
else{
	$sql = "update productos set nombre = '$nombre',
	precio = $precio,
	stock = $stock
	where id = $id";
}

$estado = $conn->query($sql);
if (!$estado) die('Error al insertar datos !!!');
header('Location: index.php');
 ?>