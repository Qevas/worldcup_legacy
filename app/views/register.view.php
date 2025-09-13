<link rel="stylesheet" href="public/css/components/forms.css">
<link rel="stylesheet" href="public/css/base.css">
<link rel="stylesheet" href="public/css/components/footer.css">

<div class="register-layout">
  
  <div class="promo-panel">
     <div class="promo-logo">
      <a href="index.php">WC 2026</a>
    </div>
    <div class="promo-content">
      <h2>El fútbol, al alcance de la mano.</h2>
      <p>Regístrate para conseguir entradas, disfrutar de juegos fantásticos y seguir los partidos clasificatorios del Mundial de 2026.</p>
    </div>
  </div>

  <div class="auth-container">
    <h1>Registrarse</h1>
    <p class="auth-subtitle">Completa los datos para crear tu cuenta.</p>

    <form id="register-form" class="auth-form" novalidate>
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required>
      </div>

      <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" required>
      </div>

      <div class="form-group">
        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="fecha">Fecha de Nacimiento</label>
        <input type="date" id="fecha" name="fecha" required>
      </div>

      <div class="form-group">
        <label for="genero">Género</label>
        <select id="genero" name="genero" required>
          <option value="" disabled selected>Selecciona tu género</option>
          <option value="masculino">Masculino</option>
          <option value="femenino">Femenino</option>
          <option value="otro">Otro</option>
        </select>
      </div>

      <div class="form-group">
        <label for="pais">País</label>
        <input type="text" id="pais" name="pais" required>
      </div>

      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required>
      </div>

      <button type="button" id="register-btn" class="btn-submit">Registrarse</button>
    </form>

     <p class="auth-switch">¿Ya tienes una cuenta? <a href="login.php">Ingresa aquí</a>.</p>

  </div>
</div>

<script src="public/js/auth.js" defer></script>

<div id="success-modal" class="success-modal">
    <div class="success-content">
        <h3>¡Registro Exitoso!</h3>
        <p>Tu cuenta ha sido creada. ¡Bienvenido al Hub!</p>
        <button id="continue-btn" class="btn-submit">Continuar</button>
    </div>
</div>

<?php include 'app/views/partials/footer.partial.php'; ?>