<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: Principal.php");
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branca24hs</title>
    <link rel="icon" href="../FaviBranca24.ico" type="image/x-icon">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="./css/Estilo_de_Login_y_Registro.css">
</head>

<img src="./css/inicio.jpg" alt="Imagen sobrepuesta" class="imagen-superpuesta">
<img src="./css/fondo1.jpg" alt="Imagen fondo" class="imagen_fondo">

<body>
    <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y Registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electrónico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                    </form>

                    <!--Registro-->
                    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name = "nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name = "correo">
                        <input type="text" placeholder="Usuario" name = "usuario">
                        <input type="password" placeholder="Contraseña" name = "contrasena">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>
        <!-- Footer -->
    <div class="footer">
        <p>© Branca 24hs. Todos los derechos reservados.</p>
    </div>

    <script src="./js/Mover_Login_Y_Registro.js"></script>
</body>
</html>