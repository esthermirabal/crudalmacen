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
    <style>
        .contenedor-imagen {
            display: inline-block;
            text-align: center;
            width: 12%;
            margin-right: 20px;
        }

        .contenedor-imagen img {
            border-radius: 50%;
            /* Hace que las imágenes sean redondas */
            width: 100%;
            /* Ajusta el ancho de las imágenes según tus necesidades */
            height: 100%;
            margin: 20px;
            /* Ajusta la altura de las imágenes según tus necesidades */
            /* Espacio entre las imágenes */
        }
    </style>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <?php require("global/navbar.php"); ?>
    <div class="container-fluid justify-content-center" style="text-align: center; margin: 20px auto">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <div class=" d-flex justify-content-center">
                        <img src="imagenes/7.png" class="d-block" alt="..." width="60%" height="450px">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class=" d-flex justify-content-center">
                        <img src="imagenes/8.png" class="d-block" alt="..." width="60%" height="450px">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container justify-content-center" style="text-align: center; margin: 20px auto">
    <div class="contenedor-imagen">
        <img src="imagenes/auri.png" alt="">
        <p style="text-align: center;">Auriculares</p>
    </div>
    <div class="contenedor-imagen">
        <img src="imagenes/mouse.png" alt="Imagen 2">
        <p style="text-align: center;">Mouse</p>
    </div>

    <div class="contenedor-imagen">
        <img src="imagenes/teclado.png" alt="Imagen 3">
        <p style="text-align: center;">Teclados</p>
    </div>

    <div class="contenedor-imagen">
        <img src="imagenes/tablet.png" alt="Imagen 4">
        <p style="text-align: center;">Tablets</p>
    </div>

    <div class="contenedor-imagen">
        <img src="imagenes/note.png" alt="Imagen 5">
        <p style="text-align: center;">Notebooks</p>
    </div>

    <div class="contenedor-imagen">
        <img src="imagenes/monitor.png" alt="Imagen 6">
        <p style="text-align: center;">Monitores</p>
    </div>
    </div>

    <?php require("global/footer.php"); ?>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>