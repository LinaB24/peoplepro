const menuHamburguesa = document.querySelector('.menu-hamburguesa');
const menu = document.querySelector('.landing-nav');

menuHamburguesa.addEventListener('click', (e) => {
    e.stopPropagation(); // Evita que el clic en el botón cierre el menú
    menuHamburguesa.classList.toggle('activo');
    menu.classList.toggle('open');
});

// Cerrar el menú si se hace clic fuera
document.addEventListener('click', (e) => {
    if (!menu.contains(e.target) && !menuHamburguesa.contains(e.target)) {
        menu.classList.remove('open');
        menuHamburguesa.classList.remove('activo');
    }
});
