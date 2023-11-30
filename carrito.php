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

}
if(isset($_POST["eliminarItem"])){ //Elimina los items del carrito dejandolos de forma ordenada
    $index = $_POST["eliminarItem"];
    array_splice($_SESSION["carrito"], $index,1);
}

?>