document.querySelector('.dropdown-toggle').addEventListener('click', function (event) {
    event.stopPropagation(); // Evita que el evento se propague al documento
    const dropdown = document.querySelector('.dropdown-menu');
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
});

// Ocultar el menú si se hace clic fuera de él
document.addEventListener('click', function () {
    document.querySelector('.dropdown-menu').style.display = 'none';
});
