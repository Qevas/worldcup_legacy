document.addEventListener('DOMContentLoaded', () => {
    const tour = new Shepherd.Tour({
        useModalOverlay: true,
        defaultStepOptions: {
            classes: 'shepherd-theme-arrows',
            scrollTo: { behavior: 'smooth', block: 'center' },
        }
    });

    tour.addStep({
        id: 'welcome',
        text: '¡Bienvenido al World Cup Legacy Hub! Permítenos darte un recorrido rápido por las funciones principales del sitio.',
        attachTo: { element: '.main-header', on: 'bottom' },
        buttons: [{ text: 'Comenzar', action: tour.next }]
    });
    tour.addStep({
        id: 'mundiales-cards',
        text: 'Aquí puedes explorar la historia de cada mundial. Simplemente haz clic en una tarjeta para revivir los momentos más icónicos.',
        attachTo: { element: '.carousel-wrapper', on: 'top' },
        buttons: [{ text: 'Atrás', action: tour.back }, { text: 'Siguiente', action: tour.next }]
    });
    tour.addStep({
        id: 'news',
        text: 'Mantente al día con las noticias más importantes y recientes relacionadas con los mundiales.',
        attachTo: { element: '.featured-news-card', on: 'top' },
        buttons: [{ text: 'Atrás', action: tour.back }, { text: 'Siguiente', action: tour.next }]
    });
    tour.addStep({
        id: 'search-bar',
        text: 'Usa la barra de búsqueda para encontrar publicaciones específicas por categoría, año del mundial, país sede o usuario.',
        attachTo: { element: '.search-bar', on: 'bottom' },
        buttons: [{ text: 'Atrás', action: tour.back }, { text: 'Siguiente', action: tour.next }]
    });
    tour.addStep({
        id: 'posts-link',
        text: 'En la sección de "Publicaciones", nuestra comunidad comparte su pasión. ¡Haz clic en el botón para ir allá cuando termines el tour!',
        attachTo: { element: '.main-menu a[href="posts.php"]', on: 'bottom' },
        buttons: [{ text: 'Atrás', action: tour.back }, { text: 'Finalizar', action: tour.complete }]
    });

    const startTourBtn = document.getElementById('start-tour-btn');
    if (startTourBtn) {
        startTourBtn.addEventListener('click', () => tour.start());
    }
});