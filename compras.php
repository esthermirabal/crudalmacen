<?php
session_start();

require("carrito.php");
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
    <?php require("global/navbar.php");?>
    <h3>Carrito</h3>
	<?php 
    foreach($_SESSION["carrito"] as $articulo){
        echo 'cantidad:'.$articulo["cantidad"].', codigo:'.$articulo["codigo"].', precio:'.$articulo["precio"].'<br>';
    }
    ?>
    <form action="postcompra.php" method="POST">
        <button type="submit" name="ventas">Vender</button>
    </form>

	<?php require("global/footer.php"); ?>
	<script src="js/bootstrap.bundle.js"></script>
</body>

</html>


Mostrar lo que estaba en el carrito, los items que tenemos que se muestren
Boton comprar