<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converse Menu</title>
    <link rel="stylesheet" href="CATALOGODEPRODUCTO.css">
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

        <!-- Barra de ordenamiento desplegable -->
    <!-- Barra de ordenación -->

    <main>
        <section class="catalog-header">
          <h1>Men's Low Tops</h1>
          <p>Explore a selection of classic and comfortable men's low-top sneakers, available in a variety of styles and colors.</p>
        </section>
    
        <section class="catalog">
          <a href="CONS AS-1 Pro Low Top.php" class="product">
            <img src="img/skatebording/CONS AS-1 Pro Low Top/1.jpg" alt="Shoe 1">
            <p class="product-name">CONS AS-1 Pro Low Top</p>
            <p class="product-price">CA$75.00</p>
          </a>
          <a href="CONS AS-1 Pro Suede & Canvas Low Top.php" class="product">
            <img src="img/skatebording/CONS AS-1 Pro Suede & Canvas Low Top/1.jpg" alt="Shoe 2">
            <p class="product-name">CONS Fastbreak Pro Leather & Nylon Mid Top</p>
            <p class="product-price">CA$95.00</p>
          </a>
          <a href="CONS Fastbreak Pro Leather & Nylon Mid Top.php" class="product">
            <img src="img/skatebording/CONS Fastbreak Pro Leather & Nylon Mid Top/1.jpg" alt="Shoe 3">
            <p class="product-name">Converse Weapon Leather Low Top</p>
            <p class="product-price">CA$125.00</p>
          </a>
          <a href="CONS Fastbreak Pro Leather & Suede Mid Top.php" class="product">
            <img src="img/skatebording/CONS Fastbreak Pro Leather & Suede Mid Top/1.jpg" alt="Shoe 4">
            <p class="product-name">CONS Fastbreak Pro Leather & Suede Mid Top</p>
            <p class="product-price">CA$100.00</p>
          </a>

          <a href="CONS Fastbreak Pro Suede Nylon Mid Top.php" class="product">
            <img src="img/skatebording/CONS Fastbreak Pro Suede & Canvas Mid Top/1.jpg" alt="Shoe 1">
            <p class="product-name">CONS Fastbreak Pro Suede Nylon Mid Top</p>
            <p class="product-price">CA$75.00</p>
          </a>
          <a href="CONS Fastbreak Pro Suede & Canvas Mid Top.php" class="product">
            <img src="img/skatebording/CONS Fastbreak Pro Suede Nylon Mid Top/1.jpg" alt="Shoe 2">
            <p class="product-name">CONS Fastbreak Pro Suede & Canvas Mid Top</p>
            <p class="product-price">CA$65.00</p>
          </a>
          <a href="Converse x Awake NY One Star Pro Low Top.php" class="product">
            <img src="img/skatebording/Converse x Awake NY One Star Pro Low Top/1.jpg" alt="Shoe 3">
            <p class="product-name">Converse x Awake NY One Star Pro Low Top</p>
            <p class="product-price">CA$180.00</p>
          </a>
          <a href="Louie Lopez Pro Low Top.php" class="product">
            <img src="img/skatebording/Louie Lopez Pro Low Top/1.jpg" alt="Shoe 4">
            <p class="product-name">Louie Lopez Pro Low Top</p>
            <p class="product-price">CA$85.00</p>
          </a>
          <!-- Agrega más productos aquí si es necesario -->
        </section>
      </main>

<script src="CATALOGODEPRODUCTO.js"></script>
</html>