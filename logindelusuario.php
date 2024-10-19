<?php
session_start();

include('conexion.php'); // Asegúrate de que la ruta sea correcta

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'");

if(mysqli_num_rows($validar_login) > 0) {
    // Fetch the row
    $row = mysqli_fetch_assoc($validar_login);

    // Store the session variables
    $_SESSION['correo'] = $row['correo'];
    
    // No es seguro almacenar contraseñas en sesiones, pero si necesitas hacerlo:
    $_SESSION['contrasena'] = $row['contrasena'];

    header("Location: zonaprincipal.php");
    exit;
} else {
// Generar HTML de respuesta
echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error de Inicio de Sesión</title>
    <link rel="stylesheet" href="error_sesion.css"> <!-- Enlace al archivo CSS externo -->
</head>
<body>
    <div class="container">
        <div class="error-icon">&#10006;</div>
        <h1>Usuario no encontrado</h1>
        <p>Tu cuenta no se ha encontrado. Por favor, verifica tus credenciales.</p>
        <button onclick="iniciarSesion()">Iniciar Sesión</button>
    </div>
    <script>
        function iniciarSesion() {
            window.location.href = "zonaprincipal.php"; // Redirige a la página de inicio de sesión
        }
    </script>
</body>
</html>';
    
    exit;
}
?>
