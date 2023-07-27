<div class="container-fluid bg-primary">
	<div class="row">
		<div  class="col-10">
			<h1 class="bg-primary text-white ">
				<a href="http://localhost/incuyo/Crud%20almacen%23-6/" style="text-decoration: none; color: white;">
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
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" type="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="navbar.php">Registrarse</a>
									<a class="dropdown-item" href="login.php">Iniciar Sesión</a>
								</div>
							</li>
						</ul>
						</div>
					</div>
					</nav>
				</a>
			</h1>
		</div>		
		<div class="col-2">
			<?php 
			if (isset($_SESSION['login'])) {
				echo'
				<form method="POST">
				<div class="dropdown">
					<button class="btn btn-secondary centered-button dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Cuenta</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
					<li><a class="dropdown-item" href="gestion.php">Gestion</a></li>
					<li><button type="submit" class="dropdown-item" name="cerrarSesion">Cerrar Sesion</button></li>
					</ul>
				</div>
				</form>';
			}else{
				echo'<button type="button" class="btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ingreso</button>';
			}
			?>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ingresar</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form method="POST">
				<div class="modal-body">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Usuario</span>
						<input type="text" class="form-control" placeholder="Ingrese su usuario" name="inputNombreUsuario">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Contraseña</span>
						<input type="password" class="form-control" placeholder="Ingrese su contraseña" name="inputClaveUsuario" >
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" name="botonLogin">Login</button> <!--Submit: para enviar formularios-->
				</div>
			</form>
		</div>
	</div>
</div>
