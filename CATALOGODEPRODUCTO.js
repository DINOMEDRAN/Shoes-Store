// Datos de ejemplo
const items = [
  { name: 'CONS Fastbreak Pro Leather & Suede Mid Top', img: 'img/skatebording/CONS Fastbreak Pro Leather & Suede Mid Top/1.jpg', link: 'CONS Fastbreak Pro Leather & Suede Mid Top.php' },
  { name: 'CONS Fastbreak Pro Leather & Nylon Mid Top.', img: 'img/skatebording/CONS Fastbreak Pro Leather & Nylon Mid Top/1.jpg', link: 'CONS Fastbreak Pro Leather & Nylon Mid Top.php' },
  { name: 'CONS AS-1 Pro Suede & Canvas Low Top', img: 'img/skatebording/CONS AS-1 Pro Suede & Canvas Low Top/1.jpg', link: 'CONS AS-1 Pro Suede & Canvas Low Top.php' },
  { name: 'chuck70.', img: 'img/convers/convers.1.jpg', link: 'chuck70.php' },
  { name: 'chucklow70.', img: 'img/Chuck Taylor All Star Low Top/negro/1.jpg', link: 'chucklow70.php' },
  { name: 'CONS AS-1 Pro Low Top.', img: 'img/skatebording/CONS AS-1 Pro Suede & Canvas Low Top/1.jpg', link: 'CONS AS-1 Pro Low Top.php' },
  { name: 'CONS Fastbreak Pro Suede & Canvas Mid Top.', img: 'img/skatebording/CONS Fastbreak Pro Suede Nylon Mid Top/2.jpg', link: 'CONS Fastbreak Pro Suede & Canvas Mid Top.php' },
  { name: 'CONS Fastbreak Pro Suede Nylon Mid Top.', img: 'img/skatebording/CONS Fastbreak Pro Suede & Canvas Mid Top/1.jpg', link: 'CONS Fastbreak Pro Suede Nylon Mid Top.php' },
  { name: 'Converse x Awake NY One Star Pro Low Top.', img: 'img/skatebording/Converse x Awake NY One Star Pro Low Top/1.jpg', link: 'Converse x Awake NY One Star Pro Low Top.php' },
  { name: 'Louie Lopez Pro Low Top.', img: 'img/skatebording/Louie Lopez Pro Low Top/1.jpg', link: 'Louie Lopez Pro Low Top.php' }
];

const searchInput = document.getElementById('search');
const resultsDiv = document.getElementById('search-results');

function filterProducts() {
const query = searchInput.value.toLowerCase();
resultsDiv.innerHTML = ''; // Limpiar resultados
if (query) {
const filteredItems = items.filter(item => item.name.toLowerCase().includes(query));
if (filteredItems.length) {
  resultsDiv.style.display = 'block'; // Mostrar resultados
  filteredItems.forEach(item => {
      const div = document.createElement('div');
      div.className = 'result-item';
      div.onclick = () => window.location.href = item.link; // Redirigir al hacer clic
      div.innerHTML = `<img src="${item.img}" alt="${item.name}">${item.name}`;
      resultsDiv.appendChild(div);
  });
} else {
  resultsDiv.style.display = 'none'; // Ocultar si no hay resultados
}
} else {
resultsDiv.style.display = 'none'; // Ocultar si el input está vacío
}
}
