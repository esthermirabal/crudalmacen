<?php
require("global/consultas.php");
require("global/librerias.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
	<?php require("global/navbar.php"); ?>
	<div class="container vh-100">
		<div class="row d-flex justify-content-center align-items-center">
			<form method="POST" class="col-md-6 p-4 bg-dark text-white shadow rounded">
				<div class="form-group">
					<label style="font-size: 20px;" class="form-label mt-4">Usuario: </label>
					<input type="text" name="inputNombreUsuario" style="font-size: 20px; background-color: #333; color: white;" class="form-control">
					<small class="form-text text-muted">Introduce tu usuario</small>
				</div>
				<div class="form-group">
					<label style="font-size: 20px;" class="form-label mt-4">Clave: </label>
					<input type="password" name="inputClaveUsuario" style="font-size: 20px; background-color: #333; color: white;" class="form-control">
					<small class="form-text text-muted">Introduce tu clave</small>
				</div>

				<div class="form-group text-center">
					<button type="submit" name="botonLogin" class="btn btn-secondary">Ingresar</button>
				</div>
			</form>
		</div>
	</div>


	<?php require("global/footer.php"); ?>
	<script src="js/bootstrap.bundle.js"></script>
</body>

</html>