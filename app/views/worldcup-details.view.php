<?php require_once 'app/views/partials/header.partial.php'; ?>

<link rel="stylesheet" href="public/css/components/worldcup-details.css">
<link rel="stylesheet" href="public/css/components/posts.css"> 
<link rel="stylesheet" href="public/css/components/forms.css"> 


<main class="details-layout">

    <aside class="details-sidebar">
        <nav class="filter-menu">
            <h2>Filtros</h2> <h3>Mundiales</h3>
            <ul class="filter-list">
                <?php for ($i = 1; $i <= 32; $i++): ?>
                    <li><a href="#">Mundial Ejemplo #<?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
            <hr class="filter-divider">
            <h3>Países Sede</h3>
            <ul class="filter-list">
                </ul>
        </nav>
    </aside>

<section class="details-content-wrapper">

    <a href="#" class="gallery-button">Galería</a>

    <div class="worldcup-summary crystal-panel">
        <div class="summary-poster">
            <img src="public/assets/posts/uruguay1930_poster.jpg" alt="Poster Uruguay 1930">
        </div>
        <div class="summary-info">
            <h1>Uruguay 1930</h1>
            <p>La primera Copa Mundial de la FIFA, un torneo histórico que vio a la nación anfitriona coronarse como los primeros campeones del mundo.</p>
            <ul class="summary-stats">
                <li><strong>Campeón:</strong> Uruguay</li>
                <li><strong>Subcampeón:</strong> Argentina</li>
                <li><strong>Partidos Jugados:</strong> 18</li>
                <li><strong>Goles:</strong> 70</li>
            </ul>
        </div>
    </div>

<div class="details-feed-section">

    <aside class="feed-sidebar left-sidebar">
        <div class="post-creation-container">
            <h3>Crear Publicación</h3>
            <form id="post-form" class="auth-form">
                <div class="form-group">
                    <label for="post-title">Título</label>
                    <input type="text" id="post-title" name="post-title" required>
                </div>
                <div class="form-group">
                    <label for="post-comment">Comentario</label>
                    <textarea id="post-comment" name="post-comment" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <div class="file-drop-area">
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
                <img src="public/assets/user-placeholder.png" alt="Avatar" class="post-avatar">
                <div class="post-user-info">
                    <span class="post-username">Usuario Ejemplo</span>
                    <span class="post-timestamp">hace 5 minutos</span>
                </div>
            </div>
            <div class="post-body">
                <p>Publicación de ejemplo relacionada con este mundial específico.</p>
                <img src="public/assets/posts/messi-qatar.jpg" alt="Publicación" class="post-image">
            </div>
            <div class="post-actions">
                <button class="action-btn">❤️ Me Gusta</button>
                <button class="action-btn">💬 Comentarios</button>
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
</section>

</main>

<?php require_once 'app/views/partials/footer.partial.php'; ?>