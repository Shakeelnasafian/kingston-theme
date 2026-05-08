<?php
/**
 * Template Name: Services
 */
get_header();

$default_categories = array(
    array(
        'eyebrow'    => 'Audit & Assurance',
        'heading'    => 'Independent assurance the market trusts.',
        'background' => 'bg-bone',
        'cards' => array(
            array( 'title' => 'Statutory Audit',          'icon' => 'document', 'description' => 'IFRS-aligned external audits that satisfy UAE corporate law and Free Zone authority requirements.', 'link' => 'statutory-audit', 'image' => kingston_asset( 'img/services/statutory-audit.svg' ) ),
            array( 'title' => 'Internal Audit',           'icon' => 'clock',    'description' => 'Risk-based internal audit, controls assurance and operational efficiency reviews — co-source or full outsource.', 'link' => 'internal-audit', 'image' => kingston_asset( 'img/services/internal-audit.svg' ) ),
            array( 'title' => 'Forensic Audit',           'icon' => 'search',   'description' => 'Fraud investigations, asset tracing and litigation support — with court-ready evidence and discreet handling.', 'link' => 'forensic-audit', 'image' => kingston_asset( 'img/services/forensic-audit.svg' ) ),
            array( 'title' => 'Free Zone Audit',          'icon' => 'building', 'description' => 'Approved auditors across DMCC, JAFZA, DAFZA, ADGM, DIFC, RAKEZ & more — licence-renewal aligned.', 'link' => 'free-zone', 'image' => kingston_asset( 'img/services/free-zone.svg' ) ),
            array( 'title' => 'Due Diligence',            'icon' => 'search',   'description' => 'Financial, tax and operational due diligence for buyers, sellers and lenders. Surface the truth before signing.', 'link' => 'due-diligence', 'image' => kingston_asset( 'img/services/due-diligence.svg' ) ),
            array( 'title' => 'Accounting & Bookkeeping', 'icon' => 'chart',    'description' => 'Cloud-first outsourced accounting — IFRS-compliant, audit-ready monthly management accounts by WD5.', 'link' => 'accounting', 'image' => kingston_asset( 'img/services/accounting.svg' ) ),
        ),
    ),
    array(
        'eyebrow'    => 'Tax',
        'heading'    => 'End-to-end UAE tax — from registration to FTA representation.',
        'background' => '',
        'cards' => array(
            array( 'title' => 'Corporate Tax', 'icon' => 'percent',  'description' => "Registration, structuring, returns and advisory for UAE's 9% corporate tax — with optimisation planning.", 'link' => 'corporate-tax', 'image' => kingston_asset( 'img/services/corporate-tax.svg' ) ),
            array( 'title' => 'VAT Services',  'icon' => 'bars',     'description' => 'VAT registration, return preparation, refund recovery, audits and FTA representation.', 'link' => 'vat', 'image' => kingston_asset( 'img/services/vat.svg' ) ),
            array( 'title' => 'Excise Tax',    'icon' => 'document', 'description' => 'Registration, calculation, filing and advisory for businesses dealing in excisable goods.', 'link' => 'excise-tax', 'image' => kingston_asset( 'img/services/excise-tax.svg' ) ),
        ),
    ),
    array(
        'eyebrow'    => 'Compliance',
        'heading'    => 'Stay ahead of UAE regulators — quietly, and in writing.',
        'background' => 'bg-bone',
        'cards' => array(
            array( 'title' => 'AML/CFT Compliance', 'icon' => 'shield_check', 'description' => 'Risk assessment, policies, goAML registration, training and independent AML audits for DNFBPs and financial businesses.', 'link' => 'aml-compliance', 'image' => kingston_asset( 'img/services/aml-compliance.svg' ) ),
            array( 'title' => 'ESR Compliance',     'icon' => 'globe',    'description' => 'Economic Substance Regulations — scoping, notification, annual report and regulator response support.', 'link' => 'esr', 'image' => kingston_asset( 'img/services/esr.svg' ) ),
        ),
    ),
);

$default_process = array(
    array( 'title' => 'Discovery',     'description' => 'A free, confidential scoping call to understand your business, structure, deadlines and risk areas.' ),
    array( 'title' => 'Tailored Plan', 'description' => 'A fixed scope, timeline and fee — agreed in writing before a single workpaper is opened.' ),
    array( 'title' => 'Execution',     'description' => 'Senior-led fieldwork with a single point of contact and weekly status updates.' ),
    array( 'title' => 'Reporting',     'description' => 'A clear final report, a debrief with your team, and ongoing advice for the next financial year.' ),
);

$page_eyebrow   = kingston_field( 'page_eyebrow', 'Our services' );
$page_heading   = kingston_field( 'page_heading', 'Audit, tax, advisory & compliance — under one trusted Dubai roof.' );
$page_intro     = kingston_field( 'page_intro',   'From statutory audit to forensic investigations, corporate tax to ESR, every Kingston service is designed around one promise: rigorous work, clear counsel, on time.' );
$categories     = kingston_rows(  'categories',   $default_categories );
$proc_eyebrow   = kingston_field( 'process_eyebrow', 'How we work' );
$proc_heading   = kingston_field( 'process_heading', 'A predictable, transparent engagement flow.' );
$proc_steps     = kingston_rows(  'process_steps',   $default_process );
?>
<section class="page-header">
  <div class="container">
    <div class="crumbs">
      <a href="<?php echo kingston_url('index'); ?>">Home</a> <span>›</span> <span>Services</span>
    </div>
    <span class="eyebrow" style="color:var(--gold-400)"><?php echo esc_html( $page_eyebrow ); ?></span>
    <h1 class="mt-2"><?php echo esc_html( $page_heading ); ?></h1>
    <p><?php echo esc_html( $page_intro ); ?></p>
  </div>
</section>

<?php $card_num = 0; foreach ( $categories as $cat ) :
    $cat_eyebrow = kingston_row( $cat, 'eyebrow' );
    $cat_heading = kingston_row( $cat, 'heading' );
    $cat_bg      = kingston_row( $cat, 'background' );
    $cards       = (array) kingston_row( $cat, 'cards', array() );
    $section_class = $cat_bg ? ' class="' . esc_attr( $cat_bg ) . '"' : '';
?>
<section<?php echo $section_class; ?>>
  <div class="container">
    <div class="section-head reveal">
      <?php if ( $cat_eyebrow ) : ?><span class="eyebrow center"><?php echo esc_html( $cat_eyebrow ); ?></span><?php endif; ?>
      <?php if ( $cat_heading ) : ?><h2><?php echo esc_html( $cat_heading ); ?></h2><?php endif; ?>
    </div>
    <div class="service-grid">
      <?php foreach ( $cards as $card ) :
          $card_num++;
          $title = kingston_row( $card, 'title' );
          $desc  = kingston_row( $card, 'description' );
          $link  = kingston_row( $card, 'link', '#' );
          $icon  = kingston_row( $card, 'icon', 'check' );
          $img   = kingston_row_image( $card, 'image', '' );
          $num   = str_pad( $card_num, 2, '0', STR_PAD_LEFT );
      ?>
      <a href="<?php echo kingston_url( $link ); ?>" class="service-card has-image reveal">
        <?php if ( $img ) : ?><div class="img-frame ar-3x2"><img src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $title ); ?>" loading="lazy"/></div><?php endif; ?>
        <div class="card-body">
          <span class="num"><?php echo esc_html( $num ); ?></span>
          <div class="service-icon"><?php echo kingston_icon( $icon, 26 ); ?></div>
          <h3><?php echo esc_html( $title ); ?></h3>
          <p><?php echo esc_html( $desc ); ?></p>
          <span class="read">Learn more <span class="arrow">→</span></span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endforeach; ?>

<section>
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center"><?php echo esc_html( $proc_eyebrow ); ?></span>
      <h2><?php echo esc_html( $proc_heading ); ?></h2>
    </div>
    <div class="process">
      <?php foreach ( $proc_steps as $i => $step ) : ?>
        <div class="step reveal"><span class="step-num"><?php echo esc_html( str_pad( $i + 1, 2, '0', STR_PAD_LEFT ) ); ?></span><h4><?php echo esc_html( kingston_row( $step, 'title' ) ); ?></h4><p><?php echo esc_html( kingston_row( $step, 'description' ) ); ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/cta-banner' ); ?>

<?php get_footer();
