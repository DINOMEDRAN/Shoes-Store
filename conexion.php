<?php
// Datos de la conexión
$servidor = "127.0.0.1";
$usuario = "root";  // Cambiar si tu usuario es diferente
$contrasena = "";    // Cambiar si tienes una contraseña establecida
$base_datos = "shoes_store";

// Crear la conexión
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}


?>
