<?php
session_start();
include './conxion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Consultar la contraseña encriptada desde la base de datos
$validar_login = mysqli_query($conexion, "SELECT contrasena FROM usuarios WHERE correo='$correo'");
$usuario = mysqli_fetch_assoc($validar_login);

if ($usuario && password_verify($contrasena, $usuario['contrasena'])) {
    $_SESSION['usuario'] = $correo;
    header("Location: Principal.php");
    exit();
} else {
    echo '
        <script>
            alert("Usuario no existe o la contraseña es incorrecta, por favor verifique los datos introducidos");
            window.location = "Login.php";
        </script>
    ';
    exit();
}
?>
