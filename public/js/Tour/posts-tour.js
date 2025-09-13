document.addEventListener('DOMContentLoaded', () => {
    const tour = new Shepherd.Tour({
        useModalOverlay: true,
        defaultStepOptions: {
            classes: 'shepherd-theme-arrows',
            scrollTo: { behavior: 'smooth', block: 'center' },
        }
    });

    tour.addStep({
        id: 'create-post',
        text: '¡Bienvenido a Publicaciones! Desde aquí puedes crear tus propios posts: añade un título, un comentario y sube una imagen.',
        attachTo: { element: '.post-creation-container', on: 'right' },
        buttons: [{ text: 'Siguiente', action: tour.next }]
    });
    tour.addStep({
        id: 'feed',
        text: 'En el feed principal verás las publicaciones más recientes de la comunidad. Puedes dar "Me Gusta" y comentar en ellas.',
        attachTo: { element: '.feed-main-content', on: 'left' },
        buttons: [{ text: 'Atrás', action: tour.back }, { text: 'Siguiente', action: tour.next }]
    });
     tour.addStep({
        id: 'popular-photos',
        text: 'A la derecha, encontrarás las imágenes y videos más populares del momento. ¡No te los pierdas!',
        attachTo: { element: '.popular-photos-container', on: 'left' },
        buttons: [{ text: 'Atrás', action: tour.back }, { text: 'Siguiente', action: tour.next }]
    });
    tour.addStep({
        id: 'profile-link',
        text: 'Puedes ver tu perfil haciendo clic en el ícono de usuario.',
        attachTo: { element: '.auth-links a[href="profile.php"]', on: 'bottom' },
        buttons: [{ text: 'Atrás', action: tour.back }, { text: 'Finalizar', action: tour.complete }]
    });

    const startTourBtn = document.getElementById('start-tour-btn');
    if (startTourBtn) {
        startTourBtn.addEventListener('click', () => tour.start());
    }
});