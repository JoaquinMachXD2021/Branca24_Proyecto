<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                windows.location = "index.php";
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
    <title>Branca 24hs</title>
    <link rel="stylesheet" href="./css/Principal.css">
</head>

<body>
    
    <a href="php/cerrar_sesion.php">Cerrar Sesión</a>

    <div class="container">
        <div class="header">
            <h1>Bienvenidos a</h1>
        </div>
        <div class="banner">
            <!-- Banner de publicidad -->
            <img src=" C:\Users\servicio tecnico\branca\IMG\Branca240.jpg " alt="Branca Inferior">
        </div>
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
        <div class="footer">
            <img src="C:\Users\servicio tecnico\branca\IMG\Deliveryban1.jpg" alt="Branca Deliveryban">
            <p>© Branca 24hs. Todos los derechos reservados.</p>
        </div>
    </div>

    <script src="./js/Principal.js"></script>
</body>

</html>