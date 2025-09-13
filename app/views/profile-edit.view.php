<?php require_once 'app/views/partials/header.partial.php'; ?>

<link rel="stylesheet" href="public/css/components/forms.css">
<link rel="stylesheet" href="public/css/components/profile-edit.css"> 

<main class="edit-profile-layout">
    <div class="edit-profile-container">
        <h1>Editar Perfil</h1>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="Nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" value="Usuario" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" value="usuario@email.com" required>
            </div>
        <form id="profile-form" class="auth-form" method="POST">
            <button type="submit" class="btn-submit">Guardar Cambios</button>
        </form>

        <hr class="profile-divider">

        <h2>Cambiar Contraseña</h2>
         <div class="form-group">
                <label for="current-password">Contraseña Actual</label>
                <input type="password" id="current-password" name="current-password" required>
            </div>
            <div class="form-group">
                <label for="new-password">Nueva Contraseña</label>
                <input type="password" id="new-password" name="new-password" required>
            </div>
        <form id="password-form" class="auth-form" method="POST">
            <button type="submit" class="btn-submit">Actualizar Contraseña</button>
        </form>
    </div>
</main>

<div id="confirm-password-modal" class="modal-overlay">
    <div class="modal-content">
        <h3>Confirmar Cambios</h3>
        <p>Por tu seguridad, por favor ingresa tu contraseña para guardar los cambios.</p>
        <div class="form-group">
            <input type="password" id="password-confirm-input" placeholder="Ingresa tu contraseña">
        </div>
        <div class="modal-actions">
            <button id="cancel-btn" class="btn btn-secondary">Cancelar</button>
            <button id="confirm-btn" class="btn-submit">Confirmar</button>
        </div>
    </div>
</div>

<div id="success-modal" class="modal-overlay">
    <div class="modal-content">
        <h3>¡Acción Realizada!</h3>
        <p>Tu contraseña ha sido actualizada con éxito.</p>
        <div class="modal-actions">
            <button id="continue-btn" class="btn-submit">Continuar</button>
        </div>
    </div>
</div>


<script src="public/js/profile-edit.js" defer></script>

<?php require_once 'app/views/partials/footer.partial.php'; ?>