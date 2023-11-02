<?php
if ($_SESSION["tipo"] == "user") {
	header("location: index.php");
}

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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
	<?php require("global/navbar.php"); ?>
	<?php
	$conexion = conectar();
	if ($conexion != null) {
		echo '
		<div class="container-fluid" style="height: 100vh;">
		<form class="d-flex justify-content-center mb-3 mt-3" method="POST">
        	<input class="form-control me-2" style="height: 5vh;width:50vw" type="search" name="inputBuscar" placeholder="Buscar" >
        	<button class="btn btn-outline-primary" name="botonBuscar" type="submit">Buscar</button>
      	</form>
		<div class="container" style="height: 80vh;width:100vw; overflow-y: scroll;">
		<table class="table">
	    <thead>
	        <tr>
	        <th scope="col">Código</th>
	        <th scope="col">Categoría</th>
	        <th scope="col">Fecha</th>
	        <th scope="col">Nombre</th>
			<th scope="col">Cantidad</th>
			<th scope="col">Descripcion</th>
	        <th scope="col">Precio</th>
	        <th scope="col">Imagen</th>
	        <th></th>
	        </tr>
	    </thead>
	    <tbody>';
		if (isset($_POST["inputBuscar"])) {
			listarBusqueda();
		} else{
		listar();}
		echo '        
	    </tbody>
	    </table>
		</div>
    	</div>
		';

	}
	?>
	<div class="container d-flex justify-content-center mb-3">
		<a href="nuevo.php" class="btn btn-secondary">Cargar Nuevos Articulos</a>
	</div>
	<?php require("global/footer.php")?>
	<script src="js/bootstrap.bundle.js"></script>
</body>

</html>