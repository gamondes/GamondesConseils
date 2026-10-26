<?php
require_once __DIR__ . '/../inc/layout.php';

pageStart(['title' => 'meta_title_legal', 'desc' => 'meta_desc_legal', 'path' => 'mentions-legales/']);

$L    = SITE['legal'];
$rows = [
    'legal_company'   => $L['company'],
    'legal_form'      => $L['form'],
    'legal_capital'   => $L['capital'],
    'legal_address'   => $L['address'],
    'legal_siren'     => $L['siren'],
    'legal_vat'       => $L['vat'],
    'legal_publisher' => $L['publisher'],
    'legal_contact'   => SITE['email'],
];
?>
    <section class="page">
        <div class="inner narrow">
            <h1><?= t('legal_h') ?></h1>

            <h2><?= t('legal_editor') ?></h2>
            <dl class="facts">
                <?php foreach ($rows as $label => $value): if ($value === '') continue; ?>
                    <dt><?= t($label) ?></dt>
                    <dd><?= $label === 'legal_contact' ? '<a href="mailto:' . e($value) . '">' . e($value) . '</a>' : e($value) ?></dd>
                <?php endforeach; ?>
            </dl>

            <?php if ($L['host'] !== ''): ?>
                <h2><?= t('legal_host') ?></h2>
                <p><?= e($L['host']) ?></p>
            <?php endif; ?>

            <h2><?= t('legal_ip') ?></h2>
            <p><?= t('legal_ip_p') ?></p>
        </div>
    </section>
<?php pageEnd();
