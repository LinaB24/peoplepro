document.querySelectorAll('.abrir-iframe').forEach(boton => {
  boton.addEventListener('click', () => {
    const contenedor = document.getElementById('iframe-contenedor');
    const iframe = document.getElementById('iframe-editar');
    const overlay = document.getElementById('pantalla-oscura');

    const url = boton.getAttribute('data-src');

    iframe.src = url;
    contenedor.classList.add('activo');
    overlay.classList.add('activo');
  });
});
// funcion de cerrar con el boton cancelar
function cerrarIframe() {
  const parentDocument = window.parent.document;
  const contenedor = parentDocument.getElementById('iframe-contenedor');
  const overlay = parentDocument.getElementById('pantalla-oscura');
  const iframe = parentDocument.getElementById('iframe-editar');
  contenedor.classList.remove('activo');
  overlay.classList.remove('activo');
  iframe.src = '';
  }
  // cerrar al hacer click afuera del iframe
  document.getElementById('pantalla-oscura').addEventListener('click', cerrarIframe);
