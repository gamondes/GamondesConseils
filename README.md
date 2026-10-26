# Gamondes Conseils — gamondesconseils.com

One-page site (French by default, `?lang=en`), same base as the Assist landing (pihassist.com).

- **Everything to complete or change is in `inc/site.php`** (e-mail, LinkedIn, sport, International SOS
  mention, field notes, legal notice). An empty value hides what depends on it.
- Texts: `lang/fr.php`, `lang/en.php` (same keys).
- No cookie, no form, no third-party call: fonts (`assets/fonts`) and images are served by the site.
- `.htaccess`: https + bare domain, old `/accueil` → `/`, security headers.

Deploy: upload the whole folder to the web root. Before going live, fill the legal notice in `inc/site.php`.
