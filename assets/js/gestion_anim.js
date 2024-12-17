document.querySelectorAll('.accordion-toggle').forEach(item => {
    item.addEventListener('click', event => {
        let content = event.target.nextElementSibling;

        // Alternar la clase activa
        event.target.classList.toggle('active');

        // Ajustar la altura del contenido
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
});