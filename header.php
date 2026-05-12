<?php
/**
 * The header for the Kingston theme.
 *
 * All editable bits read from the Theme Options page via kingston_option().
 * Each call ships a built-in default that matches the original static content,
 * so the site renders correctly out of the box even before ACF is configured.
 */

/* --- Defaults: primary nav (used when admin hasn't customised) --- */
$default_nav_items = array(
    array( 'label' => 'Home',  'url' => 'index', 'active_slug' => 'index', 'has_dropdown' => false ),
    array( 'label' => 'About', 'url' => 'about', 'active_slug' => 'about', 'has_dropdown' => false ),
    array(
        'label' => 'Services', 'url' => 'services', 'active_slug' => '',
        'has_dropdown' => true, 'dropdown_class' => '',
        'columns' => array(
            array( 'title' => 'Audit & Assurance', 'links' => array(
                array( 'label' => 'Statutory Audit',  'url' => 'statutory-audit' ),
                array( 'label' => 'Internal Audit',   'url' => 'internal-audit' ),
                array( 'label' => 'Forensic Audit',   'url' => 'forensic-audit' ),
                array( 'label' => 'Free Zone Audit',  'url' => 'free-zone' ),
                array( 'label' => 'Due Diligence',    'url' => 'due-diligence' ),
            ) ),
            array( 'title' => 'Tax, Advisory & Compliance', 'links' => array(
                array( 'label' => 'Corporate Tax',           'url' => 'corporate-tax' ),
                array( 'label' => 'VAT Services',            'url' => 'vat' ),
                array( 'label' => 'Excise Tax',              'url' => 'excise-tax' ),
                array( 'label' => 'Accounting & Bookkeeping', 'url' => 'accounting' ),
                array( 'label' => 'AML/CFT Compliance',      'url' => 'aml-compliance' ),
                array( 'label' => 'ESR Compliance',          'url' => 'esr' ),
                array( 'label' => 'Feasibility Studies',     'url' => 'feasibility-studies' ),
            ) ),
            array( 'title' => 'Business Setup', 'links' => array(
                array( 'label' => 'All Setup Options',      'url' => 'business-setup' ),
                array( 'label' => 'Mainland Setup',         'url' => 'mainland-setup' ),
                array( 'label' => 'Offshore Setup',         'url' => 'offshore-setup' ),
                array( 'label' => 'PRO & Visa Services',    'url' => 'pro-services' ),
            ) ),
        ),
    ),
    array(
        'label' => 'Free Zones', 'url' => 'freezones', 'active_slug' => '',
        'has_dropdown' => true, 'dropdown_class' => 'dropdown-fz',
        'columns' => array(
            array( 'title' => 'Dubai', 'links' => array(
                array( 'label' => 'DMCC',   'url' => 'free-zone-dmcc' ),
                array( 'label' => 'JAFZA',  'url' => 'free-zone-jafza' ),
                array( 'label' => 'DIFC',   'url' => 'free-zone-difc' ),
                array( 'label' => 'DAFZA',  'url' => 'free-zone-dafza' ),
                array( 'label' => 'IFZA',   'url' => 'free-zone-ifza' ),
                array( 'label' => 'Meydan', 'url' => 'free-zone-meydan' ),
            ) ),
            array( 'title' => 'Abu Dhabi', 'links' => array(
                array( 'label' => 'ADGM', 'url' => 'free-zone-adgm' ),
            ) ),
            array( 'title' => 'Sharjah & RAK', 'links' => array(
                array( 'label' => 'SHAMS · Sharjah',           'url' => 'free-zone-shams' ),
                array( 'label' => 'RAKEZ · Ras Al Khaimah',    'url' => 'free-zone-rakez' ),
            ) ),
        ),
    ),
    array( 'label' => 'Contact', 'url' => 'contact', 'active_slug' => 'contact', 'has_dropdown' => false ),
);

$nav_items = kingston_option_rows( 'nav_items', $default_nav_items );

/* --- Brand --- */
$brand_mark    = kingston_option( 'brand_mark',    'K' );
$brand_name    = kingston_option( 'brand_name',    'Kingston' );
$brand_tagline = kingston_option( 'brand_tagline', 'Chartered Auditing & Advisory' );
$brand_logo    = kingston_option_image( 'brand_logo', '' );

/* --- Top bar --- */
$tb_phone   = kingston_option( 'topbar_phone',   '+971 50 874 7098' );
$tb_email   = kingston_option( 'topbar_email',   'info@kingstonca.com' );
$tb_address = kingston_option( 'topbar_address', 'Sheikh Zayed Road, Dubai · UAE' );
$linkedin   = kingston_option( 'linkedin_url',   '#' );
$instagram  = kingston_option( 'instagram_url',  '#' );
$facebook   = kingston_option( 'facebook_url',   '#' );

/* --- Header CTA --- */
$cta_label = kingston_option( 'header_cta_label', 'Book a Consultation' );
$cta_link  = kingston_option( 'header_cta_link',  'contact' );
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
      <?php if ( $tb_phone ) : ?>
      <span>
        <?php echo kingston_icon( 'phone', 16 ); ?>
        <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $tb_phone ) ); ?>"><?php echo esc_html( $tb_phone ); ?></a>
      </span>
      <?php endif; ?>
      <?php if ( $tb_email ) : ?>
      <span>
        <?php echo kingston_icon( 'mail', 16 ); ?>
        <a href="mailto:<?php echo esc_attr( $tb_email ); ?>"><?php echo esc_html( $tb_email ); ?></a>
      </span>
      <?php endif; ?>
    </div>
    <div class="topbar-social">
      <?php if ( $tb_address ) : ?>
        <span><?php echo esc_html( $tb_address ); ?></span>
      <?php endif; ?>
      <?php if ( $linkedin ) : ?>
        <a href="<?php echo esc_url( $linkedin ); ?>" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 1 0-4 0v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
      <?php endif; ?>
      <?php if ( $instagram ) : ?>
        <a href="<?php echo esc_url( $instagram ); ?>" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></a>
      <?php endif; ?>
      <?php if ( $facebook ) : ?>
        <a href="<?php echo esc_url( $facebook ); ?>" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
      <?php endif; ?>
    </div>
  </div>
</div>

<!-- Header -->
<header class="site-header">
  <div class="container nav">
    <a class="brand" href="<?php echo kingston_url( 'index' ); ?>">
      <?php if ( $brand_logo ) : ?>
        <img src="<?php echo esc_url( $brand_logo ); ?>" alt="<?php echo esc_attr( $brand_name ); ?>" style="max-height:48px;width:auto" />
      <?php else : ?>
        <div class="brand-mark"><?php echo esc_html( $brand_mark ); ?></div>
        <div class="brand-text">
          <span class="brand-name"><?php echo esc_html( $brand_name ); ?></span>
          <span class="brand-tag"><?php echo esc_html( $brand_tagline ); ?></span>
        </div>
      <?php endif; ?>
    </a>
    <nav class="nav-links" aria-label="Primary">
      <?php foreach ( $nav_items as $item ) :
          $label        = kingston_row( $item, 'label' );
          $url          = kingston_row( $item, 'url', '#' );
          $active_slug  = kingston_row( $item, 'active_slug' );
          $has_dropdown = (bool) kingston_row( $item, 'has_dropdown', false );
          $dd_class     = trim( 'dropdown ' . kingston_row( $item, 'dropdown_class', '' ) );
          $active_attr  = $active_slug ? kingston_active( $active_slug ) : '';
          if ( $has_dropdown ) : ?>
        <div class="has-menu">
          <a href="<?php echo kingston_url( $url ); ?>"<?php echo $active_attr; ?>><?php echo esc_html( $label ); ?> <span aria-hidden="true">⌄</span></a>
          <div class="<?php echo esc_attr( $dd_class ); ?>" role="menu">
            <?php foreach ( (array) kingston_row( $item, 'columns', array() ) as $col ) : ?>
              <div class="dropdown-group">
                <span class="dropdown-title"><?php echo esc_html( kingston_row( $col, 'title' ) ); ?></span>
                <?php foreach ( (array) kingston_row( $col, 'links', array() ) as $link ) : ?>
                  <a href="<?php echo kingston_url( kingston_row( $link, 'url', '#' ) ); ?>"><?php echo esc_html( kingston_row( $link, 'label' ) ); ?></a>
                <?php endforeach; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php else : ?>
        <a href="<?php echo kingston_url( $url ); ?>"<?php echo $active_attr; ?>><?php echo esc_html( $label ); ?></a>
      <?php endif;
      endforeach; ?>
    </nav>
    <div class="nav-cta">
      <a href="<?php echo kingston_url( $cta_link ); ?>" class="btn btn-primary"><?php echo esc_html( $cta_label ); ?> <span class="arrow">→</span></a>
      <button class="nav-toggle" aria-label="Open menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

<!-- Mobile drawer (mirrors the primary nav, dropdowns flattened into submenus) -->
<aside class="mobile-menu" aria-hidden="true">
  <div class="top">
    <a class="brand" href="<?php echo kingston_url( 'index' ); ?>">
      <div class="brand-mark"><?php echo esc_html( $brand_mark ); ?></div>
      <div class="brand-text">
        <span class="brand-name" style="color:#fff"><?php echo esc_html( $brand_name ); ?></span>
        <span class="brand-tag"><?php echo esc_html( $brand_tagline ); ?></span>
      </div>
    </a>
    <button class="close" aria-label="Close menu">✕</button>
  </div>
  <nav>
    <?php foreach ( $nav_items as $item ) :
        $label        = kingston_row( $item, 'label' );
        $url          = kingston_row( $item, 'url', '#' );
        $has_dropdown = (bool) kingston_row( $item, 'has_dropdown', false ); ?>
      <a href="<?php echo kingston_url( $url ); ?>"><?php echo esc_html( $label ); ?></a>
      <?php if ( $has_dropdown ) : ?>
        <div class="submenu">
          <?php foreach ( (array) kingston_row( $item, 'columns', array() ) as $col ) :
              $col_title = kingston_row( $col, 'title' );
              if ( $col_title ) : ?>
                <span class="submenu-title"><?php echo esc_html( $col_title ); ?></span>
              <?php endif;
              foreach ( (array) kingston_row( $col, 'links', array() ) as $link ) : ?>
                <a href="<?php echo kingston_url( kingston_row( $link, 'url', '#' ) ); ?>">— <?php echo esc_html( kingston_row( $link, 'label' ) ); ?></a>
              <?php endforeach;
          endforeach; ?>
        </div>
      <?php endif;
    endforeach; ?>
  </nav>
  <a href="<?php echo kingston_url( $cta_link ); ?>" class="btn btn-gold" style="margin-top:24px"><?php echo esc_html( $cta_label ); ?> →</a>
</aside>
