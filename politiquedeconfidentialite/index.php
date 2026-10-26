<?php
require_once __DIR__ . '/../inc/layout.php';

pageStart(['title' => 'meta_title_priv', 'desc' => 'meta_desc_priv', 'path' => 'politiquedeconfidentialite/']);

$mail = SITE['email'] !== '' ? '<a href="mailto:' . e(SITE['email']) . '">' . e(SITE['email']) . '</a>' : '';
?>
    <section class="page">
        <div class="inner narrow">
            <h1><?= t('priv_h') ?></h1>
            <p class="muted"><?= t('priv_updated') ?></p>

            <h2><?= t('priv_who_t') ?></h2>
            <p><?= sprintf(t('priv_who'), $mail) ?></p>

            <h2><?= t('priv_none_t') ?></h2>
            <p><?= t('priv_none') ?></p>

            <h2><?= t('priv_logs_t') ?></h2>
            <p><?= t('priv_logs') ?></p>

            <h2><?= t('priv_mail_t') ?></h2>
            <p><?= t('priv_mail') ?></p>

            <h2><?= t('priv_rights_t') ?></h2>
            <p><?= sprintf(t('priv_rights'), $mail) ?></p>
        </div>
    </section>
<?php pageEnd();
