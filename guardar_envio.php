<?php
// Conexión a la base de datos
include('conexion.php'); // Asegúrate de que la ruta sea correcta

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recibir la información de envío y productos
$data = json_decode(file_get_contents('php://input'), true);

$nombre = $data['shippingInfo']['name'];
$apellido = $data['shippingInfo']['apellido'];
$direccion = $data['shippingInfo']['address'];
$ciudad = $data['shippingInfo']['city'];
$codigo_postal = $data['shippingInfo']['postalCode'];
$total = $data['total'];

// Guardar información de envío
$sql_envio = "INSERT INTO envio (nombre, apellido, direccion, ciudad, codigo_postal) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql_envio);
$stmt->bind_param("sssss", $nombre, $apellido, $direccion, $ciudad, $codigo_postal);
$stmt->execute();
$cliente_id = $stmt->insert_id; // Obtener el ID del cliente guardado
$stmt->close();

// Guardar productos comprados (esto asume que tienes un array de productos)
foreach ($data['productos'] as $producto) {
    $sql_compra = "INSERT INTO compras (cliente_id, producto, cantidad, total) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql_compra);
    $stmt->bind_param("isid", $cliente_id, $producto['nombre'], $producto['cantidad'], $total);
    $stmt->execute();
    $stmt->close();
}

$conn->close();
echo json_encode(["status" => "success"]);
?>
