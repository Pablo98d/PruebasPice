<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background-color: #4CAF50;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            font-size: 2rem;
        }

        /* Navigation */
        nav {
            display: flex;
            justify-content: center;
            background-color: #333;
        }

        nav a {
            color: #fff;
            padding: 15px 20px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #4CAF50;
        }

        /* Main Section */
        .intro {
            text-align: center;
            padding: 50px 20px;
        }

        .intro h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .intro p {
            max-width: 600px;
            margin: 0 auto;
        }

        /* Gallery */
        .gallery {
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            margin: 50px 0;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .gallery img:hover {
            transform: scale(1.05);
        }

        /* Footer */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        /* Responsive Text */
        @media (max-width: 768px) {
            header h1, .intro h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Bienvenido a Mi Portafolio</h1>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="#home">Inicio</a>
        <a href="#about">Sobre mí</a>
        <a href="#projects">Proyectos</a>
        <a href="#contact">Contacto</a>
    </nav>

    <!-- Main Section -->
    <div class="container">
        <section class="intro" id="home">
            <h2>Hola, soy Ladiberto</h2>
            <p>Desarrollador web apasionado por crear soluciones innovadoras que mejoren la vida de las personas. Aquí puedes ver algunos de mis proyectos recientes.</p>
        </section>

        <!-- Gallery Section -->
        <section class="gallery" id="projects">
            <img src="https://via.placeholder.com/400" alt="Proyecto 1">
            <img src="https://via.placeholder.com/400" alt="Proyecto 2">
            <img src="https://via.placeholder.com/400" alt="Proyecto 3">
            <img src="https://via.placeholder.com/400" alt="Proyecto 4">
            <img src="https://via.placeholder.com/400" alt="Proyecto 5">
            <img src="https://via.placeholder.com/400" alt="Proyecto 6">
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Mi Portafolio - Todos los derechos reservados.</p>
    </footer>
</body>
</html>
