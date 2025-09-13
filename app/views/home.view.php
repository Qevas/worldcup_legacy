<?php $tourScript = 'home-tour.js'; ?>
<?php require_once 'app/views/partials/header.partial.php';?>

    <div class="image-overlay">
            <img class="foreground-image" src="assets/backgrounds/main-backgroundNF.png">
    </div>

    <section id="section-one" class="fullscreen-section">
    <div class="video-background">
        <video autoplay muted loop playsinline>
            <source src="public/assets/videos/FIFA2026.mp4" type="video/mp4">
        </video>
    </div>    
    <div class="title-content">
            <h1>WORLD CUP LEGACY HUB</h1>
            <h1>2026</h1>
        </div>
    </section>

    <section id="section-two" class="fullscreen-section">

    <div class="manifesto-image">
       <!--  Agregar las banderas de los paises locales -->
        <!-- <img src="assets/Trihost.jpg" alt="Flags"> -->
    </div>

    <div class="manifesto-content">
        <h2 class="manifesto-title">
            <span>EL 2026 LLEGA PARA</span>
            <span>SACUDIR AL MUNDO DEL FÚTBOL</span>
        </h2>
        <div class="divider"></div>
        <p>Tres naciones, 48 equipos y millones de fans se preparan para el torneo más grande de la historia. Revive las leyendas del pasado y sé parte de la historia que está por escribirse.</p>
    </div>
    </section>

    <section id="section-three" class="fullscreen-section">
    <div class="section-title">
        <h1>UNIDOS POR EL JUEGO</h1>
        <h2>¡La historia continua!</h2>
    </div>

    <div class="carousel-wrapper">
         <div class="carousel-container">
        <?php for ($i = 0; $i < 32; $i++):?>
            <a href="worldcup_details.php?id=<?php echo $i; ?>" class="card-link">
                <div class="card-placeholder color-<?php echo ($i % 5) + 1; ?>"></div>
            </a>
        <?php endfor; ?>
        </div>

        <div class="carousel-accelerator left">
            <div class="accelerator-shape">
                 <span>&lt;&lt;</span>
            </div>
        </div>
        <div class="carousel-accelerator right">
            <div class="accelerator-shape">
                 <span>&gt;&gt;</span>
            </div>
        </div>
    </div>
    </section>

    <section id="section-four" class="fullscreen-section">
         <div class="section-title">
        <h2>Últimas Noticias</h2>
        </div>

        <div class="featured-news-card">
            <div class="news-image">
                <img src="public/assets/News.png" alt="Top news">
            </div>
            <div class="news-content">
                <h3>El Sorteo del Mundial 2026 Define los Grupos</h3>
                <p class="news-meta">Publicado el 10 de Septiembre, 2025</p>
                <p>El mundo del fútbol contiene la respiración tras el sorteo oficial de la Copa Mundial de la FIFA 2026. 
                    Los grupos han quedado definidos, prometiendo enfrentamientos épicos desde la primera fase...</p>
                <a href="#" class="btn btn-primary">Leer Más</a>
            </div>
        </div>
    </section>
    
    <section id="end" class="fullscreen-section">
        
    </section>       

    <section id="end" class="fullscreen-section">

    </section>

<?php require_once 'app/views/partials/footer.partial.php'; ?>