<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Ropa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Bienvenidos a la Tienda de Ropa</h1>
    </header>

    <main>
        <section class="productos">
            <?php
            // Datos de productos (en un caso real, estos datos vendrían de una base de datos)
            $productos = [
                [
                    "nombre" => "Camisa Casual",
                    "precio" => 19.99,
                    "descripcion" => "Una camisa casual perfecta para cualquier ocasión.",
                    "imagen" => "camisa.jpg"
                ],
                [
                    "nombre" => "Pantalón de Jean",
                    "precio" => 29.99,
                    "descripcion" => "Pantalón de jean resistente y moderno.",
                    "imagen" => "pantalon.jpg"
                ],
                [
                    "nombre" => "Vestido de Verano",
                    "precio" => 24.99,
                    "descripcion" => "Vestido ligero ideal para el verano.",
                    "imagen" => "vestido.jpg"
                ]
            ];

            // Generar HTML para cada producto
            foreach ($productos as $producto) {
                echo "<div class='producto'>";
                echo "<img src='{$producto['imagen']}' alt='{$producto['nombre']}'>";
                echo "<h2>{$producto['nombre']}</h2>";
                echo "<p>{$producto['descripcion']}</p>";
                echo "<p class='precio'>$ {$producto['precio']}</p>";
                echo "<button>Agregar al carrito</button>";
                echo "</div>";
            }
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Tienda de Ropa. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
