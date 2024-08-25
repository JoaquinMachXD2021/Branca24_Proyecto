<?php
session_start();
include './conxion_be.php';

// Obtener datos del formulario y sanitizar entrada
$correo = mysqli_real_escape_string($conexion, $_POST['correo']);
$contrasena = $_POST['contrasena'];

// Preparar consulta para evitar inyección SQL
$sql = "SELECT contrasena FROM usuarios WHERE correo = ?";
$stmt = mysqli_prepare($conexion, $sql);

// Verificar si la preparación de la consulta fue exitosa
if ($stmt === false) {
    die("Error en la preparación de la consulta: " . mysqli_error($conexion));
}

// Enlazar parámetros y ejecutar consulta
mysqli_stmt_bind_param($stmt, 's', $correo);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $hashed_password);
mysqli_stmt_fetch($stmt);

// Verificar si se encontró un usuario y validar la contraseña
if ($hashed_password && password_verify($contrasena, $hashed_password)) {
    $_SESSION['usuario'] = $correo;
    header("Location: ./Principal.php");
    exit();
} else {
    echo '
        <script>
            alert("Usuario no existe o la contraseña es incorrecta, por favor verifique los datos introducidos");
            window.location = "./Login.php";
        </script>
    ';
    exit();
}

// Cerrar declaración y conexión
mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>
