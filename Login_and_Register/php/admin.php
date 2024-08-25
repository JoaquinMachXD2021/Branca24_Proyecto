<?php
session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== 'admin') {
    echo '
        <script>
            alert("Acceso denegado. Inicie sesión como administrador.");
            window.location = "index.php";
        </script>
    ';
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="./css/Admin.css">
</head>
<body>
    <h1>Panel de Administración</h1>
    <form action="upload_image.php" method="POST" enctype="multipart/form-data">
        <label for="image">Selecciona una imagen:</label>
        <input type="file" name="image" id="image" required>
        <button type="submit">Subir Imagen</button>
    </form>
    <a href="php/cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>
