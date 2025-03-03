<?php
include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$nombre_usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$repetir_contrasena = $_POST['repetir_contrasena'];

// Verificar que las contraseñas coincidan antes de encriptar
if ($contrasena !== $repetir_contrasena) {
    echo '
    <script>
    alert("Las contraseñas no coinciden");
    window.history.back();
    </script>
    ';
    exit();
}

// Encriptar la contraseña
$contrasena = hash('sha512', $contrasena);

// Verificar si el usuario ya existe
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$nombre_usuario'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
    <script>
    alert("El usuario ya está registrado");
    window.history.back();
    </script>
    ';
    exit();
}

// Verificar si el correo ya existe
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
    <script>
    alert("El mail ya está registrado");
    window.history.back();
    </script>
    ';
    exit();
}

// Insertar el nuevo usuario en la base de datos
$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) 
          VALUES ('$nombre_completo', '$correo', '$nombre_usuario', '$contrasena')";
$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
    alert("Usuario registrado exitosamente");
    window.location = "/cometwds/index.php";
    </script>
    ';
} else {
    echo '
    <script>
    alert("Error al registrar el usuario. Intente nuevamente");
    window.history.back();
    </script>
    ';
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
