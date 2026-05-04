<?php
/**
 * The header for the Kingston theme.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<!-- Top bar -->
<div class="topbar">
  <div class="container topbar-inner">
    <div class="topbar-meta">
      <span>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 2.08 4.18 2 2 0 0 1 4.07 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        <a href="tel:+971508747098">+971 50 874 7098</a>
      </span>
      <span>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        <a href="mailto:info@kingstonca.com">info@kingstonca.com</a>
      </span>
    </div>
    <div class="topbar-social">
      <span>Sheikh Zayed Road, Dubai · UAE</span>
      <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 1 0-4 0v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
      <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></a>
      <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="site-header">
  <div class="container nav">
    <a class="brand" href="<?php echo kingston_url( 'index.html' ); ?>">
      <div class="brand-mark">K</div>
      <div class="brand-text">
        <span class="brand-name">Kingston</span>
        <span class="brand-tag">Chartered Auditing &amp; Advisory</span>
      </div>
    </a>
    <nav class="nav-links" aria-label="Primary">
      <a href="<?php echo kingston_url( 'index.html' ); ?>"<?php echo kingston_active( 'index' ); ?>>Home</a>
      <a href="<?php echo kingston_url( 'about.html' ); ?>"<?php echo kingston_active( 'about' ); ?>>About</a>
      <div class="has-menu">
        <a href="<?php echo kingston_url( 'services.html' ); ?>">Services <span aria-hidden="true">⌄</span></a>
        <div class="dropdown" role="menu">
          <div class="dropdown-group">
            <span class="dropdown-title">Audit &amp; Assurance</span>
            <a href="<?php echo kingston_url( 'statutory-audit.html' ); ?>">Statutory Audit</a>
            <a href="<?php echo kingston_url( 'internal-audit.html' ); ?>">Internal Audit</a>
            <a href="<?php echo kingston_url( 'forensic-audit.html' ); ?>">Forensic Audit</a>
            <a href="<?php echo kingston_url( 'free-zone.html' ); ?>">Free Zone Audit</a>
            <a href="<?php echo kingston_url( 'due-diligence.html' ); ?>">Due Diligence</a>
          </div>
          <div class="dropdown-group">
            <span class="dropdown-title">Tax, Advisory &amp; Compliance</span>
            <a href="<?php echo kingston_url( 'corporate-tax.html' ); ?>">Corporate Tax</a>
            <a href="<?php echo kingston_url( 'vat.html' ); ?>">VAT Services</a>
            <a href="<?php echo kingston_url( 'excise-tax.html' ); ?>">Excise Tax</a>
            <a href="<?php echo kingston_url( 'accounting.html' ); ?>">Accounting &amp; Bookkeeping</a>
            <a href="<?php echo kingston_url( 'aml-compliance.html' ); ?>">AML/CFT Compliance</a>
            <a href="<?php echo kingston_url( 'esr.html' ); ?>">ESR Compliance</a>
            <a href="<?php echo kingston_url( 'feasibility-studies.html' ); ?>">Feasibility Studies</a>
          </div>
          <div class="dropdown-group">
            <span class="dropdown-title">Business Setup</span>
            <a href="<?php echo kingston_url( 'business-setup.html' ); ?>">All Setup Options</a>
            <a href="<?php echo kingston_url( 'mainland-setup.html' ); ?>">Mainland Setup</a>
            <a href="<?php echo kingston_url( 'offshore-setup.html' ); ?>">Offshore Setup</a>
            <a href="<?php echo kingston_url( 'pro-services.html' ); ?>">PRO &amp; Visa Services</a>
          </div>
        </div>
      </div>
      <div class="has-menu">
        <a href="<?php echo kingston_url( 'freezones.html' ); ?>">Free Zones <span aria-hidden="true">⌄</span></a>
        <div class="dropdown dropdown-fz" role="menu">
          <div class="dropdown-group">
            <span class="dropdown-title">Dubai</span>
            <a href="<?php echo kingston_url( 'free-zone-dmcc.html' ); ?>">DMCC</a>
            <a href="<?php echo kingston_url( 'free-zone-jafza.html' ); ?>">JAFZA</a>
            <a href="<?php echo kingston_url( 'free-zone-difc.html' ); ?>">DIFC</a>
            <a href="<?php echo kingston_url( 'free-zone-dafza.html' ); ?>">DAFZA</a>
            <a href="<?php echo kingston_url( 'free-zone-ifza.html' ); ?>">IFZA</a>
            <a href="<?php echo kingston_url( 'free-zone-meydan.html' ); ?>">Meydan</a>
          </div>
          <div class="dropdown-group">
            <span class="dropdown-title">Abu Dhabi</span>
            <a href="<?php echo kingston_url( 'free-zone-adgm.html' ); ?>">ADGM</a>
          </div>
          <div class="dropdown-group">
            <span class="dropdown-title">Sharjah &amp; RAK</span>
            <a href="<?php echo kingston_url( 'free-zone-shams.html' ); ?>">SHAMS · Sharjah</a>
            <a href="<?php echo kingston_url( 'free-zone-rakez.html' ); ?>">RAKEZ · Ras Al Khaimah</a>
          </div>
        </div>
      </div>
      <a href="<?php echo kingston_url( 'contact.html' ); ?>"<?php echo kingston_active( 'contact' ); ?>>Contact</a>
    </nav>
    <div class="nav-cta">
      <a href="<?php echo kingston_url( 'contact.html' ); ?>" class="btn btn-primary">Book a Consultation <span class="arrow">→</span></a>
      <button class="nav-toggle" aria-label="Open menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

<!-- Mobile drawer -->
<aside class="mobile-menu" aria-hidden="true">
  <div class="top">
    <a class="brand" href="<?php echo kingston_url( 'index.html' ); ?>">
      <div class="brand-mark">K</div>
      <div class="brand-text">
        <span class="brand-name" style="color:#fff">Kingston</span>
        <span class="brand-tag">Chartered Auditing &amp; Advisory</span>
      </div>
    </a>
    <button class="close" aria-label="Close menu">✕</button>
  </div>
  <nav>
    <a href="<?php echo kingston_url( 'index.html' ); ?>">Home</a>
    <a href="<?php echo kingston_url( 'about.html' ); ?>">About</a>
    <a href="<?php echo kingston_url( 'services.html' ); ?>">Services</a>
    <div class="submenu">
      <a href="<?php echo kingston_url( 'statutory-audit.html' ); ?>">— Statutory Audit</a>
      <a href="<?php echo kingston_url( 'internal-audit.html' ); ?>">— Internal Audit</a>
      <a href="<?php echo kingston_url( 'forensic-audit.html' ); ?>">— Forensic Audit</a>
      <a href="<?php echo kingston_url( 'free-zone.html' ); ?>">— Free Zone Audit</a>
      <a href="<?php echo kingston_url( 'due-diligence.html' ); ?>">— Due Diligence</a>
      <a href="<?php echo kingston_url( 'corporate-tax.html' ); ?>">— Corporate Tax</a>
      <a href="<?php echo kingston_url( 'vat.html' ); ?>">— VAT Services</a>
      <a href="<?php echo kingston_url( 'excise-tax.html' ); ?>">— Excise Tax</a>
      <a href="<?php echo kingston_url( 'accounting.html' ); ?>">— Accounting &amp; Bookkeeping</a>
      <a href="<?php echo kingston_url( 'aml-compliance.html' ); ?>">— AML/CFT Compliance</a>
      <a href="<?php echo kingston_url( 'esr.html' ); ?>">— ESR Compliance</a>
      <a href="<?php echo kingston_url( 'feasibility-studies.html' ); ?>">— Feasibility Studies</a>
      <a href="<?php echo kingston_url( 'business-setup.html' ); ?>">— Business Setup</a>
      <a href="<?php echo kingston_url( 'mainland-setup.html' ); ?>">— Mainland Setup</a>
      <a href="<?php echo kingston_url( 'offshore-setup.html' ); ?>">— Offshore Setup</a>
      <a href="<?php echo kingston_url( 'pro-services.html' ); ?>">— PRO &amp; Visa Services</a>
    </div>
    <a href="<?php echo kingston_url( 'freezones.html' ); ?>">Free Zones</a>
    <div class="submenu">
      <span class="submenu-title">Dubai</span>
      <a href="<?php echo kingston_url( 'free-zone-dmcc.html' ); ?>">— DMCC</a>
      <a href="<?php echo kingston_url( 'free-zone-jafza.html' ); ?>">— JAFZA</a>
      <a href="<?php echo kingston_url( 'free-zone-difc.html' ); ?>">— DIFC</a>
      <a href="<?php echo kingston_url( 'free-zone-dafza.html' ); ?>">— DAFZA</a>
      <a href="<?php echo kingston_url( 'free-zone-ifza.html' ); ?>">— IFZA</a>
      <a href="<?php echo kingston_url( 'free-zone-meydan.html' ); ?>">— Meydan</a>
      <span class="submenu-title">Abu Dhabi</span>
      <a href="<?php echo kingston_url( 'free-zone-adgm.html' ); ?>">— ADGM</a>
      <span class="submenu-title">Sharjah &amp; RAK</span>
      <a href="<?php echo kingston_url( 'free-zone-shams.html' ); ?>">— SHAMS · Sharjah</a>
      <a href="<?php echo kingston_url( 'free-zone-rakez.html' ); ?>">— RAKEZ · Ras Al Khaimah</a>
    </div>
    <a href="<?php echo kingston_url( 'contact.html' ); ?>">Contact</a>
  </nav>
  <a href="<?php echo kingston_url( 'contact.html' ); ?>" class="btn btn-gold" style="margin-top:24px">Book a Consultation →</a>
</aside>
