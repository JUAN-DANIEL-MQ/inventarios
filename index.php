<?php 
require_once('conexion.php');
$sql = "select * from productos";
$result = $conn->query($sql);
$registros = array();
while($fila = $result->fetch_array()){
	  $registros[] = $fila;
}
require_once('librerias/cabe.php');
 ?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<h1>Listado de Productos</h1>
			<p><a href="editar.php" class="btn btn-success">Nuevo</a></p>
	
	<table class="table table-striped table-dark" >
		<tr>
			<th>No.</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Stock</th>
			<th></th>
			<th></th>
		</tr>
		<?php $conta = 0; ?>
		<?php foreach ($registros as $item): ?>
		<tr>
			<td><?= ++$conta ?></td>
			<td><?= $item["nombre"] ?></td>
			<td><?= $item["precio"] ?></td>
			<td><?= $item["stock"] ?></td>
			<td><a href="editar.php?id=<?= $item['id']?>" class="btn btn-primary">Editar</a></td>
			<td><a href="eliminar.php?id=<?= $item["id"]?>" onclick="return(confirm ('eliminamos??'))" class="btn btn-danger">Eliminar</a></td>
		</tr>
		<?php endforeach ?>
	</table>
		</div>
	</div>
</div>
	
<?php 
require_once('librerias/pie.php');
 ?>