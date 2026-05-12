<?php
/**
 * Template Name: About
 */
get_header();

$default_values = array(
    array( 'icon' => 'shield', 'title' => 'Integrity',      'description' => 'We do the right thing — even when it is the difficult thing. Our independence is non-negotiable.' ),
    array( 'icon' => 'star',   'title' => 'Excellence',     'description' => 'Technically sharp, current with regulation, and obsessed with the quality of every workpaper we sign.' ),
    array( 'icon' => 'users',  'title' => 'Client focus',   'description' => 'You get a senior partner on speed-dial — not a ticket number in a queue.' ),
    array( 'icon' => 'check',  'title' => 'Accountability', 'description' => 'Fixed fees, fixed timelines, signed off in writing. We meet our commitments — or tell you why early.' ),
    array( 'icon' => 'lock',   'title' => 'Confidentiality','description' => 'Your data lives in encrypted, access-controlled environments. NDAs, watertight processes, zero leakage.' ),
    array( 'icon' => 'sun',    'title' => 'Innovation',     'description' => 'Audit analytics, automation and AI-assisted review — modern tools applied to centuries-old standards.' ),
);

$default_stats = array(
    array( 'number' => '500', 'suffix' => '+', 'label' => 'Engagements delivered' ),
    array( 'number' => '350', 'suffix' => '+', 'label' => 'UAE companies served' ),
    array( 'number' => '98',  'suffix' => '%', 'label' => 'Client retention rate' ),
    array( 'number' => '12',  'suffix' => '',  'label' => 'Industry sectors covered' ),
);

$default_leadership = array(
    array( 'initials' => 'AK', 'name' => 'Adel Kassem, FCA',   'role' => 'Managing Partner',          'bio' => '20 years in audit and assurance, including a decade at a Big Four firm in Dubai and London.' ),
    array( 'initials' => 'SR', 'name' => 'Sara Rahman, CPA',    'role' => 'Partner — Tax',             'bio' => 'UAE corporate tax, VAT and FTA representation specialist. Frequent FTA workshop speaker.' ),
    array( 'initials' => 'YN', 'name' => 'Yusuf Nasser, CFE',   'role' => 'Partner — Forensics & DD',  'bio' => 'Certified Fraud Examiner. Led 80+ forensic and transaction-support engagements across the GCC.' ),
);

$page_eyebrow = kingston_field( 'page_eyebrow', 'About Kingston' );
$page_heading = kingston_field( 'page_heading', 'A boutique UAE firm built for clients who want senior judgement on every page of their report.' );
$page_intro   = kingston_field( 'page_intro',   'We exist to be the audit, tax and advisory partner that ambitious UAE businesses can actually trust — accessible to founders and rigorous enough for boards.' );

$story_eyebrow = kingston_field( 'story_eyebrow', 'Our story' );
$story_heading = kingston_field( 'story_heading', "Born in Dubai. Built for the UAE's most demanding finance leaders." );
$story_body    = kingston_field( 'story_body',    "Kingston Chartered Auditing & Advisory was founded by a team of senior chartered accountants who had spent careers inside the Big Four — and who believed UAE businesses deserved the same technical rigour without the slow, transactional service.\n\nFrom a single office on Sheikh Zayed Road, we have grown into a trusted partner to hundreds of UAE companies — from family-owned trading houses to fast-scaling tech firms and family offices. The work is the same, regardless of size: clean numbers, clear advice, no surprises." );
$seal_text     = kingston_field( 'seal_text', 'EST.' );
$seal_sub      = kingston_field( 'seal_sub',  'Kingston Dubai' );
$badge_big     = kingston_field( 'badge_big',  'A+' );
$badge_label   = kingston_field( 'badge_label','Audit Quality Rating' );
$story_btn_label = kingston_field( 'story_btn_label', 'Talk to a partner' );
$story_btn_link  = kingston_field( 'story_btn_link',  'contact' );

$mv_eyebrow = kingston_field( 'mv_eyebrow', 'Mission & Vision' );
$mv_heading = kingston_field( 'mv_heading', 'Quietly raising the bar for audit and advisory in the UAE.' );
$mission_title = kingston_field( 'mission_title', 'Our Mission' );
$mission_body  = kingston_field( 'mission_body',  'To deliver audit, tax and advisory work of uncompromising quality — making compliance a strategic advantage, not a cost.' );
$vision_title  = kingston_field( 'vision_title',  'Our Vision' );
$vision_body   = kingston_field( 'vision_body',   "To be one of the UAE's most trusted audit, tax and advisory firms — recognised for integrity, technical excellence and financial transparency." );

$values_eyebrow = kingston_field( 'values_eyebrow', 'Our values' );
$values_heading = kingston_field( 'values_heading', 'The principles behind every signature on our reports.' );
$values_items   = kingston_rows(  'values_items',   $default_values );

$stats_eyebrow = kingston_field( 'stats_eyebrow', 'By the numbers' );
$stats_heading = kingston_field( 'stats_heading', 'A track record measured in client trust.' );
$stats_items   = kingston_rows(  'stats_items',   $default_stats );

$lead_eyebrow = kingston_field( 'leadership_eyebrow', 'Leadership' );
$lead_heading = kingston_field( 'leadership_heading', 'Senior, hands-on, and accessible.' );
$lead_intro   = kingston_field( 'leadership_intro',   'Every Kingston engagement is led by a partner — not a junior. The people who pitch you are the people who do the work.' );
$lead_items   = kingston_rows(  'leadership_items',   $default_leadership );

$render_number = function( $num ) {
    $num = (string) $num;
    if ( $num !== '' && ctype_digit( $num ) ) {
        return '<span data-count="' . esc_attr( $num ) . '">0</span>';
    }
    return esc_html( $num );
};
?>
<section class="page-header">
  <div class="container">
    <div class="crumbs">
      <a href="<?php echo kingston_url('index'); ?>">Home</a> <span>›</span> <span>About</span>
    </div>
    <span class="eyebrow" style="color:var(--gold-400)"><?php echo esc_html( $page_eyebrow ); ?></span>
    <h1 class="mt-2"><?php echo esc_html( $page_heading ); ?></h1>
    <p><?php echo esc_html( $page_intro ); ?></p>
  </div>
</section>

<section>
  <div class="container two-col">
    <div class="visual reveal">
      <div class="seal"><?php echo esc_html( $seal_text ); ?><small><?php echo esc_html( $seal_sub ); ?></small></div>
      <div class="badge">
        <div class="big"><?php echo esc_html( $badge_big ); ?></div>
        <div class="lbl"><?php echo esc_html( $badge_label ); ?></div>
      </div>
    </div>
    <div class="reveal">
      <span class="eyebrow"><?php echo esc_html( $story_eyebrow ); ?></span>
      <h2><?php echo esc_html( $story_heading ); ?></h2>
      <?php echo wpautop( wp_kses_post( $story_body ) ); ?>
      <a href="<?php echo kingston_url( $story_btn_link ); ?>" class="btn btn-primary mt-3"><?php echo esc_html( $story_btn_label ); ?> <span class="arrow">→</span></a>
    </div>
  </div>
</section>

<section class="bg-bone">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center"><?php echo esc_html( $mv_eyebrow ); ?></span>
      <h2><?php echo esc_html( $mv_heading ); ?></h2>
    </div>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;max-width:980px;margin:0 auto">
      <div class="value reveal" style="padding:40px">
        <div class="v-icon"><?php echo kingston_icon( 'target', 22 ); ?></div>
        <h3 style="margin-bottom:10px"><?php echo esc_html( $mission_title ); ?></h3>
        <p><?php echo esc_html( $mission_body ); ?></p>
      </div>
      <div class="value reveal" style="padding:40px">
        <div class="v-icon"><?php echo kingston_icon( 'eye', 22 ); ?></div>
        <h3 style="margin-bottom:10px"><?php echo esc_html( $vision_title ); ?></h3>
        <p><?php echo esc_html( $vision_body ); ?></p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center"><?php echo esc_html( $values_eyebrow ); ?></span>
      <h2><?php echo esc_html( $values_heading ); ?></h2>
    </div>
    <div class="values">
      <?php foreach ( $values_items as $v ) : ?>
        <div class="value reveal"><div class="v-icon"><?php echo kingston_icon( kingston_row( $v, 'icon', 'check' ), 22 ); ?></div><h4><?php echo esc_html( kingston_row( $v, 'title' ) ); ?></h4><p><?php echo esc_html( kingston_row( $v, 'description' ) ); ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="stats">
  <div class="container">
    <div class="section-head reveal" style="margin-bottom:48px">
      <span class="eyebrow center" style="color:var(--gold-400)"><?php echo esc_html( $stats_eyebrow ); ?></span>
      <h2 style="color:#fff"><?php echo esc_html( $stats_heading ); ?></h2>
    </div>
    <div class="stats-grid">
      <?php foreach ( $stats_items as $s ) : ?>
        <div class="stat reveal"><div class="num"><?php echo $render_number( kingston_row( $s, 'number' ) ); ?><small><?php echo esc_html( kingston_row( $s, 'suffix' ) ); ?></small></div><div class="label"><?php echo esc_html( kingston_row( $s, 'label' ) ); ?></div></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="bg-bone">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center"><?php echo esc_html( $lead_eyebrow ); ?></span>
      <h2><?php echo esc_html( $lead_heading ); ?></h2>
      <p><?php echo esc_html( $lead_intro ); ?></p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(<?php echo max( 1, count( $lead_items ) ); ?>,1fr);gap:22px" class="values">
      <?php foreach ( $lead_items as $m ) :
          $photo = kingston_row_image( $m, 'photo', '' );
          $initials = kingston_row( $m, 'initials' );
      ?>
      <div class="value reveal" style="text-align:center;padding:36px 28px">
        <?php if ( $photo ) : ?>
          <div style="width:96px;height:96px;border-radius:50%;overflow:hidden;margin:0 auto 18px"><img src="<?php echo esc_url( $photo ); ?>" alt="<?php echo esc_attr( kingston_row( $m, 'name' ) ); ?>" style="width:100%;height:100%;object-fit:cover" /></div>
        <?php else : ?>
          <div style="width:96px;height:96px;border-radius:50%;background:linear-gradient(135deg,var(--navy-900),var(--navy-700));color:var(--gold-400);font-family:var(--font-serif);font-size:2rem;font-weight:600;display:grid;place-items:center;margin:0 auto 18px"><?php echo esc_html( $initials ); ?></div>
        <?php endif; ?>
        <h4><?php echo esc_html( kingston_row( $m, 'name' ) ); ?></h4>
        <p style="font-size:.85rem;letter-spacing:.1em;text-transform:uppercase;color:var(--gold-700);margin:6px 0 14px"><?php echo esc_html( kingston_row( $m, 'role' ) ); ?></p>
        <p><?php echo esc_html( kingston_row( $m, 'bio' ) ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/cta-banner' ); ?>

<?php get_footer();
