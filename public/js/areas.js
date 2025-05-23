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
  document.addEventListener('click', (e) => {
  // Verifica si el clic fue fuera de cualquier menú o botón de configuración
  if (!e.target.closest('.area-menu') && !e.target.closest('.confuguracion-area')) {
    document.querySelectorAll('.area-menu.activo').forEach((menu) => {
      menu.classList.remove('activo');
    });
  }
});
});

