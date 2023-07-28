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
				<a class="nav-link active" href="gestion.php">Inicio
					<span class="visually-hidden">(current)</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="nuevo.php">Agregar Producto
					<span class="visually-hidden">(current)</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="index.php">Cerrar Sesión
					<span class="visually-hidden">(current)</span>
				</a>
			</li>
		</ul>
		</div>
	</div>
	</nav>
	<?php 
	$conexion = conectar();
	if ($conexion != null) {
		echo '
		<div class="container" style="height: 80vh;">
		<form class="d-flex" method="POST">
        	<input class="form-control me-2" type="search" name="inputBuscar" placeholder="Buscar" >
        	<button class="btn btn-outline-primary" type="submit">Buscar</button>
      	</form>
		<table class="table">
	    <thead>
	        <tr>
	        <th scope="col">Código</th>
	        <th scope="col">Categoría</th>
	        <th scope="col">Fecha</th>
	        <th scope="col">Nombre</th>
	        <th scope="col">Precio</th>
	        <th scope="col">Imagen</th>
	        <th></th>
	        </tr>
	    </thead>
	    <tbody>';
	    listar();
	echo '        
	    </tbody>
	    </table>
    </div>
		';
	}
	?>
	
	<script src="js/bootstrap.bundle.js"></script>
</body>
</html>