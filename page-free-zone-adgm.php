<?php
/**
 * Template Name: Free Zone — ADGM
 */
get_header();
$kingston_detail_is_freezone = true;
$kingston_detail_defaults = array(
    'breadcrumb'   => 'Free Zones · ADGM',
    'page_eyebrow' => 'ADGM · Abu Dhabi',
    'page_heading' => 'Set up your business in ADGM — Abu Dhabi Global Market.',
    'page_intro'   => "Abu Dhabi's international financial centre — an English common-law jurisdiction on Al Maryah Island.",
    'banner_image' => kingston_asset( 'img/freezones/adgm.svg' ),
    'banner_alt'   => 'ADGM Free Zone',

    'overview_eyebrow' => 'ADGM · Abu Dhabi',
    'overview_heading' => 'Abu Dhabi Global Market',
    'overview_body'    => "ADGM is to Abu Dhabi what DIFC is to Dubai — a self-contained common-law financial centre with its own regulator (the FSRA), its own court system, and English-language commercial law. For groups that want a Big Four city's regulatory depth with Abu Dhabi's stability, ADGM is increasingly the choice.\n\nKingston supports ADGM entity formation, FSRA licensing strategy, audit under IFRS and corporate-tax compliance for ADGM-licensed entities.",

    'fz_facts' => array(
        array( 'label' => 'Sector focus',   'value' => 'Finance & Family Wealth' ),
        array( 'label' => 'Setup time',     'value' => '4–10 weeks' ),
        array( 'label' => 'Visas',          'value' => 'Tied to substance' ),
        array( 'label' => 'Office options', 'value' => 'Fitted' ),
    ),

    'includes_heading' => 'Why founders choose ADGM',
    'includes_items' => array(
        array( 'title' => 'Common-law jurisdiction',     'description' => 'English common law applies directly — a precedent-rich, internationally familiar legal regime.' ),
        array( 'title' => 'FSRA regulation',             'description' => 'Internationally respected financial regulator with category-based licensing across the financial services spectrum.' ),
        array( 'title' => 'Strong holding-company regime','description' => "ADGM's holding-company and SPV regimes are popular with UAE-anchored regional groups." ),
        array( 'title' => 'Family Office regime',        'description' => 'Tailored single and multi-family office regimes recognised by the FSRA.' ),
        array( 'title' => 'Foundations regime',          'description' => 'Common-law foundations — useful for succession, asset protection and philanthropy.' ),
        array( 'title' => 'Tech & innovation focus',     'description' => 'Dedicated regimes for fintech (RegLab), DLT, virtual assets and AI/data businesses.' ),
    ),
    'why_heading' => 'Why Kingston for ADGM setup',
    'why_items'   => array(
        array( 'title' => 'Approved ADGM auditor',          'description' => 'Kingston is registered with ADGM as an approved auditor and corporate-services partner.' ),
        array( 'title' => 'End-to-end setup',               'description' => 'Entity, licence, visa, office, banking — handled in one engagement letter.' ),
        array( 'title' => 'No third-party hand-offs',       'description' => 'We do not outsource your setup or audit work to introduce-and-disappear partners.' ),
        array( 'title' => 'Audit and tax under one roof',   'description' => 'After setup, we stay on as your auditor and corporate tax advisor.' ),
    ),
    'related_items' => array(
        array( 'label' => 'DMCC',   'link' => 'free-zone-dmcc' ),
        array( 'label' => 'JAFZA',  'link' => 'free-zone-jafza' ),
        array( 'label' => 'DIFC',   'link' => 'free-zone-difc' ),
        array( 'label' => 'DAFZA',  'link' => 'free-zone-dafza' ),
        array( 'label' => 'RAKEZ',  'link' => 'free-zone-rakez' ),
        array( 'label' => 'IFZA',   'link' => 'free-zone-ifza' ),
        array( 'label' => 'Meydan', 'link' => 'free-zone-meydan' ),
        array( 'label' => 'SHAMS',  'link' => 'free-zone-shams' ),
        array( 'label' => 'All Free Zones', 'link' => 'freezones', 'view_all' => true ),
    ),

    'process_eyebrow' => 'Process',
    'process_heading' => 'Your ADGM setup, step by step.',
    'process_steps'   => array(
        array( 'title' => 'Activity & licence', 'description' => 'Confirm activities, licence type, share capital and shareholder structure — documented in writing before filing.' ),
        array( 'title' => 'Incorporation',      'description' => 'Name approval, MoA/AoA, trade licence, establishment and immigration cards.' ),
        array( 'title' => 'Visas & office',     'description' => 'Investor visa, employee visas, dependent visas and physical or flexi-office allocation.' ),
        array( 'title' => 'Banking & tax',      'description' => 'UAE corporate bank account, FTA registration, accounting setup and audit pre-readiness.' ),
    ),
    'faq_heading' => 'ADGM — common questions answered.',
    'faq_items' => array(
        array( 'question' => 'ADGM or DIFC — which one is right for me?', 'answer' => "Both are common-law financial centres. DIFC is more central to Dubai's financial market; ADGM is the natural choice for Abu Dhabi-anchored groups, family offices and certain holding structures. We will advise based on activity, regulator preference and substance." ),
        array( 'question' => 'Does ADGM offer a holding-company licence?', 'answer' => 'Yes — ADGM is a popular jurisdiction for holding companies and SPVs, with a regime that accommodates regional and global structures.' ),
        array( 'question' => 'Is an ADGM licence subject to UAE corporate tax?', 'answer' => 'Yes — ADGM entities fall within UAE corporate tax scope, with most able to qualify as Qualifying Free Zone Persons if the conditions are met.' ),
        array( 'question' => 'Does ADGM require an annual audit?', 'answer' => 'Yes — annual audited financial statements under IFRS. FSRA-regulated entities have additional regulatory return requirements.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
