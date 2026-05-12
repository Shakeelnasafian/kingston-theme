<?php
/**
 * Shared body for service-detail and freezone-detail pages.
 *
 * Each calling template sets two variables in scope before including this:
 *   $kingston_detail_defaults  — associative array of fallback content
 *                                 (matches the original static template)
 *   $kingston_detail_is_freezone — bool, adds the fz-facts row when true
 *
 * Then ACF fields override anything the admin has filled in.
 */

if ( ! isset( $kingston_detail_defaults ) || ! is_array( $kingston_detail_defaults ) ) {
    $kingston_detail_defaults = array();
}
$is_fz = ! empty( $kingston_detail_is_freezone );
$d     = $kingston_detail_defaults;

/* Fall back to defaults for every field. */
$breadcrumb     = kingston_field( 'breadcrumb',       $d['breadcrumb'] ?? '' );
$page_eyebrow   = kingston_field( 'page_eyebrow',     $d['page_eyebrow'] ?? '' );
$page_heading   = kingston_field( 'page_heading',     $d['page_heading'] ?? '' );
$page_intro     = kingston_field( 'page_intro',       $d['page_intro'] ?? '' );
$banner_url     = kingston_image_url( 'banner_image', $d['banner_image'] ?? '' );
$banner_alt     = kingston_field( 'banner_alt',       $d['banner_alt'] ?? ( $page_heading ?: 'Kingston' ) );

$ov_eyebrow     = kingston_field( 'overview_eyebrow', $d['overview_eyebrow'] ?? 'Overview' );
$ov_heading     = kingston_field( 'overview_heading', $d['overview_heading'] ?? '' );
$ov_body        = kingston_field( 'overview_body',    $d['overview_body'] ?? '' );

$fz_facts       = $is_fz ? kingston_rows( 'fz_facts', $d['fz_facts'] ?? array() ) : array();

$includes_h     = kingston_field( 'includes_heading', $d['includes_heading'] ?? 'What is included' );
$includes       = kingston_rows(  'includes_items',   $d['includes_items'] ?? array() );

$why_h          = kingston_field( 'why_heading',      $d['why_heading'] ?? 'Why clients choose Kingston' );
$why_items      = kingston_rows(  'why_items',        $d['why_items'] ?? array() );

$aside_h        = kingston_field( 'aside_heading',    $d['aside_heading'] ?? 'Talk to a partner' );
$aside_b        = kingston_field( 'aside_body',       $d['aside_body'] ?? 'Free, confidential, 30 minutes. We will tell you whether we can help and what it will cost.' );
$aside_btn_lbl  = kingston_field( 'aside_btn_label',  $d['aside_btn_label'] ?? 'Book consultation' );
$aside_btn_link = kingston_field( 'aside_btn_link',   $d['aside_btn_link']  ?? 'contact' );

$rel_heading    = kingston_field( 'related_heading',  $d['related_heading'] ?? ( $is_fz ? 'Other UAE Free Zones' : 'Other services' ) );
$rel_items      = kingston_rows(  'related_items',    $d['related_items'] ?? array() );

$proc_eyebrow   = kingston_field( 'process_eyebrow',  $d['process_eyebrow'] ?? ( $is_fz ? 'Process' : 'Our process' ) );
$proc_heading   = kingston_field( 'process_heading',  $d['process_heading'] ?? '' );
$proc_steps     = kingston_rows(  'process_steps',    $d['process_steps'] ?? array() );

$faq_eyebrow    = kingston_field( 'faq_eyebrow',      $d['faq_eyebrow'] ?? 'FAQ' );
$faq_heading    = kingston_field( 'faq_heading',      $d['faq_heading'] ?? '' );
$faq_items      = kingston_rows(  'faq_items',        $d['faq_items'] ?? array() );

/* Site-wide aside contact details (read once for re-use) */
$tb_phone   = kingston_option( 'topbar_phone',   '+971 50 874 7098' );
$tb_email   = kingston_option( 'topbar_email',   'info@kingstonca.com' );
$f_address  = kingston_option( 'footer_address', 'Office 203, Aspin Commercial Tower, Sheikh Zayed Road, Dubai' );
$tel_clean  = preg_replace( '/[^0-9+]/', '', $tb_phone );
?>
<section class="page-header">
  <div class="container">
    <?php if ( $breadcrumb ) : ?>
    <div class="crumbs">
      <a href="<?php echo kingston_url('index'); ?>">Home</a> <span>›</span> <span><?php echo esc_html( $breadcrumb ); ?></span>
    </div>
    <?php endif; ?>
    <?php if ( $page_eyebrow ) : ?><span class="eyebrow" style="color:var(--gold-400)"><?php echo esc_html( $page_eyebrow ); ?></span><?php endif; ?>
    <?php if ( $page_heading ) : ?><h1 class="mt-2"><?php echo esc_html( $page_heading ); ?></h1><?php endif; ?>
    <?php if ( $page_intro ) : ?><p><?php echo esc_html( $page_intro ); ?></p><?php endif; ?>
  </div>
</section>

<?php if ( $banner_url ) : ?>
<div class="detail-banner">
  <div class="img-frame"><img src="<?php echo esc_url( $banner_url ); ?>" alt="<?php echo esc_attr( $banner_alt ); ?>" loading="lazy"/></div>
</div>
<?php endif; ?>

<section>
  <div class="container service-layout">
    <div class="service-content reveal">
      <?php if ( $ov_eyebrow ) : ?><span class="eyebrow"><?php echo esc_html( $ov_eyebrow ); ?></span><?php endif; ?>
      <?php if ( $ov_heading ) : ?><h2 style="margin-top:14px"><?php echo esc_html( $ov_heading ); ?></h2><?php endif; ?>
      <?php if ( $ov_body ) : echo wpautop( wp_kses_post( $ov_body ) ); endif; ?>

      <?php if ( $is_fz && $fz_facts ) : ?>
      <div class="fz-facts">
        <?php foreach ( $fz_facts as $f ) : ?>
          <div class="fz-fact"><div class="lbl"><?php echo esc_html( kingston_row( $f, 'label' ) ); ?></div><div class="val"><?php echo esc_html( kingston_row( $f, 'value' ) ); ?></div></div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

      <?php if ( $includes ) : ?>
      <h3<?php echo $is_fz ? ' style="margin-top:36px"' : ''; ?>><?php echo esc_html( $includes_h ); ?></h3>
      <ul class="feat">
        <?php foreach ( $includes as $row ) : ?>
        <li>
          <span class="check"><?php echo kingston_icon( 'check', 14 ); ?></span>
          <div><strong><?php echo esc_html( kingston_row( $row, 'title' ) ); ?></strong><span><?php echo esc_html( kingston_row( $row, 'description' ) ); ?></span></div>
        </li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>

      <?php if ( $why_items ) : ?>
      <h3><?php echo esc_html( $why_h ); ?></h3>
      <ul class="feat">
        <?php foreach ( $why_items as $row ) : ?>
        <li>
          <span class="check"><?php echo kingston_icon( 'check', 14 ); ?></span>
          <div><strong><?php echo esc_html( kingston_row( $row, 'title' ) ); ?></strong><span><?php echo esc_html( kingston_row( $row, 'description' ) ); ?></span></div>
        </li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>
    </div>

    <aside style="display:flex;flex-direction:column;gap:18px">
      <div class="aside-card">
        <h4><?php echo esc_html( $aside_h ); ?></h4>
        <p><?php echo esc_html( $aside_b ); ?></p>
        <a href="<?php echo kingston_url( $aside_btn_link ); ?>" class="btn btn-gold" style="width:100%"><?php echo esc_html( $aside_btn_lbl ); ?></a>
        <div class="info" style="margin-top:24px">
          <?php echo kingston_icon( 'phone', 18 ); ?>
          <div><b>Call us</b><?php echo esc_html( $tb_phone ); ?></div>
        </div>
        <div class="info">
          <?php echo kingston_icon( 'mail', 18 ); ?>
          <div><b>Email us</b><?php echo esc_html( $tb_email ); ?></div>
        </div>
        <div class="info">
          <?php echo kingston_icon( 'pin', 18 ); ?>
          <div><b>Visit us</b><?php echo esc_html( $f_address ); ?></div>
        </div>
      </div>

      <?php if ( $rel_items ) : ?>
      <div class="related-services">
        <h4><?php echo esc_html( $rel_heading ); ?></h4>
        <?php foreach ( $rel_items as $r ) :
            $is_view_all = (bool) kingston_row( $r, 'view_all', false );
            $style = $is_view_all ? ' style="margin-top:6px;color:var(--gold-700);font-weight:600"' : '';
        ?>
          <a href="<?php echo kingston_url( kingston_row( $r, 'link', '#' ) ); ?>"<?php echo $style; ?>><?php echo esc_html( kingston_row( $r, 'label' ) ); ?> <span class="arrow">→</span></a>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </aside>
  </div>
</section>

<?php if ( $proc_steps ) : ?>
<section class="bg-bone">
  <div class="container">
    <div class="section-head reveal">
      <?php if ( $proc_eyebrow ) : ?><span class="eyebrow center"><?php echo esc_html( $proc_eyebrow ); ?></span><?php endif; ?>
      <?php if ( $proc_heading ) : ?><h2><?php echo esc_html( $proc_heading ); ?></h2><?php endif; ?>
    </div>
    <div class="process">
      <?php foreach ( $proc_steps as $i => $step ) : ?>
        <div class="step reveal"><span class="step-num"><?php echo esc_html( str_pad( $i + 1, 2, '0', STR_PAD_LEFT ) ); ?></span><h4><?php echo esc_html( kingston_row( $step, 'title' ) ); ?></h4><p><?php echo esc_html( kingston_row( $step, 'description' ) ); ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if ( $faq_items ) : ?>
<section>
  <div class="container" style="max-width:880px">
    <div class="section-head reveal">
      <?php if ( $faq_eyebrow ) : ?><span class="eyebrow center"><?php echo esc_html( $faq_eyebrow ); ?></span><?php endif; ?>
      <?php if ( $faq_heading ) : ?><h2><?php echo esc_html( $faq_heading ); ?></h2><?php endif; ?>
    </div>
    <?php foreach ( $faq_items as $faq ) : ?>
      <details class="faq reveal"><summary><?php echo esc_html( kingston_row( $faq, 'question' ) ); ?></summary><p><?php echo wp_kses_post( kingston_row( $faq, 'answer' ) ); ?></p></details>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>

<?php get_template_part( 'template-parts/cta-banner' ); ?>
