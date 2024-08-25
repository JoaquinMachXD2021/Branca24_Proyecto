<?php
session_start();
include './conxion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Encriptar la contraseña usando password_hash()
$contrasena_encrip = password_hash($contrasena, PASSWORD_BCRYPT);

// Verificar que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
        <script>
            alert("Este correo ya está registrado, intenta con otro diferente");
            window.location = "../Login.php";
        </script>
    ';
    exit();
}

// Verificar que el usuario no se repita en la base de datos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");

if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
        <script>
            alert("Este usuario ya está registrado, intenta con otro diferente");
            window.location = "../Login.php";
        </script>
    ';
    exit();
}

// Validar la longitud de la contraseña
if (strlen($contrasena) < 8) {
    echo '
        <script>
            alert("La contraseña debe tener al menos 8 caracteres.");
            window.location = "../Login.php";
        </script>
    ';
    exit();
}

// Inserción en la base de datos
$registroA = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
            VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena_encrip')";

$ejecutar = mysqli_query($conexion, $registroA);

if ($ejecutar) {
    echo '<script>
            alert("Usuario registrado exitosamente.");
            window.location = "../Login.php";
        </script>';
} else {
    // Imprimir error de MySQL para depuración
    echo '<script>
            alert("Usuario no almacenado. Error: ' . mysqli_error($conexion) . '");
            window.location = "../Login.php";
        </script>';
}

mysqli_close($conexion);
?>
