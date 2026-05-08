<?php
/**
 * Shared CTA banner — appears at the bottom of every page.
 * Content is editable via the Theme Options page.
 */
$eyebrow   = kingston_option( 'cta_eyebrow',     'Ready to talk?' );
$heading   = kingston_option( 'cta_heading',     'Bring us your hardest audit, tax or advisory question.' );
$desc      = kingston_option( 'cta_description', 'Book a free 30-minute consultation. We will tell you straight whether we can help — and how much it will cost.' );
$pri_label = kingston_option( 'cta_primary_label',   'Book consultation' );
$pri_link  = kingston_option( 'cta_primary_link',    'contact' );
$sec_label = kingston_option( 'cta_secondary_label', 'Call +971 50 874 7098' );
$sec_link  = kingston_option( 'cta_secondary_link',  'tel:+971508747098' );
?>
<section style="padding:48px 0 var(--section-y)">
  <div class="container">
    <div class="cta-banner reveal">
      <div class="container cta-banner-row">
        <div>
          <span class="eyebrow" style="color:var(--gold-400)"><?php echo esc_html( $eyebrow ); ?></span>
          <h2 class="mt-2"><?php echo esc_html( $heading ); ?></h2>
          <p><?php echo esc_html( $desc ); ?></p>
        </div>
        <div class="cta-actions">
          <?php if ( $pri_label ) : ?>
            <a href="<?php echo kingston_url( $pri_link ); ?>" class="btn btn-gold"><?php echo esc_html( $pri_label ); ?> <span class="arrow">→</span></a>
          <?php endif; ?>
          <?php if ( $sec_label ) : ?>
            <a href="<?php echo kingston_url( $sec_link ); ?>" class="btn btn-light"><?php echo esc_html( $sec_label ); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
