document.addEventListener('DOMContentLoaded', () => {
    // Formularios
    const profileForm = document.querySelector('#profile-form');
    const passwordForm = document.querySelector('#password-form');

    // Modales
    const confirmPasswordModal = document.querySelector('#confirm-password-modal');
    const successModal = document.querySelector('#success-modal');

    // Botones de los modales
    const confirmBtn = document.querySelector('#confirm-btn');
    const cancelBtn = document.querySelector('#cancel-btn');
    const continueBtn = document.querySelector('#continue-btn');

    // --- Lógica para "Guardar Cambios" (pide contraseña) ---
    if (profileForm) {
        profileForm.addEventListener('submit', (e) => {
            e.preventDefault();
            // Muestra el modal de confirmación de contraseña
            confirmPasswordModal.classList.add('active');
        });
    }

    // --- Lógica para "Actualizar Contraseña" (muestra éxito) ---
    if (passwordForm) {
        passwordForm.addEventListener('submit', (e) => {
            e.preventDefault();
            // Muestra el modal de éxito
            successModal.classList.add('active');
        });
    }

    // --- Lógica de los botones de los modales ---
    if (confirmBtn) {
        confirmBtn.addEventListener('click', () => {
            // (Aquí iría la validación de la contraseña en el futuro)
            // Por ahora, solo redirigimos.
            window.location.href = 'profile.php';
        });
    }

    if (cancelBtn) {
        cancelBtn.addEventListener('click', () => {
            // Cierra el modal de confirmación
            confirmPasswordModal.classList.remove('active');
        });
    }
    
    if (continueBtn) {
        continueBtn.addEventListener('click', () => {
            // Redirige desde el modal de éxito
            window.location.href = 'profile.php';
        });
    }
});