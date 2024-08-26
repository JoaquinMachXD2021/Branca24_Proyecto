<?php
    // Verifica si el rol de la sesión actual es 'usuario'
    if($_SESSION["rol"] == 'usuario'){
        // Redirige a la página 'cliente_ver.php' si el rol es 'usuario'
        header('Location: Principal.php');
    }
?>
