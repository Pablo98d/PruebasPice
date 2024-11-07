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

        /* Banner de imágenes */
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
        }

        .welcome p {
            color: #333333;
            font-size: 18px;
            margin-bottom: 1em;
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
        // JavaScript para el carrusel de imágenes
        let currentImageIndex = 0;
        const images = [
            'auto1.jpg', // Reemplaza con la URL o ruta de tu imagen
            'auto2.jpg',
            'auto3.jpg'
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
            <h1>Mi Aplicación</h1>
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

    <!-- Banner de imágenes -->
    <div class="banner">
        <img id="banner-image" src="auto1.jpg" alt="Imagen de autos" />
        <div class="banner-buttons">
            <button class="banner-button" onclick="showPreviousImage()">&#10094;</button>
            <button class="banner-button" onclick="showNextImage()">&#10095;</button>
        </div>
    </div>

    <!-- Contenido principal -->
    <main>
        <section class="welcome">
            <h2>Bienvenido</h2>
            <p>Hola .</p>
            <p>.</p>
        </section>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Mi Aplicación PHP. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
