<?php 
require("conexion.php");
function listar(){
	$conexion = conectare();
	if($conexion != null){
		$sql = "SELECT * FROM productos";
		$consulta= mysqli_query($conexion,$sql);
		if(mysqli_num_rows($consulta)>0){
			while($datos = mysqli_fetch_assoc($consulta)){
			            //var_dump($datos);
				echo '
				<tr>
				<th scope="row">'.$datos["codigo"].'</th>
				<td>'.$datos["categoria"].'</td>
				<td>'.$datos["fechaAlta"].'</td>
				<td>'.$datos["nombre"].'</td>
				<td>'.$datos["precio"].' x kg</td>
				<td><img src="'.$datos["imagen"].'" width=50,height=50></img></td>
				<td>
				<form method="GET" action="editar.php">
				<button class="btn btn-sm btn-outline-dark" name="codigo" value="'.$datos["codigo"].'"><i class="fa-solid fa-pen-to-square" ></i></button>
				</form>
				</td>
				</tr>
				';
			}
		}
		mysqli_close($conexion);
	}
}
if(isset($_POST["botonModificar"])) {
	$codigo = $_POST["inputCodigo"];
	$categoria = $_POST["inputCategoria"];
	$fechaAlta = $_POST["inputFecha"];
	$nombre = $_POST["inputNombre"];
	$precio = $_POST["inputPrecio"];
	$sql = "UPDATE productos SET categoria='".$categoria."',fechaAlta='".$fechaAlta."',nombre='".$nombre."',precio='".$precio."' WHERE codigo='".$codigo."'";
	$conexion = conectare();
	$modificar = mysqli_query($conexion,$sql);

	if ($modificar) {
		mysqli_close($conexion);
		header("location:index.php");
	}
	
}
if(isset($_POST["botonGuardar"])){
	$conexion = conectare();
	$categoria = $_POST["inputCategoria"];
	$nombre = $_POST["inputNombre"];
	$precio = $_POST["inputPrecio"];
	$sql="INSERT INTO productos(categoria,nombre,precio) VALUES('".$categoria."','".$nombre."','".$precio."')";
	$guardar = mysqli_query($conexion,$sql);
	if(!$guardar){
		echo "Se ha producido algún error";
	}else{
		$guardado = "exitoso";
	}
	mysqli_close($conexion);
}

if (isset($_POST["botonLogin"])) {
	$conexion = conectare();
	$usuario = $_POST["inputNombreUsuario"];
	$clave = $_POST["inputClaveUsuario"];
	$sql="SELECT * FROM usuarios WHERE nombre ='".$usuario."' AND clave='".$clave."' ";
	$busqueda = mysqli_query($conexion,$sql);
	if(mysqli_num_rows($busqueda) > 0){
		$_SESSION["login"] = $usuario;
		header("location:gestion.php");
	}else{
		echo '
		<script type="text/javascript">
			alert("Usuario o contraseña invalido")
		</script>
		';
	}
}
function verProductos(){
	$conexion = conectare();
	$sql = "SELECT * FROM productos";
	$consulta= mysqli_query($conexion,$sql);
	if(mysqli_num_rows($consulta)>0){
		while($datos = mysqli_fetch_assoc($consulta)){
			echo '
			<div class="card" style="width: 18rem;">
				<img src="'.$datos["imagen"].'" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">'.$datos["nombre"].'</h5>
					<p class="card-text">'.$datos["precio"].'</p>
				</div>
			</div>
			';
		}
	}
}
?>