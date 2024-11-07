<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lil Peep - Página de Inicio</title>
    <style>
        /* Estilos CSS */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1c1c1c;
            color: #fff;
        }

        .header {
            background-color: #000;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header .nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 15px;
        }

        .header .nav ul li {
            display: inline;
        }

        .header .nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        .intro {
            text-align: center;
            padding: 50px;
        }

        .intro img {
            width: 80%;
            border-radius: 10px;
            margin-top: 20px;
        }

        .about, .music, .events, .contact {
            padding: 40px;
            text-align: center;
        }

        .album-grid {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .album img {
            width: 150px;
            height: 150px;
            border-radius: 10px;
        }

        .footer {
            text-align: center;
            background-color: #000;
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Encabezado -->
    <header class="header">
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/3/34/Lil_Peep_Logo.png" alt="Lil Peep Logo" width="120">
        </div>
        <nav class="nav">
            <ul>
                <li><a href="#about">Biografía</a></li>
                <li><a href="#music">Música</a></li>
                <li><a href="#events">Eventos</a></li>
                <li><a href="#contact">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección de Introducción -->
    <section class="intro">
        <h1>Bienvenidos al mundo de Lil Peep</h1>
        <p>Un tributo al artista que cambió la música para siempre.</p>
        <img src="https://i1.sndcdn.com/artworks-000547683754-rsaiux-t500x500.jpg" alt="Lil Peep">
    </section>

    <!-- Sección Biografía -->
    <section id="about" class="about">
        <h2>Biografía</h2>
        <p>Lil Peep, cuyo verdadero nombre era Gustav Elijah Åhr, fue un rapero, cantante y compositor que revolucionó el género del emo rap. Su música abordó temas de amor, tristeza y esperanza, convirtiéndose en una voz para su generación.</p>
    </section>

    <!-- Sección Música -->
    <section id="music" class="music">
        <h2>Música</h2>
        <div class="album-grid">
            <div class="album">
                <img src="https://upload.wikimedia.org/wikipedia/en/1/1f/Come_Over_When_You%27re_Sober%2C_Pt._1.png" alt="Come Over When You're Sober, Pt. 1">
                <p>Come Over When You're Sober, Pt. 1</p>
            </div>
            <div class="album">
                <img src="https://upload.wikimedia.org/wikipedia/en/7/74/Come_Over_When_You%27re_Sober%2C_Pt._2.png" alt="Come Over When You're Sober, Pt. 2">
                <p>Come Over When You're Sober, Pt. 2</p>
            </div>
        </div>
        <a href="https://open.spotify.com/artist/2kCcBybjl3SAtIcwdWpUe3" target="_blank" style="color: #fff; text-decoration: underline;">Escucha en Spotify</a>
    </section>

    <!-- Sección Eventos -->
    <section id="events" class="events">
        <h2>Próximos Eventos</h2>
        <p>Eventos en memoria de Lil Peep:</p>
        <ul>
            <li>Tributo en Los Ángeles - 15 de Noviembre, 2024</li>
            <li>Evento virtual - 1 de Diciembre, 2024</li>
        </ul>
    </section>

    <!-- Sección Contacto -->
    <section id="contact" class="contact">
        <h2>Contacto</h2>
        <p>Conéctate con la comunidad de fans:</p>
        <ul class="social-links">
            <li><a href="https://twitter.com/LilPeep" target="_blank" style="color: #fff;">Twitter</a></li>
            <li><a href="https://www.instagram.com/lilpeep/" target="_blank" style="color: #fff;">Instagram</a></li>
            <li><a href="https://www.lilpeep.com/" target="_blank" style="color: #fff;">Página Oficial</a></li>
        </ul>
    </section>

    <!-- Pie de página -->
    <footer class="footer">
        <p>&copy; 2024 Lil Peep Legacy. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
