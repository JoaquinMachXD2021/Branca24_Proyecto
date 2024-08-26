<?php 
    // Establecer parámetros de conexión
    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $dbname = "empresa_b24";

    define('ADMIN_ROL_ID','administrador');
    define('USER_ROL_ID','usuario');

    // Crear conexión
    $conexion = mysqli_connect($host, $user, $password, $dbname);

    if (!$conexion) 
    {
    die("Error en la conexión: " . mysqli_connect_error());
    }

    session_start();
?>
