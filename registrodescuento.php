<?php
$servername = "127.0.0.1";
$username = "root"; // Cambia esto a tu nombre de usuario de MySQL
$password = ""; // Cambia esto a tu contraseña de MySQL
$dbname = "shoes_store"; // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];

// Preparar la consulta SQL
$sql = "INSERT INTO descuento (nombre, apellido, email, fecha_nacimiento) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nombre, $apellido, $email, $fecha_nacimiento);

// Ejecutar la consulta
if ($ejecutar) {
    // Redirigir a la página de registro exitoso
    header("Location: registroexitoso.php");
    exit();
} else {
    // Mostrar un mensaje de error en caso de fallo
    echo 'Error al registrar el usuario.';
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>





