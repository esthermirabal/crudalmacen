<!--HACER PAGINA DE REGISTRAR CON FORMULARIOS, ACOMODAR BOTONES Y VER DETALLES-->
<?php
session_start();
require("consultas.php");
require("librerias.php");
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
	<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><img src="imagenes/giga.png" class="centered-image"></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarColor01">
		<ul class="navbar-nav me-auto">
			<li class="nav-item">
			<a class="nav-link active" href="index.php">Inicio
				<span class="visually-hidden">(current)</span>
			</a>
			</li>
		</ul>
		</div>
	</div>
	</nav>
	<div class="container vh-100">
    <div class="row d-flex justify-content-center align-items-center">
        <form method="POST" class="col-md-6 p-4 bg-dark text-white shadow rounded">
            <div class="form-group">
                <label style="font-size: 20px;" class="form-label mt-4"></label>
                <input type="text" name="inputNombreUsuario" style="font-size: 20px; background-color: #333; color: white;" class="form-control">
                <small class="form-text text-muted">Introduce tu nombre de usuario</small>
            </div>
            <div class="form-group">
                <label style="font-size: 20px;" class="form-label mt-4"></label>
                <input type="password" name="inputClaveUsuario" style="font-size: 20px; background-color: #333; color: white;" class="form-control">
                <small class="form-text text-muted">Introduce tu contraseña</small>
            </div>
            <div class="form-group">
                <label style="font-size: 20px;" class="form-label mt-4"></label>
                <input type="password" name="inputConfirmarClave" style="font-size: 20px; background-color: #333; color: white;" class="form-control">
                <small class="form-text text-muted">Confirma tu contraseña</small>
            </div>

            <div class="form-group text-center">
                <button type="submit" name="botonRegistro" class="btn btn-secondary">Registrarse</button>
            </div>
        </form>
    </div>
</div>




<footer class="bg-primary text-white text-center py-3" style="background-color: #333; color: white; text-align: center; padding: 20px 0; position: fixed; bottom: 0; width: 100%;">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> Tu Nombre o Nombre de la Empresa. Todos los derechos reservados.</p>
    </div>
</footer>
	<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
