<!--formulario de datos y venta de producto y los productos que se agreguen adicionales-->

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
	<?php require("navbar.php"); ?>
	




	<footer class="bg-primary text-white text-center py-3" style="background-color: #333; color: white; text-align: center; padding: 20px 0; position: fixed; bottom: 0; width: 100%;">
		<div class="container">
			<p>&copy; <?php echo date('Y'); ?> Tu Nombre o Nombre de la Empresa. Todos los derechos reservados.</p>
		</div>
	</footer>
</body>

</html>