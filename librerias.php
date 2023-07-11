<?php 
if (isset($_POST['cerrarSesion'])) {
	session_destroy();
	header("location:http://localhost/incuyo/Crud%20almacen%2023-6/");
}
function verificarSesion(){
	if (!isset($_SESSION["login"])) {
	header("location:http://localhost/incuyo/Crud%20almacen%2023-6/");
	}
}
?>