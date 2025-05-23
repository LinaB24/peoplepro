document.getElementById('toggleIframe').addEventListener('click', () => {
  const contenedor = document.getElementById('iframe-contenedor');
  const iframe = document.getElementById('iframe-editar');

  const isActive = contenedor.classList.contains('activo');

  if (!isActive && !iframe.src) {
    iframe.src = iframe.getAttribute('data-src');
  }

  contenedor.classList.toggle('activo');
});

// cerrar el iframe
function cerrarIframe() {
    window.parent.document.getElementById('iframe-contenedor').classList.remove('activo');
  }
