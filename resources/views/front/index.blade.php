<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Mi Proyecto Laravel') }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Estilos adicionales -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        /* Contenedor para los perros */
        .perros-container {
            position: relative;
            height: 200px;
            overflow: hidden;
        }

        /* Estilo para cada perro */
        .perro {
            position: absolute;
            bottom: 0;
            font-size: 100px;
            /* Tamaño del icono */
            color: #340138;
            /* Color negro para la silueta */
            animation: saltarYcorrer 5s ease-in-out infinite;
        }

        /* Animación de salto y movimiento */
        @keyframes saltarYcorrer {
            0% {
                left: -100px;
                transform: translateY(0);
            }

            25% {
                left: 25%;
                transform: translateY(-50px);
                /* Salto hacia arriba */
            }

            50% {
                left: 50%;
                transform: translateY(0);
                /* Vuelve a la posición original */
            }

            75% {
                left: 75%;
                transform: translateY(-50px);
                /* Segundo salto hacia arriba */
            }

            100% {
                left: 100%;
                transform: translateY(0);
                /* Vuelve a la posición original */
            }
        }

        /* Pasto en la parte inferior */
        .pasto {
            position: absolute;
            bottom: 40px;
            /* Ajustar para que no quede cubierto por el pie de página */
            left: 0;
            width: 100%;
            height: 100px;
            background-color: #4CAF50;
            background-image: url('https://www.transparenttextures.com/patterns/grass.png');
            background-size: cover;
        }

        /* Flores en el pasto */
        .flores {
            position: absolute;
            bottom: 80px;
            /* Ajustar para que no se tape con el pasto */
            left: 0;
            right: 0;
            height: 30px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        /* Estilo para cada flor */
        .flor {
            font-size: 30px;
            color: #e61169;
            /* Color de la flor (puedes cambiarlo) */
            animation: florecer 2s ease-in-out infinite;
        }

        /* Animación de las flores */
        @keyframes florecer {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Pie de página */
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        /* Asegurar que el contenido ocupe al menos la altura de la pantalla */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex-grow: 1;
            /* Esto asegura que el contenido principal ocupe todo el espacio restante */
        }
    </style>
</head>

<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mi Proyecto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-4 content">
        @yield('content')

        <!-- Animación de los perros -->
        <div class="perros-container">
            <div class="perro">
                <i class="fas fa-dog"></i> <!-- Icono de perro -->
            </div>
            <div class="perro" style="animation-delay: 2s;">
                <i class="fas fa-dog"></i> <!-- Icono de perro -->
            </div>
            <div class="perro" style="animation-delay: 4s;">
                <i class="fas fa-dog"></i> <!-- Icono de perro -->
            </div>
        </div>

        <!-- Pasto en la parte inferior -->
        <div class="pasto"></div>

        <!-- Flores en el pasto -->
        <div class="flores">
            <div class="flor">🌸</div>
            <div class="flor">🌼</div>
            <div class="flor">🌻</div>
            <div class="flor">🌷</div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Mi Proyecto Laravel. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
