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
	<?php
	if (isset($_GET["codigo"])) {
		$conexion = conectar();
		$sql = "SELECT * FROM productos WHERE codigo='".$_GET["codigo"]."'";
		// Ejecuta la consulta
		$resultado = mysqli_query($conexion, $sql);
		if ($resultado) {
			if (mysqli_num_rows($resultado) > 0) {
				$fila = mysqli_fetch_assoc($resultado);
				// Ahora, $fila contiene la información del producto
				$nombre = $fila["nombre"];
				$descripcion = $fila["descripcion"];
				$precio = $fila["precio"];
				$imagen = $fila["imagen"];
				?>
				<div class="container" style="margin: 60px auto;">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?php echo $imagen; ?>" alt="Imagen del Producto" style="max-width: 80%; max-height: 80%; ">
                        </div>
                        <div class="col-md-6">
                            <h1 style="text-align: center;"><?php echo $nombre; ?></h1>
							<br>
                            <h4><b>Descripción: </b> </h3>
							<p style="text-align: justify;"><?php echo $descripcion; ?></p>
							<h4><b>Precio: </b> </h3>
                            <p>$ <?php echo $precio; ?></p>
							<?php echo'
							<form action="compras.php" method="POST">
								<input type="number" name="cantidad" value="1" min="1" style="width: 60px; height: 40px; margin-left: 15px;">
                    			<button name="codigo" value="'.$fila["codigo"].'" type="submit" class="btn btn-primary" style="margin-left: 10px;">Comprar</button>
							</form>'
							?>
                        </div>
                    </div>
                </div>
			<?php
			} else {
				echo "Producto no encontrado.";
			}
			mysqli_free_result($resultado);
		} else {
			// Manejar errores en la consulta
			echo "Error en la consulta: " . mysqli_error($conexion);
		}
	} else {
		echo "No se proporcionó un código de producto válido en la URL.";
	}
	?>
	


	<?php require("global/footer.php"); ?>
	<script src="js/bootstrap.bundle.js"></script>
</body>

</html>