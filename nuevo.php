<?php
session_start();
require("consultas.php");
require("librerias.php");
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
	<nav class="navbar navbar-expand-lg">
	<div class="container d-flex justify-content-center">
		<img src="imagenes/giga.png" class="centered-image">
	</div>
	</nav>

	<form method="POST">
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
			<label class="form-label">Precio</label>
			<input type="text" name="inputPrecio" class="form-control" placeholder="Precio del producto" required>
		</div>
		<div class="mb-3">
			<label class="form-label">Imagen</label>
			<input type="file" name="inputImagen" class="form-control" id="imgInp">
			<img id="preview" src="#" alt="Ingrese una imagen">
		</div>
		<?php
		if(isset($guardado)){echo '<div class="container-justify-center centered-text"><label font-size:24px>Se ha guardado exitosamente</label></div>';}
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

	<footer class="bg-primary text-white text-center py-3" style="background-color: #333; color: white; text-align: center; padding: 20px 0; position: fixed; bottom: 0; width: 100%;">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> Tu Nombre o Nombre de la Empresa. Todos los derechos reservados.</p>
    </div>
	</footer>
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
