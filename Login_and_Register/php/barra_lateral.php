<!DOCTYPE html>
<html lang="es">
<head>
    <title>Restaurante DOOM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/barra_lateral.css">
    <link rel="icon" href="./faviconDOOM.png" type="image/x-icon">
    <!-- Incluye la biblioteca de iconos FontAwesome -->
    <script src="https://kit.fontawesome.com/cea831bcdf.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Encabezado con el logo y el botón de menú -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <h1><img src="./images/RestaurantelogoN.png" alt="Logo de la Empresa" width="40"></h1>
            </div>
            <div class="btn-menu">
                <label for="btn-menu"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></label>
            </div>
            <!-- Menú de navegación (vacío, se completará con JavaScript) -->
            <nav class="menu">
            </nav>
        </div>
    </header>

    <!-- Capa semitransparente que cubre el contenido cuando se abre el menú -->
    <div class="capa"></div>

    <!-- Checkbox para controlar la visibilidad del menú -->
    <input type="checkbox" id="btn-menu" class="capainvisible">

    <!-- Contenedor del menú lateral -->
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <!-- Enlaces del menú -->
                <li><a href="cliente_ver.php"><i class="fa-solid fa-users" style="color: #ffffff;"></i> Area Clientes </a></li>
                <li><a href="productos_tabla.php"><i class="fa-regular fa-clipboard" style="color: #ffffff;"></i> Productos </a></li>
                <li><a href="categoria_tabla.php"><i class="fa-solid fa-layer-group" style="color: #ffffff;"></i> Categoría </a></li>
                <li><a href="cerrar_sesion.php"><i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i> Cerrar sesión </a></li>
            </nav>
            <!-- Etiqueta para cerrar el menú en dispositivos móviles -->
            <label for="btn-menu">✖️</label>
        </div>
    </div>

    <!-- Script JavaScript para gestionar el comportamiento del menú -->
    <script>
        // Mostrar la barra lateral al pasar el ratón sobre el botón de menú
        document.getElementById('btn-menu').addEventListener('mouseenter', function() {
            document.querySelector('.BarraLateral').style.left = '0';
            document.querySelector('.container').style.backgroundColor = '#555';
        });

        // Ocultar la barra lateral al salir del área de la barra lateral
        document.querySelector('.BarraLateral').addEventListener('mouseleave', function(e) {
            if (e.relatedTarget && !e.relatedTarget.closest('.BarraLateral')) {
                document.querySelector('.BarraLateral').style.left = '-180px';
                document.querySelector('.container').style.backgroundColor = '#880d0d';
            }
        });

        // Mostrar/ocultar la capa semitransparente al cambiar el estado del checkbox
        document.getElementById('btn-menu').addEventListener('change', function() {
            if (this.checked) {
                document.querySelector('.capa').style.display = 'block';
            } else {
                document.querySelector('.capa').style.display = 'none';
            }
        });
    </script>
</body>
</html>
