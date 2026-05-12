<?php
/**
 * Template Name: Free Zone — DAFZA
 */
get_header();
$kingston_detail_is_freezone = true;
$kingston_detail_defaults = array(
    'breadcrumb'   => 'Free Zones · DAFZA',
    'page_eyebrow' => 'DAFZA · Dubai',
    'page_heading' => 'Set up your business in DAFZA — Dubai Airport Free Zone.',
    'page_intro'   => 'The hub for fast-moving, high-value goods — co-located with Dubai International Airport.',
    'banner_image' => kingston_asset( 'img/freezones/dafza.svg' ),
    'banner_alt'   => 'DAFZA Free Zone',

    'overview_eyebrow' => 'DAFZA · Dubai',
    'overview_heading' => 'Dubai Airport Free Zone',
    'overview_body'    => 'DAFZA sits inside the Dubai International Airport perimeter — which means goods can be off-loaded from a freighter and into your warehouse without crossing customs into the country. For high-value, time-sensitive products — pharma, electronics, luxury goods — that matters.' . "\n\n" . 'Kingston handles DAFZA entity formation, audit under IFRS, and ongoing tax compliance.',

    'fz_facts' => array(
        array( 'label' => 'Sector focus',   'value' => 'Aviation & High-value goods' ),
        array( 'label' => 'Setup time',     'value' => '2–4 weeks' ),
        array( 'label' => 'Visas',          'value' => 'Office-based' ),
        array( 'label' => 'Office options', 'value' => 'Warehouse & office' ),
    ),

    'includes_heading' => 'Why founders choose DAFZA',
    'includes_items' => array(
        array( 'title' => 'Adjacent to Dubai International Airport', 'description' => 'Direct cargo access — ideal for time-sensitive, high-value or regulated goods.' ),
        array( 'title' => '100% foreign ownership',                  'description' => 'Full ownership without a UAE national partner.' ),
        array( 'title' => 'Customs-bonded zone',                     'description' => 'Goods can move into and out of the zone without UAE customs duties — only on release into the local market.' ),
        array( 'title' => 'Fast incorporation',                      'description' => 'Streamlined process — typical setup completes in 2–4 weeks.' ),
        array( 'title' => 'Strong pharma & healthcare cluster',      'description' => 'Regulated pharma and life-science companies are common DAFZA tenants.' ),
        array( 'title' => 'Onsite government services',              'description' => 'Immigration, customs and other government services available within the zone.' ),
    ),
    'why_heading' => 'Why Kingston for DAFZA setup',
    'why_items'   => array(
        array( 'title' => 'Approved DAFZA auditor',         'description' => 'Kingston is registered with DAFZA as an approved auditor and corporate-services partner.' ),
        array( 'title' => 'End-to-end setup',               'description' => 'Entity, licence, visa, office, banking — handled in one engagement letter.' ),
        array( 'title' => 'No third-party hand-offs',       'description' => 'We do not outsource your setup or audit work to introduce-and-disappear partners.' ),
        array( 'title' => 'Audit and tax under one roof',   'description' => 'After setup, we stay on as your auditor and corporate tax advisor.' ),
    ),
    'related_items' => array(
        array( 'label' => 'DMCC',   'link' => 'free-zone-dmcc' ),
        array( 'label' => 'JAFZA',  'link' => 'free-zone-jafza' ),
        array( 'label' => 'DIFC',   'link' => 'free-zone-difc' ),
        array( 'label' => 'ADGM',   'link' => 'free-zone-adgm' ),
        array( 'label' => 'RAKEZ',  'link' => 'free-zone-rakez' ),
        array( 'label' => 'IFZA',   'link' => 'free-zone-ifza' ),
        array( 'label' => 'Meydan', 'link' => 'free-zone-meydan' ),
        array( 'label' => 'SHAMS',  'link' => 'free-zone-shams' ),
        array( 'label' => 'All Free Zones', 'link' => 'freezones', 'view_all' => true ),
    ),

    'process_eyebrow' => 'Process',
    'process_heading' => 'Your DAFZA setup, step by step.',
    'process_steps'   => array(
        array( 'title' => 'Activity & licence', 'description' => 'Confirm activities, licence type, share capital and shareholder structure — documented in writing before filing.' ),
        array( 'title' => 'Incorporation',      'description' => 'Name approval, MoA/AoA, trade licence, establishment and immigration cards.' ),
        array( 'title' => 'Visas & office',     'description' => 'Investor visa, employee visas, dependent visas and physical or flexi-office allocation.' ),
        array( 'title' => 'Banking & tax',      'description' => 'UAE corporate bank account, FTA registration, accounting setup and audit pre-readiness.' ),
    ),
    'faq_heading' => 'DAFZA — common questions answered.',
    'faq_items' => array(
        array( 'question' => 'Why pick DAFZA over JAFZA for trading?', 'answer' => 'DAFZA is built around airport cargo — better for high-value, low-volume, time-sensitive flow. JAFZA is built around sea-port and industrial scale. The right answer depends on your product.' ),
        array( 'question' => 'What licences does DAFZA issue?', 'answer' => 'Trade, service, industrial and e-commerce licences — with activity lists tailored to airport-cluster businesses.' ),
        array( 'question' => 'Can I store goods in DAFZA without UAE customs duties?', 'answer' => 'Yes — DAFZA is customs-bonded. Customs apply only when goods are released into the UAE local market.' ),
        array( 'question' => 'Is annual audit mandatory in DAFZA?', 'answer' => 'Yes — DAFZA requires annual audited financial statements. Kingston is an approved auditor.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
