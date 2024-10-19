document.addEventListener('DOMContentLoaded', () => {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const totalField = document.getElementById('total-with-shipping');
    const duiField = document.getElementById('dui');
    const phoneField = document.getElementById('phone');
    const countryCodeField = document.getElementById('country-code');
    const shippingField = document.getElementById('shipping');
    const submitPaymentBtn = document.getElementById('submit-payment');

    // Calcula el total, sumando $5 por el envío
    let total = cart.reduce((sum, item) => sum + (parseFloat(item.price.replace('$', '')) * item.quantity), 0);
    total += 5; // Añadimos el costo de envío
    totalField.innerText = `$${total.toFixed(2)}`;

    // Mostrar el carrito en la pantalla de pago
    function displayCart() {
        const cartSummary = document.getElementById('cart-summary');
        cart.forEach(item => {
            const productInfo = document.createElement('p');
            productInfo.innerText = `${item.quantity}x ${item.nombre_producto} (${item.color}, Talla ${item.size}) - $${item.price}`;
            cartSummary.appendChild(productInfo);
        });
    }

    displayCart();

    // Al hacer clic en pagar
    submitPaymentBtn.addEventListener('click', () => {
        const duiValue = duiField.value.trim();
        const phoneValue = phoneField.value.trim();
        const countryCode = countryCodeField.value.trim();
        const shippingOption = shippingField.value;

        // Validación de campos
        if (!duiValue || !phoneValue || !countryCode || !shippingOption) {
            alert('Por favor, completa todos los campos del formulario.');
            return;
        }

        // Validar DUI (debe tener 9 dígitos)
        if (duiValue.length !== 9 || isNaN(duiValue)) {
            alert('El DUI debe tener exactamente 9 dígitos numéricos.');
            return;
        }

        // Validar número de teléfono (mínimo 8 dígitos)
        if (phoneValue.length < 8 || isNaN(phoneValue)) {
            alert('El número de teléfono debe contener al menos 8 dígitos numéricos.');
            return;
        }

        // Combinar el código del país con el número de teléfono
        const fullPhoneNumber = `${countryCode}${phoneValue}`;

        // Enviar los datos al servidor mediante fetch
        fetch('payment.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                cart: cart,
                total: total,
                dui: duiValue,
                phone: fullPhoneNumber,
                shipping: shippingOption,
            }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('¡Compra realizada con éxito!');
                localStorage.removeItem('cart');
                window.location.href = 'success.html'; // Redirigir a una página de éxito
            } else {
                alert('Hubo un error al procesar tu compra: ' + data.error);
            }
        })
        .catch(error => {
            console.error('Error en el proceso de pago:', error);
            alert('Hubo un error al procesar tu compra.');
        });
    });
});
