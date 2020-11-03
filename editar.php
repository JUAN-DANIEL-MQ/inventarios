<?php 
require_once('conexion.php');
  $id = 0;
  $nombre = '';
  $precio = 0;
  $stock = 0;
  if (isset($_GET['id'])) {
     $sql = "select * from productos where id = ".$_GET['id'];
     $result = $conn->query($sql);
     $fila = $result-> fetch_array();
      $id = $fila['id'];
      $nombre = $fila['nombre'];
      $precio = $fila['precio'];
      $stock = $fila['stock'];
  }
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1><?= ($id > 0)? 'Editar' : 'Nuevo' ?> Producto </h1>
	<form action="procesa.php" method="POST">
	<table>
		<input type="hidden" name="id" value="<?= $id?>">
		<tr>
			<td>Nombre del producto</td>
			<td><input type="text" name= "nombre" value="<?= $nombre?>" required></td>
		</tr>
		<tr>
			<td>Precio</td>
			<td><input type="text" name= "precio" value="<?= $precio?>" size=2 required></td>
		</tr>
		<tr>
			<td>stock</td>
			<td><input type="text" name= "stock" value="<?= $stock?>" size=2 required></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Enviar"></td>
		</tr>
		</table>
	</form>

</body>
</html>