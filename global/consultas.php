<?php
require("conexion.php");
function listar()
{
	$conexion = conectar();
	if ($conexion != null) {
		$sql = "SELECT * FROM productos";
		$consulta = mysqli_query($conexion, $sql);
		if (mysqli_num_rows($consulta) > 0) {
			while ($datos = mysqli_fetch_assoc($consulta)) {
				//var_dump($datos);
				echo '
				<tr>
				<th scope="row">' . $datos["codigo"] . '</th>
				<td>' . $datos["categoria"] . '</td>
				<td>' . $datos["fechaAlta"] . '</td>
				<td>' . $datos["nombre"] . '</td>
				<td>' . $datos["cantidad"] . '</td>
				<td>' . $datos["descripcion"] . '</td>
				<td>' . $datos["precio"] . '</td>
				<td><img src="' . $datos["imagen"] . '" width=50,height=50></img></td>
				<td>
				<div class="row">
					<div class="col">
    				<form method="GET" action="editar.php">
					<button class="btn btn-sm btn-outline-dark" name="codigo" value="' . $datos["codigo"] . '"><i class="fa-solid fa-pen-to-square" ></i></button>
					</form>
				</div>
				<div class="col">
					<form method="GET" action="compras.php">
					<button class="btn btn-sm btn-outline-dark" name="vender" value="' . $datos["codigo"] . '">🤑</button>
					</form>
				</div>
				</div>
				</td>
				</tr>
				';
			}
		}
		mysqli_close($conexion);
	}
}
if (isset($_POST["botonModificar"])) {
	$codigo = $_POST["inputCodigo"];
	$categoria = $_POST["inputCategoria"];
	$fechaAlta = $_POST["inputFecha"];
	$nombre = $_POST["inputNombre"];
	$cantidad = $_POST["inputCantidad"];
	$descripcion = $_POST["inputDescripcion"];
	$precio = $_POST["inputPrecio"];
	if ($_FILES['inputImagen']["error"] > 0) {
		$ruta = "productos/default.png";
	} else {
		$nombreImagen = $_FILES['inputImagen']["name"];
		$ruta = "productos/" . $nombreImagen;
		$contenido = file_get_contents($_FILES['inputImagen']["tmp_name"]);
		move_uploaded_file($_FILES['inputImagen']["tmp_name"], $ruta);
	}
	$sql = "UPDATE productos SET categoria ='" . $categoria . "', fechaAlta='" . $fechaAlta . "', nombre='" . $nombre . "', cantidad='" . $cantidad . "', descripcion='" . $descripcion . "', precio='" . $precio . "', imagen='" . $ruta . "' WHERE codigo='" . $codigo . "'";
	$conexion = conectar();
	$modificar = mysqli_query($conexion, $sql);
	if ($modificar) {
		mysqli_close($conexion);
		header("location:gestion.php");
	}
}
if (isset($_POST["botonEliminar"])) {
	$codigo = $_POST["inputCodigo"];
	$categoria = $_POST["inputCategoria"];
	$fechaAlta = $_POST["inputFecha"];
	$nombre = $_POST["inputNombre"];
	$cantidad = $_POST["inputCantidad"];
	$descripcion = $_POST["inputDescripcion"];
	$precio = $_POST["inputPrecio"];
	$imagen = $_POST["inputImagen"];
	$sql = "DELETE FROM productos WHERE codigo='" . $codigo . "'";
	$conexion = conectar();
	$eliminar = mysqli_query($conexion, $sql);
	if ($eliminar) {
		mysqli_close($conexion);
		header("location:gestion.php");
	}
}
//No carga la imagen da error, pero si carga el resto de los datos
if (isset($_POST["botonGuardar"])) {
	$conexion = conectar();
	$categoria = $_POST["inputCategoria"];
	$nombre = $_POST["inputNombre"];
	$cantidad = $_POST["inputCantidad"];
	$descripcion = $_POST["inputDescripcion"];
	$precio = $_POST["inputPrecio"];  //atributos de un producto
	//var_dump($_FILES);
	$imagen = $_FILES["input_imagen"];
	if ($_FILES['input_imagen']["error"] > 0) {
		$ruta = "productos/default.png";
	} else {
		$nombreImagen = $_FILES['input_imagen']["name"];
		$ruta = "productos/" . $nombreImagen;
		$contenido = $_FILES['input_imagen']["tmp_name"];
		move_uploaded_file($contenido, $ruta);

		//Verifica si el archivo se ha movido correctamente antes de intentar leerlo
		if (!$contenido) {
			echo "No se pudo leer el archivo.";
			//error de lectura aquí
		}
	}
	//ingreso en la base de datos
	$sql = "INSERT INTO productos(categoria,nombre,cantidad,descripcion,precio,imagen) VALUES('" . $categoria . "','" . $nombre . "','" . $cantidad . "','" . $descripcion . "','" . $precio . "','" . $ruta . "')";
	$guardar = mysqli_query($conexion, $sql);
	if (!$guardar) {
		echo "Se ha producido algún error";
	} else {
		$guardado = "exitoso";
	}
	mysqli_close($conexion);
}

if (isset($_POST["botonLogin"])) {
	$conexion = conectar();
	$usuario = $_POST["inputNombreUsuario"];
	$clave = $_POST["inputClaveUsuario"];
	$sql = "SELECT * FROM usuarios WHERE nombre = '" . $usuario . "' AND clave = '" . $clave . "' ";
	$busqueda = mysqli_query($conexion, $sql);
	if (mysqli_num_rows($busqueda) > 0) {
		$datos = mysqli_fetch_all($busqueda);
		//var_dump($datos);
		$_SESSION["login"] = $usuario;
		$_SESSION["id"] = $datos[0][0];
		$_SESSION["tipo"] = $datos[0][8];
		header("location: index.php");
		exit; // Evita que el código siga ejecutándose
	} else {
		echo '
        <script type="text/javascript">
            alert("Usuario o contraseña inválido");
            window.location.href = "login.php"; // Redirige nuevamente a login.php en caso de error
        </script>
        ';
	}
}

if (isset($_POST["botonRegistro"])) {
	$conexion = conectar();
	$nombre = $_POST["inputNombre"];
	$apellido = $_POST["inputApellido"];
	$dni = $_POST["inputDni"];
	$usuario = $_POST["inputNombreUsuario"];
	$clave = $_POST["inputClaveUsuario"]; // Aquí asumo que "inputClaveUsuario" es el campo de contraseña
	$email = $_POST["inputEmail"];
	$telefono = $_POST["inputTelefono"]; 

	// Verifica si los campos tienen al menos 6 caracteres
	if (strlen($usuario) < 6 || strlen($clave) < 6) {
		echo '
        <script type="text/javascript">
            alert("El nombre de usuario y la contraseña deben tener al menos 6 caracteres.");
            window.location.href = "registro.php"; // Redirige nuevamente a registro.php en caso de error
        </script>
        ';
		exit; // Salir del script en caso de error
	}

	// Asegurémonos de que las contraseñas coincidan antes de continuar
	$confirmarClave = $_POST["inputConfirmarClave"]; // Campo para confirmar la contraseña
	if ($clave !== $confirmarClave) {
		echo '
        <script type="text/javascript">
            alert("Las contraseñas no coinciden");
            window.location.href = "registro.php"; // Redirige nuevamente a registro.php en caso de error
        </script>
        ';
		exit; // Salir del script en caso de error
	}

	// Realiza la inserción en la base de datos
	//$sql = "INSERT INTO usuarios (nombre, clave) VALUES ('$usuario', '$clave')";
	$sql = "INSERT INTO usuarios (nombre, apellido, dni, usuario, clave, email, telefono) VALUES ('$nombre', '$apellido', '$dni','$usuario', '$clave','$email', '$telefono')";
	$guardar = mysqli_query($conexion, $sql);
	if ($guardar) {
		$_SESSION["login"] = $usuario;
		$_SESSION["id"] = $datos[0][0];
		$_SESSION["tipo"] = $datos[0][8];
		header("location: index.php");
		exit; // Evita que el código siga ejecutándose
	} else {
		echo '
        <script type="text/javascript">
            alert("Error al registrar usuario");
            window.location.href = "registro.php"; // Redirige nuevamente a registro.php en caso de error
        </script>
        ';
	}
}

function listarBusqueda()
{
	if (isset($_POST["inputBuscar"])) {
		//$inputs = $_POST;
		//var_dump($inputs["inputBuscar"]);
		$conexion = conectar();
		if ($conexion != null) {
			$buscar= "%".$_POST["inputBuscar"]."%";
			$sql = "SELECT * FROM productos WHERE categoria LIKE '".$buscar."'";
			$consulta = mysqli_query($conexion, $sql);
			if (mysqli_num_rows($consulta) > 0) {
				while ($datos = mysqli_fetch_assoc($consulta)) {
					//var_dump($datos);
					echo '
					<tr>
					<th scope="row">' . $datos["codigo"] . '</th>
					<td>' . $datos["categoria"] . '</td>
					<td>' . $datos["fechaAlta"] . '</td>
					<td>' . $datos["nombre"] . '</td>
					<td>' . $datos["cantidad"] . '</td>
					<td>' . $datos["descripcion"] . '</td>
					<td>' . $datos["precio"] . '</td>
					<td><img src="' . $datos["imagen"] . '" width=50,height=50></img></td>
					<td>
					<div class="row">
						<div class="col">
						<form method="GET" action="editar.php">
						<button class="btn btn-sm btn-outline-dark" name="codigo" value="' . $datos["codigo"] . '"><i class="fa-solid fa-pen-to-square" ></i></button>
						</form>
					</div>
					<div class="col">
						<form method="GET" action="compras.php">
						<button class="btn btn-sm btn-outline-dark" name="vender" value="' . $datos["codigo"] . '">🤑</button>
						</form>
					</div>
					</div>
					</td>
					</tr>
					';
				}
			}
			mysqli_close($conexion);
		}
	}
}


function verProductos($paginaActual, $productosPorPagina)
{
	$conexion = conectar();
	$inicio = ($paginaActual - 1) * $productosPorPagina;
	$sql = "SELECT * FROM productos ORDER BY codigo DESC LIMIT $inicio, $productosPorPagina";
	$consulta = mysqli_query($conexion, $sql);
	if (mysqli_num_rows($consulta) > 0) {
		while ($datos = mysqli_fetch_assoc($consulta)) { //para agregar al carrito y redireccionar a los detalles del producto
			echo '
			<div class="card mb-4 mx-2" style="width: 18rem;">
				<img src="' . $datos["imagen"] . '" class="card-img-top" alt="..." style="width: 250px; height: 250px;">
				</a>
				<div class="card-body" >
					<h5 class="card-title">' . $datos["nombre"] . '</h5>
					<h4 class="card-text" style="text-align: center;">$ ' . $datos["precio"] . '</h4>
					<div style="text-align: center;">
    					<a href="detalles.php?codigo='.$datos["codigo"].'" class="btn btn-secondary">Ver detalles</a>
					</div>
				</div>
			</div>
			';
		}
	}
}
?>


<!--
GET: BUSCAR
DELETE: BORRAR
PUT: MODIFICA UNA PARTE
Y PATCH: MODIFICA TODO
POST: GUARDAR-->
