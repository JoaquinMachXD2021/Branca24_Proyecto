// Principal.js
function toggleTheme() {
    const currentTheme = document.body.getAttribute('data-theme');
    if (currentTheme === 'dark') {
        document.body.setAttribute('data-theme', 'light');
        document.getElementById('theme-icon').src = '../Menu_lateral/sol.png';
    } else {
        document.body.setAttribute('data-theme', 'dark');
        document.getElementById('theme-icon').src = '../Menu_lateral/luna.png';
    }
}


$(document).ready(function(){
    $('.carousel').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        arrows: true,
        fade: true,
        cssEase: 'linear'
    });
});
