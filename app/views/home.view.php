<?php require_once 'partials/header.partial.php'; ?>

    <div class="image-overlay">
            <img class="foreground-image" src="assets/backgrounds/main-backgroundNF.png">
    </div>

    <section id="section-one" class="fullscreen-section">
    <div class="video-background">
        <video autoplay muted loop playsinline>
            <source src="assets/videos/FIFA2026.mp4" type="video/mp4">
        </video>
    </div>    
    <div class="title-content">
            <h1>WORLD CUP LEGACY HUB</h1>
            <h1>2026</h1>
        </div>
    </section>

    <section id="section-two" class="fullscreen-section">
    <!-- <div class="worldcup-cards-container">
        <div class="card-wrapper">
            <p class="card-year-vertical">1930</p>
            <div class="worldcup-card">
                <img class="card-image-background" src="assets/Uruguay/Photo.jpg" alt="ImageWinners1930">
                <img class="card-image-front" src="assets/Uruguay/Uruguay_1930.jpeg" alt="Worldcup1930">
                <div class="card-flag-tag">
                    <img src="assets/Uruguay/Flag.webp" alt="Winner flag">
                </div>
                <div class="card-corner-flag">
                    <img src="assets/Uruguay/Flag.webp" alt="Host flag">
                </div>
            </div>
        </div>
    </div> -->

    </section>

    <section id="section-three" class="fullscreen-section">
        <div class="rows-wrapper">
        <div class="card-row row-1">
        <?php for ($i = 0; $i < 16; $i++): ?>
            <div class="card-placeholder color-<?php echo ($i % 5) + 1; ?>"></div>
        <?php endfor; ?>
        </div>

        <div class="card-row row-2">
            <?php for ($i = 0; $i < 16; $i++): ?>
                <div class="card-placeholder color-<?php echo ($i % 5) + 1; ?>"></div>
            <?php endfor; ?>
        </div>
    </div> 
    </section>

        <section id="section-four" class="fullscreen-section">
        <h2>Redes sociales</h2>
    </section>


<?php require_once 'partials/footer.partial.php'; ?>