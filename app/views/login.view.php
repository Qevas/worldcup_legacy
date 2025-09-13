<link rel="stylesheet" href="public/css/components/forms.css">
<link rel="stylesheet" href="public/css/base.css">
<link rel="stylesheet" href="public/css/components/footer.css">

<div class="register-layout">
  
  <div class="promo-panel">
    <div class="promo-logo">
      <a href="index.php">WC 2026</a>
    </div>
    <div class="promo-content">
      <h2>Bienvenido de vuelta.</h2>
      <p>Ingresa para acceder a tu perfil, participar en juegos y seguir de cerca toda la acción del Mundial 2026.</p>
    </div>
  </div>

  <div class="auth-container">
    <h1>Iniciar Sesión</h1>
    <p class="auth-subtitle">Ingresa tu correo y contraseña.</p>

    <form id="login-form" class="auth-form" novalidate>
      <div class="form-group">
        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required>
      </div>

      <button type="button" id="login-btn" class="btn-submit">Ingresar</button>
    </form>

    <p class="auth-switch">¿No tienes una cuenta? <a href="register.php">Regístrate aquí</a>.</p>
  </div>

</div>

<script src="public/js/auth.js" defer></script>

<?php include 'app/views/partials/footer.partial.php'; ?>