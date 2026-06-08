<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Eurovi.be | European Vibe Coding Championship'; ?></title>

    <?php
    $desc    = isset($metaDescription) ? $metaDescription : 'Eurovi.be organises AI-assisted vibe coding competitions at developer events across Europe. Developers build complete applications live on stage using Claude, Cursor, and other AI tools. Next edition: Kortrijk, Belgium, June 29-30, 2026.';
    $keys    = isset($metaKeywords)    ? $metaKeywords    : 'vibe coding competition, AI coding competition Europe, developer competition 2026, vibe coding championship, coding contest Kortrijk 2026, AI developer event';
    $ogDesc  = isset($ogDescription)   ? $ogDescription   : $desc;
    $ogImg   = isset($ogImage)         ? $ogImage         : 'https://eurovi.be/images/og-image.jpg';
    ?>

    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo htmlspecialchars($desc); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($keys); ?>">
    <meta name="author" content="Eurovi.be">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://eurovi.be<?php echo $_SERVER['REQUEST_URI']; ?>">

    <?php if (isset($geoMeta)) echo $geoMeta; ?>

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://eurovi.be<?php echo $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:title" content="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Eurovi.be | European Vibe Coding Championship'; ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($ogDesc); ?>">
    <meta property="og:image" content="<?php echo $ogImg; ?>">
    <meta property="og:site_name" content="Eurovi.be">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Eurovi.be | European Vibe Coding Championship'; ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($ogDesc); ?>">
    <meta name="twitter:image" content="<?php echo $ogImg; ?>">

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
                <li role="none"><a href="/#faq" role="menuitem">FAQ</a></li>
                <li role="none"><a href="/contact.php" role="menuitem">Contact</a></li>
                <li role="none"><a href="/#competitions" class="nav-cta" role="menuitem">Register</a></li>
            </ul>
        </div>
    </nav>
