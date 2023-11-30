-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2023 a las 22:16:33
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `almacen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itemventa`
--

CREATE TABLE `itemventa` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `venta_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `itemventa`
--

INSERT INTO `itemventa` (`id`, `id_producto`, `cantidad`, `precio`, `venta_id`) VALUES
(3, 6, 1, 318000.00, 8),
(4, 7, 1, 227000.00, 8),
(5, 8, 1, 519600.00, 9),
(6, 7, 1, 227000.00, 10),
(7, 7, 1, 227000.00, 11),
(8, 5, 1, 171999.00, 12),
(9, 8, 2, 519600.00, 12),
(10, 6, 1, 318000.00, 12),
(11, 6, 1, 318000.00, 13),
(12, 8, 3, 519600.00, 14),
(15, 20, 1, 57000.00, 17),
(16, 2, 2, 180000.00, 18),
(17, 1, 1, 70999.00, 18),
(18, 1, 1, 80000.00, 19),
(19, 1, 1, 80000.00, 20),
(20, 4, 1, 141999.00, 20),
(21, 4, 1, 141999.00, 20),
(22, 2, 1, 180000.00, 21),
(23, 1, 1, 80000.00, 22),
(24, 1, 1, 80000.00, 23),
(25, 1, 1, 80000.00, 24),
(26, 1, 1, 80000.00, 24),
(27, 2, 1, 180000.00, 25),
(28, 2, 1, 180000.00, 26),
(29, 2, 1, 180000.00, 27),
(30, 2, 1, 180000.00, 28),
(31, 2, 1, 180000.00, 29),
(32, 1, 1, 80000.00, 30),
(33, 1, 1, 80000.00, 31),
(34, 1, 1, 80000.00, 32),
(35, 1, 1, 80000.00, 33),
(36, 1, 1, 80000.00, 34),
(37, 1, 1, 80000.00, 35),
(38, 3, 1, 122999.00, 36),
(39, 2, 1, 180000.00, 36),
(40, 3, 1, 122999.00, 36),
(41, 2, 1, 180000.00, 36),
(42, 2, 1, 180000.00, 37);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo` int(10) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `fechaAlta` date NOT NULL DEFAULT current_timestamp(),
  `nombre` varchar(255) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(11,2) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo`, `categoria`, `fechaAlta`, `nombre`, `cantidad`, `descripcion`, `precio`, `imagen`) VALUES
(1, 'Celulares', '2023-10-12', 'Celular Samsung Galaxy A04e 32GB Black', -7, 'El Galaxy A04e posee un procesador Octa-Core, 3G de RAM y 32GB de almacenamiento interno. Además, podrás expandir la capacidad con una tarjeta MicroSD de hasta 1TB. Podrás utilizar el Samsung Galaxy A04e durante horas, gracias a su batería de 5000 mAh de capacidad.\r\n\r\nSu camara principal de 13MP te ayudará a realizar tomas increíbles todos los días, mientras que la de 2MP ajustará la profundidad de campo, logrando fotografías de gran calidad. Te permitirá disfrutar de tus series, películas y juegos favoritos. Con 6,4 pulgadas y resolución HD+ (720 x 1600) podrás ver todas las cosas que te gustan en gran calidad de imagen.\r\nAguante el profe Ignacio!', 80000.00, 'productos/a04.png'),
(2, 'Celulares', '2023-10-12', 'Celular Motorola G72 128GB Azul', 1, 'Obtendrás toda la potencia que necesitas para jugar, reproducir videos y usar las funciones de la cámara gracias al potente procesador octa core Mediatek Helio G99 y la memoria RAM de 6GB. También cuenta con un almacenamiento de 128GB (112GB disponibles) y la posibilidad de expandirlo con una tarjeta MicroSD de hasta 1TB. Su batería de 5000 mAh lograrás usar el Moto G72 por más tiempo con una sola carga. Sacá fotos nítidas con poca luz, tomas espectaculares ultra gran angular, retratos profesionales y acercamientos muy detallados. El sensor de 108 MP permite sacar fotos nítidas con cualquier luz. Además, suma un gran angular de 8MP y una macro de 2MP.\r\n\r\nCuenta con NFC: Coloca el teléfono cerca de una terminal NFC para comprar o recargar otras tarjetas. Es rápido, seguro y evita que lleves dinero en efectivo.\r\n', 180000.00, 'productos/193206-800-auto.png'),
(3, 'Celulares', '2023-10-12', 'Celular Samsung Galaxy A14 128GB Black', 5, 'Diseño con marcos redondeados, botones laterales, triple cámara trasera alineada y un acabado elegante en color negro intenso, el diseño del Galaxy A14 se convierte en el centro de atención. Con 5000 mAh de capacidad, podrás utilizar tu smartphone durante todo el día. Captura cada recuerdo con la triple cámara trasera de 50, 5 y 2 megapíxeles. La cámara principal captura paisajes magníficos, la de profundidad agrega dimensiones impresionantes y la macro obtiene detalles finos. Aprovecha para sacarte las mejores selfies con la cámara frontal de 13mp. Samsung Galaxy A14 ofrece una pantalla de 6,6 pulgadas con resolución FHD+. Cuenta con un almacenamiento interno de 128GB y 4GB de RAM para que puedas guardar todos tus archivos y aplicaciones, y utilices el Galaxy A14 con fluidez. Incluso podrás sumar una tarjeta MicroSD de hasta 1TB.', 122999.00, 'productos/samsung a14.png'),
(4, 'Celulares', '2023-10-12', 'Celular Samsung Galaxy A33 5G 128GB Black', 5, 'El celular Samsung Galaxy A33 5G, en su color “Awesome Black” con acabado mate, brinda un estilo moderno y elegante que destaca del resto. Con su sensor de huellas dactilares incorporado en la pantalla, podrás iniciar sesión instantáneamente en tus aplicaciones y sitios web. Cuenta con una batería de 5000 mAh recargable con cable USB C, capaz de brindar la energía necesaria para que transmitas, compartas contenido, juegues y disfrutes de tu Galaxy A33 durante todo el día. Logra fotos más nítidas y claras con la cámara OIS de 48 MP, amplia tu ángulo de visión con la cámara ultra ancha de 8 MP, personaliza el enfoque con la cámara de profundidad de 2 MP y acércate a los detalles con la cámara macro de 5 MP.', 141999.00, 'productos/A33-SAMSUNG-1.png'),
(5, 'Celulares', '2023-10-12', 'Celular Samsung Galaxy A24 128GB Negro', 8, 'Disfruta el diseño del celular Samsung Galaxy A24. Triple cámara, botones laterales y curvas elegantes. Un gran estilo minimalista en color negro. Combina la potencia de su procesador Octa-core con los 128 GB de almacenamiento y los 6 GB de RAM para un rendimiento rápido y eficiente.  Batería La batería de 5000 mAh te permitirá continuar con lo que estés haciendo, durante horas y horas. Captura momentos memorables con detalles nítidos gracias a la cámara principal de 50 MP, ajusta la profundidad de campo en tus fotos con la cámara de profundidad de 5 MP y obtén detalles finos con la cámara de 2 MP. Además, con la frontal de 13 MP, tendrás increíbles selfies en donde vos serás el centro de atención.', 171999.00, 'productos/Samsung_Galaxy_A24_Black_5bc7ec5d9d.png'),
(6, 'Celulares', '2023-10-26', 'Celular Samsung Galaxy S20 FE 5G 128GB Azul', 7, 'El celular Samsung Galaxy S20 FE se convertirá en el complemento perfecto gracias a su clasificación IP68 que le otorga resistencia al agua y al polvo, este smartphone soporta hasta 1,5 metros de agua durante 30 minutos, por lo que no tendrás que preocuparte si se moja un poco y querés seguir jugando o sacando fotos. Con una batería de 4500mAh, el smartphone tiene la energía que requiere para durar todo el día, y es lo suficientemente inteligente como para ahorrarla en los momentos que más la necesitas. Ofrece tres cámaras con lentes de nivel profesional: podrás encuadrar la escena con la gran angular (12 MP), ampliarla con la Ultra Wide (12 MP) o acercarla con el zoom óptico de 3x de la cámara de teleobjetivo (8 MP). Además, con la cámara frontal de 32 MP, tus selfies y stories alcanzarán un nivel completamente nuevo, capturando muchos más detalles para convertirte en la estrella de cada toma. Con su procesador Octa-Core y los 6 GB de RAM, lograrás cambiar de una aplicación a otra sin trabas, tener transmisiones en vivo claras y jugar hasta la victoria, aprovechando al máximo la velocidad. Con el almacenamiento interno de 128 GB y la capacidad de almacenar hasta 1 TB más con una tarjeta microSD, el único límite para todo lo que podés almacenar lo ponés vos.', 318000.00, 'productos/S20_FE.png'),
(7, 'Celulares', '2023-10-26', 'Celular Samsung Galaxy A34 5G 128GB', 11, 'Samsung Galaxy A34 se convierte en el centro de atención. Ofrece una batería de 5000 mAh. Además, si necesitas revivir tu Galaxy rápidamente, cuenta con carga rápida de hasta 25W. Captura cada recuerdo con la triple cámara trasera de 48, 8 y 5 megapíxeles, el Galaxy A34 ofrece una pantalla de 6,6 pulgadas con resolución FHD+ y 120Hz de tasa de refresco. Cuenta con un almacenamiento interno de 128GB y 6GB de RAM para que puedas guardar todos tus archivos y aplicaciones, y utilices el Galaxy A34 con fluidez. Incluso podrás sumar una tarjeta MicroSD de hasta 1TB.', 227000.00, 'productos/a34.png'),
(8, 'Celulares', '2023-10-26', 'Celular Samsung Z Flip4 128 GB', 2, 'El celular Samsung Z Flip4 posee un tamaño compacto.\r\nPosee un procesador de 4nm mejorado que trabaja con la batería de larga duración de 3700 mAh (uso típico) para funcionar hora tras hora. Ofrece cámaras ancha y ultra ancha de 12 MP, además de una delantera de 10 MP con la función de autorretrato. El smartphone está diseñado para ser duradero ya que soporta hasta 200.000 pliegues y promete ser el dispositivo plegable de Samsung más resistente ya que cuenta con el exclusivo Corning Gorilla Glass Victus+.', 519600.00, 'productos/Galaxy_Z_Flip4.png'),
(9, 'Celulares', '2023-10-26', 'Celular Motorola G32 6GB 128GB Plata', 14, 'Disfruta de tu teléfono con una sola carga, gracias a su potente batería de 5000 mAh que te permite trabajar y jugar por más tiempo. Haz que tus seres queridos salgan siempre bien. El sensor de 50 MP permite sacar fotos nítidas con cualquier luz. La pantalla de 6.5\" es amplia, y cómoda para la mano. Con la resolución Full HD+, tus fotos y videos siempre se verán super nítidos. ', 150000.00, 'productos/frente_1_5.png'),
(10, 'Celulares', '2023-10-31', 'Celular Motorola G13 4GB 128GB', 7, 'Disfruta de tu teléfono con una sola carga La increíble batería de 5000 mAh te permite escuchar tus listas de reproducción durante más tiempo, realizar videollamadas extensas con tus amigos y ver tus series favoritas hasta el final.\r\n\r\nCon un sistema de cámaras de 50 MP y tecnología Quad Pixel, el Moto G13 saca fotos nítidas en condiciones de poca luz, acercamientos detallados y mucho más. Cuenta con una cámara Macro que te acerca más al objetivo para que descubras los detalles que no se pueden ver con un lente convencional. Además, con la cámara frontal de 8MP saca selfies perfectas para las redes y publica tu mejor versión.\r\n\r\nLa pantalla HD+ de 6.5\" está diseñada sin bordes para que puedas disfrutar de la imagen completa y ver todos los detalles. Con la velocidad de actualización de 90 Hz3 de la pantalla, puedes cambiar de aplicaciones, jugar y mirar sitios web de forma rápida y fluida.', 109000.00, 'productos/MOTO-G13-1.1-.png'),
(11, 'Celulares', '2023-10-31', 'Celular Motorola Edge 40 Pro 256GB Celeste Glaciar', 8, 'Déjate cautivar por el diseño curvo, elegante y sin bordes del celular Motorola Edge 40 Pro, el cuál te brindará una comodidad excepcional. Su parte posterior presenta un increíble sistema de triple cámara y una estructura mate que ofrece una sensación suave como la seda. Este teléfono posee protección contra el polvo, la suciedad, la arena e incluso contra un chapuzón en el agua, ya que cuenta con clasificación IP68. Captura detalles impresionantes en cualquier condición de luz con la cámara principal de 50 MP, amplia el encuadre de tus fotos con la gran angular y de profundidad de 50 MP y observa el mundo de cerca con la macro de 12 MP. Con la cámara delantera lograrás tomarte selfies increíbles, ya que ofrece 60 MP. Su avanzado procesador Qualcomm Snapdragon 8 Gen 2 te permitirá aprovechar al máximo tu celular, ofreciendo un desempeño rápido y eficiente. Además, debido a su conexión 5G, podrás divertirte con tus videojuegos favoritos, descargar contenido y transmitir sin inconvenientes y a una velocidad increíble. Disfruta de una pantalla sin bordes, súper rápida y con mil millones de tonos de colores. Con 6,67 pulgadas y resolución FHD+, verás todo tu contenido favorito, como series, películas y videos, en una calidad de imagen increíble. ', 549000.00, 'productos/CelesteGlaciar.png'),
(12, 'Celulares', '2023-10-31', 'Celular Motorola Razr 40 Ultra 512GB Negro Infinito', 4, 'Captura tus momentos gracias a su cámara principal de 12 MP lograrás fotos brillantes, retratos profesionales y acercamientos detallados. También podrás disfrutar de tus selfies con su cámara frontal de 32 MP. Además, cuenta con la tecnología Quad Pixel que ofrece una sensibilidad 4 veces mayor en ambientes con poca luz para tomar imágenes nítidas y reales. Con su potente procesador Snapdragon 8+ vas a tener mucha más velocidad y, además, verás un mejor desempeño junto a su memoria interna de 512 GB y RAM de 12 GB, que te brindarán todo el espacio y la rapidez que necesitas en tu día a día. Posee un moderno diseño en distintos colores. Cuenta con una pantalla externa pOLED súper amplia de 3.6” con la cual podrás seguir usando el teléfono mientras está cerrado. Por otro lado, ofrece una pantalla interna flexible de 6.9” y bisagra “gota” sin espacios entre sus lados, esta pantalla es FHD+ pOLED con 165Hz, inmersiva con sonido ecualizado por Dolby Atmos. Con su batería de 3800 mAh lograrás trabajar y jugar durante el día y la noche con una sola carga. Por otro lado, vas a poder cargar de forma rápida con el cargador TurboPower de 33 W o disfrutar la libertad que te brinda la carga inalámbrica.', 700000.00, 'productos/Motorola_Razr_40.png'),
(13, 'Celulares', '2023-10-31', 'Celular Xiaomi Redmi Note 11 128GB Azul', 8, 'El Xiaomi Redmi Note 11 posee un diseño elegante, atractivo y moderno. Cuenta con una pantalla de 6,43 pulgadas, con la que podrás ampliar tu visión y mirar todo lo que te estabas perdiendo. Combina la potencia de su procesador Snapdragon 680 con la memoria RAM de 4GB para obtener un rendimiento más rápido y eficiente. Posee almacenamiento interno de 64GB. Posee una batería de 5000 mAh para que disfrutes durante todo el día. Gracias a su sistema de cámaras (50 MB + 8 MB + 2 MB + 2 MB) lograrás llevar tus fotografías y recuerdos a otro nivel, con perspectivas, colores y detalles excelentes. Además, la cámara selfie cuenta con 13 MP para tomar vídeos nítidos, selfies o videollamadas.', 133000.00, 'productos/redmi-note-11.png'),
(14, 'Celulares', '2023-10-31', 'Xiaomi Redmi 12C 4GB RAM 128GB ROM Lavender Purple', 5, 'Xiaomi Redmi 12C 4GB RAM 128GB ROM\r\nPotente Procesador MediaTek Helio G85 | Pantalla inmersiva de 6,71\" | Cámara dual IA de 50MP.  Procesador MediaTek Helio G85 ofrece un rendimiento más equilibrado y eclipsa a sus pares, mientras que la GPU para juegos Mali-G52 le ofrece una experiencia de entretenimiento fluida. Gran pantalla HD+ de 6,71\"\r\nExperiencia de visualización inmersiva Redmi 12C cuenta con una gran pantalla HD+ de 6,71\", ¡una combinación poco común en su clase! Ya sea que estés jugando o navegando, la pantalla más grande te permite ver más, brindando una experiencia visual más sorprendente e inmersiva para mirar videos. Batería de larga duración de 5000 mAh\r\nEl diseño texturizado elegante y distintivo ofrece un mejor agarre antideslizante, mientras que la carcasa unibody con parte posterior curvada lo hace más cómodo de sostener. El sensor de huellas dactilares está especialmente diseñado para quedar oculto en la isla de la cámara.', 127000.00, 'productos/REDMI12C.png'),
(15, 'Celulares', '2023-10-31', 'Celular Xiaomi Redmi 10 4GB 128GB', 7, 'Almacenamiento: 128 GB RAM: 4 GB LPDDR4X + eMMC\r\n\r\nDimensiones: Altura: 161,95 mm Ancho: 75,53 mm Espesor: 8,92 mm Peso: 181g\r\n\r\nMonitor: Pantalla de puntos FHD + de 6,5 ″\r\n\r\nFrecuencia de actualización: 90 Hz\r\n\r\nAdaptiveSync: 45/60/90 Hz 2400 × 1080, 405 ppp\r\n\r\nModo de lectura 3.0\r\n\r\nCorning Gorilla Glass 3\r\n\r\n', 338799.00, 'productos/REDMI10.png'),
(16, 'Celulares', '2023-10-31', 'Celular Xiaomi Poco F3 6GB 128GB Negro Sin Cargador', 3, 'VIENE SIN CARGADOR. Almacenamiento y RAM: 6GB+128GB Almacenamiento y RAM LPDDR5 + almacenamiento UFS 3.1. Dimensiones: Altura: 163,7 mm Ancho: 76,4 mm Espesor: 7,8 mm Peso: 196g. \r\nPantalla de puntos AMOLED de 6,67 2400x1080 FHD+. Relación de aspecto: 20:9. Relación de contraste: 5.000.000:1. Brillo: 900nits (tipo HBM), 1300nits (pico) HDR10+. Frecuencia de actualización: 120Hz. Tasa de muestreo táctil: 360Hz', 598000.00, 'productos/image7.png'),
(17, 'Celulares', '2023-10-31', 'Celular TCL 40SE 128GB Twilight Purple', 8, 'La potente batería de 5010 mAh y la carga rápida permite un entretenimiento ininterrumpido. Alimentado por Smart Manager, podes escuchar tus canciones favoritas, hacer llamadas sin tener que arrastrar el cargador a todas partes y aprende tus rutinas de cargado para una mejor duración de la vida útil de la batería. Su cámara triple AI de 50MP inspira al máximo tu creatividad. No dejes que la luz te limite, y saca todas las imágenes que quieras, ya que pueden ser capturadas claramente por la cámara triple AI de 50MP de alto píxel. No te pierdas ningún detalle gracias a la cámara macro y destaca elementos y personas con su cámara de profundidad. Además, con la cámara selfie de 8MP ahora puedes sacar selfies de forma automática mientras te relajas y sonreís, sin necesidad de apretar botones. La amplia pantalla de 6,75” con una relación de aspecto de 20:9 brinda una excelente experiencia inmersiva de visualización cinematográfica con la tecnología de NXTVISION. Los diferentes modos de cuidado ocular brindan una experiencia de comodidad en cualquier momento.', 90000.00, 'productos/tcl_40.png'),
(18, 'Celulares', '2023-10-31', 'Celular TCL 403 32GB Prime Black', 30, 'Posee una batería de 3000 mAh con la función Smart Saving, que regula la batería y resguarda un 20% de la misma mientras el teléfono se encuentra sin uso. El TCL 403 cuenta con una cámara principal de 8MP con función macro dentro de la misma, además de la mejora de HDR. Su cámara frontal es de 5MP y posee funciones Flash LCD y Face Beauty. Cuenta con el sistema operativo Android 12 (Go edition), lo que permite utilizar versiones más livianas de todas las aplicaciones y un almacenamiento de 32GB, que se puede complementar con una tarjeta de memoria SD de hasta 512GB.', 50000.00, 'productos/tlc40.png'),
(19, 'Celulares', '2023-10-31', 'Celular ZTE Blade V40 Design 128GB Black', 7, 'La batería de 4500 mAh te ofrecerá una gran duración de carga. De esta forma, podrás utilizar el ZTE Blade V40 Design para jugar juegos, ver videos o utilizar tus redes sociales durante todo el día. La triple cámara trasera de 50, 2 y 2 megapíxeles brinda una gran versatilidad fotográfica y permite capturar imágenes más nítidas y detalladas. Además, con la cámara frontal de 8mp podrás sacarte las mejores selfies para subir a tus redes sociales. La pantalla de 6,6 pulgadas y definición FHD+ te proporcionará colores brillantes y una calidad excepcional mientras disfrutas de tu contenido multimedia, como videos, redes sociales y juegos. Cuenta con memoria RAM de 6GB y una ROM de 128GB, lo que te proporcionará gran capacidad de almacenamiento y la posibilidad de ejecutar varias aplicaciones y tareas al mismo tiempo, sin ralentizar el smartphone.', 94000.00, 'productos/ZTE.png'),
(20, 'Celulares', '2023-10-31', 'Celular Smartphone Alcatel 1 Ultra 1gb 32gb 8mpx Android 11', 7, 'CELULAR SMARTPHONE DE 5 PULGADAS ALCATEL 1 ULTRA ANDROID 11 GO 5033MP-FAOFAR11 • RENDIMIENTO FLUIDO Disfruta de una experiencia más rápida y liviana con la tecnología de Android 11 (edición Go), y obtén un rendimiento mejorado con Smart Manager. • DISEÑO COMPACTO Y ELEGANTE Con su pantalla de 5 pulgadas y bisel curvo para un agarre cómodo, además de la textura finamente tallada antideslizante y antihuellas, tiene un aspecto atractivo con un efecto en movimiento. - Sistema operativo: Android 11 (Go Edition) - Memoria RAM: 1 GB - Almacenamiento: 32 GB (expandible por microSD hasta 32 GB) - Procesador: MediaTek MT6739 1.28 GHz - Pantalla: IPS 5.0 pulgadas HD (480 x 960 px) 16:9 - Cámaras: -- Principal: 8 MPx con HDR y flash LED -- Frontal: 2 MPx con flash LCD - Funciones de cámara: -- Video 1080p @30fps -- Foto panorámica -- Filtros y ajustes automáticos -- Face Beauty - Ranura SIM: Individual NanoSIM 4FF - Conectividad: -- Redes 2G / 3G / 4G LTE -- WiFi 802.11n -- Bluetooth 4.0 -- GPS (A-GPS) - Batería: Iones de litio de 2000 mAh - Dimensiones: 137,6 x 65,7 mm - Peso: 134 gramos - Accesorios incluidos: -- Funda antigolpes -- Auriculares 3.5 mm -- Cable USB de carga -- Cargador USB -- Manual de usuario', 57000.00, 'productos/alcatel.png'),
(21, 'Celulares', '2023-10-31', 'iPhone 13', 3, 'iPhone 13. El sistema de dos cámaras más avanzado en un iPhone. El superrápido chip A15 Bionic. Un gran\r\nsalto en duración de batería. Un diseño resistente. Y una pantalla Super Retina XDR más brillante. Pantalla Super Retina XDR de 6.1 pulgadas.(1) Modo Cine con baja profundidad de campo y cambios de enfoque automáticos en tus videos. Sistema avanzado de dos cámaras de 12 MP (gran angular y ultra gran angular) con Estilos Fotográficos, HDR Inteligente 4, modo Noche y grabación de video 4K HDR en Dolby Vision. Cámara frontal TrueDepth de 12 MP con modo Noche y grabación de video 4K HDR en Dolby Vision. Diseño resistente con Ceramic Shield. Resistencia al agua IP68, líder en la industria.(3)\r\niOS 15 con nuevas funcionalidades para aprovechar tu iPhone al máximo.(4) Compatibilidad con accesorios MagSafe, que se acoplan fácilmente a tu iPhone y permiten una carga inalámbrica más rápida.(5)', 2430000.00, 'productos/iphone.png'),
(22, 'Celulares', '2023-10-31', 'Smartphone Motorola Moto E22 4gb Ram 64gb Negro', 6, 'El moto e22 está diseñado para que te sumerjas en el sonido multidimensional de los parlantes estéreo con Dolby Atmos®. Además, la pantalla fluida de 90 Hz le da vida a tu contenido de entretenimiento. Disfrutá del increíble diseño de primer nivel, el sistema de cámaras de 16 MP y el lector de huella digital, que también funciona como atajo a tus aplicaciones favoritas. Además, aprovechá los 64 GB de almacenamiento. Disfrutá la vida con el moto e22. Pantalla HD+ de 6.5” y 90 Hz + parlantes estéreo con sonido Dolby Atmos® Mirá tu contenido en una pantalla ultra wide y disfrutá el sonido multidimensional que te permite sentir mejor los bajos, descubrir voces más nítidas y escuchar con mayor claridad. Sistema de cámaras de 16 MP con IA. Enfoca al instante y saca fotos de aspecto profesional gracias a las increíbles funciones de cámara con su Inteligencia Artificial. Android 12 + 32 GB de almacenamiento Experiementa la respuesta instantánea del teléfono gracias a su procesador con HyperEngine y Android8 12 full version. Además, podés agregar hasta 1 TB adicional con una tarjeta microSD Diseño sofisticado de primer nivel Disfruta del diseño delgado y elegante a la vez de sentir un producto liviano en tu mano. Lector de huella digital lateral con control táctil. Desbloquea tu teléfono al instante con un simple toque del lector ó tócalo dos veces para acceder a tus aplicaciones favoritas. Características: Procesador: Mediatek Helio G37 Sistema Operativo: Android 12 Sensores: Acelerómetro, Sensor de Proximidad, Brújula (Campo magnético), Huella Dactilar, Desbloqueo Facial Almacenamiento: 32GB Cámara Trasera: Principal: 16 MP (80°) F2.2 Macro: 2MP (80.1°) F2.4 Cámara Frontal: 5 MP Bluetooth: BT 5.0 Dimensiones: 163.56 x 74.65 x 7.99 Peso: 174g', 167000.00, 'productos/e22_Quartz-Black_01--1-.png'),
(23, 'Celulares', '2023-10-31', 'Celular Tecno Pova 4 Azul', 8, 'Celular. Pantalla de 6.82\" HD (720x1640) + pantalla dot-in, tasa de refresco 90Hz. Procesador Helio G99 octa core. Almacenamiento de 256 GB ROM. Memoria RAM de 8 GB. Cámara trasera de 50 MP con Dual Flash / Cámara frontal de 8 MP con One Flash. Conexiones: Wifi. Bluetooth. NFC. Conector 3.5. Lector de tarjetas. Radio FM. GPS. Sistema operativo android 12. Batería de 6000 mAh. Incluye: Cable USB, llave SIM, auriculares y funda de TPU.', 146800.00, 'productos/1CTEC1783.png'),
(24, 'Notebooks', '2023-10-31', 'Celular Tecno Spark Go 2023 Negro', 8, 'Celular. Pantalla de 6.6\" HD (720x1612) + pantalla dot-in, tasa de refresco 90Hz. Procesador Mediatek Helio A22 Quad Core de 4 x 2 Ghz. Almacenamiento de 64 GB ROM. Memoria RAM de 4 GB. Cámara trasera de 13 MP / Cámara frontal de 5 MP. Conexiones: Wifi 2.4. Bluetooth 5.0. Lector de tarjetas. Radio FM. GPS. Sistema operativo android 12. Batería de 5000 mAh. Incluye: Cable USB, llave SIM y funda de TPU.', 64800.00, 'productos/0147610_celular-tecno-spark-go-2023_550.png'),
(25, 'Tablets', '2023-10-31', 'Celular Samsung Fold 5 SM-F946B ICY BLUE', 3, 'CELULAR SAMSUNG GALAXY FOLD 5 256GB 12GB RAM BLUE - SM-F946BLBLARO La potencia de una PC, ahora, en tu bolsillo. Conoce el smartphone con una gran pantalla, como un cine móvil. La que es tanto una consola de juegos emocionante como una herramienta multipantalla y multitarea. Y se completa con una potente cámara de calidad profesional. Todo plegado en tus manos. Lo último en pantalla principal de 7,6 Pulgadas Desplega una pantalla impresionante e inmersiva, rediseñada para ofrecerte juegos como nunca antes, visualización cinematográfica dondequiera que estés y productividad estilo PC, todo en un dispositivo del tamaño de una tablet. Nuestro Galaxy Z Fold más liviano y compacto Las leyes de la física no tienen nada en este diseño nivelado. El Galaxy Z Fold5 hace honor a su nombre al plegarse para cerrar, lo que hace que una pantalla enorme quepa en tu bolsillo desafiando a toda lógica. Más delgado, ligero y portátil que nunca Logramos reducir la forma para un agarre más firme de lo que te gusta sin sacrificar nada de potencia Crea el ambiente con tu color favorito ', 1182000.00, 'productos/zfold-phantom-fold-front_5.png'),
(26, 'Celulares', '2023-10-31', 'Celular Motorola Edge 30 Fusion XT2243-1 Blanco Opalo', 7, 'Celular. Pantalla de 6.55\" (20:9). Tecnología pOLED. Resolución 1080 x 2400, FHD+, 402, HiD, 144 Hz. Tipo de vidrio de pantalla Glass 3D. Procesador Qualcomm Snapdragon 888+, Octa Core (hasta 2.84GHz). Capacidad 256 Gb / RAM 12 Gb. Cámara principal: 50MP (84.01) F1.88, Gran angular y profundidad: 13MP (120) F2.2, Macro: 2MP (86.1) F2.4. Zoom digital (8x picture / 8x video). Flash LED. Resolución de video 8K UHD. Cámara frontal 32MP (73.24) F2.2. Flash frontal backlight. Resolución de video 4K UHD. Conexiones: Wi Fi 802.11 a/b/g/n/ac/ax /k/v/r/u - WiFi 6E (2.4, 5 y 6 GHz). Bluetooth 5.2. NFC. HDMI Display port 1.4. GPS, AGPS, GLONASS, Galileo. Redes 5G. USB-C 3.1. Sistema operativo Android 12. Batería de 4400 mAh. Carga turbo. Sensores: Acelerómetro, de proximidad, brújula (campo magnético), Giroscopio, Huella dactilar (bajo dislplay), luz ambiente y desbloqueo facial. Incluye: Herramienta de extracción de SIM, cable de datos USB-C - USB-C, cargador 68W USB-C y funda.', 350000.00, 'productos/91paun0022ar_1_.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `dni` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` int(10) NOT NULL,
  `tipo` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `dni`, `usuario`, `clave`, `email`, `telefono`, `tipo`) VALUES
(1, 'Andrea', 'Mirabal', 55900876, 'administrador', '123456', 'esther.mirabal.1402@gmail.com', 2147483647, 'admin'),
(2, 'Santiago', 'Gomez', 88990675, 'santiago', '123456', 'esther.mirabal.1402@gmail.com', 2147483647, 'admin'),
(7, 'Esther Andrea', 'Mirabal', 96000000, 'esther', '123456', 'esther.mirabal.1402@gmail.com', 2147483647, 'user'),
(9, 'Simon', 'Gomez', 342567654, 'simongs', '123456', 'simongs89@gmail.com', 2147483647, 'user'),
(10, 'lucas', 'fernandez', 39494541, 'lucass', '123456', 'lucasfer@gmail.com', 2147483647, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `subtotal` decimal(11,2) NOT NULL,
  `iva` decimal(11,2) NOT NULL,
  `total` decimal(11,2) NOT NULL,
  `ticket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id`, `fecha`, `usuario_id`, `subtotal`, `iva`, `total`, `ticket`) VALUES
(8, '2023-10-31', 7, 0.00, 0.00, 0.00, ''),
(9, '2023-10-31', 7, 0.00, 0.00, 0.00, ''),
(10, '2023-10-31', 7, 0.00, 0.00, 0.00, ''),
(11, '2023-10-31', 7, 0.00, 0.00, 0.00, ''),
(12, '2023-10-31', 2, 0.00, 0.00, 0.00, ''),
(13, '2023-10-31', 2, 0.00, 0.00, 0.00, ''),
(14, '2023-10-31', 2, 0.00, 0.00, 0.00, ''),
(17, '2023-10-31', 9, 0.00, 0.00, 0.00, ''),
(18, '2023-10-31', 10, 0.00, 0.00, 0.00, ''),
(19, '2023-11-09', 7, 0.00, 0.00, 0.00, ''),
(20, '2023-11-09', 7, 0.00, 0.00, 0.00, ''),
(21, '2023-11-09', 7, 0.00, 0.00, 0.00, ''),
(22, '0000-00-00', 7, 0.00, 0.00, 0.00, 'Tickets/Ticket09112023051126.pdf'),
(23, '0000-00-00', 7, 0.00, 0.00, 0.00, 'Tickets/Ticket09112023051114.pdf'),
(24, '0000-00-00', 7, 0.00, 0.00, 0.00, 'Tickets/Ticket09112023051123.pdf'),
(25, '0000-00-00', 7, 0.00, 0.00, 0.00, 'Tickets/Ticket09112023051128.pdf'),
(26, '0000-00-00', 7, 0.00, 0.00, 0.00, 'Tickets/Ticket09112023051151.pdf'),
(27, '0000-00-00', 7, 0.00, 0.00, 0.00, 'Tickets/Ticket09112023051107.pdf'),
(28, '0000-00-00', 7, 0.00, 0.00, 0.00, 'Tickets/Ticket09112023051122.pdf'),
(29, '0000-00-00', 7, 0.00, 0.00, 0.00, 'Tickets/Ticket09112023051138.pdf'),
(30, '2023-11-09', 7, 0.00, 0.00, 0.00, 'Tickets/Ticket09112023061120.pdf'),
(31, '2023-11-09', 7, 96800.00, 16800.00, 96800.00, 'Tickets/Ticket09112023061133.pdf'),
(32, '2023-11-09', 7, 80000.00, 16800.00, 96800.00, 'Tickets/Ticket09112023061151.pdf'),
(33, '2023-11-09', 7, 80000.00, 16800.00, 96800.00, 'Tickets/Ticket09112023061110.pdf'),
(34, '2023-11-09', 7, 80000.00, 16800.00, 96800.00, 'Tickets/Ticket09112023061145.pdf'),
(35, '2023-11-09', 7, 80000.00, 16800.00, 96800.00, 'Tickets/Ticket09112023061104.pdf'),
(36, '2023-11-16', 7, 605998.00, 127259.58, 733257.58, 'Tickets/Ticket16112023051116.pdf'),
(37, '2023-11-16', 7, 180000.00, 37800.00, 217800.00, 'Tickets/Ticket16112023051115.pdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `itemventa`
--
ALTER TABLE `itemventa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `venta_id` (`venta_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `email_2` (`email`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `itemventa`
--
ALTER TABLE `itemventa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `itemventa`
--
ALTER TABLE `itemventa`
  ADD CONSTRAINT `itemventa_ibfk_1` FOREIGN KEY (`venta_id`) REFERENCES `venta` (`id`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
