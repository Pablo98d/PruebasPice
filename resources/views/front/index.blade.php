<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Nave Espacial</title>
    <style>
        /* Estilos del cuerpo */
        body {
            margin: 0;
            overflow: hidden;
            background-color: #000;
            font-family: Arial, sans-serif;
            color: #fff;
        }

        /* Área de juego */
        #gameArea {
            position: relative;
            width: 800px;
            height: 600px;
            background-color: #1e1e1e;
            border: 2px solid #fff;
            margin: 20px auto;
            overflow: hidden;
        }

        /* Estilos de la nave */
        #nave {
            position: absolute;
            width: 50px;
            height: 50px;
            background-image: url('https://via.placeholder.com/50x50/0078D7/ffffff?text=Nave');
            background-size: cover;
            top: 80%;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Estilos de disparo */
        .disparo {
            position: absolute;
            width: 5px;
            height: 20px;
            background-color: #ff0000;
            border-radius: 2px;
        }

        /* Disparo del enemigo */
        .disparo-enemigo {
            background-color: #00ff00;
        }

        /* Estilos de enemigo */
        .enemigo {
            position: absolute;
            width: 50px;
            height: 50px;
            background-image: url('https://via.placeholder.com/50x50/ff0000/ffffff?text=Enemigo');
            background-size: cover;
        }

        /* Vidas */
        #vidas {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 20px;
            color: white;
        }
    </style>
</head>
<body>

    <div id="gameArea">
        <div id="vidas">Vidas: <span id="vidasCount">3</span></div>
        <div id="nave"></div>
    </div>

    <script>
        // Variables principales
        const gameArea = document.getElementById('gameArea');
        const nave = document.getElementById('nave');
        const vidasDisplay = document.getElementById('vidasCount');
        const speed = 10;
        const shootSpeed = 5;
        const enemySpeed = 3;
        const enemyShootSpeed = 3;
        let vidas = 3;
        let naveX = gameArea.offsetWidth / 2 - nave.offsetWidth / 2;
        let naveY = gameArea.offsetHeight - nave.offsetHeight - 20;

        // Función para mover la nave
        function moveNave(dx, dy) {
            naveX += dx;
            naveY += dy;

            // Limites del área
            if (naveX < 0) naveX = 0;
            if (naveY < 0) naveY = 0;
            if (naveX + nave.offsetWidth > gameArea.offsetWidth) naveX = gameArea.offsetWidth - nave.offsetWidth;
            if (naveY + nave.offsetHeight > gameArea.offsetHeight) naveY = gameArea.offsetHeight - nave.offsetHeight;

            nave.style.left = naveX + 'px';
            nave.style.top = naveY + 'px';
        }

        // Función para crear disparo de la nave
        function createDisparo() {
            const disparo = document.createElement('div');
            disparo.classList.add('disparo');
            disparo.style.left = naveX + nave.offsetWidth / 2 - 2.5 + 'px';
            disparo.style.top = naveY + 'px';
            gameArea.appendChild(disparo);

            const interval = setInterval(() => {
                disparo.style.top = disparo.offsetTop - shootSpeed + 'px';
                if (disparo.offsetTop < 0) {
                    disparo.remove();
                    clearInterval(interval);
                }
                document.querySelectorAll('.enemigo').forEach(enemigo => {
                    if (checkCollision(disparo, enemigo)) {
                        disparo.remove();
                        enemigo.remove();
                        clearInterval(interval);
                    }
                });
            }, 10);
        }

        // Función para crear disparos de los enemigos
        function createEnemyDisparo(enemigo) {
            const disparo = document.createElement('div');
            disparo.classList.add('disparo', 'disparo-enemigo');
            disparo.style.left = enemigo.offsetLeft + enemigo.offsetWidth / 2 - 2.5 + 'px';
            disparo.style.top = enemigo.offsetTop + enemigo.offsetHeight + 'px';
            gameArea.appendChild(disparo);

            const interval = setInterval(() => {
                disparo.style.top = disparo.offsetTop + enemyShootSpeed + 'px';
                if (disparo.offsetTop > gameArea.offsetHeight) {
                    disparo.remove();
                    clearInterval(interval);
                }
                if (checkCollision(disparo, nave)) {
                    disparo.remove();
                    clearInterval(interval);
                    reduceVidas();
                }
            }, 10);
        }

        // Función para crear enemigos
        function createEnemigo() {
            const enemigo = document.createElement('div');
            enemigo.classList.add('enemigo');
            enemigo.style.left = Math.random() * (gameArea.offsetWidth - 50) + 'px';
            enemigo.style.top = '0px';
            gameArea.appendChild(enemigo);

            const interval = setInterval(() => {
                enemigo.style.top = enemigo.offsetTop + enemySpeed + 'px';
                if (enemigo.offsetTop > gameArea.offsetHeight) {
                    enemigo.remove();
                    clearInterval(interval);
                }
                if (checkCollision(nave, enemigo)) {
                    enemigo.remove();
                    clearInterval(interval);
                    reduceVidas();
                }
            }, 20);

            // Disparos intermitentes del enemigo
            setInterval(() => {
                if (document.body.contains(enemigo)) {
                    createEnemyDisparo(enemigo);
                }
            }, 1000);
        }

        // Comprobación de colisiones
        function checkCollision(a, b) {
            const aRect = a.getBoundingClientRect();
            const bRect = b.getBoundingClientRect();
            return !(
                aRect.top > bRect.bottom ||
                aRect.bottom < bRect.top ||
                aRect.left > bRect.right ||
                aRect.right < bRect.left
            );
        }

        // Reducir vidas
        function reduceVidas() {
            vidas--;
            vidasDisplay.textContent = vidas;
            if (vidas <= 0) {
                alert('¡Game Over!');
                location.reload();
            }
        }

        // Manejar teclas de movimiento y disparo
        document.addEventListener('keydown', (event) => {
            switch(event.key) {
                case 'ArrowUp':
                    moveNave(0, -speed);
                    break;
                case 'ArrowDown':
                    moveNave(0, speed);
                    break;
                case 'ArrowLeft':
                    moveNave(-speed, 0);
                    break;
                case 'ArrowRight':
                    moveNave(speed, 0);
                    break;
                case ' ':
                    createDisparo();
                    break;
            }
        });

        // Generar enemigos cada cierto tiempo
        setInterval(createEnemigo, 2000);
    </script>
</body>
</html>
