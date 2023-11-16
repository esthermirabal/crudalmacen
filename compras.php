<?php
if (!(isset($_SESSION["login"]))) {
    header("location: index.php");
}
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
    <?php require("global/navbar.php"); ?>
    
    <table class="table" style="margin: 20px auto; width: 60%; height:40vh; overflow-y: scroll;">
        <thead>
            <tr>
                <th scope="col">Código</th> <!--TH  encabezados-->
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col" style="text-align: center;">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($_SESSION["carrito"] as $articulo) {
                $index = array_search($articulo, $_SESSION["carrito"]); 
                // td --> columnas normales
                // tr--> filas
                echo '<tr>
                <td scope="row">' . $articulo["codigo"] . '</td> 
                <td>' . $articulo["nombre"] . '</td>
                <td>' . $articulo["cantidad"] . '</td>
                <td>' . $articulo["precio"] . '</td>
                <td style="text-align: center;">
                    <form method="POST" style="text-align: center;">
                        <button type="submit" value="'.$index.'" name="eliminarItem" class="btn btn-sm" ><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>

                </tr>';
            }
            ?>
        </tbody>
    </table>

    <form action="postcompra.php" method="POST" style="text-align: center;">
        <button type="submit" name="ventas" class="btn btn-primary" >Comprar</button>
    </form>



    <?php require("global/footer.php"); ?>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>