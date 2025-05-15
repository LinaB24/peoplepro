// animacion del menu hamburguesa
    const menuHamburgesa = document.querySelector('.menu-hamburgesa');
    menuHamburgesa.addEventListener('click', () => {
        menuHamburgesa.classList.toggle('activo');
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