<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error en el Registro</title>
    <link rel="stylesheet" href="EXITOOO.css">
</head>
<body>
    <div class="container">
        <div class="error-icon" style="color: red; font-size: 50px;">
            &#10006; <!-- Este es el símbolo de la "X" -->
        </div>
        <h1>Este usuario no esta registrado</h1>
        <p>Por favor registrese para que ala proxima si encontremos tu cuenta.</p>
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