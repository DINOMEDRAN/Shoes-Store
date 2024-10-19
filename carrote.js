/*funcion para los botones*/
const cartTableBody = document.querySelector('#cart-table tbody');
const cartTotal = document.getElementById('cart-total');
const emptyCartBtn = document.getElementById('empty-cart');
const checkoutBtn = document.getElementById('checkout');

let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Función para renderizar el carrito
function renderCart() {
    cartTableBody.innerHTML = '';
    let total = 0;

    cart.forEach((item, index) => {
        const row = document.createElement('tr');

        // Imagen del producto
        const imgCell = document.createElement('td');
        const img = document.createElement('img');
        img.src = item.image || 'placeholder.jpg'; // Placeholder si no hay imagen
        img.alt = item.nombre_producto || 'Producto';
        img.width = 50;
        imgCell.appendChild(img);
        row.appendChild(imgCell);

        // Nombre del producto
        const nameCell = document.createElement('td');
        nameCell.innerText = item.nombre_producto || 'Producto no disponible';
        row.appendChild(nameCell);

        // Color
        const colorCell = document.createElement('td');
        colorCell.innerText = item.color || 'Sin especificar';
        row.appendChild(colorCell);

        // Talla
        const sizeCell = document.createElement('td');
        sizeCell.innerText = item.size || 'Sin especificar';
        row.appendChild(sizeCell);

        // Cantidad
        const quantityCell = document.createElement('td');
        quantityCell.innerText = item.quantity || 0;
        row.appendChild(quantityCell);

        // Precio
        const priceCell = document.createElement('td');
        priceCell.innerText = item.price || '$0.00';
        row.appendChild(priceCell);

        // Total por producto
        const totalCell = document.createElement('td');
        const productTotal = parseFloat(item.price.replace('$', '')) * (item.quantity || 1);
        totalCell.innerText = `$${productTotal.toFixed(2)}`;
        row.appendChild(totalCell);

        // Acciones
        const actionsCell = document.createElement('td');
        const deleteBtn = document.createElement('button');
        deleteBtn.classList.add('btn', 'btn-danger');
        deleteBtn.innerHTML = '<i class="fa fa-trash"></i>';
        deleteBtn.addEventListener('click', () => removeItem(index));
        actionsCell.appendChild(deleteBtn);
        row.appendChild(actionsCell);

        cartTableBody.appendChild(row);

        total += productTotal;
    });

    cartTotal.innerText = total.toFixed(2);
    renderPayPalButton(total); // Renderizar el botón de PayPal
}

// Función para eliminar un producto del carrito
function removeItem(index) {
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    renderCart();
}

// Event listener para vaciar el carrito
emptyCartBtn.addEventListener('click', () => {
    if (confirm('¿Estás seguro de que deseas vaciar el carrito?')) {
        cart = [];
        localStorage.setItem('cart', JSON.stringify(cart));
        renderCart();
    }
});

// Función para renderizar el botón de PayPal
function renderPayPalButton(total) {
    // Elimina cualquier botón de PayPal anterior
    document.getElementById('paypal-button-container').innerHTML = '';

    // Crea un nuevo botón de PayPal
    paypal.Buttons({
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: total.toFixed(2) // Total del carrito
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                alert('¡Compra realizada con éxito! ' + details.payer.name.given);
                localStorage.removeItem('cart');
                renderCart();
            });
        },
        onError: function(err) {
            console.error('Error en la transacción', err);
            alert('Hubo un error al procesar tu compra.');
        }
    }).render('#paypal-button-container'); // Renderiza el botón
}

// Renderizar el carrito al cargar la página
document.addEventListener('DOMContentLoaded', renderCart);


// Función para ocultar el botón de checkout
function hideCheckoutButton() {
    const checkoutButton = document.getElementById('checkout');
    if (checkoutButton) {
        checkoutButton.style.display = 'none'; // Ocultar el botón
    }
}

// Llama a esta función cuando sea necesario, por ejemplo al cargar la página
document.addEventListener('DOMContentLoaded', () => {
    hideCheckoutButton();
});

// Función para ocultar el botón de pago
function hideCheckoutButton() {
    const checkoutButton = document.getElementById('checkout');
    if (checkoutButton) {
        checkoutButton.style.display = 'none'; // Oculta el botón
    }
}

// Llama a esta función al cargar la página
document.addEventListener('DOMContentLoaded', () => {
    hideCheckoutButton();
});
