<?php
session_start();
$_SESSION["carrito"] = [[1,1,2],]; //dentro de una array ingreso la posicion 1. y busca el usuario en el 2
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
    <?php require("navbar.php");?>


	<div class="container mt-4">
	<div class="row justify-content-center" style="margin-left: auto; margin-right: auto;">
		<div class="row">
			<?php verProductos(); ?>
		</div>
	</div>

    <!--php push array  agregar cosas al carrito -->







	<footer style="background-color: #333; color: white; text-align: center; padding: 20px 0; bottom: 0; width: 100%;">
    <!--<div class="container">
        <div class="row">
			<div class="row mt-3">
				<div class="col-md-4">
					<h4>Suscripción:</h4>
					<form>
						<div class="input-group mb-3">
							<input type="email" class="form-control" placeholder="Ingresa tu correo electrónico">
							<div class="input-group-append">
								<button class="btn btn-primary" type="button">Suscribirse</button>
							</div>
						</div>
					</form>
					<div class="col-md-4">
						<h4>Redes sociales:</h4>
						<ul>
							<li><a href="#">Instagram</a></li>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">LinkedIn</a></li>
						</ul>
					</div>
				</div>
			</div>
            <div class="col-md-4">
                <h4>Atención al cliente:</h4>
                <p>Horario de atención: Lunes a Viernes <br> 9:00am a 3:00pm<br></p>
            </div>
            <div class="col-md-4">
                <h4>Ayuda:</h4>
                <ul>
                    <li><a href="#">Centro de ayuda</a></li>
                    <li><a href="#">Contáctanos</a></li>
                    <li><a href="#">¿Quiénes Somos?</a></li>
                </ul>
            </div>
        </div>-->
		<div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Zay Shop</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            123 Consectetur at ligula 10660
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Luxury</a></li>
                        <li><a class="text-decoration-none" href="#">Sport Wear</a></li>
                        <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Popular Dress</a></li>
                        <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>
                        <li><a class="text-decoration-none" href="#">Sport Shoes</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Inicio</a></li>
                        <li><a class="text-decoration-none" href="#">Nosotros</a></li>
                        <li><a class="text-decoration-none" href="#">Contacto</a></li>
                    </ul>
                </div>
            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Ingresa tu email">
                        <div class="input-group-text btn-success text-light">Suscribirme</div>
                    </div>
                </div>
            </div>
        </div>

        <p>&copy; <?php echo date('Y'); ?> GIGA SHOP. Todos los derechos reservados.</p>
    </div>
	</footer>

	<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
