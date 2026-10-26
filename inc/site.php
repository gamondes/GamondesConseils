<?php
/**
 * Gamondes Conseils — everything that changes from one person / one year to the next is HERE.
 * Pages read this file only; nothing else needs editing to complete the site.
 *
 * A value left empty ('' or []) hides what depends on it: the site never shows a placeholder.
 */

const SITE = [
    // Canonical address (no trailing slash). The .htaccess sends www. and http:// here.
    'origin'   => 'https://gamondesconseils.com',

    // Contact — an address on the domain (credibility). Shown on the page and in the legal notice.
    'email'    => 'info@gamondesconseils.com',
    'linkedin' => '',                                   // TO COMPLETE: https://www.linkedin.com/in/…

    // Parcours
    'sport'    => '',                                   // TO COMPLETE: the discipline, e.g. 'Rugby' — empty = line hidden

    // International SOS may be named ONLY with its written agreement. false = neutral wording.
    'cite_isos' => false,

    // Field notes: the latest LinkedIn articles, most recent first — empty = section hidden.
    // ['title' => '…', 'url' => 'https://www.linkedin.com/pulse/…', 'date' => '2026-11-06']
    'notes'    => [],

    // Press and podcast (already public)
    'press' => [
        'dauphine' => 'https://www.ledauphine.com/insolite/2022/11/05/l-infirmier-privadois-qui-a-soigne-zverev-a-roland-garros',
        'podcast'  => 'https://www.meditthrough.com/episode/30-aymeric-gamondes-pih-medic-lexperience-comme-richesse-la-volonte-comme-moteur-comment-proposer-des-solutions-impactantes',
    ],

    'assist'   => 'https://pihassist.com',

    // Legal notice (mentions légales, LCEN art. 6) — from the RNE extract of 13/02/2024.
    // Individual business (EI): no share capital, no RCS; "EI" must follow the name (law of 14/02/2022).
    'legal' => [
        'company'   => 'Aymeric Gamondes EI — nom commercial Gamondes Conseils',
        'form'      => 'Entrepreneur individuel',
        'capital'   => '',
        'address'   => '25 avenue des Mimosas, 92100 Boulogne-Billancourt, France',
        'siren'     => 'SIRET 984 556 688 00013 — APE 7022Z',
        'vat'       => '',     // only if the business has an intra-EU VAT number
        'publisher' => 'Aymeric Gamondes',
        'host'      => 'OVH SAS, 2 rue Kellermann, 59100 Roubaix, France — +33 9 72 10 10 07',
    ],
];

/* ── Language: ?lang=en, French by default. No cookie: the choice travels in the links. ── */
$lang = (($_GET['lang'] ?? '') === 'en') ? 'en' : 'fr';
$T    = require __DIR__ . '/../lang/' . $lang . '.php';

/** Text of the page, escaped for HTML (text nodes and attributes alike). */
function t(string $key): string
{
    global $T;
    return htmlspecialchars($T[$key] ?? $key, ENT_QUOTES, 'UTF-8');
}

function e(?string $s): string
{
    return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
}

/** Internal link keeping the language: url('mentions-legales/') */
function url(string $path = ''): string
{
    global $lang;
    return '/' . ltrim($path, '/') . ($lang === 'en' ? '?lang=en' : '');
}

/** Same page in the other language */
function langUrl(string $to): string
{
    $path = strtok($_SERVER['REQUEST_URI'] ?? '/', '?') ?: '/';
    return $path . ($to === 'en' ? '?lang=en' : '');
}
