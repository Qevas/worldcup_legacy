            <footer class="main-footer">
                <div class="footer-content">
                    <p>&copy; 2026 W@rld Cup Legacy H@b.</p>
                </div>
            </footer>
        </div> <!-- Cierre de .content-container -->

    <script src="public/js/cards-animation.js" defer></script>

    <?php if (isset($pageScript)): ?>
    <script src="js/<?php echo $pageScript; ?>" defer></script>
    <?php endif; ?>
       <script src="https://cdn.jsdelivr.net/npm/shepherd.js@10.0.1/dist/js/shepherd.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shepherd.js@10.0.1/dist/css/shepherd.css"/>
    
    <?php if (isset($tourScript)): ?>
    <script src="public/js/tour/<?php echo $tourScript; ?>"></script>
    <?php endif; ?>
    
</body>
</html>