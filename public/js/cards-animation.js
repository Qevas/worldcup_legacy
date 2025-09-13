// Espera a que todo el contenido de la página se cargue
document.addEventListener('DOMContentLoaded', () => {

    // --- MÓDULO 1: SCROLLSPY Y SMOOTH SCROLL PARA DOT-NAV ---
    // Seleccionamos todas las secciones que queremos observar
    const sections = document.querySelectorAll('.fullscreen-section');
    
    // Seleccionamos todos los enlaces de nuestra navegación de puntos
    const navLinks = document.querySelectorAll('.dot-nav a');

    // Opciones para el "vigilante" (Intersection Observer)
    const options = {
        root: null, // Observa en relación al viewport completo
        threshold: 0.5, // Nos avisa cuando el 50% de la sección es visible
        rootMargin: '0px'
    };

    // Creamos un nuevo "vigilante"
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            // Si una sección está "intersectando" (visible)
            if (entry.isIntersecting) {
                // Quitamos la clase 'active' de todos los enlaces
                navLinks.forEach(link => link.classList.remove('active'));

                // Encontramos el enlace que corresponde a la sección visible
                // entry.target.id nos da el id de la sección (ej: "mundiales")
                const activeLink = document.querySelector(`.dot-nav a[href="#${entry.target.id}"]`);
                
                // Si encontramos el enlace, le añadimos la clase 'active'
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }
        });
    }, options);

    // Le decimos al vigilante que empiece a observar cada una de las secciones
    sections.forEach(section => {
        observer.observe(section);
    });

});

// --- MÓDULO 2: CARRUSEL 3D INTERACTIVO ---
const worldcupSection = document.querySelector('#section-three'); // Sincronizado con tu HTML
if (worldcupSection) {
    // CORRECCIÓN: Seleccionamos los enlaces <a>, no los divs
    const cardLinks = worldcupSection.querySelectorAll('.card-link');
    const cards = Array.from(cardLinks); // Convertimos a un Array para manejarlo mejor
    
    let currentIndex = 0;
    let intervalId = null;

    function updateCarousel(rotateSpeed = 0) {
        if (rotateSpeed !== 0) {
            currentIndex = (currentIndex - rotateSpeed + cards.length) % cards.length;
        }

        cards.forEach((link, index) => {
            let offset = index - currentIndex;
            if (offset > cards.length / 2) { offset -= cards.length; }
            if (offset < -cards.length / 2) { offset += cards.length; }

            const translateX = offset * 200;
            const rotateY = offset * -25;
            const scale = 1 - Math.abs(offset) * 0.2;
            const zIndex = 100 - Math.abs(offset);
            const opacity = Math.abs(offset) > 2 ? 0 : 1;

            // Aplicamos la transformación al enlace <a> que es el contenedor
            link.style.transform = `translateX(${translateX}px) scale(${scale}) rotateY(${rotateY}deg)`;
            link.style.zIndex = zIndex;
            link.style.opacity = opacity;
        });
    }

    const startRotation = (speed) => {
        if (intervalId) clearInterval(intervalId);
        intervalId = setInterval(() => {
            updateCarousel(speed);
        }, 80); // Un poco más rápido para un movimiento más fluido
    };

    const stopRotation = () => {
        clearInterval(intervalId);
        intervalId = null;
    };

    const accelLeft = document.querySelector('.carousel-accelerator.left');
    const accelRight = document.querySelector('.carousel-accelerator.right');

    if(accelLeft && accelRight){
        accelLeft.addEventListener('mouseenter', () => startRotation(-1));
        accelLeft.addEventListener('mouseleave', stopRotation);

        accelRight.addEventListener('mouseenter', () => startRotation(1));
        accelRight.addEventListener('mouseleave', stopRotation);
    }

    updateCarousel();
}