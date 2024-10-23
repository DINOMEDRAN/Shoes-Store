<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$numero_de_telefono = $_POST['numero_de_telefono'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Verificar si el correo ya está registrado
$verificar_correo = "SELECT * FROM usuarios WHERE correo = '$correo'";
$resultado = mysqli_query($conexion, $verificar_correo);

if (mysqli_num_rows($resultado) > 0) {
    // Si el correo ya existe, mostrar mensaje de error
    header("Location: yaestaregistrado.php");
    exit();
} else {
    // Si el correo no existe, proceder con el registro
    $query = "INSERT INTO usuarios(nombre, numero_de_telefono, correo, contrasena) 
              VALUES('$nombre','$numero_de_telefono','$correo','$contrasena')";

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        // Redirigir a la página de registro exitoso
        header("Location: registroexitoso.php");
        exit();
    } else {
        // Mostrar un mensaje de error en caso de fallo
        echo 'Error al registrar el usuario.';
    }
}

?>
