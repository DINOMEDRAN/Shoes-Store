<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
    <link rel="stylesheet" href="resgistroexitoso.css">
</head>
<body>
    <div class="container">
        <div class="success-icon">
            &#10004;
        </div>
        <h1>Registro Exitoso</h1>
        <p>Tu cuenta ha sido creada exitosamente.</p>
        <button onclick="iniciarSesion()">Iniciar Sesión</button>
    </div>

    <script>
        function iniciarSesion() {
            // Redirigir a la página de inicio de sesión
            window.location.href = "zonaprincipal.php";
        }
    </script>
</body>
</html>
