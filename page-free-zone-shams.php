<?php
/**
 * Template Name: Free Zone — SHAMS
 */
get_header();
$kingston_detail_is_freezone = true;
$kingston_detail_defaults = array(
    'breadcrumb'   => 'Free Zones · SHAMS',
    'page_eyebrow' => 'SHAMS · Sharjah',
    'page_heading' => 'Set up your business in SHAMS — Sharjah Media City.',
    'page_intro'   => "Sharjah's media-and-creative free zone — affordable, fast and friendly to digital creators.",
    'banner_image' => kingston_asset( 'img/freezones/shams.svg' ),
    'banner_alt'   => 'SHAMS Free Zone',

    'overview_eyebrow' => 'SHAMS · Sharjah',
    'overview_heading' => 'Sharjah Media City',
    'overview_body'    => 'SHAMS — Sharjah Media City — is a media-and-creative-focused free zone with one of the most accessible price points in the UAE. It is the natural home for digital creators, content studios, marketing agencies, e-commerce founders and creative consultants who want a UAE-licensed entity without DMCC-level cost.' . "\n\n" . 'Kingston handles SHAMS company formation alongside ongoing audit and tax compliance.',

    'fz_facts' => array(
        array( 'label' => 'Sector focus',   'value' => 'Media & Creative' ),
        array( 'label' => 'Setup time',     'value' => '1–2 weeks' ),
        array( 'label' => 'Visas',          'value' => 'Office-based' ),
        array( 'label' => 'Office options', 'value' => 'Co-working to office' ),
    ),

    'includes_heading' => 'Why founders choose SHAMS',
    'includes_items' => array(
        array( 'title' => 'Affordable packages',           'description' => 'Among the most cost-effective free zone setup options in the UAE.' ),
        array( 'title' => 'Media-friendly activity list',  'description' => 'Specifically built for media production, content, marketing, digital, e-sports and creative services.' ),
        array( 'title' => '100% foreign ownership',        'description' => 'Full ownership of your SHAMS entity.' ),
        array( 'title' => 'Quick incorporation',           'description' => 'Typical setup completes in 1–2 weeks.' ),
        array( 'title' => 'Sharjah location advantages',   'description' => '20 minutes from Dubai, with lower operating costs.' ),
        array( 'title' => 'Up to 6 visas in starter packages', 'description' => 'Visa allocations scale with package — sufficient for typical creator and agency teams.' ),
    ),
    'why_heading' => 'Why Kingston for SHAMS setup',
    'why_items'   => array(
        array( 'title' => 'Approved SHAMS auditor',         'description' => 'Kingston is registered with SHAMS as an approved auditor and corporate-services partner.' ),
        array( 'title' => 'End-to-end setup',               'description' => 'Entity, licence, visa, office, banking — handled in one engagement letter.' ),
        array( 'title' => 'No third-party hand-offs',       'description' => 'We do not outsource your setup or audit work to introduce-and-disappear partners.' ),
        array( 'title' => 'Audit and tax under one roof',   'description' => 'After setup, we stay on as your auditor and corporate tax advisor.' ),
    ),
    'related_items' => array(
        array( 'label' => 'DMCC',   'link' => 'free-zone-dmcc' ),
        array( 'label' => 'JAFZA',  'link' => 'free-zone-jafza' ),
        array( 'label' => 'DIFC',   'link' => 'free-zone-difc' ),
        array( 'label' => 'ADGM',   'link' => 'free-zone-adgm' ),
        array( 'label' => 'DAFZA',  'link' => 'free-zone-dafza' ),
        array( 'label' => 'RAKEZ',  'link' => 'free-zone-rakez' ),
        array( 'label' => 'IFZA',   'link' => 'free-zone-ifza' ),
        array( 'label' => 'Meydan', 'link' => 'free-zone-meydan' ),
        array( 'label' => 'All Free Zones', 'link' => 'freezones', 'view_all' => true ),
    ),

    'process_eyebrow' => 'Process',
    'process_heading' => 'Your SHAMS setup, step by step.',
    'process_steps'   => array(
        array( 'title' => 'Activity & licence', 'description' => 'Confirm activities, licence type, share capital and shareholder structure — documented in writing before filing.' ),
        array( 'title' => 'Incorporation',      'description' => 'Name approval, MoA/AoA, trade licence, establishment and immigration cards.' ),
        array( 'title' => 'Visas & office',     'description' => 'Investor visa, employee visas, dependent visas and physical or flexi-office allocation.' ),
        array( 'title' => 'Banking & tax',      'description' => 'UAE corporate bank account, FTA registration, accounting setup and audit pre-readiness.' ),
    ),
    'faq_heading' => 'SHAMS — common questions answered.',
    'faq_items' => array(
        array( 'question' => 'Can a SHAMS company invoice Dubai clients?', 'answer' => 'Yes — SHAMS-licensed companies can invoice and serve clients across the UAE and globally. Operating physical premises in Dubai requires a branch or distributor arrangement.' ),
        array( 'question' => 'What activities are permitted under SHAMS?', 'answer' => 'A wide media and creative list — production, post-production, content, advertising, digital marketing, e-sports, broadcasting and more, plus general trading where permitted.' ),
        array( 'question' => 'How long does SHAMS setup take?', 'answer' => '1–2 weeks for clean profiles.' ),
        array( 'question' => 'Is annual audit mandatory in SHAMS?', 'answer' => 'Yes — SHAMS requires annual audited financial statements. Kingston is set up to support SHAMS clients.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
