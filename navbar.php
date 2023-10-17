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
                <?php

                if (!(isset($_SESSION["login"]))) {
                    echo '<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" type="button" aria-haspopup="true" aria-expanded="false">Cuenta</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="registro.php">Registrarse</a>
                        <a class="dropdown-item" href="login.php">Iniciar Sesión</a>
                    </div>
                </li>';
                } else {
                    echo '<li class="nav-item">
				<a class="nav-link active" href="index.php?cerrarSesion=0">Cerrar Sesión
					<span class="visually-hidden">(current)</span>
				</a>
			</li>';
                    if ($_SESSION["tipo"] == "admin") {
                        echo '<li class="nav-item">
                    <a class="nav-link active" href="gestion.php">Gestión
                        <span class="visually-hidden">(current)</span>
                    </a>
                    </li>';
                    }
                }
                ?>

            </ul>
        </div>
    </div>
</nav>