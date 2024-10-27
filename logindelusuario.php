<?php
session_start();

include('conexion.php'); // Asegúrate de que la ruta sea correcta

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
    // Fetch the row
    $row = mysqli_fetch_assoc($validar_login);

    // Store the session variables
    $_SESSION['correo'] = $row['correo'];
    
    // No es seguro almacenar contraseñas en sesiones, pero si necesitas hacerlo:
    $_SESSION['contrasena'] = $row['contrasena'];

    // Redirigir a la página de registro exitoso
    header("Location: Usuarioencontrado.php");
    exit();
} else {
    // Redirigir a la página de error si no se encuentra el usuario
    header("Location: EsteusuarioNoEncontrado.php");
    exit();
}
?>