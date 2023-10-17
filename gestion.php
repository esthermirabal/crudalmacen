<?php
session_start();
if ($_SESSION["tipo"] == "user") {
	header("location: index.php");
}

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
	<?php require("navbar.php"); ?>
	<?php
	$conexion = conectar();
	if ($conexion != null) {
		echo '
		<div class="container" style="height: 80vh;">
		<form class="d-flex" method="POST">
        	<input class="form-control me-2" type="search" name="inputBuscar" placeholder="Buscar" >
        	<button class="btn btn-outline-primary" name="botonBuscar" type="submit">Buscar</button>
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
		if (isset($_POST["inputBuscar"])) {
			listarBusqueda();
		} else{
		listar();}
		echo '        
	    </tbody>
	    </table>
    </div>
		';

	}
	?>

	<footer class="bg-primary text-white text-center py-3" style="background-color: #333; color: white; text-align: center; padding: 20px 0; position: fixed; bottom: 0; width: 100%;">
		<div class="container">
			<p>&copy; <?php echo date('Y'); ?> Tu Nombre o Nombre de la Empresa. Todos los derechos reservados.</p>
		</div>
	</footer>
	<script src="js/bootstrap.bundle.js"></script>
</body>

</html>