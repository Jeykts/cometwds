<?php
include 'conexion_be.php';

session_start();

// Configura el encabezado para que la respuesta sea JSON
header('Content-Type: application/json');

// Verifica si la sesión contiene un correo o usuario que indique que el usuario está logueado
if (isset($_SESSION['correo_o_usuario'])) {
    // Devuelve un JSON con el estado de autenticación y el correo o usuario del usuario
    echo json_encode([
        "loggedIn" => true,
        "correo_o_usuario" => $_SESSION['correo_o_usuario']
    ]);
} else {
    // Si no hay sesión, devuelve un JSON que indique que no está logueado
    echo json_encode([
        "loggedIn" => false
    ]);
}
?>
