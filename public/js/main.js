// Espera a que todo el contenido de la página se cargue
document.addEventListener('DOMContentLoaded', () => {

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