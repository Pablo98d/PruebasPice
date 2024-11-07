<?php
// Iniciar la sesión
session_start();

// Función para verificar si el usuario ha iniciado sesión
function verificar_sesion() {
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php"); // Redirige al inicio de sesión si no está autenticado
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <style>
        /* Estilos generales */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Barra de navegación */
        .navbar {
            background-color: #007BFF; /* Color de fondo */
            padding: 1em;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            color: #ffffff;
            font-size: 24px;
        }

        .navbar nav ul {
            list-style-type: none;
            display: flex;
        }

        .navbar nav ul li {
            margin-left: 1em;
        }

        .navbar nav ul li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 18px;
            padding: 0.5em 1em;
            transition: background-color 0.3s;
        }

        .navbar nav ul li a:hover {
            background-color: #0056b3;
            border-radius: 5px;
        }

        /* Banner de ilustraciones */
        .banner {
            display: flex;
            overflow: hidden;
            width: 100%;
            height: 300px;
            position: relative;
        }

        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        /* Botones de navegación del banner */
        .banner-buttons {
            position: absolute;
            width: 100%;
            top: 50%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .banner-button {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 0.5em;
            font-size: 1.5em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .banner-button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Contenido principal */
        main {
            padding: 2em;
            background-color: #f4f4f4;
            min-height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .welcome {
            text-align: center;
            background-color: #ffffff;
            padding: 2em;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            width: 80%;
        }

        .welcome h2 {
            color: #007BFF;
            margin-bottom: 1em;
            font-size: 32px;
        }

        .welcome p {
            color: #333333;
            font-size: 18px;
            margin-bottom: 1em;
            line-height: 1.6;
        }

        /* Historia de los autos */
        .history {
            text-align: left;
            background-color: #ffffff;
            padding: 2em;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            width: 80%;
        }

        .history h2 {
            color: #007BFF;
            margin-bottom: 1em;
        }

        .history p {
            color: #333333;
            font-size: 18px;
            margin-bottom: 1em;
            line-height: 1.6;
        }

        /* Pie de página */
        footer {
            background-color: #007BFF;
            color: #ffffff;
            text-align: center;
            padding: 1em;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
    <script>
        // JavaScript para el carrusel de ilustraciones
        let currentImageIndex = 0;
        const images = [
            'ilustraciones/auto1.svg', // Ruta de la ilustración 1 (SVG)
            'ilustraciones/auto2.svg', // Ruta de la ilustración 2 (SVG)
            'ilustraciones/auto3.svg'  // Ruta de la ilustración 3 (SVG)
        ];

        function showNextImage() {
            currentImageIndex = (currentImageIndex + 1) % images.length;
            document.getElementById("banner-image").src = images[currentImageIndex];
        }

        function showPreviousImage() {
            currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
            document.getElementById("banner-image").src = images[currentImageIndex];
        }
    </script>
</head>
<body>

    <!-- Barra de navegación -->
    <header>
        <div class="navbar">
            <h1>Mi Aplicación PHP</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li><a href="perfil.php">Perfil</a></li>
                        <li><a href="logout.php">Cerrar Sesión</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Iniciar Sesión</a></li>
                        <li><a href="registro.php">Registrarse</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Banner de ilustraciones -->
    <div class="banner">
        <img id="banner-image" src="ilustraciones/auto1.svg" alt="Ilustración de autos" />
        <div class="banner-buttons">
            <button class="banner-button" onclick="showPreviousImage()">&#10094;</button>
            <button class="banner-button" onclick="showNextImage()">&#10095;</button>
        </div>
    </div>

    <!-- Contenido principal -->
    <main>
        <!-- Bienvenida -->
        <section class="welcome">
            <h2>¡Bienvenido al Futuro del Automóvil!</h2>
            <p>
                En esta página, exploraremos la historia de los autos, desde los primeros modelos a vapor hasta los autos eléctricos que están transformando la industria.
                Ya sea que te apasione la tecnología automotriz, los diseños clásicos o las innovaciones del futuro, ¡aquí tienes un lugar para disfrutar y aprender sobre los vehículos que han revolucionado el mundo!
            </p>
            <p>
                ¿Te has preguntado cómo el automóvil ha cambiado nuestras vidas? Desde los vehículos de los primeros días hasta los autos autónomos de hoy, cada avance nos ha acercado un paso más a un futuro lleno de posibilidades.
            </p>
            <p>
                ¡Sigue explorando nuestra historia, descubre ilustraciones de los autos más emblemáticos y aprende más sobre cómo estos increíbles vehículos han marcado el curso de la humanidad!
            </p>
        </section>

        <!-- Historia de los autos -->
        <section class="history">
            <h2>Historia de los Autos</h2>
            <p>
                Los automóviles tienen una larga y fascinante historia que se remonta a finales del siglo XIX. El primer vehículo de motor fue creado por Karl Benz en 1885, conocido como el Benz Patent-Motorwagen, considerado el primer automóvil práctico.
            </p>
            <p>
                A principios del siglo XX, Henry Ford revolucionó la industria al introducir la producción en cadena, lo que permitió la fabricación masiva de autos, haciendo que el automóvil fuera más accesible para la clase media. Modelos icónicos como el Ford Modelo T marcaron esta era.
            </p>
            <p>
                En las décadas siguientes, los autos fueron mejorando en términos de seguridad, comodidad y rendimiento. En los años 50 y 60, los automóviles se convirtieron en símbolos de status y estilo de vida. Marcas como Chevrolet, Cadillac, y Ford lideraron la industria en esta época, con modelos que definieron la cultura pop.
            </p>
            <p>
                Con el avance de la tecnología, los autos modernos no solo han mejorado en diseño, sino también en eficiencia energética y sostenibilidad. Hoy en día, los autos eléctricos, como los fabricados por Tesla, están liderando el cambio hacia un futuro más ecológico.
            </p>
            <p>
                La industria automotriz sigue evolucionando rápidamente con innovaciones como los autos
