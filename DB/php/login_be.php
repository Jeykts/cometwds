<?php
session_start();
include 'conexion_be.php';

$correo_o_usuario = $_POST['correo_o_usuario'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

// Consultar si el usuario existe por correo o usuario
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE (correo='$correo_o_usuario' OR usuario='$correo_o_usuario') AND contrasena='$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['correo_o_usuario'] = $correo_o_usuario;
    header("Location: /cometwds/Frontend/html/services.php");
    exit();
} else {
    echo '
    <script>
        alert("Correo o usuario no existe, o contraseña incorrecta. Verifique la información.");
        window.history.back();
    </script>';
    exit();
}
?>
