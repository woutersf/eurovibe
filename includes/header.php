<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Eurovi.be – European Vibe Coding Championship'; ?></title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Eurovi.be is the premier European vibe coding competition where top developers from across Europe compete in productivity, efficiency and speed. July 4, 2026 in Athens, Greece.">
    <meta name="keywords" content="coding competition, vibe coding, European programming contest, hackathon, developer competition, Athens, Greece, OTE Academy, Marousi, coding competition Greece, hackathon Athens, developer event Attica">
    <meta name="author" content="Eurovi.be">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://eurovi.be<?php echo $_SERVER['REQUEST_URI']; ?>">

    <!-- Geographic Meta Tags -->
    <meta name="geo.region" content="GR-I">
    <meta name="geo.placename" content="Marousi, Athens">
    <meta name="geo.position" content="38.0500;23.8000">
    <meta name="ICBM" content="38.0500, 23.8000">
    <meta name="DC.title" content="<?php echo isset($pageTitle) ? $pageTitle : 'Eurovi.be – European Vibe Coding Championship'; ?>">

    <!-- Multi-language/region targeting -->
    <link rel="alternate" hreflang="en" href="https://eurovi.be<?php echo $_SERVER['REQUEST_URI']; ?>">
    <link rel="alternate" hreflang="en-gr" href="https://eurovi.be<?php echo $_SERVER['REQUEST_URI']; ?>">
    <link rel="alternate" hreflang="el-gr" href="https://eurovi.be<?php echo $_SERVER['REQUEST_URI']; ?>">
    <link rel="alternate" hreflang="x-default" href="https://eurovi.be<?php echo $_SERVER['REQUEST_URI']; ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://eurovi.be<?php echo $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'Eurovi.be – European Vibe Coding Championship'; ?>">
    <meta property="og:description" content="Join Europe's premier vibe coding competition at OTE Academy in Athens. Top developers compete live on stage. July 4, 2026 in Greece.">
    <meta property="og:image" content="https://eurovi.be/images/og-image.jpg">
    <meta property="og:locale" content="en_GR">
    <meta property="og:locale:alternate" content="el_GR">
    <meta property="og:site_name" content="Eurovi.be">
    <meta property="og:street-address" content="Pelika and Spartis 1">
    <meta property="og:locality" content="Marousi, Athens">
    <meta property="og:region" content="Attica">
    <meta property="og:postal-code" content="15122">
    <meta property="og:country-name" content="Greece">
    <meta property="og:latitude" content="38.0500">
    <meta property="og:longitude" content="23.8000">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://eurovi.be<?php echo $_SERVER['REQUEST_URI']; ?>">
    <meta name="twitter:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'Eurovi.be – European Vibe Coding Championship'; ?>">
    <meta name="twitter:description" content="Join Europe's premier vibe coding competition at OTE Academy in Athens. Top developers compete live on stage. July 4, 2026.">
    <meta name="twitter:image" content="https://eurovi.be/images/twitter-card.jpg">
    <meta name="twitter:label1" content="Location">
    <meta name="twitter:data1" content="Athens, Greece">
    <meta name="twitter:label2" content="Date">
    <meta name="twitter:data2" content="July 4, 2026">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

    <link rel="stylesheet" href="/styles.css">
    <?php if (isset($extraStyles)): ?>
    <link rel="stylesheet" href="<?php echo $extraStyles; ?>">
    <?php endif; ?>
</head>
<body>
    <!-- Skip to main content link for accessibility -->
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <nav class="main-nav" role="navigation" aria-label="Main navigation">
        <div class="nav-container">
            <a href="/" class="nav-logo" aria-label="Eurovi.be home">EUROVI.BE ⚡</a>
            <ul class="nav-menu" role="menubar">
                <!-- <li role="none"><a href="/#format" role="menuitem">Format</a></li> -->
                <li role="none"><a href="/#faq" role="menuitem">FAQ</a></li>
                <li role="none"><a href="/#sponsors" role="menuitem">Sponsors</a></li>
                <li role="none"><a href="/contact.php" role="menuitem">Contact</a></li>
                <li role="none"><a href="/2026_Athens#register" class="nav-cta" role="menuitem">Register</a></li>
            </ul>
        </div>
    </nav>
