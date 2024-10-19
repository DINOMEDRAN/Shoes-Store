<?php
session_start(); // Iniciar la sesión

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['nombre_usuario'])) {
    // Si no hay sesión iniciada, redirigir al inicio de sesión
    header("Location: inicio_sesion.html");
    exit();
}

$nombre_usuario = $_SESSION['nombre_usuario'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido de vuelta, <?php echo htmlspecialchars($nombre_usuario); ?>!</h1>
    <p>¡Nos alegra verte nuevamente!</p>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>
