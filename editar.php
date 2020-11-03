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
  require_once('librerias/cabe.php');
 ?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<h1><?= ($id > 0)? 'Editar' : 'Nuevo' ?> Producto </h1>
	<form action="procesa.php" method="POST">
		<input type="hidden" name="id" value="<?= $id?>">
		<div class="form-group">
			<label >Nombre del producto</label>
			<input type="text" name= "nombre" value="<?= $nombre?>" 
			class="form-control" required>
		</div>
	<div class="form-group">
		<label for="">Precio</label>
		<input type="text" name= "precio" value="<?= $precio?>" size=2 class="form-control" required>

	</div>
	<div class="form-group">
		<label for="">stock</label>
		<input type="text" name= "stock" value="<?= $stock?>" size=2 class="form-control" required>
	</div>
			<input type="submit" value="Enviar" class="btn btn-primary">
	</form>

		</div>
	</div>
</div>
	
<?php 
require_once('librerias/pie.php');
 ?>