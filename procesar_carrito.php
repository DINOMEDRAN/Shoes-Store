<?php
// Conectar a la base de datos
$servername = "127.0.0.1";  // O localhost
$username = "root";         // Ajusta con tu usuario de MySQL
$password = "";             // Ajusta con tu contraseña de MySQL
$dbname = "shoes_store"; // El nombre de tu base de datos

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del carrito desde el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cart_data'])) {
    $cartData = json_decode($_POST['cart_data'], true);
    $paypalTransactionId = $_POST['paypal_transaction_id']; // Esto lo debes obtener después de la confirmación del pago

    // Guardar cada producto en la base de datos
    foreach ($cartData as $producto) {
        $imagen = $producto['imagen'];
        $nombreProducto = $producto['producto'];
        $color = $producto['color'];
        $talla = $producto['talla'];
        $cantidad = $producto['cantidad'];
        $precio = $producto['precio'];
        $total = $producto['total'];

        // Insertar en la base de datos
        $sql = "INSERT INTO carrito (imagen, producto, color, talla, cantidad, precio, total, paypal_transaction_id)
                VALUES ('$imagen', '$nombreProducto', '$color', '$talla', $cantidad, $precio, $total, '$paypalTransactionId')";

        if ($conn->query($sql) === TRUE) {
            echo "Tus pares de zapatos ya estan en camino ala paqueteria";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
