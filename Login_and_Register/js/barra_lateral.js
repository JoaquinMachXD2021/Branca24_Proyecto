document.getElementById('btn-menu').addEventListener('mouseenter', function() {
    document.querySelector('.BarraLateral').style.left = '0';
});

document.querySelector('.BarraLateral').addEventListener('mouseleave', function(e) {
    if (e.relatedTarget && !e.relatedTarget.closest('.BarraLateral')) {
        document.querySelector('.BarraLateral').style.left = '-180px';
    }
});

document.getElementById('btn-menu').addEventListener('change', function() {
    if (this.checked) {
        document.querySelector('.capa').style.display = 'block';
    } else {
        document.querySelector('.capa').style.display = 'none';
    }
});

document.querySelector('.BarraLateral').addEventListener('mouseenter', function() {
    document.querySelector('.BarraLateral ul').style.display = 'block';
});

document.querySelector('.BarraLateral').addEventListener('mouseleave', function() {
    document.querySelector('.BarraLateral ul').style.display = 'none';
});
