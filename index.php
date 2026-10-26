<?php
require_once __DIR__ . '/inc/layout.php';

pageStart(['title' => 'meta_title', 'desc' => 'meta_desc', 'path' => '', 'home' => true]);
$isos = SITE['cite_isos'];
?>

    <!-- 1. HERO — the subject first: medical operations. Text bottom-left, as on Assist. -->
    <section class="section section--editorial section--hero" aria-labelledby="hero-title">
        <img src="/assets/img/operations.jpg" width="1920" height="1280" alt="<?= t('hero_alt') ?>" fetchpriority="high">
        <span class="scrim scrim--left" aria-hidden="true"></span>
        <div class="content reveal">
            <span class="label"><?= t('hero_label') ?></span>
            <h1 id="hero-title"><?= t('hero_h1') ?></h1>
            <p class="hero-sub"><?= t('hero_sub') ?></p>
            <div class="hero-ctas">
                <?php if (SITE['email'] !== ''): ?>
                    <a class="btn btn--glass" href="mailto:<?= e(SITE['email']) ?>"><?= t('hero_cta') ?></a>
                <?php endif; ?>
                <a class="text-link" href="#approach"><?= t('hero_link1') ?> &rarr;</a>
                <a class="text-link" href="#path"><?= t('hero_link2') ?> &rarr;</a>
            </div>
        </div>
    </section>

    <!-- 2. OPÉRATIONS MÉDICALES — three steps -->
    <section class="section-dark" id="operations" aria-labelledby="ops-title">
        <div class="section-dark-inner reveal">
            <span class="label"><?= t('ops_label') ?></span>
            <h2 class="dark-title" id="ops-title"><?= t('ops_h') ?></h2>
            <p class="section-intro"><?= t('ops_intro') ?></p>
            <div class="card-grid card-grid--3">
                <?php foreach ([1, 2, 3] as $i): ?>
                    <article class="card">
                        <span class="card-num">0<?= $i ?></span>
                        <h3><?= t('ops' . $i . '_t') ?></h3>
                        <p><?= t('ops' . $i) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 3. STATEMENT — one sentence, no button -->
    <section class="section section--editorial" aria-labelledby="field-title">
        <img src="/assets/img/field.jpg" width="1365" height="768" alt="<?= t('field_alt') ?>" loading="lazy">
        <span class="scrim scrim--right" aria-hidden="true"></span>
        <div class="content content--right reveal">
            <h2 class="statement" id="field-title"><?= t('field_h') ?></h2>
        </div>
    </section>

    <!-- 4. APPROCHE -->
    <section class="section-dark section-dark--alt" id="approach" aria-labelledby="how-title">
        <div class="section-dark-inner reveal">
            <span class="label"><?= t('how_label') ?></span>
            <h2 class="dark-title" id="how-title"><?= t('how_h') ?></h2>
            <div class="card-grid card-grid--3">
                <?php foreach ([1, 2, 3] as $i): ?>
                    <article class="card card--plain">
                        <h3><?= t('how' . $i . '_t') ?></h3>
                        <p><?= t('how' . $i) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 5. PARCOURS — the person, after the subject -->
    <section class="section-dark" id="path" aria-labelledby="path-title">
        <div class="section-dark-inner path reveal">
            <div class="path-head">
                <img class="portrait" src="/assets/img/aymeric-gamondes.jpg" width="640" height="640" alt="<?= t('path_portrait') ?>" loading="lazy">
                <div>
                    <span class="label"><?= t('path_label') ?></span>
                    <h2 class="dark-title" id="path-title">Aymeric Gamondes</h2>
                    <p class="path-role"><?= t('path_role') ?></p>
                    <p class="section-intro"><?= t('path_intro') ?></p>
                </div>
            </div>
            <ol class="timeline">
                <?php
                $steps = [];
                if (SITE['sport'] !== '') $steps[] = [t('path_sport_t'), sprintf(t('path_sport'), e(SITE['sport']))];
                $steps[] = [t('path_urg_t'), t('path_urg')];
                $steps[] = [t('path_exc_t'), t('path_exc')];
                $steps[] = [t('path_ops_t'), t('path_ops')];
                $steps[] = [t('path_ent_t'), t('path_ent')];
                $steps[] = [t('path_now_t'), t($isos ? 'path_now_isos' : 'path_now')];
                foreach ($steps as [$title, $text]): ?>
                    <li>
                        <h3><?= $title ?></h3>
                        <p><?= $text ?></p>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </section>

    <!-- 6. ASSIST — WITH direction -->
    <section class="section section--editorial" id="assist" aria-labelledby="build-title">
        <img src="/assets/img/offshore.jpg" width="1920" height="1280" alt="<?= t('build_alt') ?>" loading="lazy">
        <span class="scrim scrim--left" aria-hidden="true"></span>
        <div class="content reveal">
            <span class="label"><?= t('build_label') ?></span>
            <h2 class="statement" id="build-title"><?= t('build_h') ?></h2>
            <p class="hero-sub"><?= t('build_p') ?></p>
            <div class="hero-ctas">
                <a class="btn btn--ghost" href="<?= e(SITE['assist']) ?>" rel="noopener"><?= t('build_cta') ?> &rarr;</a>
            </div>
        </div>
    </section>

    <!-- 7. PRESSE -->
    <section class="section-dark section-dark--short" aria-labelledby="press-title">
        <div class="section-dark-inner reveal">
            <span class="label" id="press-title"><?= t('press_label') ?></span>
            <div class="card-grid card-grid--2">
                <a class="card card--link" href="<?= e(SITE['press']['dauphine']) ?>" rel="noopener">
                    <span class="card-src"><?= t('press1_src') ?></span>
                    <p class="card-quote"><?= t('press1_t') ?></p>
                    <span class="card-more"><?= t('press1_cta') ?> &rarr;</span>
                </a>
                <a class="card card--link" href="<?= e(SITE['press']['podcast']) ?>" rel="noopener">
                    <span class="card-src"><?= t('press2_src') ?></span>
                    <p class="card-quote"><?= t('press2_t') ?></p>
                    <span class="card-more"><?= t('press2_cta') ?> &rarr;</span>
                </a>
            </div>
        </div>
    </section>

    <?php if (SITE['notes']): ?>
    <!-- NOTES DE TERRAIN — the latest LinkedIn articles (inc/site.php) -->
    <section class="section-dark section-dark--alt section-dark--short" aria-labelledby="notes-title">
        <div class="section-dark-inner reveal">
            <span class="label" id="notes-title"><?= t('notes_label') ?></span>
            <p class="section-intro"><?= t('notes_p') ?></p>
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
    <!-- 8. CONTACT — final, WITH direction -->
    <section class="section section--editorial section--center" id="contact" aria-labelledby="contact-title">
        <img src="/assets/img/cabin.jpg" width="1920" height="1280" alt="<?= t('contact_alt') ?>" loading="lazy">
        <span class="scrim scrim--full" aria-hidden="true"></span>
        <div class="content content--center reveal">
            <span class="label"><?= t('contact_label') ?></span>
            <h2 class="statement" id="contact-title"><?= t('contact_h') ?></h2>
            <p class="contact-mail"><a href="mailto:<?= e(SITE['email']) ?>"><?= e(SITE['email']) ?></a></p>
            <p class="hero-sub"><?= t('contact_p') ?></p>
        </div>
    </section>
    <?php endif; ?>

<?php pageEnd();
