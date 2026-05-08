<?php
/**
 * Template Name: Free Zone — JAFZA
 */
get_header();
$kingston_detail_is_freezone = true;
$kingston_detail_defaults = array(
    'breadcrumb'   => 'Free Zones · JAFZA',
    'page_eyebrow' => 'JAFZA · Dubai',
    'page_heading' => 'Set up your business in JAFZA — Jebel Ali Free Zone Authority.',
    'page_intro'   => "The Middle East's largest free zone — purpose-built for logistics, manufacturing and re-export at scale.",
    'banner_image' => kingston_asset( 'img/freezones/jafza.svg' ),
    'banner_alt'   => 'JAFZA Free Zone',

    'overview_eyebrow' => 'JAFZA · Dubai',
    'overview_heading' => 'Jebel Ali Free Zone Authority',
    'overview_body'    => "JAFZA sits next to Jebel Ali Port — the world's ninth-busiest container port — and Al Maktoum International, giving it unrivalled multi-modal connectivity. For businesses that move physical goods, JAFZA is rarely just a free zone choice. It is the free zone choice.\n\nKingston handles JAFZA setup for trading, logistics, light manufacturing and warehousing businesses, and stays on as your audit and tax partner.",

    'fz_facts' => array(
        array( 'label' => 'Sector focus',   'value' => 'Logistics & Industrial' ),
        array( 'label' => 'Setup time',     'value' => '2–4 weeks' ),
        array( 'label' => 'Visas',          'value' => 'Office-based' ),
        array( 'label' => 'Office options', 'value' => 'Warehouses, plots, offices' ),
    ),

    'includes_heading' => 'Why founders choose JAFZA',
    'includes_items' => array(
        array( 'title' => 'Adjacent to Jebel Ali Port',  'description' => "Direct connectivity to the world's ninth-busiest container port — minutes to ship from your warehouse." ),
        array( 'title' => 'Flexible facilities',         'description' => 'From offices and plug-and-play warehouses to land-lease industrial plots up to 1m sq ft.' ),
        array( 'title' => '100% repatriation',           'description' => '100% repatriation of capital and profits, with no foreign exchange controls.' ),
        array( 'title' => 'Public listing route',        'description' => 'JAFZA Offshore companies have a route to listing on UAE exchanges — useful for groups eyeing IPO.' ),
        array( 'title' => 'Logistics-grade utilities',   'description' => 'Industrial-grade power, water, gas and waste handling built for production-scale operations.' ),
        array( 'title' => 'Long-term lease security',    'description' => '25-year leases on industrial land, renewable — supports decade-plus capex commitments.' ),
    ),
    'why_heading' => 'Why Kingston for JAFZA setup',
    'why_items'   => array(
        array( 'title' => 'Approved JAFZA auditor',         'description' => 'Kingston is registered with JAFZA as an approved auditor and corporate-services partner.' ),
        array( 'title' => 'End-to-end setup',               'description' => 'Entity, licence, visa, office, banking — handled in one engagement letter.' ),
        array( 'title' => 'No third-party hand-offs',       'description' => 'We do not outsource your setup or audit work to introduce-and-disappear partners.' ),
        array( 'title' => 'Audit and tax under one roof',   'description' => 'After setup, we stay on as your auditor and corporate tax advisor.' ),
    ),
    'related_items' => array(
        array( 'label' => 'DMCC',   'link' => 'free-zone-dmcc' ),
        array( 'label' => 'DIFC',   'link' => 'free-zone-difc' ),
        array( 'label' => 'ADGM',   'link' => 'free-zone-adgm' ),
        array( 'label' => 'DAFZA',  'link' => 'free-zone-dafza' ),
        array( 'label' => 'RAKEZ',  'link' => 'free-zone-rakez' ),
        array( 'label' => 'IFZA',   'link' => 'free-zone-ifza' ),
        array( 'label' => 'Meydan', 'link' => 'free-zone-meydan' ),
        array( 'label' => 'SHAMS',  'link' => 'free-zone-shams' ),
        array( 'label' => 'All Free Zones', 'link' => 'freezones', 'view_all' => true ),
    ),

    'process_eyebrow' => 'Process',
    'process_heading' => 'Your JAFZA setup, step by step.',
    'process_steps'   => array(
        array( 'title' => 'Activity & licence', 'description' => 'Confirm activities, licence type, share capital and shareholder structure — documented in writing before filing.' ),
        array( 'title' => 'Incorporation',      'description' => 'Name approval, MoA/AoA, trade licence, establishment and immigration cards.' ),
        array( 'title' => 'Visas & office',     'description' => 'Investor visa, employee visas, dependent visas and physical or flexi-office allocation.' ),
        array( 'title' => 'Banking & tax',      'description' => 'UAE corporate bank account, FTA registration, accounting setup and audit pre-readiness.' ),
    ),
    'faq_heading' => 'JAFZA — common questions answered.',
    'faq_items' => array(
        array( 'question' => 'Is JAFZA a good fit for an e-commerce business?', 'answer' => 'Yes — JAFZA hosts many e-commerce and 3PL operations because of its warehousing, last-mile and re-export advantages. We will advise on the right structure.' ),
        array( 'question' => 'What licences does JAFZA issue?', 'answer' => 'Trading, service, industrial, e-commerce, logistics and national industrial licences. Each maps to permitted activities and facility types.' ),
        array( 'question' => 'Can I lease industrial land?', 'answer' => 'Yes — JAFZA offers industrial plot leases, typically 25 years, with build-to-suit and pre-built warehouse options.' ),
        array( 'question' => 'Does JAFZA require an annual audit?', 'answer' => 'Yes — JAFZA companies must submit annual audited financial statements. Kingston is a JAFZA-approved auditor.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
