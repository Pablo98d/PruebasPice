<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Plantillas HTML</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* General Styles */
        body {
            font-family: 'Roboto', sans-serif;
            color: #333;
            background-color: #f4f4f4;
        }

        /* Container for the catalog */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header */
        header {
            background-color: #0078D7;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            font-size: 2rem;
        }

        /* Catalog Grid */
        .catalog {
            display: grid;
            gap: 30px;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            margin-top: 30px;
        }

        /* Card Style */
        .template-card {
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .template-card:hover {
            transform: translateY(-5px);
        }

        .template-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .template-info {
            padding: 20px;
            text-align: center;
        }

        .template-info h2 {
            font-size: 1.5rem;
            color: #0078D7;
            margin-bottom: 10px;
        }

        .template-info p {
            font-size: 1rem;
            margin-bottom: 15px;
            color: #555;
        }

        .template-info button {
            background-color: #0078D7;
            color: #fff;
            border: none;
            padding: 10px 15px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .template-info button:hover {
            background-color: #0056A3;
        }

        /* Responsive Text */
        @media (max-width: 768px) {
            header h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Catálogo de Plantillas HTML</h1>
        <p>Descubre nuestras plantillas HTML gratuitas para tu sitio web</p>
    </header>

    <!-- Catalog -->
    <div class="container">
        <section class="catalog">
            <!-- Template 1 -->
            <div class="template-card">
                <img src="https://via.placeholder.com/400x200" alt="Plantilla 1" class="template-image">
                <div class="template-info">
                    <h2>Plantilla 1</h2>
                    <p>Plantilla HTML simple, ideal para sitios personales.</p>
                    <button>Ver detalles</button>
                </div>
            </div>

            <!-- Template 2 -->
            <div class="template-card">
                <img src="https://via.placeholder.com/400x200" alt="Plantilla 2" class="template-image">
                <div class="template-info">
                    <h2>Plantilla 2</h2>
                    <p>Plantilla responsiva para blogs y portafolios.</p>
                    <button>Ver detalles</button>
                </div>
            </div>

            <!-- Template 3 -->
            <div class="template-card">
                <img src="https://via.placeholder.com/400x200" alt="Plantilla 3" class="template-image">
                <div class="template-info">
                    <h2>Plantilla 3</h2>
                    <p>Plantilla moderna para sitios web corporativos.</p>
                    <button>Ver detalles</button>
                </div>
            </div>

            <!-- Template 4 -->
            <div class="template-card">
                <img src="https://via.placeholder.com/400x200" alt="Plantilla 4" class="template-image">
                <div class="template-info">
                    <h2>Plantilla 4</h2>
                    <p>Plantilla minimalista para páginas de aterrizaje.</p>
                    <button>Ver detalles</button>
                </div>
            </div>

            <!-- Template 5 -->
            <div class="template-card">
                <img src="https://via.placeholder.com/400x200" alt="Plantilla 5" class="template-image">
                <div class="template-info">
                    <h2>Plantilla 5</h2>
                    <p>Plantilla para tienda en línea con diseño limpio.</p>
                    <button>Ver detalles</button>
                </div>
            </div>

            <!-- Template 6 -->
            <div class="template-card">
                <img src="https://via.placeholder.com/400x200" alt="Plantilla 6" class="template-image">
                <div class="template-info">
                    <h2>Plantilla 6</h2>
                    <p>Plantilla para portfolio de artistas y creativos.</p>
                    <button>Ver detalles</button>
                </div>
            </div>
        </section>
    </div>

</body>
</html>
