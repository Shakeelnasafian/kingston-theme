<?php
/**
 * Template Name: Free Zones (overview)
 */
get_header();

$default_fz_cards = array(
    array( 'short_name' => 'DMCC',   'full_name' => 'Dubai Multi Commodities Centre',     'emirate' => 'Dubai · est. 2002',     'tagline' => "The world's #1 free zone — Dubai's powerhouse for trading, commodities, crypto, fintech and family business.", 'tags' => array( array('text'=>'Trading'), array('text'=>'Commodities'), array('text'=>'Crypto'), array('text'=>'Family Office') ), 'image' => kingston_asset('img/freezones/dmcc.svg'),  'link' => 'free-zone-dmcc', 'read_label' => 'Setup details' ),
    array( 'short_name' => 'JAFZA',  'full_name' => 'Jebel Ali Free Zone Authority',      'emirate' => 'Dubai · est. 1985',     'tagline' => "The Middle East's largest free zone — purpose-built for logistics, manufacturing and re-export at scale.", 'tags' => array( array('text'=>'Logistics'), array('text'=>'Manufacturing'), array('text'=>'Warehousing'), array('text'=>'Trade') ), 'image' => kingston_asset('img/freezones/jafza.svg'), 'link' => 'free-zone-jafza', 'read_label' => 'Setup details' ),
    array( 'short_name' => 'DIFC',   'full_name' => 'Dubai International Financial Centre','emirate' => 'Dubai · est. 2004',    'tagline' => "The Middle East's leading financial hub — common law, English-language regulator, and the place to be for funds, banks, fintech and law firms.", 'tags' => array( array('text'=>'Financial Services'), array('text'=>'Fintech'), array('text'=>'Funds'), array('text'=>'Wealth') ), 'image' => kingston_asset('img/freezones/difc.svg'),  'link' => 'free-zone-difc', 'read_label' => 'Setup details' ),
    array( 'short_name' => 'ADGM',   'full_name' => 'Abu Dhabi Global Market',            'emirate' => 'Abu Dhabi · est. 2015', 'tagline' => "Abu Dhabi's international financial centre — an English common-law jurisdiction on Al Maryah Island.", 'tags' => array( array('text'=>'Financial Services'), array('text'=>'Family Offices'), array('text'=>'Fintech'), array('text'=>'Holding') ), 'image' => kingston_asset('img/freezones/adgm.svg'),  'link' => 'free-zone-adgm', 'read_label' => 'Setup details' ),
    array( 'short_name' => 'DAFZA',  'full_name' => 'Dubai Airport Free Zone',            'emirate' => 'Dubai · est. 1996',     'tagline' => 'The hub for fast-moving, high-value goods — co-located with Dubai International Airport.', 'tags' => array( array('text'=>'Aviation'), array('text'=>'Pharma'), array('text'=>'Tech'), array('text'=>'FMCG') ), 'image' => kingston_asset('img/freezones/dafza.svg'), 'link' => 'free-zone-dafza', 'read_label' => 'Setup details' ),
    array( 'short_name' => 'RAKEZ',  'full_name' => 'Ras Al Khaimah Economic Zone',       'emirate' => 'Ras Al Khaimah · est. 2017', 'tagline' => 'The cost-effective free zone with industrial scale and emerging-business agility.', 'tags' => array( array('text'=>'Industrial'), array('text'=>'Cost-effective'), array('text'=>'SME'), array('text'=>'E-commerce') ), 'image' => kingston_asset('img/freezones/rakez.svg'), 'link' => 'free-zone-rakez', 'read_label' => 'Setup details' ),
    array( 'short_name' => 'IFZA',   'full_name' => 'International Free Zone Authority',  'emirate' => 'Dubai · est. 2018',     'tagline' => "Dubai's modern, fast and entrepreneur-friendly free zone — strong for service, consultancy and trading SMEs.", 'tags' => array( array('text'=>'SME'), array('text'=>'Service'), array('text'=>'Consultancy'), array('text'=>'Trading') ), 'image' => kingston_asset('img/freezones/ifza.svg'), 'link' => 'free-zone-ifza', 'read_label' => 'Setup details' ),
    array( 'short_name' => 'Meydan', 'full_name' => 'Meydan Free Zone',                   'emirate' => 'Dubai · est. 2019',     'tagline' => 'A premium Dubai address — strong for founders, consultancies and crypto-adjacent businesses.', 'tags' => array( array('text'=>'Premium'), array('text'=>'Founders'), array('text'=>'Consultancy'), array('text'=>'Crypto-friendly') ), 'image' => kingston_asset('img/freezones/meydan.svg'), 'link' => 'free-zone-meydan', 'read_label' => 'Setup details' ),
    array( 'short_name' => 'SHAMS',  'full_name' => 'Sharjah Media City',                 'emirate' => 'Sharjah · est. 2017',   'tagline' => "Sharjah's media-and-creative free zone — affordable, fast and friendly to digital creators.", 'tags' => array( array('text'=>'Media'), array('text'=>'Creative'), array('text'=>'Digital'), array('text'=>'Affordable') ), 'image' => kingston_asset('img/freezones/shams.svg'), 'link' => 'free-zone-shams', 'read_label' => 'Setup details' ),
);

$default_choose = array(
    array( 'question' => 'Trading or commodities?', 'answer' => 'If you are trading commodities or running a multi-activity trading house — start with <a href="' . kingston_url('free-zone-dmcc') . '" style="color:var(--gold-700);font-weight:600">DMCC</a>. If you move physical goods at scale or need warehousing, look at <a href="' . kingston_url('free-zone-jafza') . '" style="color:var(--gold-700);font-weight:600">JAFZA</a>.' ),
    array( 'question' => 'Financial services?', 'answer' => 'Regulated finance, fund management, fintech or law — common-law jurisdictions are typically right. Pick <a href="' . kingston_url('free-zone-difc') . '" style="color:var(--gold-700);font-weight:600">DIFC</a> in Dubai or <a href="' . kingston_url('free-zone-adgm') . '" style="color:var(--gold-700);font-weight:600">ADGM</a> in Abu Dhabi.' ),
    array( 'question' => 'High-value cargo or pharma?', 'answer' => 'Time-sensitive, regulated or high-value goods that move by air — <a href="' . kingston_url('free-zone-dafza') . '" style="color:var(--gold-700);font-weight:600">DAFZA</a>. The customs-bonded zone is built for this profile.' ),
    array( 'question' => 'Cost-conscious SME or solo founder?', 'answer' => '<a href="' . kingston_url('free-zone-ifza') . '" style="color:var(--gold-700);font-weight:600">IFZA</a>, <a href="' . kingston_url('free-zone-meydan') . '" style="color:var(--gold-700);font-weight:600">Meydan</a> and <a href="' . kingston_url('free-zone-shams') . '" style="color:var(--gold-700);font-weight:600">SHAMS</a> compete hard on price and speed. <a href="' . kingston_url('free-zone-rakez') . '" style="color:var(--gold-700);font-weight:600">RAKEZ</a> is the natural pick for industrial setups.' ),
);

$default_steps = array(
    array( 'title' => 'Zone selection',   'description' => 'We map your activity, customer base and budget to the right Free Zone — and document the trade-offs in writing.' ),
    array( 'title' => 'Incorporation',    'description' => 'Name reservation, MoA/AoA, licence, immigration card, establishment card — everything filed and tracked.' ),
    array( 'title' => 'Visas & banking',  'description' => 'Investor and employee visas, plus introductions and onboarding support with UAE banks.' ),
    array( 'title' => 'Audit & tax',      'description' => 'Year-one accounting setup, audit-ready bookkeeping, and corporate-tax / QFZP planning from day one.' ),
);

$page_eyebrow = kingston_field( 'page_eyebrow', 'Free Zone Setup' );
$page_heading = kingston_field( 'page_heading', 'Pick your UAE Free Zone. We will handle the rest.' );
$page_intro   = kingston_field( 'page_intro',   'Kingston is registered with all major UAE Free Zones — and we set up, audit and run tax for businesses inside them. Compare zones below, then pick the page that fits your business.' );

$grid_eyebrow = kingston_field( 'grid_eyebrow', 'Choose your zone' );
$grid_heading = kingston_field( 'grid_heading', 'Nine UAE Free Zones. One trusted partner.' );
$grid_intro   = kingston_field( 'grid_intro',   'Each zone has its own regulator, activity list, cost profile and renewal regime. We help you pick the one that actually fits your business — not just the one we earn the most on.' );
$fz_cards     = kingston_rows(  'fz_cards', $default_fz_cards );

$choose_eyebrow = kingston_field( 'choose_eyebrow', 'How to choose' );
$choose_heading = kingston_field( 'choose_heading', 'The 60-second decision tree.' );
$choose_items   = kingston_rows(  'choose_items', $default_choose );
$choose_footer  = kingston_field( 'choose_footer', 'Still not sure? <a href="' . kingston_url('contact') . '" style="color:var(--gold-700);font-weight:600">Book a free 30-minute call</a> — we will recommend in writing.' );

$steps_eyebrow = kingston_field( 'steps_eyebrow', 'What you get' );
$steps_heading = kingston_field( 'steps_heading', 'End-to-end Free Zone setup, with audit and tax built in.' );
$steps_items   = kingston_rows(  'steps_items', $default_steps );
?>
<section class="page-header">
  <div class="container">
    <div class="crumbs">
      <a href="<?php echo kingston_url('index'); ?>">Home</a> <span>›</span> <span>Free Zones</span>
    </div>
    <span class="eyebrow" style="color:var(--gold-400)"><?php echo esc_html( $page_eyebrow ); ?></span>
    <h1 class="mt-2"><?php echo esc_html( $page_heading ); ?></h1>
    <p><?php echo esc_html( $page_intro ); ?></p>
  </div>
</section>
<section class="bg-bone">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center"><?php echo esc_html( $grid_eyebrow ); ?></span>
      <h2><?php echo esc_html( $grid_heading ); ?></h2>
      <p><?php echo esc_html( $grid_intro ); ?></p>
    </div>
    <div class="fz-grid">
      <?php foreach ( $fz_cards as $card ) :
          $short   = kingston_row( $card, 'short_name' );
          $full    = kingston_row( $card, 'full_name' );
          $emirate = kingston_row( $card, 'emirate' );
          $tagline = kingston_row( $card, 'tagline' );
          $tags    = (array) kingston_row( $card, 'tags', array() );
          $img     = kingston_row_image( $card, 'image', '' );
          $link    = kingston_row( $card, 'link', '#' );
          $rlbl    = kingston_row( $card, 'read_label', 'Setup details' );
      ?>
      <a class="fz-card has-image reveal" href="<?php echo kingston_url( $link ); ?>">
        <?php if ( $img ) : ?><div class="img-frame ar-16x9"><img src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $short . ' Free Zone' ); ?>" loading="lazy"/></div><?php endif; ?>
        <div class="card-body">
          <?php if ( $emirate ) : ?><div class="fz-emirate"><?php echo esc_html( $emirate ); ?></div><?php endif; ?>
          <h3><?php echo esc_html( $short ); ?></h3>
          <?php if ( $full ) : ?><div class="fz-fullname"><?php echo esc_html( $full ); ?></div><?php endif; ?>
          <?php if ( $tagline ) : ?><p class="fz-tagline"><?php echo esc_html( $tagline ); ?></p><?php endif; ?>
          <?php if ( $tags ) : ?><div class="fz-tags"><?php foreach ( $tags as $tag ) : ?><span class="fz-tag"><?php echo esc_html( kingston_row( $tag, 'text' ) ); ?></span><?php endforeach; ?></div><?php endif; ?>
          <span class="read"><?php echo esc_html( $rlbl ); ?> <span class="arrow">→</span></span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center"><?php echo esc_html( $choose_eyebrow ); ?></span>
      <h2><?php echo esc_html( $choose_heading ); ?></h2>
    </div>
    <div class="values" style="grid-template-columns:repeat(2,1fr);max-width:980px;margin:0 auto">
      <?php foreach ( $choose_items as $item ) : ?>
        <div class="value reveal" style="padding:32px">
          <h4 style="color:var(--navy-900);margin-bottom:8px"><?php echo esc_html( kingston_row( $item, 'question' ) ); ?></h4>
          <p><?php echo wp_kses_post( kingston_row( $item, 'answer' ) ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
    <?php if ( $choose_footer ) : ?>
      <p class="text-center mt-4" style="color:var(--ink-500)"><?php echo wp_kses_post( $choose_footer ); ?></p>
    <?php endif; ?>
  </div>
</section>

<section class="bg-bone">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center"><?php echo esc_html( $steps_eyebrow ); ?></span>
      <h2><?php echo esc_html( $steps_heading ); ?></h2>
    </div>
    <div class="process">
      <?php foreach ( $steps_items as $i => $step ) : ?>
        <div class="step reveal"><span class="step-num"><?php echo esc_html( str_pad( $i + 1, 2, '0', STR_PAD_LEFT ) ); ?></span><h4><?php echo esc_html( kingston_row( $step, 'title' ) ); ?></h4><p><?php echo esc_html( kingston_row( $step, 'description' ) ); ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/cta-banner' ); ?>

<?php get_footer();
