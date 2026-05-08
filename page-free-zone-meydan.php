<?php
/**
 * Template Name: Free Zone — Meydan
 */
get_header();
$kingston_detail_is_freezone = true;
$kingston_detail_defaults = array(
    'breadcrumb'   => 'Free Zones · Meydan',
    'page_eyebrow' => 'Meydan · Dubai',
    'page_heading' => 'Set up your business in Meydan — Meydan Free Zone.',
    'page_intro'   => 'A premium Dubai address — strong for founders, consultancies and crypto-adjacent businesses.',
    'banner_image' => kingston_asset( 'img/freezones/meydan.svg' ),
    'banner_alt'   => 'Meydan Free Zone',

    'overview_eyebrow' => 'Meydan · Dubai',
    'overview_heading' => 'Meydan Free Zone',
    'overview_body'    => 'Meydan Free Zone offers a Dubai-prestige licence with a relatively light operational footprint — virtual office options, broad activity lists, and a lean digital onboarding process. It has become popular with founders, consultancies and digital-asset adjacent businesses who want the Meydan / Dubai brand on their letterhead.' . "\n\n" . 'Kingston handles Meydan setup alongside the ongoing audit, tax and bookkeeping work that follows.',

    'fz_facts' => array(
        array( 'label' => 'Sector focus',   'value' => 'Founders & Consultancy' ),
        array( 'label' => 'Setup time',     'value' => '1–2 weeks' ),
        array( 'label' => 'Visas',          'value' => 'Up to 6+' ),
        array( 'label' => 'Office options', 'value' => 'Virtual to physical' ),
    ),

    'includes_heading' => 'Why founders choose Meydan',
    'includes_items' => array(
        array( 'title' => 'Premium Dubai address',           'description' => 'A "Meydan, Dubai, UAE" postcode that lifts perceived brand.' ),
        array( 'title' => 'Virtual office options',          'description' => 'Cost-effective virtual-office package with full registered address — fits remote-first businesses.' ),
        array( 'title' => 'Broad activity list',             'description' => 'Multiple activities permitted under a single licence — including consultancy, trading, e-commerce.' ),
        array( 'title' => 'Strong digital onboarding',       'description' => 'Quick, mostly-digital incorporation — limited document chase.' ),
        array( 'title' => 'Crypto-friendly mindset',         'description' => 'Open to virtual-asset adjacent activities (subject to licence type and approvals).' ),
        array( 'title' => 'Founder-friendly visa packages',  'description' => 'Investor visa with dependent options — common founder set-up.' ),
    ),
    'why_heading' => 'Why Kingston for Meydan setup',
    'why_items'   => array(
        array( 'title' => 'Approved Meydan auditor',        'description' => 'Kingston is registered with Meydan as an approved auditor and corporate-services partner.' ),
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
        array( 'label' => 'SHAMS',  'link' => 'free-zone-shams' ),
        array( 'label' => 'All Free Zones', 'link' => 'freezones', 'view_all' => true ),
    ),

    'process_eyebrow' => 'Process',
    'process_heading' => 'Your Meydan setup, step by step.',
    'process_steps'   => array(
        array( 'title' => 'Activity & licence', 'description' => 'Confirm activities, licence type, share capital and shareholder structure — documented in writing before filing.' ),
        array( 'title' => 'Incorporation',      'description' => 'Name approval, MoA/AoA, trade licence, establishment and immigration cards.' ),
        array( 'title' => 'Visas & office',     'description' => 'Investor visa, employee visas, dependent visas and physical or flexi-office allocation.' ),
        array( 'title' => 'Banking & tax',      'description' => 'UAE corporate bank account, FTA registration, accounting setup and audit pre-readiness.' ),
    ),
    'faq_heading' => 'Meydan — common questions answered.',
    'faq_items' => array(
        array( 'question' => 'Is Meydan suitable for crypto activities?', 'answer' => 'Meydan can support some crypto-adjacent activities, but regulated virtual-asset business in the UAE is licensed by VARA (Virtual Assets Regulatory Authority) or other relevant bodies. Kingston helps map activity to the right authority.' ),
        array( 'question' => 'Can I get a residency visa with Meydan?', 'answer' => 'Yes — Meydan supports investor visas and dependent visas, with quotas tied to package.' ),
        array( 'question' => 'How long does Meydan setup take?', 'answer' => 'Typically 1–2 weeks for clean applications — straightforward, mostly digital.' ),
        array( 'question' => 'Is annual audit mandatory in Meydan?', 'answer' => 'Yes — Meydan requires annual audited financial statements.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
