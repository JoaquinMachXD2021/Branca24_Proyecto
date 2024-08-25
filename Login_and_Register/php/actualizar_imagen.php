<?php
session_start();
include './conxion_be.php';

if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== 'admin') {
    echo '
        <script>
            alert("Acceso denegado. Inicie sesión como administrador.");
            window.location = "index.php";
        </script>
    ';
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $image = $_FILES['image']['name'];
    $target = "../uploads/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $query = "INSERT INTO images (image_path) VALUES ('$target')";
        if (mysqli_query($conexion, $query)) {
            echo '
                <script>
                    alert("Imagen subida y guardada en la base de datos exitosamente.");
                    window.location = "admin.php";
                </script>
            ';
        } else {
            echo '
                <script>
                    alert("Error al guardar la imagen en la base de datos.");
                    window.location = "admin.php";
                </script>
            ';
        }
    } else {
        echo '
            <script>
                alert("Error al subir la imagen.");
                window.location = "admin.php";
            </script>
        ';
    }
}
