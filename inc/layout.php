<?php
/**
 * Shared page frame: <head> (SEO), navigation bar, footer.
 * Same structure as the Assist landing (pihassist.com): dark editorial sections,
 * Barlow Condensed titles, Roboto text — fonts served from this site (no third party).
 */
require_once __DIR__ . '/site.php';

/**
 * @param array{title:string, desc:string, path:string, noindex?:bool, home?:bool} $o
 *        path = page path without leading slash ('' for home, 'mentions-legales/')
 */
function pageStart(array $o): void
{
    global $lang;
    $page   = SITE['origin'] . '/' . $o['path'];
    $canon  = $page . ($lang === 'en' ? '?lang=en' : '');
    $title  = t($o['title']);
    $desc   = t($o['desc']);
    $robots = !empty($o['noindex']) ? 'noindex,follow' : 'index,follow,max-image-preview:large';
    $image  = SITE['origin'] . '/assets/img/field.jpg';

    $ld = null;
    if (!empty($o['home'])) {
        $person = [
            '@type' => 'Person', '@id' => SITE['origin'] . '/#aymeric', 'name' => 'Aymeric Gamondes',
            'jobTitle' => strip_tags(t('hero_tagline')), 'url' => SITE['origin'] . '/',
            'image' => SITE['origin'] . '/assets/img/aymeric-gamondes.jpg',
            'worksFor' => ['@id' => SITE['origin'] . '/#org'],
            'sameAs' => array_values(array_filter([SITE['linkedin'], SITE['press']['podcast']])),
        ];
        $org = [
            '@type' => 'ProfessionalService', '@id' => SITE['origin'] . '/#org', 'name' => 'Gamondes Conseils',
            'url' => SITE['origin'] . '/', 'logo' => SITE['origin'] . '/assets/img/favicon.png',
            'founder' => ['@id' => SITE['origin'] . '/#aymeric'],
        ];
        if (SITE['email'] !== '') $org['email'] = SITE['email'];
        $ld = json_encode(['@context' => 'https://schema.org', '@graph' => [$person, $org]],
            JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP);
    }
    ?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $desc ?>">
    <meta name="robots" content="<?= $robots ?>">
    <link rel="canonical" href="<?= e($canon) ?>">
    <link rel="alternate" hreflang="fr" href="<?= e($page) ?>">
    <link rel="alternate" hreflang="en" href="<?= e($page . '?lang=en') ?>">
    <link rel="alternate" hreflang="x-default" href="<?= e($page) ?>">
    <meta property="og:type" content="<?= !empty($o['home']) ? 'profile' : 'website' ?>">
    <meta property="og:site_name" content="Gamondes Conseils">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $desc ?>">
    <meta property="og:url" content="<?= e($canon) ?>">
    <meta property="og:image" content="<?= e($image) ?>">
    <meta property="og:locale" content="<?= $lang === 'en' ? 'en_GB' : 'fr_FR' ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="theme-color" content="#000000">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <link rel="apple-touch-icon" href="/assets/img/favicon.png">
    <link rel="preload" href="/assets/fonts/BarlowCondensed-600.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="/assets/css/site.css?v=1">
    <script>document.documentElement.classList.add('js');</script>
    <?php if ($ld): ?><script type="application/ld+json"><?= $ld ?></script><?php endif; ?>
</head>
<body>

<header class="navbar">
    <a class="brand" href="<?= e(url()) ?>">
        <img src="/assets/img/logo-white.png" width="28" height="28" alt="">
        <span>Gamondes Conseils</span>
    </a>
    <nav aria-label="<?= $lang === 'en' ? 'Main' : 'Navigation principale' ?>">
        <?php if (!empty($o['home'])): ?>
            <a class="nav-link" href="#what"><?= t('nav_what') ?></a>
            <a class="nav-link" href="#path"><?= t('nav_path') ?></a>
            <a class="nav-link" href="#build"><?= t('nav_build') ?></a>
        <?php else: ?>
            <a class="nav-link" href="<?= e(url()) ?>"><?= t('foot_home') ?></a>
        <?php endif; ?>
        <?php if (SITE['email'] !== ''): ?>
            <a class="nav-cta" href="mailto:<?= e(SITE['email']) ?>"><?= t('nav_contact') ?></a>
        <?php endif; ?>
        <span class="lang">
            <a href="<?= e(langUrl('fr')) ?>" <?= $lang === 'fr' ? 'aria-current="true"' : '' ?> lang="fr">FR</a>
            <span aria-hidden="true">|</span>
            <a href="<?= e(langUrl('en')) ?>" <?= $lang === 'en' ? 'aria-current="true"' : '' ?> lang="en">EN</a>
        </span>
    </nav>
</header>

<main>
    <?php
}

function pageEnd(): void
{
    ?>
</main>

<footer class="footer">
    <span>© <?= date('Y') ?> Gamondes Conseils</span>
    <nav aria-label="Footer">
        <a href="<?= e(url('mentions-legales/')) ?>"><?= t('foot_legal') ?></a>
        <a href="<?= e(url('politiquedeconfidentialite/')) ?>"><?= t('foot_privacy') ?></a>
        <?php if (SITE['linkedin'] !== ''): ?><a href="<?= e(SITE['linkedin']) ?>" rel="noopener">LinkedIn</a><?php endif; ?>
    </nav>
</footer>

<script>
/* Reveal sections as they enter the screen (same as the Assist landing); content stays visible without JS */
const io = new IntersectionObserver(es => es.forEach(x => { if (x.isIntersecting) { x.target.classList.add('is-visible'); io.unobserve(x.target); } }), { threshold: 0.12 });
document.querySelectorAll('.reveal').forEach(el => io.observe(el));
</script>
</body>
</html>
    <?php
}
