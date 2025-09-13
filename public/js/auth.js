document.addEventListener('DOMContentLoaded', () => {
    
    // --- Lógica para el Formulario de Registro ---
    const registerBtn = document.querySelector('#register-btn');
    const successModal = document.querySelector('#success-modal');
    const continueBtn = document.querySelector('#continue-btn');

    if (registerBtn && successModal && continueBtn) {
        registerBtn.addEventListener('click', () => {
            successModal.classList.add('active');
        });
        continueBtn.addEventListener('click', () => {
            window.location.href = "index.php";
        });
    }

    // --- Lógica para el Formulario de Login (NUEVO) ---
    const loginBtn = document.querySelector('#login-btn');
    if (loginBtn) {
        loginBtn.addEventListener('click', () => {
            // Simplemente redirige a la página principal
            window.location.href = "index.php";
        });
    }

    
});