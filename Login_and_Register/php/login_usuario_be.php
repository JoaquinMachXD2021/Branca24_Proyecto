<?php
session_start();
include './conxion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Encriptar la contraseña ingresada
$contrasena_encrip = hash('sha512', $contrasena);

// Validar el login comparando la contraseña encriptada
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena_encrip'");

if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $correo;
    header("location: ../Principal.php");
    exit;

} else {
    echo '
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "../Login.php";
        </script>
    ';
    exit;
}
?>
