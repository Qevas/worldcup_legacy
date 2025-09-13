document.addEventListener('DOMContentLoaded', () => {
    const tour = new Shepherd.Tour({
        useModalOverlay: true,
        defaultStepOptions: {
            classes: 'shepherd-theme-arrows',
            scrollTo: { behavior: 'smooth', block: 'center' },
        }
    });

    tour.addStep({
        id: 'profile-sidebar',
        text: 'Este es tu perfil. Aquí puedes ver tu foto, nombre, estadísticas y tu galería de publicaciones.',
        attachTo: { element: '.profile-sidebar', on: 'right' },
        buttons: [{ text: 'Siguiente', action: tour.next }]
    });
    tour.addStep({
        id: 'profile-settings',
        text: 'Haz clic en el ícono de engranaje para editar tu información personal y cambiar tu contraseña.',
        attachTo: { element: '.edit-profile-link', on: 'right' },
        buttons: [{ text: 'Atrás', action: tour.back }, { text: 'Finalizar', action: tour.complete }]
    });

    const startTourBtn = document.getElementById('start-tour-btn');
    if (startTourBtn) {
        startTourBtn.addEventListener('click', () => tour.start());
    }
});