<?php
require_once __DIR__ . '/inc/layout.php';

pageStart(['title' => 'meta_title', 'desc' => 'meta_desc', 'path' => '', 'home' => true]);
$isos = SITE['cite_isos'];
?>

    <!-- HERO — one field photo, the name, what it is in one line -->
    <section class="hero" aria-labelledby="hero-title">
        <img class="hero-img" src="/assets/img/field.jpg" width="1365" height="768" alt="<?= t('hero_alt') ?>" fetchpriority="high">
        <span class="scrim" aria-hidden="true"></span>
        <div class="hero-content">
            <span class="label"><?= t('hero_label') ?></span>
            <h1 id="hero-title">Aymeric Gamondes</h1>
            <p class="tagline"><?= t('hero_tagline') ?></p>
            <p class="lead"><?= t('hero_sub') ?></p>
            <?php if (SITE['email'] !== ''): ?>
                <a class="btn" href="mailto:<?= e(SITE['email']) ?>"><?= t('hero_cta') ?></a>
            <?php endif; ?>
        </div>
    </section>

    <!-- CE QUE JE FAIS -->
    <section class="block reveal" id="what" aria-labelledby="what-title">
        <div class="inner narrow">
            <span class="label"><?= t('what_label') ?></span>
            <h2 id="what-title"><?= t('what_h') ?></h2>
            <p><?= t('what_p1') ?></p>
            <p><?= t($isos ? 'what_p2_isos' : 'what_p2') ?></p>
        </div>
    </section>

    <!-- PARCOURS -->
    <section class="block block--alt reveal" id="path" aria-labelledby="path-title">
        <div class="inner path">
            <div class="path-text">
                <span class="label"><?= t('path_label') ?></span>
                <h2 id="path-title"><?= t('path_h') ?></h2>
                <dl class="timeline">
                    <?php if (SITE['sport'] !== ''): ?>
                        <dt><?= t('path_sport_t') ?></dt>
                        <dd><?= sprintf(t('path_sport'), e(SITE['sport'])) ?></dd>
                    <?php endif; ?>
                    <dt><?= t('path_urg_t') ?></dt>
                    <dd><?= t('path_urg') ?></dd>
                    <dt><?= t('path_ops_t') ?></dt>
                    <dd><?= t('path_ops') ?></dd>
                    <dt><?= t('path_now_t') ?></dt>
                    <dd><?= t($isos ? 'path_now_isos' : 'path_now') ?></dd>
                </dl>
                <p class="links">
                    <a href="<?= e(SITE['press']['dauphine']) ?>" rel="noopener"><?= t('path_press') ?> &rarr;</a>
                    <a href="<?= e(SITE['press']['podcast']) ?>" rel="noopener"><?= t('path_podcast') ?> &rarr;</a>
                </p>
            </div>
            <img class="portrait" src="/assets/img/aymeric-gamondes.jpg" width="640" height="640" alt="<?= t('path_portrait') ?>" loading="lazy">
        </div>
    </section>

    <!-- COMMENT JE TRAVAILLE -->
    <section class="block reveal" id="how" aria-labelledby="how-title">
        <div class="inner narrow">
            <span class="label" id="how-title"><?= t('how_label') ?></span>
            <p class="statement"><?= t('how_p') ?></p>
        </div>
    </section>

    <!-- CE QUE JE CONSTRUIS -->
    <section class="block block--alt reveal" id="build" aria-labelledby="build-title">
        <div class="inner narrow">
            <span class="label"><?= t('build_label') ?></span>
            <h2 id="build-title"><?= t('build_h') ?></h2>
            <p><?= t('build_p') ?></p>
            <a class="btn btn--ghost" href="<?= e(SITE['assist']) ?>" rel="noopener"><?= t('build_cta') ?> &rarr;</a>
        </div>
    </section>

    <?php if (SITE['notes']): ?>
    <!-- NOTES DE TERRAIN — the latest LinkedIn articles (inc/site.php) -->
    <section class="block reveal" id="notes" aria-labelledby="notes-title">
        <div class="inner narrow">
            <span class="label" id="notes-title"><?= t('notes_label') ?></span>
            <p><?= t('notes_p') ?></p>
            <ul class="notes">
                <?php foreach (array_slice(SITE['notes'], 0, 3) as $n): ?>
                    <li>
                        <a href="<?= e($n['url']) ?>" rel="noopener"><?= e($n['title']) ?></a>
                        <?php if (!empty($n['date'])): ?><time datetime="<?= e($n['date']) ?>"><?= e($n['date']) ?></time><?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <?php endif; ?>

    <?php if (SITE['email'] !== ''): ?>
    <!-- CONTACT — an address, no form -->
    <section class="block block--contact reveal" id="contact" aria-labelledby="contact-title">
        <div class="inner narrow">
            <span class="label" id="contact-title"><?= t('contact_label') ?></span>
            <p class="contact-mail"><a href="mailto:<?= e(SITE['email']) ?>"><?= e(SITE['email']) ?></a></p>
            <p><?= t('contact_p') ?></p>
        </div>
    </section>
    <?php endif; ?>

<?php pageEnd();
