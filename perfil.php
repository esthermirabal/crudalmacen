<?php
if (!(isset($_SESSION["login"]))) {
    header("location: index.php");
}
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
    <?php
    require("global/navbar.php"); ?>
    <div class="text-center" style="margin-top: 20px;">
        <h1><?php echo $_SESSION["nombre"]; ?></h1>
    </div>
    
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <form method="POST" class="col-md-8 p-4 bg-dark text-white shadow rounded" enctype="multipart/form-data">
                <div class="container col-6">
                    <div class="form-group">
                        <label style="font-size: 20px;" class="form-label mt-4"></label>
                        <input type="text" name="inputNombre" value="<?php echo $_SESSION["nombre"];?>" style="font-size: 20px; background-color: #333; color: white;" class="form-control">
                        <small class="form-text text-muted">Introduce tu nombre</small>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 20px;" class="form-label mt-4"></label>
                        <input type="text" name="inputApellido" value="<?php echo $_SESSION["apellido"];?>"  style="font-size: 20px; background-color: #333; color: white;" class="form-control">
                        <small class="form-text text-muted">Introduce tu apellido</small>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 20px;" class="form-label mt-4"></label>
                        <input type="text" name="inputEmail" value="<?php echo $_SESSION["email"];?>"  style="font-size: 20px; background-color: #333; color: white;" class="form-control">
                        <small class="form-text text-muted">Introduce email</small>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 20px;" class="form-label mt-4"></label>
                        <input type="text" name="inputTelefono" value="<?php echo $_SESSION["telefono"];?>"  style="font-size: 20px; background-color: #333; color: white;" class="form-control">
                        <small class="form-text text-muted">Introduce tu numero de telefono</small>
                    </div>
                    <?php
                    if (isset($guardado)) {
                        echo '<h4 class="bg-success">Se han modificado tus datos datos exitosamente</h4>';
                    }
                    ?>
                    <div class="d-flex justify-content-center mt-2">
                        <div style="margin-right: 10%;">
                            <a class="btn btn-lg btn-outline-primary" href="index.php">Volver</a>
                        </div>
                        <div>
                            <button class="btn btn-lg btn-outline-primary" name="botonPerfil">Modificar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    require("global/footer.php");

    ?>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>