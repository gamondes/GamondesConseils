<?php
/**
 * Shared page frame: <head> (SEO), navigation bar, footer.
 * Copied from the Assist landing (pihassist.com): transparent navbar over the photo that turns
 * into a floating glass capsule once scrolled (logo + one call to action), editorial photo
 * sections, Barlow Condensed / Roboto — fonts served from this site (no third party).
 */
require_once __DIR__ . '/site.php';

/**
 * @param array{title:string, desc:string, path:string, noindex?:bool, home?:bool} $o
 *        path = page path without leading slash ('' for home, 'mentions-legales/')
 */
function pageStart(array $o): void
{
    global $lang;
    $home   = !empty($o['home']);
    $page   = SITE['origin'] . '/' . $o['path'];
    $canon  = $page . ($lang === 'en' ? '?lang=en' : '');
    $title  = t($o['title']);
    $desc   = t($o['desc']);
    $robots = !empty($o['noindex']) ? 'noindex,follow' : 'index,follow,max-image-preview:large';
    $image  = SITE['origin'] . '/assets/img/operations.jpg';
    $anchor = fn(string $id) => $home ? '#' . $id : url() . '#' . $id;

    $ld = null;
    if ($home) {
        $org = [
            '@type' => 'ProfessionalService', '@id' => SITE['origin'] . '/#org', 'name' => 'Gamondes Conseils',
            'url' => SITE['origin'] . '/', 'logo' => SITE['origin'] . '/assets/img/favicon.png',
            'description' => html_entity_decode($desc, ENT_QUOTES, 'UTF-8'),
            'founder' => ['@id' => SITE['origin'] . '/#aymeric'],
        ];
        if (SITE['email'] !== '') $org['email'] = SITE['email'];
        $person = [
            '@type' => 'Person', '@id' => SITE['origin'] . '/#aymeric', 'name' => 'Aymeric Gamondes',
            'jobTitle' => html_entity_decode(t('path_role'), ENT_QUOTES, 'UTF-8'), 'url' => SITE['origin'] . '/',
            'image' => SITE['origin'] . '/assets/img/aymeric-gamondes.jpg',
            'worksFor' => ['@id' => SITE['origin'] . '/#org'],
            'sameAs' => array_values(array_filter([SITE['linkedin'], SITE['press']['podcast']])),
        ];
        $ld = json_encode(['@context' => 'https://schema.org', '@graph' => [$org, $person]],
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
    <meta property="og:type" content="website">
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
    <link rel="stylesheet" href="/assets/css/site.css?v=2">
    <script>document.documentElement.classList.add('js');</script>
    <?php if ($ld): ?><script type="application/ld+json"><?= $ld ?></script><?php endif; ?>
</head>
<body>

<header class="navbar" id="navbar">
    <a class="logo" href="<?= e(url()) ?>" aria-label="Gamondes Conseils">
        <span class="brand">Gamondes</span>
        <span class="subbrand">Conseils</span>
    </a>
    <button class="menu-toggle" type="button" aria-label="<?= t('nav_menu') ?>" aria-expanded="false" aria-controls="mobile-menu">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
    </button>
    <nav aria-label="<?= t('nav_main') ?>">
        <ul class="menu-items">
            <li><a href="<?= e($anchor('operations')) ?>"><?= t('nav_ops') ?></a></li>
            <li><a href="<?= e($anchor('approach')) ?>"><?= t('nav_how') ?></a></li>
            <li><a href="<?= e($anchor('path')) ?>"><?= t('nav_path') ?></a></li>
            <li><a href="<?= e($anchor('assist')) ?>"><?= t('nav_build') ?></a></li>
            <?php if (SITE['email'] !== ''): ?>
                <li class="nav-keep"><a class="nav-cta" href="mailto:<?= e(SITE['email']) ?>"><?= t('nav_contact') ?></a></li>
            <?php endif; ?>
            <li class="lang-switcher">
                <a href="<?= e(langUrl('fr')) ?>" lang="fr" <?= $lang === 'fr' ? 'class="lang-active" aria-current="true"' : '' ?>>FR</a>
                <span class="lang-sep" aria-hidden="true">|</span>
                <a href="<?= e(langUrl('en')) ?>" lang="en" <?= $lang === 'en' ? 'class="lang-active" aria-current="true"' : '' ?>>EN</a>
            </li>
        </ul>
    </nav>
</header>

<div class="mobile-menu" id="mobile-menu" hidden>
    <ul>
        <li><a href="<?= e($anchor('operations')) ?>"><?= t('nav_ops') ?> &rarr;</a></li>
        <li><a href="<?= e($anchor('approach')) ?>"><?= t('nav_how') ?> &rarr;</a></li>
        <li><a href="<?= e($anchor('path')) ?>"><?= t('nav_path') ?> &rarr;</a></li>
        <li><a href="<?= e($anchor('assist')) ?>"><?= t('nav_build') ?> &rarr;</a></li>
        <?php if (SITE['email'] !== ''): ?><li><a href="mailto:<?= e(SITE['email']) ?>"><?= t('nav_contact') ?> &rarr;</a></li><?php endif; ?>
        <li class="mobile-lang">
            <a href="<?= e(langUrl('fr')) ?>" lang="fr">FR</a> <span aria-hidden="true">|</span> <a href="<?= e(langUrl('en')) ?>" lang="en">EN</a>
        </li>
    </ul>
</div>

<main>
    <?php
}

function pageEnd(): void
{
    ?>
</main>

<footer class="footer">
    <div class="footer-brand"><span class="brand">Gamondes</span> <span class="subbrand">Conseils</span></div>
    <nav aria-label="Footer">
        <a href="<?= e(url('mentions-legales/')) ?>"><?= t('foot_legal') ?></a>
        <a href="<?= e(url('politiquedeconfidentialite/')) ?>"><?= t('foot_privacy') ?></a>
        <?php if (SITE['linkedin'] !== ''): ?><a href="<?= e(SITE['linkedin']) ?>" rel="noopener">LinkedIn</a><?php endif; ?>
        <a href="<?= e(SITE['assist']) ?>" rel="noopener">Assist</a>
    </nav>
    <span class="footer-copy">© <?= date('Y') ?> Gamondes Conseils</span>
</footer>

<script>
(function () {
    /* Navbar: full at the top, then a compact floating capsule (logo + one call to action) — as on Assist.
       Two thresholds so it does not flicker around the boundary. */
    var bar = document.getElementById('navbar');
    function update() {
        var y = window.scrollY || window.pageYOffset, c = bar.classList.contains('navbar--compact');
        if (!c && y > 80) bar.classList.add('navbar--compact');
        else if (c && y < 40) bar.classList.remove('navbar--compact');
    }
    window.addEventListener('scroll', update, { passive: true });
    update();

    /* Mobile menu */
    var btn = bar.querySelector('.menu-toggle'), menu = document.getElementById('mobile-menu');
    function close() { menu.hidden = true; btn.setAttribute('aria-expanded', 'false'); }
    btn.addEventListener('click', function () {
        var open = menu.hidden; menu.hidden = !open; btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    menu.addEventListener('click', function (e) { if (e.target.closest('a') || e.target === menu) close(); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') close(); });

    /* Reveal sections as they enter the screen; content stays visible without JS */
    var io = new IntersectionObserver(function (es) {
        es.forEach(function (x) { if (x.isIntersecting) { x.target.classList.add('is-visible'); io.unobserve(x.target); } });
    }, { threshold: 0.12 });
    document.querySelectorAll('.reveal').forEach(function (el) { io.observe(el); });
})();
</script>
</body>
</html>
    <?php
}
