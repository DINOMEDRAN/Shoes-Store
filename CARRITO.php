<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de Compra</title>
    <link rel="stylesheet" href="ELCARRITOO.css">
</head>
<body>
    <main class="main-container">
        <!-- Formulario de Envío -->
<div class="shipping-container">
    <h2>Dirección de Envío</h2>
    <form id="shipping-form" action="envios.php" method="POST">
        <div class="form-group">
            <label for="first-name">Nombre:</label>
            <input type="text" id="first-name" required name="nombres" placeholder="Ingresa tu Nombre">
        </div>
        <div class="form-group">
            <label for="last-name">Apellido:</label>
            <input type="text" id="last-name" required name="apellidos" placeholder="Ingresa tu Apellido">
        </div>
        <div class="form-group">
            <label for="postal-code">Código Postal:</label>
            <input type="text" id="postal-code" required name="codigo" placeholder="Ingresa tu Código Postal">
        </div>
        <div class="form-group">
            <label for="city">Localidad:</label>
            <select id="city" name="localidad" required>
                <option value="San Salvador">San Salvador</option>
                <option value="La Libertad">La Libertad</option>
                <option value="San Elena">San Elena</option>
                <option value="Santa Ana">Santa Ana</option>
            </select>
        </div>
        <div class="form-group">
            <label for="shipping-company">Paquetería:</label>
            <select id="shipping-company" name="paqueteria" required>
                <option value="María">María</option>
                <option value="Dino">Dino</option>
                <option value="Shopping">Shopping</option>
            </select>
        </div>
        <button type="submit" class="submit-btn">Enviar</button>
    </form>
</div>



        <!-- Carrito -->
        <div class="cart-container">
            <h2>Tu Carrito</h2>
            <table id="cart-table">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Producto</th>
                        <th>Color</th>
                        <th>Talla</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Los productos se insertarán aquí dinámicamente -->
                </tbody>
            </table>
            <div class="cart-summary">
                <h3>Total: $<span id="cart-total">0.00</span></h3>
                <div class="action-buttons">
                    <button id="empty-cart" class="btn btn-danger">Vaciar Carrito</button>
                    <button id="checkout" class=""></button>
                </div>
                <!-- Contenedor para el botón de PayPal -->
                <div id="paypal-button-container"></div>
        <p id="result-message"></p>

        
        <!-- Initialize the JS-SDK -->
        <script src="https://www.paypal.com/sdk/js?client-id=ASBPd-0hB6wfPEhBT53CufgAUB2X3_2pUPFlexmdFk5nvgn94dcWtI9e0FD_ARRnp3PS_MCKG323voZd&currency=USD"></script>

            </div>
        </div>
    </main>
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

    <!-- Script de PayPal -->
    <script src="https://www.paypal.com/sdk/js?client-id=YOUR_CLIENT_ID"></script> <!-- Reemplaza YOUR_CLIENT_ID con tu ID de cliente de PayPal -->

    <script src="carrote.js"></script>
    <script>
window.paypal
    .Buttons({
        style: {
            shape: "pill",
            layout: "vertical",
            color: "black",
            label: "paypal",
        },
        message: {
            amount: 100,
        } ,

        async createOrder() {
            try {
                const response = await fetch("/api/orders", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    // use the "body" param to optionally pass additional order information
                    // like product ids and quantities
                    body: JSON.stringify({
                        cart: [
                            {
                                id: "YOUR_PRODUCT_ID",
                                quantity: "YOUR_PRODUCT_QUANTITY",
                            },
                        ],
                    }),
                });

                const orderData = await response.json();

                if (orderData.id) {
                    return orderData.id;
                }
                const errorDetail = orderData?.details?.[0];
                const errorMessage = errorDetail
                    ? `${errorDetail.issue} ${errorDetail.description} (${orderData.debug_id})`
                    : JSON.stringify(orderData);

                throw new Error(errorMessage);
            } catch (error) {
                console.error(error);
                // resultMessage(`Could not initiate PayPal Checkout...<br><br>${error}`);
            }
        } ,

        async onApprove(data, actions) {
            try {
                const response = await fetch(
                    `/api/orders/${data.orderID}/capture`,
                    {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                        },
                    }
                );

                const orderData = await response.json();
                // Three cases to handle:
                //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
                //   (2) Other non-recoverable errors -> Show a failure message
                //   (3) Successful transaction -> Show confirmation or thank you message

                const errorDetail = orderData?.details?.[0];

                if (errorDetail?.issue === "INSTRUMENT_DECLINED") {
                    // (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
                    // recoverable state, per
                    // https://developer.paypal.com/docs/checkout/standard/customize/handle-funding-failures/
                    return actions.restart();
                } else if (errorDetail) {
                    // (2) Other non-recoverable errors -> Show a failure message
                    throw new Error(
                        `${errorDetail.description} (${orderData.debug_id})`
                    );
                } else if (!orderData.purchase_units) {
                    throw new Error(JSON.stringify(orderData));
                } else {
                    // (3) Successful transaction -> Show confirmation or thank you message
                    // Or go to another URL:  actions.redirect('thank_you.html');
                    const transaction =
                        orderData?.purchase_units?.[0]?.payments
                            ?.captures?.[0] ||
                        orderData?.purchase_units?.[0]?.payments
                            ?.authorizations?.[0];
                    resultMessage(
                        `Transaction ${transaction.status}: ${transaction.id}<br>
          <br>See console for all available details`
                    );
                    console.log(
                        "Capture result",
                        orderData,
                        JSON.stringify(orderData, null, 2)
                    );
                }
            } catch (error) {
                console.error(error);
                resultMessage(
                    `Sorry, your transaction could not be processed...<br><br>${error}`
                );
            }
        } ,
    })
    .render("#paypal-button-container"); 

    </script>
</body>
</html>
