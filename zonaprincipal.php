<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOES STORE</title>
    <link rel="stylesheet" href="PRINCIPAL.css">
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
        <div class="imagen-con-texto">
            <img src="img/publicidad.jpg" alt="Descripción de la imagen">
            <div class="texto-centrado">
                <p>Volver a</p>
                <h2 class="salida">Salidas del dia</h2>
                <p>Ya sea que estes ocupado, relajado o simplemente haciendo</p>
                <p>lo tuyo estos ultimos zapatos de buena calidad y precio </p>
                <p>estan aqui para mantener tu estilo impecable.</p>
                <a href="salidass.php" class="boton">Shop</a>
            </div>
        </div>
    
        <div class="imagen-con-texto-2">
            <img src="img/otra publicidad xd.jpg" alt="Descripción de la imagen">
            <div class="texto-centrado-2">
                <p>que tenemos aqui?...</p>
                <h2 class="salida-2">Descuento del mes</h2>
                <p>Tenemos Descuento del mes</p>
                <p>Debes de aprovecharla es posible que aparezcan tus zapatos favoritos...</p>
                <a href="descuentos.php" class="boton-2">Shop</a>
            </div>
        </div>

        <div class="imagen-con-texto-2">
            <img src="img/publicidad50.jpg" alt="Descripción de la imagen">
            <div class="texto-centrado-2">
            <p>Ven y</p>
                <h2 class="salida-2">Mejora tus conjuntos</h2>
                <p>Busca tus zapatos ideales</p>
                <p>para que asi te veas mas atractivo...</p>
                <a href="descuentos.php" class="boton-2">Shop</a>
            </div>
        </div>

        <div class="imagen-con-texto">
            <img src="img/publicidad.56.jpg" alt="Descripción de la imagen">
            <div class="texto-centrado">
                <p class="orale">Enserio?</p>
                <h2 class="salida">Super promocion</h2>
                <p>Escoge 2 zapatos y te llevas 1 gratis</p>
                <p>Ven y Aprovechalo con todo</p>
                <a href="tdescuentos.php" class="boton">Shop</a>
            </div>
        </div>
</body>
<footer>
    <div class="form-container">
        <h1>REGÍSTRATE Y APROVECHA TU 15% OFF</h1>
        <form action="registrodescuento.php" method="POST" id="registroForm">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>
            <button type="submit">Registrarme</button>
        </form>
    </div>
</footer>


<script src="buscadorpapo.js"></script>
</html>
