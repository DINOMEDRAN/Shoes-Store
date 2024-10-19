<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="INICIODESECION.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>login</title>
</head>

<body>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a Shoes Store</h2>
                <p>Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <form class="formulario" action="Registrodeusuario.php" method="POST">
            <h2 class="create-account">Crear una cuenta</h2>
            <input name="nombre" type="text" placeholder="Nombre" required>
            <input name="numero_de_telefono" type="tel" placeholder="Número de teléfono" required>
            <input name="correo" type="email" placeholder="Email" required>
            <input name="contrasena" type="password" placeholder="Contraseña" required>
            <button type="submit" class="btn">Registrarse</button>
        </form>
    </div>
    <div class="container-form sign-in">
        <form class="formulario" action="logindelusuario.php" method="POST">
            <h2 class="create-account">Iniciar Sesion</h2> 
            <input type="email" placeholder="Email" name="correo" required>
            <input type="password" placeholder="Contraseña" name="contrasena" required>
            <button type="submit" class="btn">Iniciar Sesión</button>
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>
    <script src="INICIODESECION.js"></script>
</body>

</html>