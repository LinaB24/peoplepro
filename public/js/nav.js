// animacion del menu hamburguesa
    const menuHamburguesa = document.querySelector('.menu-hamburguesa');
    const menu = document.getElementById('nav-desplegable');
    menuHamburguesa.addEventListener('click', () => {
        menuHamburguesa.classList.toggle('activo');
        menu.classList.toggle('open');
    });


// animacion del logo
    const texto = "peoplepro";
        const velocidad = 200; // milisegundos por letra

        let i = 0;
        function escribir() {
        if (i < texto.length) {
            document.getElementById("logo").textContent += texto.charAt(i);
            i++;
            setTimeout(escribir, velocidad);
        }
        }
        escribir();