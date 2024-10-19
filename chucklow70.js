const inputQuantity = document.querySelector('.input-quantity');
const btnIncrement = document.querySelector('#increment');
const btnDecrement = document.querySelector('#decrement');
const thumbnails = document.querySelectorAll('.color-thumbnail');
let selectedColor = ""; // Para almacenar el color seleccionado
let selectedImage = ""; // Para almacenar la imagen seleccionada

let valueByDefault = parseInt(inputQuantity.value);

// Funciones Click

btnIncrement.addEventListener('click', () => {
	valueByDefault += 1;
	inputQuantity.value = valueByDefault;
});

btnDecrement.addEventListener('click', () => {
	if (valueByDefault === 1) {
		return;
	}
	valueByDefault -= 1;
	inputQuantity.value = valueByDefault;
});

// Toggle
// Constantes Toggle Titles
const toggleDescription = document.querySelector(
	'.title-description'
);
const toggleAdditionalInformation = document.querySelector(
	'.title-additional-information'
);
const toggleReviews = document.querySelector('.title-reviews');

// Constantes Contenido Texto
const contentDescription = document.querySelector(
	'.text-description'
);
const contentAdditionalInformation = document.querySelector(
	'.text-additional-information'
);
const contentReviews = document.querySelector('.text-reviews');

// Funciones Toggle
toggleDescription.addEventListener('click', () => {
	contentDescription.classList.toggle('hidden');
});

toggleAdditionalInformation.addEventListener('click', () => {
	contentAdditionalInformation.classList.toggle('hidden');
});

toggleReviews.addEventListener('click', () => {
	contentReviews.classList.toggle('hidden');
});


// Incrementar y decrementar cantidad
btnIncrement.addEventListener('click', () => {
    valueByDefault += 1;
    inputQuantity.value = valueByDefault;
});

btnDecrement.addEventListener('click', () => {
    if (valueByDefault === 1) {
        return;
    }
    valueByDefault -= 1;
    inputQuantity.value = valueByDefault;
});

// Función para añadir al carrito

function addToCart() {
    const productTitle = document.querySelector('.product-title').innerText; // Nombre del producto
    const productPrice = document.querySelector('#product-price').innerText; // Precio
    const productSize = document.querySelector('#size').value; // Talla
    const productQuantity = document.getElementById('quantity').value; // Cantidad seleccionada

    // Validar que se hayan seleccionado el color y la talla
    if (!selectedColor || !productSize) {
        alert('Por favor selecciona un color y una talla');
        return;
    }

    // Crear un objeto con los detalles del producto
    const product = {
        nombre_producto: productTitle, // Asigna el nombre del producto
        price: productPrice,
        color: selectedColor,
        size: productSize,
        quantity: productQuantity,
        image: selectedImage || 'default-image.jpg' // Asegurarse de que haya una imagen por defecto
    };

    // Obtener el carrito actual del localStorage o crear uno nuevo
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Agregar el nuevo producto al carrito
    cart.push(product);

    // Guardar el carrito actualizado en el localStorage
    localStorage.setItem('cart', JSON.stringify(cart));

    alert('Producto añadido al carrito');
}



// Función para limpiar las selecciones
function clearSelection() {
    document.querySelector('#size').selectedIndex = 0;
    inputQuantity.value = 1;
    selectedColor = "";
    selectedImage = "";
    thumbnails.forEach(thumbnail => thumbnail.classList.remove('selected')); // Quitar selección de miniaturas
}

// Cambiar las imágenes del carrusel según el color seleccionado
thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('click', function () {
        thumbnails.forEach(thumb => thumb.classList.remove('selected')); // Quitar selección previa
        this.classList.add('selected'); // Agregar clase 'selected' a la imagen elegida

        const colorImages = {
            'negro': ['img/Chuck Taylor All Star Low Top/negro/1.jpg', 'img/Chuck Taylor All Star Low Top/negro/2.jpg', 'img/Chuck Taylor All Star Low Top/negro/3.jpg', 'img/Chuck Taylor All Star Low Top/negro/4.jpg', 'img/Chuck Taylor All Star Low Top/negro/5.jpg', 'img/Chuck Taylor All Star Low Top/negro/6.jpg', 'img/Chuck Taylor All Star Low Top/negro/7.jpg'],
            'blanco oscuro': ['img/Chuck Taylor All Star Low Top/blanco oscuro/1.jpg', 'img/Chuck Taylor All Star Low Top/blanco oscuro/2.jpg', 'img/Chuck Taylor All Star Low Top/blanco oscuro/3.jpg', 'img/Chuck Taylor All Star Low Top/blanco oscuro/4.jpg', 'img/Chuck Taylor All Star Low Top/blanco oscuro/5.jpg', 'img/Chuck Taylor All Star Low Top/blanco oscuro/6.jpg', 'img/Chuck Taylor All Star Low Top/blanco oscuro/7.jpg'],
            'negro negro': ['img/Chuck Taylor All Star Low Top/negro negro/1.jpg', 'img/Chuck Taylor All Star Low Top/negro negro/2.jpg', 'img/Chuck Taylor All Star Low Top/negro negro/3.jpg', 'img/Chuck Taylor All Star Low Top/negro negro/4.jpg', 'img/Chuck Taylor All Star Low Top/negro negro/5.jpg', 'img/Chuck Taylor All Star Low Top/negro negro/6.jpg', 'img/Chuck Taylor All Star Low Top/negro negro/7.jpg'],
            'rojo': ['img/Chuck Taylor All Star Low Top/rojo/1.jpg', 'img/Chuck Taylor All Star Low Top/rojo/2.jpg', 'img/Chuck Taylor All Star Low Top/rojo/3.jpg', 'img/Chuck Taylor All Star Low Top/rojo/4.jpg', 'img/Chuck Taylor All Star Low Top/rojo/5.jpg', 'img/Chuck Taylor All Star Low Top/rojo/6.jpg', 'img/Chuck Taylor All Star Low Top/rojo/7.jpg'],
        };

        selectedColor = this.getAttribute('data-color'); // Asignar el color seleccionado
        const images = colorImages[selectedColor];

        // Actualizar las imágenes del carrusel
        const carouselInner = document.querySelector('.carousel-inner');
        carouselInner.innerHTML = ''; // Limpiar las imágenes actuales

        images.forEach((imageSrc, index) => {
            const carouselItem = document.createElement('div');
            carouselItem.classList.add('carousel-item');
            if (index === 0) {
                carouselItem.classList.add('active'); // La primera imagen es la activa
                selectedImage = imageSrc; // Almacenar la imagen seleccionada
            }

            const img = document.createElement('img');
            img.src = imageSrc;
            img.alt = `imagen-producto-${index + 1}`;

            carouselItem.appendChild(img);
            carouselInner.appendChild(carouselItem);
        });

        // Reiniciar el índice del carrusel
        currentIndex = 0;
    });
});

let currentIndex = 0;
const items = document.querySelectorAll('.carousel-item');
const totalItems = items.length;

function moveSlide(n) {
    currentIndex += n;

    if (currentIndex < 0) {
        currentIndex = totalItems - 1;
    } else if (currentIndex >= totalItems) {
        currentIndex = 0;
    }

    document.querySelector('.carousel-inner').style.transform = `translateX(-${currentIndex * 100}%)`;
}
