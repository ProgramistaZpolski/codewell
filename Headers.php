<?php

/**
 * ----------------------------------------------------------------
 * Set the headers
 * ----------------------------------------------------------------
 * Set recommended headers, they mainly improve either the privacy or the security.
 */


header("X-pzplPHP-Version: 1.3-Headers-Only");

/**
 * Tell Google to FLoC off!
 * Prevent Google from spying on this website.
 * @see https://cleanuptheweb.org/
 */
header("Permissions-Policy: interest-cohort=()");

/**
 * Don't send a Referrer header to other domains, as it can be used to track users.
 * @see https://infosec.mozilla.org/guidelines/web_security#referrer-policy
 */
header("Referrer-Policy: same-origin");

/**
 * Don't load scripts unless the servers sends a correct mime-type.
 * @see https://infosec.mozilla.org/guidelines/web_security#x-content-type-options
 */
header("X-Content-Type-Options: nosniff");

/**
 * Block XSS Attack in older browsers.
 * @see https://infosec.mozilla.org/guidelines/web_security#x-xss-protection
 */
header("X-XSS-Protection: 1; mode=block");

/**
 * Indticate, that the server is not willing to track the user.
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Tk
 */
header("Tk: N");

/**
 * Isolate the document from popups and cross-origin documents.
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Cross-Origin-Opener-Policy
 */
header("Cross-Origin-Opener-Policy: same-origin");

/**
 * Allow DNS Prefetching.
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-DNS-Prefetch-Control
 */
header("X-DNS-Prefetch-Control: on");

/**
 * Block executing unsafe HTML in Internet Explorer.
 * @see https://docs.microsoft.com/en-us/archive/blogs/ie/ie8-security-part-v-comprehensive-protection
 */
header("X-Download-Options: noopen");

/**
 * Allow Adobe Products (Such as Flash Player and Acrobat Reader) to only download cross-domain policies,
 * when they are served with the text/x-cross-domain-policy mimetype.
 * @see https://owasp.org/www-project-secure-headers/#x-permitted-cross-domain-policies
 */
header("X-Permitted-Cross-Domain-Policies: by-content-type");