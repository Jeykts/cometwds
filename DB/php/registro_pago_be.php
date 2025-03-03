<?php 
include 'conexion_be.php';

// Obtener datos del formulario
if (isset($_POST['nombre'], $_POST['numero_tarjeta'], $_POST['fecha_vencimiento'], $_POST['cvv'])) {
    $nombre = $_POST['nombre'];
    $numero_tarjeta = $_POST['numero_tarjeta'];
    $fecha_vencimiento = $_POST['fecha_vencimiento'];
    $cvv = $_POST['cvv'];
} else {
    die('Faltan datos del formulario.');
}

// Validar que los campos no estén vacíos
if (empty($nombre) || empty($numero_tarjeta) || empty($fecha_vencimiento) || empty($cvv)) {
    echo '<script>alert("Por favor, complete todos los campos."); window.history.back();</script>';
    exit();
}

// Preparar la consulta SQL
$queryCredito = "INSERT INTO transaccionescredito (nombre, numero_tarjeta, fecha_vencimiento, cvv) 
                 VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($conexion, $queryCredito);
if ($stmt === false) {
    echo 'Error al preparar la consulta: ' . mysqli_error($conexion);
    exit();
}

// Corregir el número de tipos en mysqli_stmt_bind_param
mysqli_stmt_bind_param($stmt, 'ssss', $nombre, $numero_tarjeta, $fecha_vencimiento, $cvv);

// Ejecutar la consulta
$ejecutar = mysqli_stmt_execute($stmt);
if (!$ejecutar) {
    echo 'Error al ejecutar la consulta: ' . mysqli_error($conexion);
    exit();
}

echo '
<script>
alert("Pago por crédito registrado exitosamente.");
window.location = "/cometwds/Frontend/html/index.php";
</script>
';

// Cerrar conexión
mysqli_close($conexion);
?>
