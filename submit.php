<?php
$servername = "127.0.0.1";
$username = "root"; // Cambia esto a tu nombre de usuario de MySQL
$password = ""; // Cambia esto a tu contraseña de MySQL
$dbname = "shoes_store"; // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die(json_encode(['status' => 'error', 'message' => 'Conexión fallida: ' . $conn->connect_error]));
}

// Recibir datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$issue = $_POST['issue'];

// Preparar la consulta SQL
$sql = "INSERT INTO contacto (nombre, email, problema) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $issue);

// Ejecutar la consulta y verificar si fue exitosa
if ($stmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => 'Gracias por contar tu problema. Shoes Store intentará solucionar el problema.']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Error al enviar el mensaje: ' . $stmt->error]);
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
