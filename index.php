<?php
session_start();
require("consultas.php");
require("librerias.php");
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
	<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><img src="imagenes/giga.png" class="centered-image"></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarColor01">
		<ul class="navbar-nav me-auto">
			<li class="nav-item">
			<a class="nav-link active" href="index.php">Inicio
				<span class="visually-hidden">(current)</span>
			</a>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" type="button" aria-haspopup="true" aria-expanded="false">Cuenta</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="navbar.php">Registrarse</a>
					<a class="dropdown-item" href="login.php">Iniciar Sesión</a>
				</div>
			</li>
		</ul>
		</div>
	</div>
	</nav>


	
	<div class="container col-6 mt-4" style="margin-left: 10%;">
		<div class="row">
			<?php verProductos(); ?>
		</div>
	</div>

	
	<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
