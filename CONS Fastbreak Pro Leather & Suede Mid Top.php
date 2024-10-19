<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Pagina Producto</title>
		<link rel="stylesheet" href="ZAPATOOOS.css" />
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

            <div class="cart-button-container">
                <a href="CARRITO.php" class="cart-button">Carrito</a>
            </div>
    
                
            <div class="sign-in-container">
                <a href="INICIODESECION.php" class="sign-in"><i class="bi bi-person"></i>Registro</a>
            </div>
            
        </nav>
    </header>

		<div class="container-title">Zapatos</div>

		<main>
            <div class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="img/skatebording/CONS Fastbreak Pro Leather & Suede Mid Top/2.jpg" alt="imagen-producto" />
                    </div>
                    <div class="carousel-item">
                        <img src="img/skatebording/CONS Fastbreak Pro Leather & Suede Mid Top/3.jpg" alt="imagen-producto" />
                    </div>
                    <div class="carousel-item">
                        <img src="img/skatebording/CONS Fastbreak Pro Leather & Suede Mid Top/4.jpg" alt="imagen-producto" />
                    </div>
                    <div class="carousel-item">
                        <img src="img/skatebording/CONS Fastbreak Pro Leather & Suede Mid Top/5.jpg" alt="imagen-producto" />
                    </div>
                    <div class="carousel-item">
                        <img src="img/skatebording/CONS Fastbreak Pro Leather & Suede Mid Top/6.jpg" alt="imagen-producto" />
                    </div>
                </div>
                <!-- Controles del carrusel -->
                <button class="carousel-control prev" onclick="moveSlide(-1)">&#10094;</button>
                <button class="carousel-control next" onclick="moveSlide(1)">&#10095;</button>
            </div>
            
			<div class="container-info-product">
				<div>
					<h3 class="product-title">CONS AS-1 Pro Low Top</h3> <!-- Título del producto -->
				</div>
				<div class="container-price">
					<span id="product-price">$75.00</span>
			</div>
		
      <!-- Contenedor de las miniaturas de los colores -->
      <div class="container-details-product">
        <div class="form-group">
          <label for="colour">Color</label>
          <div class="color-options">
            <img src="img/skatebording/CONS Fastbreak Pro Leather & Suede Mid Top/1.jpg" alt="Stock" class="color-thumbnail" data-color="Stock" />
          </div>
        </div>
					<div class="form-group">
						<label for="size">Talla</label>
						<select name="size" id="size">
							<option disabled selected value="">Escoge una opción</option>
							<option value="40">40</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
						</select>
					</div>
				</div>
		
				<div class="container-add-cart">
					<div class="container-quantity">
						<input type="number" placeholder="1" value="1" min="1" id="quantity" class="input-quantity" />
						<div class="btn-increment-decrement">
							<i class="fa-solid fa-chevron-up" id="increment"></i>
							<i class="fa-solid fa-chevron-down" id="decrement"></i>
						</div>
					</div>
					<button class="btn-add-to-cart" onclick="addToCart()">
						<i class="fa-solid fa-plus"></i> Añadir al carrito
					</button>
					<button class="btn-clean" onclick="clearSelection()">Limpiar</button>
				</div>
		
				<div class="container-description">
					<div class="title-description">
						<h4>Descripción</h4>
						<i class="fa-solid fa-chevron-down"></i>
					</div>
					<div class="text-description">
						<p>
							Lorem ipsum dolor, sit amet consectetur adipisicing elit.
							Laboriosam iure provident atque voluptatibus reiciendis quae
							rerum, maxime placeat enim cupiditate voluptatum, temporibus
							quis iusto. Enim eum qui delectus deleniti similique?
						</p>
					</div>
				</div>
		
				<div class="container-additional-information">
					<div class="title-additional-information">
						<h4>Información adicional</h4>
						<i class="fa-solid fa-chevron-down"></i>
					</div>
					<div class="text-additional-information hidden">
						<p>-----------</p>
					</div>
				</div>
		
				<div class="container-reviews">
					<div class="title-reviews">
						<h4>Reseñas</h4>
						<i class="fa-solid fa-chevron-down"></i>
					</div>
					<div class="text-reviews hidden">
						<p>-----------</p>
					</div>
				</div>
		
				<div class="container-social">
					<span>Compartir</span>
					<div class="container-buttons-social">
						<a href="#"><i class="fa-solid fa-envelope"></i></a>
						<a href="#"><i class="fa-brands fa-facebook"></i></a>
						<a href="#"><i class="fa-brands fa-twitter"></i></a>
						<a href="#"><i class="fa-brands fa-instagram"></i></a>
						<a href="#"><i class="fa-brands fa-pinterest"></i></a>
					</div>
				</div>
			</div>
		</main>
		

		<section class="container-related-products">
			<h2>Productos Relacionados</h2>
			<div class="card-list-products">
				<div class="card">
					<div class="card-img">
						<img
							src="img/convers/conversblanco.1.jpg"
							alt="producto-1"
						/>
					</div>
					<div class="info-card">
						<div class="text-product">
							<h3>Nike - Roshe Run</h3>
							<p class="category">Footwear, Sneakers</p>
						</div>
						<div class="price">$85.00</div>
					</div>
				</div>
				<div class="card">
					<div class="card-img">
						<img
							src="img/convers/convers.5.jpg"
							alt="producto-2"
						/>
					</div>
					<div class="info-card">
						<div class="text-product">
							<h3>Common Projects Achilles</h3>
							<p class="category">Footwear, Sneakers</p>
						</div>
						<div class="price">$255.00</div>
					</div>
				</div>
				<div class="card">
					<div class="card-img">
						<img
							src="img/convers/conversblanco3.jpg"
							alt="producto-3"
						/>
					</div>
					<div class="info-card">
						<div class="text-product">
							<h3>Adidas - Boston Super OG</h3>
							<p class="category">Footwear, Sneakers</p>
						</div>
						<div class="price">$105.00</div>
					</div>
				</div>
				<div class="card">
					<div class="card-img">
						<img
							src="img/convers/convers.2.jpg"
							alt="producto-4"
						/>
					</div>
					<div class="info-card">
						<div class="text-product">
							<h3>Common Projects Achilles</h3>
							<p class="category">Footwear, Sneakers</p>
						</div>
						<div class="price">$250.00</div>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<p>Footer</p>
		</footer>

		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
		<script src="CONS Fastbreak Pro Leather & Suede Mid Top.js">
		</script>
	</body>
</html>