<?php 
if (isset($_GET['cerrarSesion'])) {
	session_destroy();
	header("location:index.php");
}
function verificarSesion(){
	if (!isset($_SESSION["login"])) {
	header("location:index.php");
	}
}
?>