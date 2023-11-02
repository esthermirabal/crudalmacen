<?php
require("global/consultas.php");
require("global/librerias.php");
verificarSesion();
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
	<?php require("global/navbar.php"); ?>

	<form method="POST" enctype="multipart/form-data">
		<div class="container col-6">
			<div class="mb-3">
				<label class="form-label">Código</label>
				<input type="text" name="inputCodigo" class="form-control" placeholder="Código del producto" disabled>
			</div>
			<div class="mb-3">
				<label class="form-label">Categoría</label>
				<input type="text" name="inputCategoria" class="form-control" placeholder="Categoría del producto" required>
			</div>
			<div class="mb-3">
				<label class="form-label">Fecha</label>
				<input type="date" name="inputFecha" class="form-control" readonly="">
			</div>
			<div class="mb-3">
				<label class="form-label">Nombre</label>
				<input type="text" name="inputNombre" class="form-control" placeholder="Nombre del producto" required>
			</div>
			<div class="mb-3">
				<label class="form-label">Cantidad</label>
				<input type="text" name="inputCantidad" class="form-control" placeholder="Stock del producto" required>
			</div>
			<div class="mb-3">
				<label class="form-label">Descripcion</label>
				<textarea type="text" name="inputDescripcion" class="form-control" style="width: 100%; height: 250px;" placeholder="Descripcion del producto" rows="4" value="<?php echo $datos["descripcion"]; ?>" required></textarea>
			</div>
			<div class="mb-3">
				<label class="form-label">Precio</label>
				<input type="text" name="inputPrecio" class="form-control" placeholder="Precio del producto" required>
			</div>
			<div class="mb-3">
				<label class="form-label">Imagen</label>
				<input type="file" name="input_imagen" class="form-control" id="imgInp">
				<img id="preview" src="#" alt="Ingrese una imagen" width="100" height="100">
			</div>
			<?php
			if (isset($guardado)) {
				echo '<div class="container-justify-center centered-text"><label font-size:24px>Se ha guardado exitosamente</label></div>';
			}
			?>
		</div>
		<div class="d-flex justify-content-center mt-2">
			<div style="margin-right: 10%;">
				<a class="btn btn-lg btn-outline-primary" href="gestion.php">Volver</a>
			</div>
			<div>
				<button class="btn btn-lg btn-outline-primary" name="botonGuardar">Guardar</button>
			</div>
		</div>
	</form>

	<?php require("global/footer.php"); ?>
	<script src="js/bootstrap.bundle.js"></script>
	<script type="text/javascript">
		imgInp.onchange = evt => {
			const [file] = imgInp.files
			if (file) {
				preview.src = URL.createObjectURL(file)
			}
		}
	</script>


</body>

</html>