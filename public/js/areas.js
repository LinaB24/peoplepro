// menu de configuracion areas
document.querySelectorAll('.confuguracion-area').forEach((boton) => {
  boton.addEventListener('click', () => {
    const idNumero = boton.id.split('-')[1];
    const menu = document.getElementById(`area-menu-${idNumero}`);
    if (!menu) return;

    // Alternar visibilidad del menú clickeado
    menu.classList.toggle('activo');

    // Cerrar otros menús activos
    document.querySelectorAll('.area-menu.activo').forEach((m) => {
      if (m !== menu) m.classList.remove('activo');
    });
  });
});
