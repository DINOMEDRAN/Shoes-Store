document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita que el formulario se envíe de forma tradicional

    const formData = new FormData(this);
    
    fetch('submit.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        const messageDiv = document.getElementById('responseMessage');
        messageDiv.innerText = data.message; // Muestra el mensaje
        messageDiv.style.color = data.status === 'success' ? 'green' : 'red'; // Cambia el color según el estado
        this.reset(); // Limpia el formulario
    })
    .catch(error => {
        console.error('Error:', error);
    });
});