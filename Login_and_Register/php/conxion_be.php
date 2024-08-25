<?php 
    // Establecer parámetros de conexión
    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $dbname = "empresa_b24";

    // Crear conexión
    $conexion = mysqli_connect($host, $user, $password, $dbname);

    // Verificar conexión
    // if (!$conexion) {
    //     die("Error de conexión: " . mysqli_connect_error());
    // }
    // echo "Conectado exitosamente a la Base de Datos";
?>
