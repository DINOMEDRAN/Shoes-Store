<?php
// Conexión a la base de datos
$servername = "127.0.0.1";
$username = "root"; // Cambia esto por tu usuario de la base de datos
$password = ""; // Cambia esto por tu contraseña de la base de datos
$dbname = "login_register_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Asegúrate de que los nombres de los campos coincidan
    if (isset($_POST['nombre_completo']) && isset($_POST['correo_electronico']) && isset($_POST['usuario']) && isset($_POST['contrasena'])) {
        $nombre = $_POST['nombre_completo'];
        $correo = $_POST['correo_electronico'];
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        // Cambia 'correo' por 'correo_electronico'
        $sql = "SELECT * FROM usuarios WHERE correo_electronico='$correo'"; 
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "El correo ya está registrado.";
        } else {
            // Si el correo no existe, registrar nuevo usuario
            $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

            $sql = "INSERT INTO usuarios (nombre_completo, correo_electronico, usuario, contrasena) VALUES ('$nombre', '$correo', '$usuario', '$contrasena_hash')";

            if ($conn->query($sql) === TRUE) {
                echo "Registro exitoso. Ahora puedes iniciar sesión.";
                echo '<a href="inicio_sesion.html">Iniciar Sesión</a>';
            } else {
                echo "Error en el registro: " . $conn->error;
            }
        }
    } else {
        echo "Por favor, rellena todos los campos.";
    }
}

$conn->close();
?>

