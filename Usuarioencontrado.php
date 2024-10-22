<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
    <link rel="stylesheet" href="EXITOOO.css">
</head>
<body>
    <div class="container">
        <div class="success-icon">
            &#10004;
        </div>
        <h1>Cuenta encontrada</h1>
        <p>BIenvenido devuelta a Shoes Store</p>
        <button onclick="iniciarSesion()">Volver</button>
    </div>

    <script>
        function iniciarSesion() {
            // Redirigir a la página de inicio de sesión
            window.location.href = "zonaprincipal.php";
        }
    </script>
</body>
</html>
