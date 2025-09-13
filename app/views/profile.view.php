<?php $tourScript = 'profile-tour.js'; ?>
<?php require_once 'app/views/partials/header.partial.php';?>

<link rel="stylesheet" href="public/css/components/forms.css">
<link rel="stylesheet" href="public/css/components/posts.css">
<link rel="stylesheet" href="public/css/components/profile.css">

<main class="profile-layout-new">

    <aside class="profile-sidebar">
        <div class="profile-picture">
            <img src="public/assets/user.png" alt="Foto de Perfil">
        </div>
        <div class="profile-header">
            <h2 class="profile-name">Nombre Usuario</h2>
            <a href="profile-edit.php" class="edit-profile-link">
                <img src="public/assets/icons/gear-icon.svg" alt="Editar Perfil">
            </a>
        </div>
        
        <div class="profile-stats">
            <div class="stat-item">
                <span>12</span>
                <p>Publicaciones</p>
            </div>
            <div class="stat-item">
                <span>152</span>
                <p>Me Gusta</p>
            </div>
        </div>

        <div class="media-gallery">
            <h3>Galería</h3>
            <div class="photo-grid">
                <img src="public/assets/posts/pele.jpg" alt="Foto 1">
                <img src="public/assets/posts/zidane.jpg" alt="Foto 2">
                <img src="public/assets/posts/iniesta.jpg" alt="Foto 3">
                <img src="public/assets/posts/ronaldo.jpg" alt="Foto 4">
            </div>
        </div>
    </aside>

    <section class="profile-main-feed">
        <div class="mini-create-post">
            <textarea placeholder="¿Qué estás pensando, Nombre?"></textarea>
            <div class="mini-post-actions">
                <button class="btn-attach">📷 Adjuntar Foto/Video</button>
                <button class="btn-submit">Publicar</button>
            </div>
        </div>

        <div class="post-card">
            <div class="post-header">
                <img src="public/assets/user-placeholder.png" alt="Avatar" class="post-avatar">
                <div class="post-user-info">
                    <span class="post-username">Nombre Usuario</span>
                    <span class="post-timestamp">hace 1 día</span>
                </div>
            </div>
            <div class="post-body">
                <p>Publicación realizada.</p>
                <img src="public/assets/posts/messi-qatar.jpg" alt="Publicación" class="post-image">
            </div>
            <div class="post-actions">
                <button class="action-btn">❤️ Me Gusta</button>
                <button class="action-btn">💬 Comentar</button>
            </div>
        </div>
    </section>

</main>

<?php include 'app/views/partials/footer.partial.php'; ?>