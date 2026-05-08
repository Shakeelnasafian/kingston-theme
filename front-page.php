<?php
/**
 * The front page template — rendered when the site root is requested
 * and a static front page is set in Settings → Reading.
 *
 * All content is editable from the WP admin via the "Front Page — Kingston"
 * ACF field group; defaults below match the original static content so the
 * site renders correctly even when fields are empty.
 */
get_header();

/* =============== DEFAULTS =============== */

$default_hero_slides = array(
    array(
        'eyebrow'   => 'Audit · Tax · Advisory · Dubai, UAE',
        'heading'   => 'Clarity in numbers.<br /><span class="word-gold">Confidence</span> in decisions.',
        'lead'      => 'Kingston Chartered Auditing & Advisory partners with ambitious UAE businesses to deliver statutory audit, tax compliance and advisory grounded in integrity, technical excellence and financial transparency.',
        'primary_label'   => 'Schedule a free consultation',
        'primary_link'    => 'contact',
        'secondary_label' => 'Explore our services',
        'secondary_link'  => 'services',
        'image'     => kingston_asset( 'img/hero/audit.svg' ),
        'image_alt' => 'Kingston audit and assurance',
        'emblem'    => 'K',
        'trust_stats' => array(
            array( 'number' => '500', 'suffix' => '+', 'label' => 'Engagements delivered' ),
            array( 'number' => '15',  'suffix' => '+', 'label' => 'Years combined experience' ),
            array( 'number' => '98',  'suffix' => '%', 'label' => 'Client retention rate' ),
        ),
        'hero_cards' => array(
            array( 'icon' => 'check',  'label' => 'IFRS Certified',  'value' => 'Audit Quality' ),
            array( 'icon' => 'bars',   'label' => 'Reports Filed',   'value' => 'FTA Compliant' ),
            array( 'icon' => 'shield', 'label' => 'Approved By',     'value' => 'UAE Authorities' ),
        ),
    ),
    array(
        'eyebrow'   => 'Free Zone Audit · UAE-wide',
        'heading'   => 'Approved auditors.<br /><span class="word-gold">Every</span> major UAE Free Zone.',
        'lead'      => 'Kingston is registered across DMCC, JAFZA, DAFZA, ADGM, DIFC, RAKEZ, SHAMS, IFZA, Meydan and more — so your annual audit is signed by a firm your zone authority will accept, first time.',
        'primary_label'   => 'Free Zone audit details',
        'primary_link'    => 'free-zone',
        'secondary_label' => 'Talk to a partner',
        'secondary_link'  => 'contact',
        'image'     => kingston_asset( 'img/hero/freezone.svg' ),
        'image_alt' => 'UAE Free Zones',
        'emblem'    => '<span style="text-align:center;line-height:.95;display:inline-block">FZ<br><small style="font-size:.18em;letter-spacing:.4em;color:rgba(255,255,255,.45);display:block;margin-top:6px">UAE FREE ZONES</small></span>',
        'trust_stats' => array(
            array( 'number' => '20',   'suffix' => '+', 'label' => 'UAE Free Zones covered' ),
            array( 'number' => '98',   'suffix' => '%', 'label' => 'On-time licence-renewal' ),
            array( 'number' => 'IFRS', 'suffix' => '',  'label' => 'Audit standard' ),
        ),
        'hero_cards' => array(
            array( 'icon' => 'building', 'label' => 'DMCC · JAFZA',  'value' => 'DAFZA · DIFC' ),
            array( 'icon' => 'clock',    'label' => 'Aligned with',  'value' => 'Licence renewal' ),
            array( 'icon' => 'check',    'label' => 'QFZP testing',  'value' => 'Built in' ),
        ),
    ),
    array(
        'eyebrow'   => 'Corporate Tax · VAT · Excise · ESR',
        'heading'   => 'UAE tax — <span class="word-gold">handled</span>,<br />end to end.',
        'lead'      => 'From corporate tax registration and Qualifying Free Zone Person testing, to VAT refunds, to ESR notifications — UAE tax compliance and optimisation under one trusted roof.',
        'primary_label'   => 'Corporate tax services',
        'primary_link'    => 'corporate-tax',
        'secondary_label' => 'VAT services',
        'secondary_link'  => 'vat',
        'image'     => kingston_asset( 'img/hero/tax.svg' ),
        'image_alt' => 'UAE Corporate Tax and VAT',
        'emblem'    => '%',
        'trust_stats' => array(
            array( 'number' => 'FTA', 'suffix' => '',  'label' => 'Approved tax agents' ),
            array( 'number' => '100', 'suffix' => '%', 'label' => 'On-time filing record' ),
            array( 'number' => '9%',  'suffix' => '',  'label' => 'Corporate tax · UAE' ),
        ),
        'hero_cards' => array(
            array( 'icon' => 'percent', 'label' => 'Corporate Tax', 'value' => 'Plan · File · Defend' ),
            array( 'icon' => 'bars',    'label' => 'VAT',           'value' => 'Refund recovery' ),
            array( 'icon' => 'globe',   'label' => 'ESR',           'value' => 'Substance & reports' ),
        ),
    ),
);

$default_marquee = array(
    array( 'text' => 'Trading & Distribution' ),
    array( 'text' => 'Real Estate' ),
    array( 'text' => 'Construction & Contracting' ),
    array( 'text' => 'Hospitality & F&B' ),
    array( 'text' => 'Retail & E-commerce' ),
    array( 'text' => 'Healthcare' ),
    array( 'text' => 'Manufacturing' ),
    array( 'text' => 'Financial Services' ),
    array( 'text' => 'Logistics & Shipping' ),
    array( 'text' => 'Family Offices' ),
    array( 'text' => 'Technology & SaaS' ),
    array( 'text' => 'Professional Services' ),
);

$default_logos = array(
    array( 'text' => 'ALARIS GROUP' ),
    array( 'text' => 'NUWA HOLDINGS' ),
    array( 'text' => 'EMIRATE TRADING' ),
    array( 'text' => 'BAY & CO.' ),
    array( 'text' => 'VERTEX FZ-LLC' ),
    array( 'text' => 'HARBOUR CAPITAL' ),
);

$default_service_cards = array(
    array( 'title' => 'Statutory Audit',          'icon' => 'document', 'description' => 'Independent, IFRS-aligned audits that satisfy UAE corporate law and give your stakeholders absolute confidence in your numbers.', 'link' => 'statutory-audit', 'image' => kingston_asset( 'img/services/statutory-audit.svg' ) ),
    array( 'title' => 'Internal Audit',           'icon' => 'clock',    'description' => 'Strengthen controls, manage risk and uncover operational efficiencies with a partner who knows where the gaps usually hide.', 'link' => 'internal-audit', 'image' => kingston_asset( 'img/services/internal-audit.svg' ) ),
    array( 'title' => 'Forensic Audit',           'icon' => 'search',   'description' => 'Discreet, court-ready investigations into fraud, financial crime and disputes — supported by evidence that holds up to scrutiny.', 'link' => 'forensic-audit', 'image' => kingston_asset( 'img/services/forensic-audit.svg' ) ),
    array( 'title' => 'Free Zone Audit',          'icon' => 'building', 'description' => 'Approved auditors across DMCC, JAFZA, DAFZA, ADGM, DIFC, RAKEZ & more — licence-renewal aligned.', 'link' => 'free-zone', 'image' => kingston_asset( 'img/services/free-zone.svg' ) ),
    array( 'title' => 'Due Diligence',            'icon' => 'search',   'description' => 'The clear-eyed financial, tax and operational view you need before the deal closes — so you buy facts, not surprises.', 'link' => 'due-diligence', 'image' => kingston_asset( 'img/services/due-diligence.svg' ) ),
    array( 'title' => 'Corporate Tax',            'icon' => 'percent',  'description' => 'Plan, file and defend — end-to-end UAE corporate tax compliance with a strategy that legally optimises your tax bill.', 'link' => 'corporate-tax', 'image' => kingston_asset( 'img/services/corporate-tax.svg' ) ),
    array( 'title' => 'VAT Services',             'icon' => 'bars',     'description' => 'Registration, return filing, refund recovery and FTA representation — VAT handled, so you can focus on your business.', 'link' => 'vat', 'image' => kingston_asset( 'img/services/vat.svg' ) ),
    array( 'title' => 'Excise Tax',               'icon' => 'document', 'description' => 'Registration, calculation, filing and advisory for businesses dealing in excisable goods.', 'link' => 'excise-tax', 'image' => kingston_asset( 'img/services/excise-tax.svg' ) ),
    array( 'title' => 'Accounting & Bookkeeping', 'icon' => 'chart',    'description' => 'Cloud-first outsourced accounting — IFRS-compliant, audit-ready monthly management accounts by working day five.', 'link' => 'accounting', 'image' => kingston_asset( 'img/services/accounting.svg' ) ),
    array( 'title' => 'AML/CFT Compliance',       'icon' => 'shield_check', 'description' => 'Risk assessment, policies, goAML registration, training and independent AML audits for DNFBPs.', 'link' => 'aml-compliance', 'image' => kingston_asset( 'img/services/aml-compliance.svg' ) ),
    array( 'title' => 'ESR Compliance',           'icon' => 'globe',    'description' => 'Economic Substance Regulations — scoping, notification, annual report and regulator response support.', 'link' => 'esr', 'image' => kingston_asset( 'img/services/esr.svg' ) ),
);

$default_setup_cards = array(
    array( 'title' => 'Mainland Setup',  'icon' => 'home',    'description' => 'The choice when you need to operate freely across the UAE, sell to government, or open multiple physical locations.', 'link' => 'mainland-setup', 'image' => kingston_asset( 'img/services/mainland-setup.svg' ), 'read_label' => 'Mainland details' ),
    array( 'title' => 'Free Zone Setup', 'icon' => 'globe',   'description' => '100% foreign ownership, full repatriation, sector-focused regulators — across DMCC, JAFZA, DIFC, ADGM and more.', 'link' => 'freezones',   'image' => kingston_asset( 'img/services/free-zone.svg' ), 'read_label' => 'Browse Free Zones' ),
    array( 'title' => 'Offshore Setup',  'icon' => 'compass', 'description' => 'JAFZA Offshore, RAK ICC and Ajman Offshore — for holding structures, asset protection and international trading.', 'link' => 'offshore-setup', 'image' => kingston_asset( 'img/services/offshore-setup.svg' ), 'read_label' => 'Offshore details' ),
);

$default_fz_cards = array(
    array( 'short_name' => 'DMCC',   'full_name' => 'Dubai Multi Commodities Centre',     'emirate' => 'Dubai · est. 2002',     'tagline' => "The world's #1 free zone — Dubai's powerhouse for trading, commodities, crypto, fintech and family business.", 'tags' => array( array('text'=>'Trading'), array('text'=>'Commodities'), array('text'=>'Family Office') ), 'image' => kingston_asset('img/freezones/dmcc.svg'),  'link' => 'free-zone-dmcc', 'read_label' => 'Setup details' ),
    array( 'short_name' => 'JAFZA',  'full_name' => 'Jebel Ali Free Zone Authority',      'emirate' => 'Dubai · est. 1985',     'tagline' => "The Middle East's largest free zone — purpose-built for logistics, manufacturing and re-export at scale.", 'tags' => array( array('text'=>'Logistics'), array('text'=>'Manufacturing'), array('text'=>'Trade') ), 'image' => kingston_asset('img/freezones/jafza.svg'), 'link' => 'free-zone-jafza', 'read_label' => 'Setup details' ),
    array( 'short_name' => 'DIFC',   'full_name' => 'Dubai International Financial Centre','emirate' => 'Dubai · est. 2004',    'tagline' => 'Common law, English-language regulator, and the place to be for funds, banks, fintech and law firms.', 'tags' => array( array('text'=>'Finance'), array('text'=>'Fintech'), array('text'=>'Funds') ), 'image' => kingston_asset('img/freezones/difc.svg'),  'link' => 'free-zone-difc', 'read_label' => 'Setup details' ),
    array( 'short_name' => 'ADGM',   'full_name' => 'Abu Dhabi Global Market',            'emirate' => 'Abu Dhabi · est. 2015', 'tagline' => "Abu Dhabi's international financial centre — an English common-law jurisdiction on Al Maryah Island.", 'tags' => array( array('text'=>'Finance'), array('text'=>'Family Office'), array('text'=>'Holding') ), 'image' => kingston_asset('img/freezones/adgm.svg'),  'link' => 'free-zone-adgm', 'read_label' => 'Setup details' ),
    array( 'short_name' => 'DAFZA',  'full_name' => 'Dubai Airport Free Zone',            'emirate' => 'Dubai · est. 1996',     'tagline' => 'The hub for fast-moving, high-value goods — co-located with Dubai International Airport.', 'tags' => array( array('text'=>'Aviation'), array('text'=>'Pharma'), array('text'=>'FMCG') ), 'image' => kingston_asset('img/freezones/dafza.svg'), 'link' => 'free-zone-dafza', 'read_label' => 'Setup details' ),
    array( 'short_name' => 'RAKEZ',  'full_name' => 'Ras Al Khaimah Economic Zone',       'emirate' => 'Ras Al Khaimah · est. 2017', 'tagline' => 'The cost-effective free zone with industrial scale and emerging-business agility.', 'tags' => array( array('text'=>'Industrial'), array('text'=>'SME'), array('text'=>'E-commerce') ), 'image' => kingston_asset('img/freezones/rakez.svg'), 'link' => 'free-zone-rakez', 'read_label' => 'Setup details' ),
    array( 'short_name' => 'IFZA',   'full_name' => 'International Free Zone Authority',  'emirate' => 'Dubai · est. 2018',     'tagline' => 'Modern, fast and entrepreneur-friendly — strong for service, consultancy and trading SMEs.', 'tags' => array( array('text'=>'SME'), array('text'=>'Service'), array('text'=>'Consultancy') ), 'image' => kingston_asset('img/freezones/ifza.svg'), 'link' => 'free-zone-ifza', 'read_label' => 'Setup details' ),
    array( 'short_name' => 'Meydan', 'full_name' => 'Meydan Free Zone',                   'emirate' => 'Dubai · est. 2019',     'tagline' => 'A premium Dubai address — strong for founders, consultancies and crypto-adjacent businesses.', 'tags' => array( array('text'=>'Premium'), array('text'=>'Founders'), array('text'=>'Crypto') ), 'image' => kingston_asset('img/freezones/meydan.svg'), 'link' => 'free-zone-meydan', 'read_label' => 'Setup details' ),
    array( 'short_name' => 'SHAMS',  'full_name' => 'Sharjah Media City',                 'emirate' => 'Sharjah · est. 2017',   'tagline' => "Sharjah's media-and-creative free zone — affordable, fast and friendly to digital creators.", 'tags' => array( array('text'=>'Media'), array('text'=>'Creative'), array('text'=>'Digital') ), 'image' => kingston_asset('img/freezones/shams.svg'), 'link' => 'free-zone-shams', 'read_label' => 'Setup details' ),
);

$default_about_bullets = array(
    array( 'strong' => 'Partner-led engagements.', 'text' => 'A senior reviewer is on every job — no juniors flying solo.' ),
    array( 'strong' => 'UAE-first expertise.',     'text' => 'Federal Tax Authority, IFRS, Free Zone & Mainland — we live in this rulebook.' ),
    array( 'strong' => 'Plain-English reporting.', 'text' => 'Findings boards understand and management can act on.' ),
);

$default_stats = array(
    array( 'number' => '500', 'suffix' => '+', 'label' => 'Audits & reviews completed' ),
    array( 'number' => '350', 'suffix' => '+', 'label' => 'UAE companies served' ),
    array( 'number' => '98',  'suffix' => '%', 'label' => 'On-time filing record' ),
    array( 'number' => '24',  'suffix' => 'h', 'label' => 'Average response time' ),
);

$default_process = array(
    array( 'title' => 'Discovery',         'description' => 'A free, confidential scoping call to understand your business, structure, deadlines and risk areas.' ),
    array( 'title' => 'Tailored Plan',     'description' => 'A fixed scope, timeline and fee — agreed in writing before a single workpaper is opened.' ),
    array( 'title' => 'Execution',         'description' => 'Senior-led fieldwork with a single point of contact and weekly status updates. No silent stretches.' ),
    array( 'title' => 'Reporting & Beyond','description' => 'A clear final report, a debrief with your team, and ongoing advice for the next financial year.' ),
);

$default_values = array(
    array( 'icon' => 'shield', 'title' => 'Integrity',      'description' => 'We do the right thing — even when it is the difficult thing. Our independence is non-negotiable.' ),
    array( 'icon' => 'star',   'title' => 'Excellence',     'description' => 'Technically sharp, current with regulation, and obsessed with the quality of every workpaper we sign.' ),
    array( 'icon' => 'users',  'title' => 'Client focus',   'description' => 'You get a senior partner on speed-dial — not a ticket number in a queue.' ),
    array( 'icon' => 'check',  'title' => 'Accountability', 'description' => 'Fixed fees, fixed timelines, signed off in writing. We meet our commitments — or tell you why early.' ),
    array( 'icon' => 'lock',   'title' => 'Confidentiality','description' => 'Your data lives in encrypted, access-controlled environments. NDAs, watertight processes, zero leakage.' ),
    array( 'icon' => 'sun',    'title' => 'Innovation',     'description' => 'Audit analytics, automation and AI-assisted review — modern tools applied to centuries-old standards.' ),
);

$default_testimonials = array(
    array( 'initials' => 'RA', 'name' => 'Rashid Al Mansoori',  'role' => 'CFO, Vertex Trading FZ-LLC',           'quote' => 'Kingston turned our annual audit from an annual headache into a strategic exercise. The findings were sharp, the team was responsive, and the report was ready a week ahead of deadline.' ),
    array( 'initials' => 'PS', 'name' => 'Priya Sharma',        'role' => 'Managing Partner, Harbour Capital',     'quote' => 'We engaged Kingston for due diligence on a UAE acquisition. They flagged three issues the seller had not disclosed, and saved us materially on the deal. Worth ten times the fee.' ),
    array( 'initials' => 'MK', 'name' => 'Mohammed Khalid',     'role' => 'Founder, Alaris Group',                 'quote' => 'Corporate tax was new territory for us. Kingston walked our finance team through registration, structuring and the first filing — calm, clear, no jargon.' ),
    array( 'initials' => 'EJ', 'name' => 'Elena Jansen',        'role' => 'Chair of Audit Committee, Nuwa Holdings','quote' => 'Honest, technically excellent and refreshingly direct. They told us things our previous auditor would not — and our board is stronger for it.' ),
    array( 'initials' => 'FA', 'name' => 'Fatima Al Suwaidi',   'role' => 'CEO, Emirate Trading DMCC',             'quote' => 'Our DMCC licence renewal was three weeks away when we engaged Kingston. They scoped, audited and filed inside the window. Smooth, senior-led, calm under pressure.' ),
    array( 'initials' => 'DC', 'name' => 'Daniel Chen',         'role' => 'Compliance Officer, Bay & Co.',         'quote' => 'The AML review they ran for us was substantive, not cosmetic. Real findings, practical fixes, and we went into our regulatory inspection clear-headed.' ),
);

/* =============== READ FIELDS =============== */
$hero_slides   = kingston_rows( 'hero_slides',   $default_hero_slides );
$marquee       = kingston_option_rows( 'marquee_items', $default_marquee );
$logos_title   = kingston_option( 'logos_title', 'Trusted by founders, family offices & multinationals across the UAE' );
$logos         = kingston_option_rows( 'logos_items', $default_logos );

$svc_eyebrow   = kingston_field( 'services_eyebrow',     'What we do' );
$svc_heading   = kingston_field( 'services_heading',     'End-to-end audit, tax & advisory — under one trusted roof' );
$svc_desc      = kingston_field( 'services_description', 'Whether you are scaling a family business, listing a company or navigating UAE tax reform, our partners deliver rigorous work and clear counsel — on time, every time.' );
$svc_cards     = kingston_rows(  'service_cards', $default_service_cards );

$setup_eyebrow = kingston_field( 'setup_eyebrow',     'Business Setup' );
$setup_heading = kingston_field( 'setup_heading',     'Three setup paths. One trusted partner.' );
$setup_desc    = kingston_field( 'setup_description', 'Mainland, Free Zone or Offshore — Kingston handles end-to-end UAE company formation, then continues as your auditor and tax advisor. One firm. One team. No hand-offs.' );
$setup_cards   = kingston_rows(  'setup_cards', $default_setup_cards );
$setup_compare_label = kingston_field( 'setup_compare_label', 'Compare Mainland · Free Zone · Offshore' );
$setup_compare_link  = kingston_field( 'setup_compare_link',  'business-setup' );

$fz_eyebrow    = kingston_field( 'fz_eyebrow',     'UAE Free Zones' );
$fz_heading    = kingston_field( 'fz_heading',     'Nine UAE Free Zones. Pick the one that fits.' );
$fz_desc       = kingston_field( 'fz_description', 'Each zone has its own regulator, activity list and cost profile. Below is a quick tour — every card opens a full page on that zone.' );
$fz_cards      = kingston_rows(  'fz_cards', $default_fz_cards );
$fz_all_label  = kingston_field( 'fz_all_label', 'All UAE Free Zones & comparison' );
$fz_all_link   = kingston_field( 'fz_all_link',  'freezones' );

$ab_eyebrow    = kingston_field( 'about_eyebrow',     'Why Kingston' );
$ab_heading    = kingston_field( 'about_heading',     'A boutique firm built on the standards of a Big Four — without the Big Four overhead.' );
$ab_desc       = kingston_field( 'about_description', 'We exist to be the audit, tax and advisory partner UAE businesses can actually trust — accessible to founders, rigorous enough for boards. Our vision is to be one of the UAE\'s most trusted firms, recognised for integrity, technical excellence and financial transparency.' );
$ab_bullets    = kingston_rows(  'about_bullets', $default_about_bullets );
$ab_image      = kingston_image_url( 'about_image', kingston_asset( 'img/about/team.svg' ) );
$ab_badge_big  = kingston_field( 'about_badge_big',   'A+' );
$ab_badge_lbl  = kingston_field( 'about_badge_label', 'Audit Quality Rating' );
$ab_btn_label  = kingston_field( 'about_btn_label',   'More about Kingston' );
$ab_btn_link   = kingston_field( 'about_btn_link',    'about' );

$st_eyebrow    = kingston_field( 'stats_eyebrow', 'By the numbers' );
$st_heading    = kingston_field( 'stats_heading', 'Outcomes our clients can count on.' );
$st_items      = kingston_rows(  'stats_items', $default_stats );

$pr_eyebrow    = kingston_field( 'process_eyebrow',     'How we work' );
$pr_heading    = kingston_field( 'process_heading',     'Four steps. Zero surprises.' );
$pr_desc       = kingston_field( 'process_description', 'A predictable, transparent engagement flow — designed so you always know what is happening, what is next and what it costs.' );
$pr_steps      = kingston_rows(  'process_steps', $default_process );

$vl_eyebrow    = kingston_field( 'values_eyebrow', 'Our values' );
$vl_heading    = kingston_field( 'values_heading', 'The principles behind every signature on our reports.' );
$vl_items      = kingston_rows(  'values_items', $default_values );

$tm_eyebrow    = kingston_field( 'testimonials_eyebrow', 'Client voices' );
$tm_heading    = kingston_field( 'testimonials_heading', 'What founders, CFOs and family offices say.' );
$tm_items      = kingston_rows(  'testimonials_items', $default_testimonials );

/**
 * Helper closure: render a stat number with optional auto-counter.
 * If the number is purely numeric, wrap in <span data-count> for the JS animation.
 * Otherwise output as-is.
 */
$render_number = function( $num ) {
    $num = (string) $num;
    if ( $num !== '' && ctype_digit( $num ) ) {
        return '<span data-count="' . esc_attr( $num ) . '">0</span>';
    }
    return esc_html( $num );
};
?>
<!-- HERO SLIDER -->
<section class="hero-slider" data-hero-slider="6500" aria-roledescription="carousel">
  <div class="hero-progress"><div class="hero-progress-bar"></div></div>
  <div class="hero-counter"><span class="current">01</span> <span style="opacity:.5">/</span> <span class="total"><?php echo esc_html( str_pad( count( $hero_slides ), 2, '0', STR_PAD_LEFT ) ); ?></span></div>

  <div class="hero-track">
    <?php foreach ( $hero_slides as $slide ) :
        $eyebrow   = kingston_row( $slide, 'eyebrow' );
        $heading   = kingston_row( $slide, 'heading' );
        $lead      = kingston_row( $slide, 'lead' );
        $btn1_lbl  = kingston_row( $slide, 'primary_label' );
        $btn1_link = kingston_row( $slide, 'primary_link' );
        $btn2_lbl  = kingston_row( $slide, 'secondary_label' );
        $btn2_link = kingston_row( $slide, 'secondary_link' );
        $img       = kingston_row_image( $slide, 'image', kingston_asset( 'img/hero/audit.svg' ) );
        $img_alt   = kingston_row( $slide, 'image_alt', 'Kingston' );
        $emblem    = kingston_row( $slide, 'emblem' );
        $trust     = (array) kingston_row( $slide, 'trust_stats', array() );
        $cards     = (array) kingston_row( $slide, 'hero_cards', array() );
    ?>
    <div class="hero-slide" role="group" aria-roledescription="slide">
      <div class="container">
        <div class="hero-slide-grid">
          <div>
            <?php if ( $eyebrow ) : ?><span class="eyebrow" style="color:var(--gold-400)"><?php echo esc_html( $eyebrow ); ?></span><?php endif; ?>
            <?php if ( $heading ) : ?><h1><?php echo wp_kses_post( $heading ); ?></h1><?php endif; ?>
            <?php if ( $lead ) : ?><p class="lead"><?php echo esc_html( $lead ); ?></p><?php endif; ?>
            <?php if ( $btn1_lbl || $btn2_lbl ) : ?>
            <div class="hero-cta">
              <?php if ( $btn1_lbl ) : ?><a href="<?php echo kingston_url( $btn1_link ); ?>" class="btn btn-gold"><?php echo esc_html( $btn1_lbl ); ?> <span class="arrow">→</span></a><?php endif; ?>
              <?php if ( $btn2_lbl ) : ?><a href="<?php echo kingston_url( $btn2_link ); ?>" class="btn btn-light"><?php echo esc_html( $btn2_lbl ); ?></a><?php endif; ?>
            </div>
            <?php endif; ?>
            <?php if ( $trust ) : ?>
            <div class="hero-trust">
              <?php foreach ( $trust as $t ) : ?>
                <div>
                  <div class="num"><?php echo $render_number( kingston_row( $t, 'number' ) ); ?><?php $sfx = kingston_row( $t, 'suffix' ); echo $sfx ? esc_html( $sfx ) : ''; ?></div>
                  <div class="label"><?php echo esc_html( kingston_row( $t, 'label' ) ); ?></div>
                </div>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
          </div>
          <div>
            <div class="hero-slide-visual has-image">
              <?php if ( $img ) : ?><img src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>" loading="lazy" /><?php endif; ?>
              <?php if ( $emblem ) : ?><div class="emblem"><?php echo wp_kses_post( $emblem ); ?></div><?php endif; ?>
              <?php $card_classes = array( 'c1 float', 'c2 float-delay', 'c3 float' );
                    foreach ( array_values( $cards ) as $i => $card ) :
                        $cls = isset( $card_classes[ $i ] ) ? $card_classes[ $i ] : 'c1 float'; ?>
                <div class="hero-card <?php echo esc_attr( $cls ); ?>">
                  <div class="icon"><?php echo kingston_icon( kingston_row( $card, 'icon', 'check' ), 22 ); ?></div>
                  <div><div class="label"><?php echo esc_html( kingston_row( $card, 'label' ) ); ?></div><div class="value"><?php echo esc_html( kingston_row( $card, 'value' ) ); ?></div></div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <div class="hero-controls">
    <button data-hero-prev aria-label="Previous slide">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
    </button>
    <div class="hero-dots" role="tablist"></div>
    <button data-hero-next aria-label="Next slide">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
    </button>
  </div>
</section>

<!-- Industries marquee -->
<section class="marquee" style="padding:32px 0">
  <div class="marquee-track">
    <?php for ( $i = 0; $i < 2; $i++ ) :
        foreach ( $marquee as $row ) : ?>
      <span class="marquee-item"><?php echo esc_html( kingston_row( $row, 'text' ) ); ?></span>
    <?php endforeach; endfor; ?>
  </div>
</section>

<!-- Logo strip -->
<section class="logos" style="padding:48px 0">
  <div class="container">
    <p class="logos-title"><?php echo esc_html( $logos_title ); ?></p>
    <div class="logos-grid">
      <?php foreach ( $logos as $logo ) :
          $img = kingston_row_image( $logo, 'image', '' );
          $txt = kingston_row( $logo, 'text' );
          if ( $img ) : ?>
            <div><img src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $txt ); ?>" loading="lazy" /></div>
          <?php else : ?>
            <div><?php echo esc_html( $txt ); ?></div>
          <?php endif;
      endforeach; ?>
    </div>
  </div>
</section>

<!-- Services slider -->
<section id="services" class="bg-bone">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center"><?php echo esc_html( $svc_eyebrow ); ?></span>
      <h2><?php echo esc_html( $svc_heading ); ?></h2>
      <p><?php echo esc_html( $svc_desc ); ?></p>
    </div>

    <div class="slider" data-slider data-slider-per="3">
      <div class="slider-viewport">
        <div class="slider-track">
          <?php foreach ( $svc_cards as $i => $card ) :
              $title = kingston_row( $card, 'title' );
              $desc  = kingston_row( $card, 'description' );
              $link  = kingston_row( $card, 'link', '#' );
              $icon  = kingston_row( $card, 'icon', 'check' );
              $img   = kingston_row_image( $card, 'image', '' );
              $num   = str_pad( $i + 1, 2, '0', STR_PAD_LEFT );
          ?>
          <a href="<?php echo kingston_url( $link ); ?>" class="service-card has-image">
            <?php if ( $img ) : ?>
              <div class="img-frame ar-3x2"><img src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $title ); ?>" loading="lazy"/></div>
            <?php endif; ?>
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
      <div class="slider-nav">
        <button class="arrow-btn" data-slider-prev aria-label="Previous"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg></button>
        <div class="slider-dots" role="tablist"></div>
        <button class="arrow-btn" data-slider-next aria-label="Next"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg></button>
      </div>
    </div>

    <div class="text-center" style="margin-top:24px">
      <a href="<?php echo kingston_url( 'services' ); ?>" class="btn btn-ghost">View all services <span class="arrow">→</span></a>
    </div>
  </div>
</section>

<!-- Business Setup -->
<section>
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center"><?php echo esc_html( $setup_eyebrow ); ?></span>
      <h2><?php echo esc_html( $setup_heading ); ?></h2>
      <p><?php echo esc_html( $setup_desc ); ?></p>
    </div>
    <div class="service-grid" style="grid-template-columns:repeat(<?php echo max( 1, count( $setup_cards ) ); ?>,1fr)">
      <?php foreach ( $setup_cards as $i => $card ) :
          $title = kingston_row( $card, 'title' );
          $desc  = kingston_row( $card, 'description' );
          $link  = kingston_row( $card, 'link', '#' );
          $icon  = kingston_row( $card, 'icon', 'home' );
          $img   = kingston_row_image( $card, 'image', '' );
          $rlbl  = kingston_row( $card, 'read_label', 'Learn more' );
          $num   = str_pad( $i + 1, 2, '0', STR_PAD_LEFT );
      ?>
      <a href="<?php echo kingston_url( $link ); ?>" class="service-card has-image reveal">
        <?php if ( $img ) : ?><div class="img-frame ar-3x2"><img src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $title ); ?>" loading="lazy"/></div><?php endif; ?>
        <div class="card-body">
          <span class="num"><?php echo esc_html( $num ); ?></span>
          <div class="service-icon"><?php echo kingston_icon( $icon, 26 ); ?></div>
          <h3><?php echo esc_html( $title ); ?></h3>
          <p><?php echo esc_html( $desc ); ?></p>
          <span class="read"><?php echo esc_html( $rlbl ); ?> <span class="arrow">→</span></span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
    <?php if ( $setup_compare_label ) : ?>
    <div class="text-center" style="margin-top:36px">
      <a href="<?php echo kingston_url( $setup_compare_link ); ?>" class="btn btn-ghost"><?php echo esc_html( $setup_compare_label ); ?> <span class="arrow">→</span></a>
    </div>
    <?php endif; ?>
  </div>
</section>

<!-- Free Zones showcase -->
<section class="bg-bone">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center"><?php echo esc_html( $fz_eyebrow ); ?></span>
      <h2><?php echo esc_html( $fz_heading ); ?></h2>
      <p><?php echo esc_html( $fz_desc ); ?></p>
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
    <?php if ( $fz_all_label ) : ?>
    <div class="text-center" style="margin-top:36px">
      <a href="<?php echo kingston_url( $fz_all_link ); ?>" class="btn btn-ghost"><?php echo esc_html( $fz_all_label ); ?> <span class="arrow">→</span></a>
    </div>
    <?php endif; ?>
  </div>
</section>

<!-- About preview -->
<section>
  <div class="container two-col">
    <div class="about-image reveal">
      <div class="img-frame">
        <?php if ( $ab_image ) : ?><img src="<?php echo esc_url( $ab_image ); ?>" alt="Kingston team and office" loading="lazy"/><?php endif; ?>
        <div class="badge">
          <div class="big"><?php echo esc_html( $ab_badge_big ); ?></div>
          <div class="lbl"><?php echo esc_html( $ab_badge_lbl ); ?></div>
        </div>
      </div>
    </div>
    <div class="reveal">
      <span class="eyebrow"><?php echo esc_html( $ab_eyebrow ); ?></span>
      <h2><?php echo esc_html( $ab_heading ); ?></h2>
      <p><?php echo esc_html( $ab_desc ); ?></p>
      <ul class="bullets">
        <?php foreach ( $ab_bullets as $b ) :
            $strong = kingston_row( $b, 'strong' );
            $text   = kingston_row( $b, 'text' );
        ?>
        <li><span class="check"><?php echo kingston_icon( 'check', 14 ); ?></span><span><?php if ( $strong ) : ?><strong><?php echo esc_html( $strong ); ?></strong> <?php endif; ?><?php echo esc_html( $text ); ?></span></li>
        <?php endforeach; ?>
      </ul>
      <a href="<?php echo kingston_url( $ab_btn_link ); ?>" class="btn btn-primary mt-3"><?php echo esc_html( $ab_btn_label ); ?> <span class="arrow">→</span></a>
    </div>
  </div>
</section>

<!-- Stats -->
<section class="stats">
  <div class="container">
    <div class="section-head reveal" style="margin-bottom:48px">
      <span class="eyebrow center" style="color:var(--gold-400)"><?php echo esc_html( $st_eyebrow ); ?></span>
      <h2 style="color:#fff"><?php echo esc_html( $st_heading ); ?></h2>
    </div>
    <div class="stats-grid">
      <?php foreach ( $st_items as $s ) : ?>
        <div class="stat reveal"><div class="num"><?php echo $render_number( kingston_row( $s, 'number' ) ); ?><small><?php echo esc_html( kingston_row( $s, 'suffix' ) ); ?></small></div><div class="label"><?php echo esc_html( kingston_row( $s, 'label' ) ); ?></div></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Process -->
<section class="bg-bone">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center"><?php echo esc_html( $pr_eyebrow ); ?></span>
      <h2><?php echo esc_html( $pr_heading ); ?></h2>
      <?php if ( $pr_desc ) : ?><p><?php echo esc_html( $pr_desc ); ?></p><?php endif; ?>
    </div>
    <div class="process">
      <?php foreach ( $pr_steps as $i => $step ) : ?>
        <div class="step reveal"><span class="step-num"><?php echo esc_html( str_pad( $i + 1, 2, '0', STR_PAD_LEFT ) ); ?></span><h4><?php echo esc_html( kingston_row( $step, 'title' ) ); ?></h4><p><?php echo esc_html( kingston_row( $step, 'description' ) ); ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Values -->
<section>
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center"><?php echo esc_html( $vl_eyebrow ); ?></span>
      <h2><?php echo esc_html( $vl_heading ); ?></h2>
    </div>
    <div class="values">
      <?php foreach ( $vl_items as $v ) : ?>
        <div class="value reveal"><div class="v-icon"><?php echo kingston_icon( kingston_row( $v, 'icon', 'check' ), 22 ); ?></div><h4><?php echo esc_html( kingston_row( $v, 'title' ) ); ?></h4><p><?php echo esc_html( kingston_row( $v, 'description' ) ); ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Testimonials slider -->
<section class="bg-bone">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow center"><?php echo esc_html( $tm_eyebrow ); ?></span>
      <h2><?php echo esc_html( $tm_heading ); ?></h2>
    </div>

    <div class="slider" data-slider>
      <div class="slider-viewport">
        <div class="slider-track">
          <?php foreach ( $tm_items as $t ) : ?>
          <div class="testimonial">
            <p><?php echo esc_html( kingston_row( $t, 'quote' ) ); ?></p>
            <div class="who"><div class="avatar"><?php echo esc_html( kingston_row( $t, 'initials' ) ); ?></div><div><strong><?php echo esc_html( kingston_row( $t, 'name' ) ); ?></strong><span><?php echo esc_html( kingston_row( $t, 'role' ) ); ?></span></div></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="slider-nav">
        <button class="arrow-btn" data-slider-prev aria-label="Previous"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg></button>
        <div class="slider-dots" role="tablist"></div>
        <button class="arrow-btn" data-slider-next aria-label="Next"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg></button>
      </div>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/cta-banner' ); ?>

<?php get_footer();
