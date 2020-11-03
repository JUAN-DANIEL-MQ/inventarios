<?php 
require_once('conexion.php');
$id = $_GET['id'];
$sql = "delete from productos where id = $id";
$estado = $conn->query($sql);
if (!$estado) die("error al eliminar");
header("Location: index.php");x
 ?>