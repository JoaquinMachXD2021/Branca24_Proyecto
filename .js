// Espera a que se cargue el DOM
document.addEventListener("DOMContentLoaded", function () {
    // Obtiene todos los botones y menús
    var botones = document.querySelectorAll('.boton');
    var menus = document.querySelectorAll('.menu');

    // sobre cada botón
    botones.forEach(function (boton, index) {
        // (pasar el cursor por encima)
        boton.addEventListener('mouseover', function () {
            // Oculta todos los menús
            ocultarMenus();
            // Muestra solo el menú correspondiente al botón en el que se pasó el cursor
            menus[index].classList.add('show');
        });
    });

    // Función para ocultar todos los menús
    function ocultarMenus() {
        menus.forEach(function (menu) {
            menu.classList.remove('show');
        });
    }
});
