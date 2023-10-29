<?php
require("global/consultas.php");
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}
if (isset($_POST['codigo'])) {
    $codigo = $_POST['codigo'];
    $cantidad = $_POST['cantidad'];
    $conexion = conectar();
	$sql = "SELECT * FROM productos WHERE codigo = '" . $codigo . "'";
    $consulta = mysqli_query($conexion, $sql);
    $datos = mysqli_fetch_assoc($consulta);
    // Agregar el producto al carrito (puedes validar y filtrar los datos aquí)
    $articulo = [
        "codigo"=>$codigo,
        "stock"=>$datos["cantidad"],
        "cantidad"=>$cantidad,
        "nombre"=>$datos["nombre"], 
        "precio"=>$datos["precio"]
    ];
    array_push($_SESSION['carrito'], $articulo);

    
    //Aquí  
    //var_dump($_SESSION["carrito"]);
    /*
    foreach($_SESSION["carrito"] as $articulo){
        echo 'cantidad:'.$articulo["cantidad"];
        echo '<br>';
        echo 'codigo:'.$articulo["codigo"];
        echo '<br>';
    }*/
}

?>