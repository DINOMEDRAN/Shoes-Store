<?php
// Definir las variables de conexión
$servername = "127.0.0.1";  // O localhost
$username = "root";         // Ajusta con tu usuario de MySQL
$password = "";             // Ajusta con tu contraseña de MySQL
$dbname = "shoes_store"; // El nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = $conn->real_escape_string($_POST['nombres']);
    $apellidos = $conn->real_escape_string($_POST['apellidos']);
    $codigo = $conn->real_escape_string($_POST['codigo']);
    $localidad = $conn->real_escape_string($_POST['localidad']);
    $paqueteria = $conn->real_escape_string($_POST['paqueteria']);

    // Insertar los datos en la tabla 'envios'
    $sql = "INSERT INTO envios (nombres, apellidos, codigo, localidad, paqueteria)
            VALUES ('$nombres', '$apellidos', '$codigo', '$localidad', '$paqueteria')";

// Después de insertar los datos
if ($conn->query($sql) === TRUE) {
    // Redirigir a confirmacion.html
    header("Location: envioconfirmado.php");
    exit; // Asegúrate de salir después de la redirección
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

// Cerrar la conexión
$conn->close();
?>

