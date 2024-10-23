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

try {
    // Preparar la consulta SQL
    $sql = "INSERT INTO descuento (nombre, apellido, email, fecha_nacimiento) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    if (!$stmt) {
        throw new Exception("Error en la preparación: " . $conn->error);
    }

    // Enlazar los parámetros
    $stmt->bind_param("ssss", $nombre, $apellido, $email, $fecha_nacimiento);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Redirigir a 'registroexitoso.php' si el registro fue exitoso
        header("Location: registroexitoso.php");
        exit();
    }

} catch (mysqli_sql_exception $e) {
    // Manejar error de entrada duplicada
    if ($e->getCode() == 1062) { // Código de error para 'Duplicate entry'
        // Redirigir a 'emailduplicado.php' si el correo ya existe
        header("Location: yaestaregistrado.php ");
        exit();
    } else {
        // Si hay otro tipo de error, mostrarlo
        die("Error en la consulta: " . $e->getMessage());
    }
} finally {
    // Cerrar la conexión
    if (isset($stmt)) {
        $stmt->close();
    }
    $conn->close();
}
?>


