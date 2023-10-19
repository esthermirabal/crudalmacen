<?php
session_start();
//$_SESSION["carrito"] = [[1, 1, 2],]; //dentro de una array ingreso la posicion 1. y busca el usuario en el 2
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


    <div class="container mt-4">
        <div class="row justify-content-center" style="margin-left: auto; margin-right: auto;">
            <div class="row">
                <?php verProductos(); ?>
            </div>
        </div>
    </div>
    <?php require("global/footer.php"); ?>
    <!--php push array  agregar cosas al carrito -->
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>