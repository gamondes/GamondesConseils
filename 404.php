<?php
http_response_code(404);
require_once __DIR__ . '/inc/layout.php';

pageStart(['title' => 'meta_title_404', 'desc' => 'meta_desc', 'path' => '', 'noindex' => true]);
?>
    <section class="page">
        <div class="inner narrow">
            <h1><?= t('nf_h') ?></h1>
            <p><?= t('nf_p') ?></p>
            <a class="btn" href="<?= e(url()) ?>"><?= t('foot_home') ?> &rarr;</a>
        </div>
    </section>
<?php pageEnd();
