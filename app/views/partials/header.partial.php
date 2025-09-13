<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Cup Legacy Hub</title>
    <link rel="icon" type="image/png" href="public/assets/favicon.png">
    <link rel="stylesheet" href="public/css/main.css">
</head>
<body class="<?= $bodyClass ?? '' ?>">

    <nav class="dot-nav">
        <ul>
            <li><a href="#section-one"><span class="dot"></span></a></li>
            <li><a href="#section-two"><span class="dot"></span></a></li>
            <li><a href="#section-three"><span class="dot"></span></a></li>
            <li><a href="#section-four"><span class="dot"></span></a></li>
            <li><a href="#end"><span class="dot"></span></a></li>
        </ul>
    </nav>

    <header class="main-header">
        <div class="header-left">
            <div class="header-logo">
            <a href="index.php">
                <!-- <img src="assets/LOGO.png" alt="World Cup Legacy Hub Logo"> -->
                 <span>WC 2026</span>
            </a>
        </div>
        
            <nav class="main-menu">
                <ul>
                    <li><a href="index.php#section-three">Mundiales</a></li>
                    <li><a href="posts.php">Publicaciones</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="header-actions">
            <div class="search-bar">
                <input type="search" placeholder="Buscar...">
            </div>
            <div class="auth-links">

             <button id="start-tour-btn" class="btn btn-secondary">Guía Rápida</button>

                <a href="profile.php" class="btn btn-secondary btn-icon">
                    <img src="public/assets/profile.png" alt="My profile">
                </a>
                <a href="login.php" class="btn btn-secondary">Login</a>
                <a href="register.php" class="btn btn-primary">Registrarse</a>
            </div>
        </div>
    </header>

    <div class="content-container">