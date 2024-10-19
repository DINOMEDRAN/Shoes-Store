<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Envío</title>
</head>
<body>
    <div class="confirmation-message">
        <h1>¡Formulario Guardado!</h1>
        <p>Su formulario ha sido guardado. Por favor, realice el pago para que podamos dejar sus pares en el local que usted eligió.</p>
        <button onclick="window.location.href='CARRITO.php';" class="return-btn">Volver al Menú Principal</button>
    </div>
    <style>
.confirmation-message {
    text-align: center;
    margin: 50px;
}

.confirmation-message h1 {
    color: #000000
}

.return-btn {
    background-color: #000000;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: 800;
}

.return-btn:hover {
    background-color: white;
    color: #000000
}

    </style>
</body>
</html>
