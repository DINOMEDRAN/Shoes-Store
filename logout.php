<?php
session_start();
session_destroy(); // Destruir la sesión
header("Location: INICIODESECION.php"); // Redirigir al inicio de sesión
exit();
?>
