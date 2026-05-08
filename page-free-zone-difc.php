<?php
/**
 * Template Name: Free Zone — DIFC
 */
get_header();
$kingston_detail_is_freezone = true;
$kingston_detail_defaults = array(
    'breadcrumb'   => 'Free Zones · DIFC',
    'page_eyebrow' => 'DIFC · Dubai',
    'page_heading' => 'Set up your business in DIFC — Dubai International Financial Centre.',
    'page_intro'   => "The Middle East's leading financial hub — common law, English-language regulator, and the place to be for funds, banks, fintech and law firms.",
    'banner_image' => kingston_asset( 'img/freezones/difc.svg' ),
    'banner_alt'   => 'DIFC Free Zone',

    'overview_eyebrow' => 'DIFC · Dubai',
    'overview_heading' => 'Dubai International Financial Centre',
    'overview_body'    => "DIFC is a different animal. An independent common-law jurisdiction inside Dubai, regulated by the Dubai Financial Services Authority (DFSA), with its own court system and English-language commercial law. If you are running a regulated financial business — a fund manager, family office, bank, insurer, fintech, law firm — this is typically the right address.\n\nKingston advises on DIFC entity structuring, regulatory licensing strategy, ongoing audit (under IFRS) and corporate tax for DIFC entities — including Qualifying Free Zone Person testing.",

    'fz_facts' => array(
        array( 'label' => 'Sector focus',   'value' => 'Financial & Professional Services' ),
        array( 'label' => 'Setup time',     'value' => '6–12 weeks' ),
        array( 'label' => 'Visas',          'value' => 'Tied to substance' ),
        array( 'label' => 'Office options', 'value' => 'Fitted & serviced' ),
    ),

    'includes_heading' => 'Why founders choose DIFC',
    'includes_items' => array(
        array( 'title' => 'Common-law jurisdiction',  'description' => 'Independent civil and commercial laws based on international standards — predictable for global investors.' ),
        array( 'title' => 'DFSA regulation',          'description' => 'An internationally respected regulator — your DIFC licence carries weight with global counterparties.' ),
        array( 'title' => '100% foreign ownership',   'description' => 'No UAE national shareholder required — full control of your entity.' ),
        array( 'title' => 'Family Wealth Centre',     'description' => 'Bespoke regime for single-family offices, holding structures and prescribed companies.' ),
        array( 'title' => 'World-class talent pool',  'description' => "DIFC's tenant community gives you access to a deep network of bankers, advisors, lawyers and operators." ),
        array( 'title' => 'Innovation Hub',           'description' => 'Dedicated fintech accelerator and licence regime for fintech startups and innovation-stage businesses.' ),
    ),
    'why_heading' => 'Why Kingston for DIFC setup',
    'why_items'   => array(
        array( 'title' => 'Approved DIFC auditor',         'description' => 'Kingston is registered with DIFC as an approved auditor and corporate-services partner.' ),
        array( 'title' => 'End-to-end setup',              'description' => 'Entity, licence, visa, office, banking — handled in one engagement letter.' ),
        array( 'title' => 'No third-party hand-offs',      'description' => 'We do not outsource your setup or audit work to introduce-and-disappear partners.' ),
        array( 'title' => 'Audit and tax under one roof',  'description' => 'After setup, we stay on as your auditor and corporate tax advisor.' ),
    ),
    'related_items' => array(
        array( 'label' => 'DMCC',   'link' => 'free-zone-dmcc' ),
        array( 'label' => 'JAFZA',  'link' => 'free-zone-jafza' ),
        array( 'label' => 'ADGM',   'link' => 'free-zone-adgm' ),
        array( 'label' => 'DAFZA',  'link' => 'free-zone-dafza' ),
        array( 'label' => 'RAKEZ',  'link' => 'free-zone-rakez' ),
        array( 'label' => 'IFZA',   'link' => 'free-zone-ifza' ),
        array( 'label' => 'Meydan', 'link' => 'free-zone-meydan' ),
        array( 'label' => 'SHAMS',  'link' => 'free-zone-shams' ),
        array( 'label' => 'All Free Zones', 'link' => 'freezones', 'view_all' => true ),
    ),

    'process_eyebrow' => 'Process',
    'process_heading' => 'Your DIFC setup, step by step.',
    'process_steps'   => array(
        array( 'title' => 'Activity & licence', 'description' => 'Confirm activities, licence type, share capital and shareholder structure — documented in writing before filing.' ),
        array( 'title' => 'Incorporation',      'description' => 'Name approval, MoA/AoA, trade licence, establishment and immigration cards.' ),
        array( 'title' => 'Visas & office',     'description' => 'Investor visa, employee visas, dependent visas and physical or flexi-office allocation.' ),
        array( 'title' => 'Banking & tax',      'description' => 'UAE corporate bank account, FTA registration, accounting setup and audit pre-readiness.' ),
    ),
    'faq_heading' => 'DIFC — common questions answered.',
    'faq_items' => array(
        array( 'question' => 'Is DIFC the right zone for a fund manager?', 'answer' => 'If you are running a regulated investment business, yes. DIFC offers fund manager, fund management, advisory and wealth-management licences under the DFSA.' ),
        array( 'question' => 'How long does a DIFC licence take?', 'answer' => 'For non-regulated entities, 4–8 weeks. For regulated financial entities, 12–24 weeks depending on the licence category and your readiness.' ),
        array( 'question' => 'Are DIFC entities subject to UAE corporate tax?', 'answer' => 'Yes — DIFC entities are within the scope of UAE corporate tax, but most can qualify for the 0% rate as a Qualifying Free Zone Person if substance and qualifying-income tests are met. Kingston handles this analysis.' ),
        array( 'question' => 'Does DIFC require an audit?', 'answer' => 'Yes — DIFC requires annual audited financial statements under IFRS. DFSA-regulated entities also have additional regulatory reporting requirements.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
