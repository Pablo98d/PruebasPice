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

        .about,
        .music,
        .events,
        .contact {
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

        .mental-health-message {
            background-color: #292929;
            color: #ffcccb;
            text-align: center;
            padding: 40px;
            margin: 20px auto;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            max-width: 800px;
        }

        .mental-health-message h2 {
            font-size: 1.8rem;
            color: #ff6f61;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .mental-health-message p {
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 10px;
        }


        /* Contenedor de la paloma */
        .dove {
            position: relative;
            margin: 0 auto 20px auto;
            width: 100px;
            height: 100px;
        }

        /* Cuerpo */
        .dove .body {
            position: absolute;
            bottom: 20px;
            left: 20px;
            width: 60px;
            height: 40px;
            background-color: #fff;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Ala */
        .dove .wing {
            position: absolute;
            top: 5px;
            left: 10px;
            width: 80px;
            height: 50px;
            background-color: #fff;
            border-radius: 50%;
            transform: rotate(-45deg);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Pico */
        .dove .beak {
            position: absolute;
            top: 35px;
            left: 75px;
            width: 10px;
            height: 10px;
            background-color: orange;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        }

        /* Ojo */
        .dove .eye {
            position: absolute;
            top: 30px;
            left: 60px;
            width: 5px;
            height: 5px;
            background-color: black;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <!-- Encabezado -->
    <header class="header">
        <div class="logo">
            <img src="https://i.imgur.com/YLpqH9A.png" alt="Lil Peep Logo" width="120">
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
        <p>"This music's the only thing keepin' the peace when I fall into pieces"</p>
        <img src="https://i.imgur.com/qfgUccx.jpg" alt="Lil Peep">
    </section>

    <!-- Sección Biografía -->
    <section id="about" class="about">
        <h2>Biografía</h2>
        <p>
            Lil Peep, cuyo nombre real era Gustav Elijah Åhr, nació el 1 de noviembre de 1996 en Allentown, Pensilvania, y creció en Long Beach, Nueva York. Desde joven, mostró una inclinación por la creatividad y el arte, influenciado por una familia con raíces académicas y culturales. Aunque enfrentó dificultades durante su adolescencia, incluido el divorcio de sus padres y problemas de salud mental, utilizó estos desafíos como inspiración para su música.
        </p>
        <p>
            Lil Peep comenzó su carrera subiendo canciones en SoundCloud, combinando géneros como el emo, el rap y el punk rock. Su estilo único y su voz melancólica rápidamente captaron la atención de una generación que se identificaba con sus letras honestas sobre el amor, la depresión, las adicciones y la pérdida. Entre sus primeros éxitos se encuentran temas como *"Beamer Boy"* y *"Star Shopping"*.
        </p>
        <p>
            En 2017, lanzó su primer álbum de estudio, <i>Come Over When You're Sober, Pt. 1</i>, que consolidó su posición como pionero del género emo rap. Su música no solo resonó en plataformas digitales, sino que también creó una comunidad de fans que encontraron consuelo en sus letras. A pesar de su creciente fama, Lil Peep permaneció fiel a sus raíces independientes, colaborando con artistas de la escena underground y explorando nuevos sonidos.
        </p>
        <p>
            Trágicamente, Lil Peep falleció el 15 de noviembre de 2017 a los 21 años, debido a una sobredosis accidental. Su muerte conmocionó al mundo de la música y dejó un legado que sigue vivo a través de su arte. En 2018, se lanzó póstumamente <i>Come Over When You're Sober, Pt. 2</i>, que fue recibido con aclamación crítica y demostró el impacto duradero de su visión artística.
        </p>
        <p>
            Hoy, Lil Peep es recordado como un ícono cultural que desdibujó las líneas entre géneros y ayudó a dar voz a una generación que luchaba con la salud mental. Sus fans continúan celebrando su vida y obra, manteniendo vivo su espíritu a través de tributos, eventos conmemorativos y la difusión de su música.
        </p>
    </section>


    <!-- Sección Música -->
    <section id="music" class="music">
        <h2>Música</h2>
        <div class="album-grid">
            <div class="album">
                <img src="https://i.imgur.com/KFPpuy2.jpg" alt="Come Over When You're Sober, Pt. 1">
                <p>Come Over When You're Sober, Pt. 1</p>
            </div>
            <div class="album">
                <img src="https://i.imgur.com/WK5VFOc.jpg" alt="Come Over When You're Sober, Pt. 2">
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
        <section class="mental-health-message">
            <h2>La salud mental importa</h2>
            <p>
                "No estás solo. La tristeza, la ansiedad y el dolor son parte del viaje, pero recuerda que siempre hay esperanza. Habla, comparte, busca apoyo. Cada día es una nueva oportunidad para sanar."
            </p>
            <p>
                En honor a Lil Peep y a todos aquellos que luchan en silencio, recordemos ser amables, escuchar y apoyar. La música y el arte tienen el poder de conectarnos y darnos fuerza.
            </p>
        </section>

        <div class="dove">
            <div class="body"></div>
            <div class="wing"></div>
            <div class="beak"></div>
            <div class="eye"></div>
        </div>
    </footer>
</body>

</html>