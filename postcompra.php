<!--formulario de datos y venta de producto y los productos que se agreguen adicionales-->

<?php
session_start();
if (isset($_POST["ventas"])) {
    //for dato in datos == foreach($datos as $dato)
    // array=["clave"=>valor]
    $totalVenta = 0 ;
    foreach ($_SESSION["carrito"] as $articulo) {
		//restar stock
        $subtotal = $articulo["precio"] * $articulo["cantidad"];
        $iva = $subtotal * 0.21;
        $total = $subtotal + $iva;
        $totalVenta = $totalVenta + $total;
    }
	//guardar venta en bd

	//???ticket

	//paypal
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
	<h3><?php echo 'totalVenta:'.$totalVenta;?></h3>
	<button class="btn"> Descargue el ticket</button>


	<?php require("global/footer.php"); ?>
</body>

</html>