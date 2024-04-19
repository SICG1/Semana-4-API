<?php
if (!isset($_GET['nombre']) || !isset($_GET['fecha'])) {
    // Redirigir al formulario si no se accede correctamente
    header('Location: index.html');
    exit;
}

$nombre = $_GET['nombre'];
$fecha = $_GET['fecha'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Confirmación de Reserva</title>
</head>
<body>
    <h1>Reserva Confirmada</h1>
    <p>Gracias, <?php echo htmlspecialchars($nombre); ?>, tu reserva para el <?php echo htmlspecialchars($fecha); ?> ha sido confirmada.</p>
    <p><a href="index.html">Hacer otra reserva</a></p>
</body>
</html>
