<?php $tourScript = 'posts-tour.js'; ?>
<?php require_once 'app/views/partials/header.partial.php';?>

<link rel="stylesheet" href="public/css/components/forms.css">
<link rel="stylesheet" href="public/css/components/posts.css">

<div class="feed-layout">

    <aside class="feed-sidebar left-sidebar">
        <div class="post-creation-container">
            <h3>Crear Publicación</h3>
            <form id="post-form" class="auth-form">
                <div class="form-group">
                    <label for="post-title">Título</label>
                    <input type="text" id="post-title" name="post-title" placeholder="El gol del siglo..." required>
                </div>
                <div class="form-group">
                <label for="post-comment">Comentario</label>
                <textarea id="post-comment" name="post-comment" rows="4" placeholder="Añade un comentario o descripción..."></textarea>
                </div>
                <div class="form-group">
                    <label for="post-category">Categoría (Mundial)</label>
                    <select id="post-category" name="post-category" required>
                        <option value="" disabled selected>Selecciona un mundial</option>
                        <option value="mexico-1986">México 1986</option>
                        <option value="qatar-2022">Qatar 2022</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="file-drop-area">
                        <span class="file-icon">📁</span>
                        <p class="file-message">Sube tu imagen o video</p>
                        <input type="file" class="file-input">
                    </div>
                </div>
                <button type="button" class="btn-submit">Publicar</button>
            </form>
        </div>
    </aside>

    <main class="feed-main-content">
        <div class="post-card">
            <div class="post-header">
                <img src="public/assets/user.png" alt="Avatar" class="post-avatar">
                <div class="post-user-info">
                    <span class="post-username">Usuario Ejemplo</span>
                    <span class="post-timestamp">hace 5 minutos</span>
                </div>
            </div>
            <div class="post-body">
                <p>¡Recordando el increíble gol de Maradona en México 86! Para ustedes, ¿es el mejor de la historia?</p>
                <img src="public/assets/posts/maradona-86.jpg" alt="Publicación" class="post-image">
            </div>
            <div class="post-actions">
                <button class="action-btn">❤️ 1.2k Me Gusta</button>
                <button class="action-btn">💬 89 Comentarios</button>
            </div>
        </div>
        
        <div class="post-card">
             <div class="post-header">
                <img src="public/assets/user.png" alt="Avatar" class="post-avatar">
                <div class="post-user-info">
                    <span class="post-username">Otro Usuario</span>
                    <span class="post-timestamp">hace 1 hora</span>
                </div>
            </div>
            <div class="post-body">
                <p>Analizando la final de Qatar 2022. Un partido que quedará para siempre en la memoria.</p>
                <img src="public/assets/posts/messi-qatar.jpg" alt="Publicación" class="post-image">
            </div>
            <div class="post-actions">
                <button class="action-btn">❤️ 2.5k Me Gusta</button>
                <button class="action-btn">💬 240 Comentarios</button>
            </div>
        </div>
    </main>

    <aside class="feed-sidebar right-sidebar">
        <div class="popular-photos-container">
            <h3>Más Vistas</h3>
            <div class="photo-grid">
                <img src="public/assets/posts/pele.jpg" alt="Foto popular 1">
                <img src="public/assets/posts/zidane.jpg" alt="Foto popular 2">
                <img src="public/assets/posts/iniesta.jpg" alt="Foto popular 3">
                <img src="public/assets/posts/ronaldo.jpg" alt="Foto popular 4">
            </div>
        </div>
    </aside>

</div>

<?php include 'app/views/partials/footer.partial.php'; ?>