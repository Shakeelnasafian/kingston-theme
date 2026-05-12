<?php
/**
 * The footer for the Kingston theme.
 */

/* --- Defaults: footer columns --- */
$default_footer_columns = array(
    array( 'heading' => 'Company', 'links' => array(
        array( 'label' => 'About',    'url' => 'about' ),
        array( 'label' => 'Services', 'url' => 'services' ),
        array( 'label' => 'Contact',  'url' => 'contact' ),
        array( 'label' => 'Careers',  'url' => 'contact' ),
        array( 'label' => 'Privacy',  'url' => '#' ),
    ) ),
    array( 'heading' => 'Audit & Tax', 'links' => array(
        array( 'label' => 'Statutory Audit', 'url' => 'statutory-audit' ),
        array( 'label' => 'Internal Audit',  'url' => 'internal-audit' ),
        array( 'label' => 'Forensic Audit',  'url' => 'forensic-audit' ),
        array( 'label' => 'Free Zone Audit', 'url' => 'free-zone' ),
        array( 'label' => 'Due Diligence',   'url' => 'due-diligence' ),
        array( 'label' => 'Corporate Tax',   'url' => 'corporate-tax' ),
        array( 'label' => 'VAT Services',    'url' => 'vat' ),
        array( 'label' => 'Excise Tax',      'url' => 'excise-tax' ),
    ) ),
    array( 'heading' => 'Advisory & Setup', 'links' => array(
        array( 'label' => 'Business Setup',     'url' => 'business-setup' ),
        array( 'label' => 'Mainland Setup',     'url' => 'mainland-setup' ),
        array( 'label' => 'Free Zone Setup',    'url' => 'freezones' ),
        array( 'label' => 'Offshore Setup',     'url' => 'offshore-setup' ),
        array( 'label' => 'PRO & Visa',         'url' => 'pro-services' ),
        array( 'label' => 'Accounting',         'url' => 'accounting' ),
        array( 'label' => 'AML/CFT',            'url' => 'aml-compliance' ),
        array( 'label' => 'ESR',                'url' => 'esr' ),
        array( 'label' => 'Feasibility Studies', 'url' => 'feasibility-studies' ),
    ) ),
);

$footer_columns = kingston_option_rows( 'footer_columns', $default_footer_columns );

$brand_mark    = kingston_option( 'brand_mark',    'K' );
$brand_name    = kingston_option( 'brand_name',    'Kingston' );
$brand_tagline = kingston_option( 'brand_tagline', 'Chartered Auditing & Advisory' );
$brand_logo    = kingston_option_image( 'brand_logo', '' );

$desc          = kingston_option( 'footer_description', 'A trusted Dubai-based audit, tax and advisory firm built on integrity, technical excellence and financial transparency.' );
$f_address     = kingston_option( 'footer_address', 'Office 203, Aspin Commercial Tower, Sheikh Zayed Road, Dubai, UAE' );
$f_phone       = kingston_option( 'footer_phone',   '+971 50 874 7098' );
$f_email       = kingston_option( 'footer_email',   'info@kingstonca.com' );
$copyright     = kingston_option( 'footer_copyright', '© {year} Kingston Chartered Auditing & Advisory. All rights reserved.' );
$copyright     = str_replace( '{year}', date( 'Y' ), $copyright );
$license_line  = kingston_option( 'footer_license',   'Licensed in the UAE · IFRS & FTA-compliant' );

$linkedin   = kingston_option( 'linkedin_url',   '#' );
$instagram  = kingston_option( 'instagram_url',  '#' );
$facebook   = kingston_option( 'facebook_url',   '#' );

$tel_clean  = preg_replace( '/[^0-9+]/', '', $f_phone );
?>
<!-- Footer -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div>
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
        <p style="margin-top:18px;max-width:340px"><?php echo esc_html( $desc ); ?></p>
        <div class="footer-social" style="margin-top:22px">
          <?php if ( $linkedin ) : ?><a href="<?php echo esc_url( $linkedin ); ?>" aria-label="LinkedIn"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 1 0-4 0v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a><?php endif; ?>
          <?php if ( $instagram ) : ?><a href="<?php echo esc_url( $instagram ); ?>" aria-label="Instagram"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></a><?php endif; ?>
          <?php if ( $facebook ) : ?><a href="<?php echo esc_url( $facebook ); ?>" aria-label="Facebook"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a><?php endif; ?>
        </div>
      </div>
      <?php foreach ( $footer_columns as $col ) :
          $heading = kingston_row( $col, 'heading' );
          $links   = (array) kingston_row( $col, 'links', array() );
          if ( ! $heading && ! $links ) continue; ?>
        <div>
          <?php if ( $heading ) : ?><h5><?php echo esc_html( $heading ); ?></h5><?php endif; ?>
          <div class="footer-links">
            <?php foreach ( $links as $link ) : ?>
              <a href="<?php echo kingston_url( kingston_row( $link, 'url', '#' ) ); ?>"><?php echo esc_html( kingston_row( $link, 'label' ) ); ?></a>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
      <div>
        <h5>Contact</h5>
        <div class="footer-contact">
          <?php if ( $f_address ) : ?>
          <div>
            <?php echo kingston_icon( 'pin', 16 ); ?>
            <span><?php echo wp_kses_post( $f_address ); ?></span>
          </div>
          <?php endif; ?>
          <?php if ( $f_phone ) : ?>
          <div>
            <?php echo kingston_icon( 'phone', 16 ); ?>
            <a href="tel:<?php echo esc_attr( $tel_clean ); ?>"><?php echo esc_html( $f_phone ); ?></a>
          </div>
          <?php endif; ?>
          <?php if ( $f_email ) : ?>
          <div>
            <?php echo kingston_icon( 'mail', 16 ); ?>
            <a href="mailto:<?php echo esc_attr( $f_email ); ?>"><?php echo esc_html( $f_email ); ?></a>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <span><?php echo esc_html( $copyright ); ?></span>
      <span><?php echo esc_html( $license_line ); ?></span>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
