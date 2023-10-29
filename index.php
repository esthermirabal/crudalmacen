<?php
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
    <?php require("global/navbar.php");
    $elementosPorPagina = 8; // Cantidad de elementos a mostrar por página
    $paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1; ?>


    <div class="container mt-4">
        <div class="row justify-content-center" style="margin-left: auto; margin-right: auto;">
            <div class="row">
                <?php verProductos($paginaActual, $elementosPorPagina); ?>
            </div>
        </div>
    </div>

    <!--Mi paginacion-->
    <div class="container ">
        <div class="row d-flex justify-content-center">
            <div class="col-12 text-center">
                <ul class="pagination mx-auto">
                    <?php
                    $totalProductos = 30; //Número total de productos
                    $totalPaginas = ceil($totalProductos / $productosPorPagina);

                    if ($paginaActual > $totalPaginas) {
                        $paginaActual = $totalPaginas;
                    }

                    for ($pagina = 1; $pagina <= $totalPaginas; $pagina++) {
                        $activo = ($pagina == $paginaActual) ? 'active' : '';
                        echo '<li class="page-item ' . $activo . '"><a class="page-link" href="index.php?pagina=' . $pagina . '">' . $pagina . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <?php require("global/footer.php"); ?>
    <!--php push array  agregar cosas al carrito -->
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>