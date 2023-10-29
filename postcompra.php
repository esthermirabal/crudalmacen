<!--formulario de datos y venta de producto y los productos que se agreguen adicionales-->

<?php
require("global/conexion.php");
if (!(isset($_SESSION["login"]))) {
	header("location: index.php");
}
if (isset($_POST["ventas"])) {
	//for dato in datos == foreach($datos as $dato)
	// array=["clave"=>valor]
	$_SESSION["carrito_aux"] = $_SESSION["carrito"];
	$total = 0;
	foreach ($_SESSION["carrito"] as $articulo) {
		//resta de stock
		$nuevaCantidad = $articulo["stock"]-1;
		$sql = "UPDATE productos SET cantidad ='" . $nuevaCantidad . "'WHERE codigo='" . $articulo["codigo"] . "'";
		$conexion = conectar();
		$modificar = mysqli_query($conexion, $sql);
		$subtotal = $articulo["precio"] * $articulo["cantidad"];
		$total = $total + $subtotal;
	}
	$iva = $total*0.21;
	$totalVenta = $total + $iva;
	//venta(donde se guarda en la base de datos --)
	// SELECT * FROM ventas WHERE id = $_SESSION["id"]
	// SELECT * FROM ventas WHERE id = usuarios.id
	//paypal
	$_SESSION["carrito"]= [];
}
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

	<h1>Compra realizada felicitaciones</h1>
	<h3><?php echo 'Sub Venta: $' . $total; ?></h3>
	<h3><?php echo 'Iva Venta: $' . $iva; ?></h3>
	<h3><?php echo 'Total Venta: $' . $totalVenta; ?></h3>
	<form action="ticket.php" method="post" target="_blank">
		<button type="submit" class="btn" >Descargar Ticket</button>
	</form>


	<?php require("global/footer.php"); ?>
</body>

</html>