<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoper</title>
    <link rel="stylesheet" href="CONTACTOS.css">
</head>
<body>
<header>
        <nav class="main-nav">
        <div class="logo">
        <a href="zonaprincipal.php"> <!-- Cambia 'index.html' por la ruta de tu página de inicio -->
            <img src="img/LISTO.png" alt="Logo Shoes Store" />
        </a>
    </div>
            <ul class="nav-links">
                <li class="dropdown">
                    <a href="men.php" class="dropbtn">Men</a>
                    <div class="dropdown-content">
                        <div class="dropdown-section">
                            <h3>Deporte</h3>
                            <a href="Basketball.php">Basketball</a>
                            <a href="skatebording.php">Skateboarding</a>
                        </div>
                        <div class="dropdown-section">
                            <h3>Casuales</h3>
                            <a href="#">All Shoes</a>
                            <a href="#">Low Top</a>
                        </div>
                        <div class="dropdown-section">
                            <h3>Tendencia</h3>
                            <a href="#">All stars</a>
                            <a href="#">DC</a>
                            <a href="#">Vans</a>
                            <a href="#">Convers</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="women.php" class="dropbtn">Mujer</a>
                    <div class="dropdown-content">
                        <div class="dropdown-section">
                            <h3>Deporte</h3>
                            <a href="Basketball.html">Basketball</a>
                            <a href="#">Skateboarding</a>
                            <a href="#">Tenis</a>
                            <a href="#">Caminar</a>
                            <a href="#">montaña</a>
                        </div>
                        <div class="dropdown-section">
                            <h3>Casual</h3>
                            <a href="#">All Shoes</a>
                            <a href="#">Low Top</a>
                        </div>
                        <div class="dropdown-section">
                            <h3>Tendencia</h3>
                            <a href="#">All stars</a>
                            <a href="#">DC</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="launch.php" class="dropbtn">Lanzamiento</a>
                    <div class="dropdown-content">
                    <div class="dropdown-section">
                            <h3>DC</h3>
                            <a href="#">New Arrivals</a>
                            <a href="#">Bestsellers</a>
                            <a href="#">Winter Boots</a>
                            <a href="#">Slips & Sandals</a>
                        </div>
                        <div class="dropdown-section">
                            <h3>Vans</h3>
                            <a href="#">All Clothing</a>
                            <a href="#">Tops & T-Shirts</a>
                        </div>
                        <div class="dropdown-section">
                            <h3>Convers</h3>
                            <a href="#">All Accessories</a>
                        </div>
                        <div class="dropdown-section">
                            <h3>Adidas</h3>
                            <a href="#">New Arrivals</a>
                            <a href="#">Bestsellers</a>
                        </div>
                </li>
                <li class="dropdown">
                    <a href="CONTACTO.php" class="dropbtn">contacto</a>
                </li>               
            </ul>

            <div class="search-container">
                <input type="text" id="search" class="search-input" placeholder="Buscar..." oninput="filterProducts()">
                <div id="search-results" class="results"></div>
            </div>
                    

            <div class="cart-button-container">
                <a href="CARRITO.php" class="cart-button">Carrito</a>
            </div>
    
                
            <div class="sign-in-container">
                <a href="INICIODESECION.php" class="sign-in"><i class="bi bi-person"></i>Registro</a>
            </div>
            
        </nav>
    </header>

    <div class="container">
    <!-- Lado izquierdo: Formulario de contacto -->
    <div class="left-side">
        <h2>Contáctenos</h2>
        <form id="contactForm">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Correo Electronico:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="issue">Problema:</label>
                <textarea id="issue" name="issue" rows="5" required></textarea>
            </div>

            <button type="submit" class="Enviar">Enviar</button>
        </form>
        <div id="responseMessage" style="margin-top: 20px;"></div>
    </div>

    <!-- Lado derecho: Texto de introducción -->
    <div class="right-side">
        <h2>Mándanos un mensaje</h2>
        <p>En <strong>Shoes Store</strong> nos enfocamos en la comodidad y experiencia de nuestros clientes. Si experimentas algún problema con la página, no dudes en contactarnos. ¡Estamos aquí para ayudarte y mejorar tu experiencia!</p>
    </div>
    
</div>

<script>
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita que el formulario se envíe de forma tradicional

    // Obtener los datos del formulario
    const formData = new FormData(this);
    
    // Enviar los datos a submit.php
    fetch('submit.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        const messageDiv = document.getElementById('responseMessage');
        messageDiv.innerText = data.message; // Muestra el mensaje de respuesta
        messageDiv.style.color = data.status === 'success' ? 'green' : 'red'; // Cambia el color según el estado
        this.reset(); // Limpia el formulario
    })
    .catch(error => {
        console.error('Error:', error);
    });
});


</script>

</script>
</body>
</html>
