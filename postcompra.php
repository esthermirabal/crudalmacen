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
	$subtotal = 0;

	// Inserta la venta en la tabla "venta"
	$conexion = conectar();
	foreach ($_SESSION["carrito"] as $articulo) {
		$precio = $articulo["precio"] * $articulo["cantidad"];
		$subtotal = $subtotal + $precio;
	}
	$iva = $subtotal * 0.21;
	$total = $subtotal + $iva;
	$fechaVenta = date("Y-m-d"); // Obtiene la fecha actual en formato 'YYYY-MM-DD'
	$usuarioId = $_SESSION["id"];
	require_once("ticket.php");
	$sql_venta = "INSERT INTO venta (fecha, usuario_id,subtotal,iva,total, ticket) VALUES (?, ?, ?, ?, ?, ?)";
	$stmt_venta = mysqli_prepare($conexion, $sql_venta);
	mysqli_stmt_bind_param($stmt_venta, "siddds", $fechaVenta, $usuarioId,$subtotal,$iva,$total, $filename);
	mysqli_stmt_execute($stmt_venta);

	// Obtener el ID de la venta recién insertada
    $venta_id = mysqli_insert_id($conexion);

	foreach ($_SESSION["carrito"] as $articulo) {
		$sql_item = "INSERT INTO itemVenta (id_producto, cantidad, precio, venta_id) VALUES (?, ?, ?, ?)";
		$stmt_item = mysqli_prepare($conexion, $sql_item);
		mysqli_stmt_bind_param($stmt_item, "sddi", $articulo['codigo'], $articulo['cantidad'], $articulo['precio'], $venta_id);
		mysqli_stmt_execute($stmt_item);

		//resta de stock
		$nuevaCantidad = $articulo["stock"] - 1;
		$sql = "UPDATE productos SET cantidad ='" . $nuevaCantidad . "'WHERE codigo='" . $articulo["codigo"] . "'";
		$modificar = mysqli_query($conexion, $sql);
	}
	
	//venta(donde se guarda en la base de datos --)
	// SELECT * FROM ventas WHERE id = $_SESSION["id"]
	// SELECT * FROM ventas WHERE id = usuarios.id
	//paypal

	// Cierra la conexión a la base de datos
	mysqli_stmt_close($stmt_venta);
	mysqli_stmt_close($stmt_item);
	mysqli_close($conexion);

	$_SESSION["carrito"] = [];
}else {
	header("location:index.php");
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
	<?php require("global/navbar.php");	?>
	<h1 style="text-align: center; margin: 20px auto">Compra realizada con éxito</h1>
	<div class="container" style="text-align: center; margin: 100px auto">
		<h3 ><?php echo 'Sub Venta: $' . $subtotal; ?></h3>
		<h3><?php echo 'Iva Venta: $' . $iva; ?></h3>
		<h3><?php echo 'Total Venta: $' . $total; ?></h3>
	</div>
	<a href="<?php echo $filename; ?>" download="comprobante.pdf">
		<button>Descargar</button>
	</a>
	<?php require("global/footer.php"); ?>
</body>

</html>