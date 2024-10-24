import './bootstrap';
import 'flowbite';
import noUiSlider from 'nouislider';
import 'nouislider/dist/nouislider.css';


document.querySelector('.scrollbar-custom').addEventListener('wheel', function(e) {
    e.preventDefault();

    // Captura el desplazamiento objetivo aumentando o disminuyendo basado en deltaY.
    const scrollAmount = e.deltaY;
    const targetScrollLeft = this.scrollLeft + scrollAmount;

    // Inicio de la animación del scroll
    let currentScrollLeft = this.scrollLeft;

    const smoothScroll = () => {
        // Acerca gradualmente currentScrollLeft al targetScrollLeft
        currentScrollLeft += (targetScrollLeft - currentScrollLeft) * 0.4; // Ajusta 0.1 para cambiar la tasa de suavidad

        // Aplica el valor actualizado de scrollLeft
        this.scrollLeft = Math.round(currentScrollLeft);

        // Continúa la animación hasta que casi alcanza el destino
        if (Math.abs(currentScrollLeft - targetScrollLeft) > 1) {
            // Usa requestAnimationFrame para continuar la animación
            requestAnimationFrame(smoothScroll);
        }
    };

    // Inicia la animación
    requestAnimationFrame(smoothScroll);
});
