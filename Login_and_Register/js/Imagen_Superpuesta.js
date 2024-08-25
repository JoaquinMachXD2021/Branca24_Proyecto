document.addEventListener("DOMContentLoaded", function() {
    const imagenSuperpuesta = document.querySelector('.imagen-superpuesta');

    function ajustarImagen() {
        const anchoVentana = window.innerWidth;

        // Ajustar el tamaño de la imagen basado en el tamaño de la ventana
        const nuevoAncho = anchoVentana * 0.2; // Ajustar al 20% del ancho de la ventana
        imagenSuperpuesta.style.width = `${nuevoAncho}px`;
    }

    // Ajustar la imagen cuando la página cargue
    ajustarImagen();

    // Ajustar la imagen cuando se redimensione la ventana
    window.addEventListener('resize', ajustarImagen);
});
