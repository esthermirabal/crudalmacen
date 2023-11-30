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
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <form method="POST" class="col-md-6 p-4 bg-dark text-white shadow rounded">
                <div class="form-group">
                    <label style="font-size: 20px;" class="form-label mt-4"></label>
                    <input type="text" name="inputNombre" style="font-size: 20px; background-color: #333; color: white;" class="form-control">
                    <small class="form-text text-muted">Introduce tu nombre</small>
                </div>
                <div class="form-group">
                    <label style="font-size: 20px;" class="form-label mt-4"></label>
                    <input type="text" name="inputApellido" style="font-size: 20px; background-color: #333; color: white;" class="form-control">
                    <small class="form-text text-muted">Introduce tu apellido</small>
                </div>
                <div class="form-group">
                    <label style="font-size: 20px;" class="form-label mt-4"></label>
                    <input type="text" name="inputDni" style="font-size: 20px; background-color: #333; color: white;" class="form-control">
                    <small class="form-text text-muted">Introduce tu numero de DNI</small>
                </div>
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
                <div class="form-group">
                    <label style="font-size: 20px;" class="form-label mt-4"></label>
                    <input type="text" name="inputEmail" style="font-size: 20px; background-color: #333; color: white;" class="form-control">
                    <small class="form-text text-muted">Introduce email</small>
                </div>
                <div class="form-group">
                    <label style="font-size: 20px;" class="form-label mt-4"></label>
                    <input type="text" name="inputTelefono" style="font-size: 20px; background-color: #333; color: white;" class="form-control">
                    <small class="form-text text-muted">Introduce tu numero de telefono</small>
                </div>

                <div class="form-group text-center">
                    <button type="submit" name="botonRegistro" class="btn btn-secondary">Registrarse</button>
                </div>
            </form>
        </div>
    </div>
    <?php require("global/footer.php"); ?>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>