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
    <div class="container-fluid mt-6 row">
        <div class="container mt-4 col-2">
            <form id="filterForm">
                <label for="categoryFilter" style="font-size: 18px;"> Filtrar por categoría:</label><br>
                <select id="categoryFilter" style="font-size: 20px;" name="categoria">
                    <option value="Todos">Todos</option>
                    <option value="Celulares">Celulares</option>
                    <option value="Notebooks">Notebooks</option>
                    <option value="Tablets">Tablets</option>
                </select>
                <button type="submit" style="margin: 10px;">Filtrar</button>
            </form>
        </div>
        <?php
        $productosPorPagina = 8; // Cantidad de productos a mostrar por página
        $paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1; ?>

        <div class="container-fluid mt-4 col-10">
            <div class="row justify-content-center">
                <div class="row">
                    <?php
                    $categoria = "Todos";
                    if (isset($_GET["categoria"])) {
                        $categoria = $_GET["categoria"];
                    }
                    $cantidadDatos = verProductos($paginaActual, $productosPorPagina, $categoria);

                    ?>
                </div>
            </div>
            <div class="container mt-3">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 text-center">
                        <ul class="pagination mx-auto">
                            <?php
                            $totalProductos = $cantidadDatos;
                            //echo $cantidadDatos;//Número total de productos
                            $totalPaginas = ceil($totalProductos / $productosPorPagina);

                            if ($paginaActual > $totalPaginas) {
                                $paginaActual = $totalPaginas;
                            }

                            for ($pagina = 1; $pagina <= $totalPaginas; $pagina++) {
                                $activo = ($pagina == $paginaActual) ? 'active' : '';
                                echo '<li class="page-item ' . $activo . '"><a class="page-link" href="productos.php?categoria=' . $categoria . '&pagina=' . $pagina . '">' . $pagina . '</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php require("global/footer.php"); ?>
        <script src="js/bootstrap.bundle.js"></script>
    </div>
</body>

</html>