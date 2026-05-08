<?php
/**
 * Template Name: Free Zone — RAKEZ
 */
get_header();
$kingston_detail_is_freezone = true;
$kingston_detail_defaults = array(
    'breadcrumb'   => 'Free Zones · RAKEZ',
    'page_eyebrow' => 'RAKEZ · Ras Al Khaimah',
    'page_heading' => 'Set up your business in RAKEZ — Ras Al Khaimah Economic Zone.',
    'page_intro'   => 'The cost-effective free zone with industrial scale and emerging-business agility.',
    'banner_image' => kingston_asset( 'img/freezones/rakez.svg' ),
    'banner_alt'   => 'RAKEZ Free Zone',

    'overview_eyebrow' => 'RAKEZ · Ras Al Khaimah',
    'overview_heading' => 'Ras Al Khaimah Economic Zone',
    'overview_body'    => "RAKEZ pulls together Ras Al Khaimah's economic zones into one platform that competes hard on cost and flexibility. For SMEs, e-commerce operations and industrial businesses that do not need a Dubai-postcode prestige play, RAKEZ frequently wins on total cost of ownership.\n\nKingston handles RAKEZ company formation, audits and tax compliance for businesses across the SME and industrial spectrum.",

    'fz_facts' => array(
        array( 'label' => 'Sector focus',   'value' => 'Industry & SMEs' ),
        array( 'label' => 'Setup time',     'value' => '1–3 weeks' ),
        array( 'label' => 'Visas',          'value' => 'Office-based' ),
        array( 'label' => 'Office options', 'value' => 'Co-working to plots' ),
    ),

    'includes_heading' => 'Why founders choose RAKEZ',
    'includes_items' => array(
        array( 'title' => 'Cost-competitive packages',  'description' => 'Setup and renewal costs typically come in well below Dubai-based zones — material for early-stage businesses.' ),
        array( 'title' => 'Flexible facility options',  'description' => 'From co-working desks to industrial plots — the same zone scales with your business.' ),
        array( 'title' => 'Activity breadth',           'description' => 'Over 1,000 permitted activities — commercial, professional, industrial, educational, media.' ),
        array( 'title' => 'Quick incorporation',        'description' => 'Streamlined process — typical setup under 2 weeks.' ),
        array( 'title' => 'Strong industrial cluster',  'description' => 'Established manufacturing tenant base — building materials, chemicals, food, packaging.' ),
        array( 'title' => 'Easy renewal',               'description' => 'Renewals are typically straightforward and cheaper than Dubai zones.' ),
    ),
    'why_heading' => 'Why Kingston for RAKEZ setup',
    'why_items'   => array(
        array( 'title' => 'Approved RAKEZ auditor',         'description' => 'Kingston is registered with RAKEZ as an approved auditor and corporate-services partner.' ),
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
        array( 'label' => 'IFZA',   'link' => 'free-zone-ifza' ),
        array( 'label' => 'Meydan', 'link' => 'free-zone-meydan' ),
        array( 'label' => 'SHAMS',  'link' => 'free-zone-shams' ),
        array( 'label' => 'All Free Zones', 'link' => 'freezones', 'view_all' => true ),
    ),

    'process_eyebrow' => 'Process',
    'process_heading' => 'Your RAKEZ setup, step by step.',
    'process_steps'   => array(
        array( 'title' => 'Activity & licence', 'description' => 'Confirm activities, licence type, share capital and shareholder structure — documented in writing before filing.' ),
        array( 'title' => 'Incorporation',      'description' => 'Name approval, MoA/AoA, trade licence, establishment and immigration cards.' ),
        array( 'title' => 'Visas & office',     'description' => 'Investor visa, employee visas, dependent visas and physical or flexi-office allocation.' ),
        array( 'title' => 'Banking & tax',      'description' => 'UAE corporate bank account, FTA registration, accounting setup and audit pre-readiness.' ),
    ),
    'faq_heading' => 'RAKEZ — common questions answered.',
    'faq_items' => array(
        array( 'question' => 'Can a RAKEZ company operate in Dubai?', 'answer' => 'A RAKEZ company can do business with Dubai, but to physically operate in Dubai (lease an office, hire staff there) typically requires a branch or distributor arrangement.' ),
        array( 'question' => 'What types of licences does RAKEZ issue?', 'answer' => 'Commercial, professional, service, industrial, educational, media and e-commerce licences.' ),
        array( 'question' => 'Is RAKEZ a good fit for industrial setup?', 'answer' => 'Yes — RAKEZ has a strong industrial estate offering, with land, warehousing and pre-built facilities.' ),
        array( 'question' => 'Is annual audit mandatory in RAKEZ?', 'answer' => 'Yes — annual audited financial statements are required. Kingston supports RAKEZ audit submissions.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
