<?php
    session_start();

    if (!isset($_SESSION['usuario'])) {
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branca24hs</title>
    <link rel="icon" href="../FaviBranca24.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/Principal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
</head>



<body>
    <main>
        <a href="php/cerrar_sesion.php">Cerrar Sesión</a>

        <div class="container">
            <div class="header">
                <h1>Bienvenidos a Branca 24hs</h1>
            </div>

            <!-- Carrusel de Imágenes -->
            <div class="carousel">
                <div><img src="../Imag_Dis/Fernetcoca225H.jpg" alt="Imagen 1"></div>
                <div><img src="../Imag_Dis/Vat69Pomelo225H.jpg" alt="Imagen 2"></div>
                <div><img src="../Imag_Dis/WiliamLawson5coca225H.jpg" alt="Imagen 3"></div>
                <div><img src="../Imag_Dis/WiliamLawson5Pomelo225H.jpg" alt="Imagen 4"></div>
                <div><img src="../Imag_Dis/Williamlawson5coca224H.jpg" alt="Imagen 5"></div>
            </div>

            <!-- Sección de Promociones -->
            <div class="promocion">
                <h2>Promociones Especiales</h2>
                <div class="promocion-item">
                    <img src="../Imag_Dis/Bebidasalcohol.jpg" alt="Promo 1">
                    <p>Promo 1: Detalles de la oferta.</p>
                </div>
                <div class="promocion-item">
                    <img src="../Imag_Dis/Corona.jpg" alt="Promo 2">
                    <p>Promo 2: Detalles de la oferta.</p>
                </div>
                <div class="promocion-item">
                    <img src="../Imag_Dis/Pilsen.jpg" alt="Promo 2">
                    <p>Promo 3: Detalles de la oferta.</p>
                </div>
            </div>

            <!-- Sección de Envíos -->
            <div class="pedidos">
                    <div class="delivery">
                    <img src="../Delivery/Delivery.jpg" alt="pedidos">
                    <p>Hacemos envíos hasta las 02:00</p>
                    <p>092 492 793</p>
                </div>
                <h2>Envíos y Entregas</h2>
                <p>Ofrecemos envíos rápidos y seguros. Más detalles sobre nuestras opciones de envío y entrega.</p>
            </div>

            <!-- Contenido -->
            <div class="content">
                <div class="item">
                    <button class="boton" id="boton1">Almacén</button>
                    <div class="menu" id="menu1">
                        <a href="pagina1.html">Congelados</a>
                        <a href="pagina2.html">Desayuno</a>
                        <a href="pagina3.html">Snack</a>
                    </div>
                </div>
                <div class="item">
                    <button class="boton" id="boton2">Bebidas</button>
                    <div class="menu" id="menu2">
                        <a href="pagina1.html">Bebidas Alcohólicas</a>
                        <a href="pagina2.html">Gaseosas</a>
                        <a href="pagina3.html">Cervezas sin Alcohol</a>
                    </div>
                </div>
                <div class="item">
                    <button class="boton" id="boton3">Combos/Ofertas</button>
                    <div class="menu" id="menu3">
                        <a href="pagina1.html">Fernet + Coca</a>
                        <a href="pagina2.html">Cerveza + Pizza</a>
                        <a href="pagina3.html">Fernet + Snack</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

            <div class="footer">
                <p>© Branca 24hs. Todos los derechos reservados.</p>
                <img src="./css/Branca24inf.jpg" alt="Branca Inferior">
            </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script src="./js/Principal.js"></script>
        <script src="./js/Mover_Menu.js"></script>
    </body>
</html>

