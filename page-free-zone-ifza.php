<?php
/**
 * Template Name: Free Zone — IFZA
 */
get_header();
$kingston_detail_is_freezone = true;
$kingston_detail_defaults = array(
    'breadcrumb'   => 'Free Zones · IFZA',
    'page_eyebrow' => 'IFZA · Dubai',
    'page_heading' => 'Set up your business in IFZA — International Free Zone Authority.',
    'page_intro'   => "Dubai's modern, fast and entrepreneur-friendly free zone — strong for service, consultancy and trading SMEs.",
    'banner_image' => kingston_asset( 'img/freezones/ifza.svg' ),
    'banner_alt'   => 'IFZA Free Zone',

    'overview_eyebrow' => 'IFZA · Dubai',
    'overview_heading' => 'International Free Zone Authority',
    'overview_body'    => 'IFZA has become a go-to for founders and consultants who want a Dubai-issued licence without the cost or complexity of larger zones. Setup is fast (often under a week), the activity list is broad, and the package economics work for solo founders and small teams.' . "\n\n" . 'Kingston runs IFZA company formation alongside the audit, tax and accounting work most IFZA clients also need.',

    'fz_facts' => array(
        array( 'label' => 'Sector focus',   'value' => 'Service & Consultancy' ),
        array( 'label' => 'Setup time',     'value' => '3–7 days' ),
        array( 'label' => 'Visas',          'value' => '1–6 typical' ),
        array( 'label' => 'Office options', 'value' => 'Flexi-desk to office' ),
    ),

    'includes_heading' => 'Why founders choose IFZA',
    'includes_items' => array(
        array( 'title' => 'Fast setup',                     'description' => 'Trade licence often issued within 3–7 days of name approval.' ),
        array( 'title' => 'Cost-effective',                 'description' => 'Packages start lower than DMCC, JAFZA and DIFC — designed for SME budgets.' ),
        array( 'title' => 'Up to 7 activities',             'description' => 'Most IFZA licences allow multiple business activities under one licence.' ),
        array( 'title' => 'Up to 6 visas',                  'description' => 'Visa quotas scale with package — supports founders bringing family on dependent visas.' ),
        array( 'title' => 'Modern administrative system',   'description' => 'Fully digital portal — registrations, renewals and amendments handled online.' ),
        array( 'title' => 'Strong consultant ecosystem',    'description' => "IFZA's tenant base is heavily service-oriented — useful network for B2B founders." ),
    ),
    'why_heading' => 'Why Kingston for IFZA setup',
    'why_items'   => array(
        array( 'title' => 'Approved IFZA auditor',          'description' => 'Kingston is registered with IFZA as an approved auditor and corporate-services partner.' ),
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
        array( 'label' => 'Meydan', 'link' => 'free-zone-meydan' ),
        array( 'label' => 'SHAMS',  'link' => 'free-zone-shams' ),
        array( 'label' => 'All Free Zones', 'link' => 'freezones', 'view_all' => true ),
    ),

    'process_eyebrow' => 'Process',
    'process_heading' => 'Your IFZA setup, step by step.',
    'process_steps'   => array(
        array( 'title' => 'Activity & licence', 'description' => 'Confirm activities, licence type, share capital and shareholder structure — documented in writing before filing.' ),
        array( 'title' => 'Incorporation',      'description' => 'Name approval, MoA/AoA, trade licence, establishment and immigration cards.' ),
        array( 'title' => 'Visas & office',     'description' => 'Investor visa, employee visas, dependent visas and physical or flexi-office allocation.' ),
        array( 'title' => 'Banking & tax',      'description' => 'UAE corporate bank account, FTA registration, accounting setup and audit pre-readiness.' ),
    ),
    'faq_heading' => 'IFZA — common questions answered.',
    'faq_items' => array(
        array( 'question' => 'How fast can I get an IFZA licence?', 'answer' => 'From name approval to issued trade licence, often 3–7 working days for clean profiles.' ),
        array( 'question' => 'Does IFZA require physical office space?', 'answer' => 'Most IFZA packages include a flexi-desk in their administrative office — sufficient for licence and visa purposes.' ),
        array( 'question' => 'Can I add visas later?', 'answer' => 'Yes — visa quotas can typically be upgraded by changing package and (where required) physical space.' ),
        array( 'question' => 'Is annual audit mandatory in IFZA?', 'answer' => 'Yes — IFZA requires annual audited financial statements for licensed entities. Kingston supports IFZA audit submissions.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
