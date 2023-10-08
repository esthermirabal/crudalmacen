<?php
require("consultas.php");
if (!isset($_GET["codigo"])) {
	//Siempre usar header arriba de la etiqueta <head>
	header("location:gestion.php");
}else{
	$conexion = conectar();
	$sql = "SELECT * FROM productos WHERE codigo='".$_GET["codigo"]."'";
	$buscar = mysqli_query($conexion,$sql);
	if (mysqli_num_rows($buscar) > 0) {
		$datos = mysqli_fetch_assoc($buscar);
	}
	mysqli_close($conexion);
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container d-flex justify-content-center">
			<img src="imagenes/giga.png" class="centered-image">
		</div>
	</nav>
	<form method="POST" action="consultas.php" enctype="multipart/form-data">
		<div class="container col-6">
		<div class="mb-3">
			<label class="form-label">Código</label>
			<input type="text" name="inputCodigo" class="form-control" placeholder="Código del producto" 
			value="<?php echo $_GET['codigo']; ?>" readonly="">
		</div>
		<div class="mb-3">
			<label class="form-label">Categoría</label>
			<input type="text" name="inputCategoria" class="form-control" placeholder="Categoría del producto" 
			value="<?php echo $datos["categoria"]; ?>" required>
		</div>
		<div class="mb-3">
			<label class="form-label">Fecha</label>
			<input type="date" name="inputFecha" class="form-control" value="<?php echo $datos["fechaAlta"]; ?>">
		</div>
		<div class="mb-3">
			<label class="form-label">Nombre</label>
			<input type="text" name="inputNombre" class="form-control" placeholder="Nombre del producto" 
			value="<?php echo $datos["nombre"]; ?>" required>
		</div>
		<div class="mb-3">
			<label class="form-label">Precio</label>
			<input type="text" name="inputPrecio" class="form-control" placeholder="Precio del producto" 
			value="<?php echo $datos["precio"]; ?>" required>
		</div>
		<div class="mb-3">
			<label class="form-label">Imagen</label>
			<input type="file" name="inputImagen" class="form-control" id="imgInp">
			<img id="preview" src="#" alt="Ingrese una imagen">
		</div>
		</div>
		<?php
		if(isset($guardado)){echo '<h4 class="bg-success">Se ha guardado exitosamente</h4>';}
		?>
		<div class="d-flex justify-content-center mt-2">
			<div style="margin-right: 10%;">
				<a class="btn btn-lg btn-outline-primary" href="gestion.php">Volver</a>
			</div>
			<div>
				<button class="btn btn-lg btn-outline-primary" name="botonModificar">Modificar</button>
			</div>
			<div style="margin-left: 10%;">
				<button class="btn btn-lg btn-outline-primary" name="botonEliminar">Eliminar</button>
			</div>
		</div>
	</form>
	<script src="js/bootstrap.bundle.js"></script>
	<script type="text/javascript">
		imgInp.onchange = evt => {
			const [file] = imgInp.files
			if(file){
				preview.src = URL.createObjectURL(file)
			}
		}
	</script>
</body>
</html>
