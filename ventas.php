<?php
require("global/librerias.php");
require("global/consultas.php");
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
    <?php require("global/navbar.php");    ?>
    <h1 style="text-align: center; margin: 20px auto">Ventas Realizadas</h1>
    <div class="container">
        <table class="table table-bordered" style="margin: 20px auto;">
            <tr>
                <th scope="col" style="text-align: center;">Venta ID</th>
                <th scope="col" style="text-align: center;">Fecha</th>
                <th scope="col" style="text-align: center;">Nombre</th>
                <th scope="col" style="text-align: center;">Apellido</th>
                <th scope="col" style="text-align: center;">DNI</th>
                <th scope="col" style="text-align: center;">Item Venta</th>
                <th scope="col" style="text-align: center;">Producto</th>
                <th scope="col" style="text-align: center;">Nombre del Producto</th>
                <th scope="col" style="text-align: center;">Cantidad</th>
                <th scope="col" style="text-align: center;">Precio</th>
                
            </tr>

            <?php
            // Establece la conexión a la base de datos
            $conexion = conectar();
            // Realiza una consulta para obtener todas las ventas con datos de usuario y producto
            $sql = "SELECT venta.id AS venta_id, venta.fecha, usuarios.nombre, usuarios.apellido, usuarios.dni, itemVenta.id AS item_id, itemVenta.id_producto, productos.nombre AS nombre_producto, itemVenta.cantidad, itemVenta.precio
                FROM venta
                LEFT JOIN itemVenta ON venta.id = itemVenta.venta_id
                LEFT JOIN usuarios ON venta.usuario_id = usuarios.id
                LEFT JOIN productos ON itemVenta.id_producto = productos.codigo";

            $resultado = mysqli_query($conexion, $sql);

            if ($resultado) {
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo '<tr>
                <td scope="row">' . $fila["venta_id"] . '</td>
                <td style="text-align: center;">' . $fila["fecha"] . '</td>
                <td style="text-align: center;">' . $fila["nombre"] . '</td>
                <td style="text-align: center;">' . $fila["apellido"] . '</td>
                <td style="text-align: center;">' . $fila["dni"] . '</td>
                <td style="text-align: center;">' . $fila["item_id"] . '</td>
                <td style="text-align: center;">' . $fila["id_producto"] . '</td>
                <td style="text-align: center;">' . $fila["nombre_producto"] . '</td>
                <td style="text-align: center;">' . $fila["cantidad"] . '</td>
                <td style="text-align: center;">' . $fila["precio"] . '</td>
                </tr>';
                }
            } else {
                echo "Se ha producido algún error en la consulta: " . mysqli_error($conexion);
            }

            // Cerrar la conexión a la base de datos
            mysqli_close($conexion);
            ?>
    </div>
    </table>

    <?php require("global/footer.php")?>
    <script src="js/bootstrap.bundle.js"></script>
    
</body>
</html>