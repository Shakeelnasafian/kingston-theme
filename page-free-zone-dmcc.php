<?php
/**
 * Template Name: Free Zone — DMCC
 */
get_header();
$kingston_detail_is_freezone = true;
$kingston_detail_defaults = array(
    'breadcrumb'   => 'Free Zones · DMCC',
    'page_eyebrow' => 'DMCC · Dubai',
    'page_heading' => 'Set up your business in DMCC — Dubai Multi Commodities Centre.',
    'page_intro'   => "The world's #1 free zone — Dubai's powerhouse for trading, commodities, crypto, fintech and family business.",
    'banner_image' => kingston_asset( 'img/freezones/dmcc.svg' ),
    'banner_alt'   => 'DMCC Free Zone',

    'overview_eyebrow' => 'DMCC · Dubai',
    'overview_heading' => 'Dubai Multi Commodities Centre',
    'overview_body'    => "DMCC consistently tops the Financial Times' Global Free Zones of the Year ranking — and for good reason. Twenty-something years on, it has scaled from a commodities cluster into a 25,000-business community housing trading houses, crypto exchanges, family offices, fintech firms, professional services and beyond. If you are scaling a UAE business with international ambition, DMCC is on the shortlist.\n\nKingston is registered with DMCC as an approved auditor. We handle the full setup — entity structuring, licence, visa quotas, office, opening bank account — and stay on as your auditor and tax advisor for the years that follow.",

    'fz_facts' => array(
        array( 'label' => 'Sector focus',   'value' => 'Trading & Commodities' ),
        array( 'label' => 'Setup time',     'value' => 'From 1–2 weeks' ),
        array( 'label' => 'Visas',          'value' => 'Up to 6 (Flexi)' ),
        array( 'label' => 'Office options', 'value' => 'Flexi-desk to HQ' ),
    ),

    'includes_heading' => 'Why founders choose DMCC',
    'includes_items' => array(
        array( 'title' => '100% foreign ownership',     'description' => 'Full ownership of your DMCC entity — no UAE national shareholder required.' ),
        array( 'title' => '0% personal & 9% corporate tax', 'description' => 'Qualifying Free Zone Persons can access the 0% corporate tax rate on qualifying income.' ),
        array( 'title' => 'World-class infrastructure', 'description' => 'JLT business district with metro, hotels, restaurants and a thriving tenant community.' ),
        array( 'title' => 'Easy visa quotas',           'description' => 'Visas tied to your office size — Flexi-desk supports up to 6 visas, full offices scale further.' ),
        array( 'title' => 'Wide activity list',         'description' => 'Over 600 permitted business activities — pick multiple under one licence.' ),
        array( 'title' => 'Strong banking relationships','description' => 'Most UAE banks have streamlined onboarding for DMCC-licensed companies.' ),
    ),
    'why_heading' => 'Why Kingston for DMCC setup',
    'why_items'   => array(
        array( 'title' => 'Approved DMCC auditor',  'description' => 'Kingston is registered with DMCC as an approved auditor and corporate-services partner.' ),
        array( 'title' => 'End-to-end setup',       'description' => 'Entity, licence, visa, office, banking — handled in one engagement letter.' ),
        array( 'title' => 'No third-party hand-offs','description' => 'We do not outsource your setup or audit work to introduce-and-disappear partners.' ),
        array( 'title' => 'Audit and tax under one roof','description' => 'After setup, we stay on as your auditor and corporate tax advisor.' ),
    ),
    'related_items' => array(
        array( 'label' => 'JAFZA',  'link' => 'free-zone-jafza' ),
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
    'process_heading' => 'Your DMCC setup, step by step.',
    'process_steps'   => array(
        array( 'title' => 'Activity & licence', 'description' => 'Confirm activities, licence type, share capital and shareholder structure — documented in writing before filing.' ),
        array( 'title' => 'Incorporation',      'description' => 'Name approval, MoA/AoA, trade licence, establishment and immigration cards.' ),
        array( 'title' => 'Visas & office',     'description' => 'Investor visa, employee visas, dependent visas and physical or flexi-office allocation.' ),
        array( 'title' => 'Banking & tax',      'description' => 'UAE corporate bank account, FTA registration, accounting setup and audit pre-readiness.' ),
    ),
    'faq_heading' => 'DMCC — common questions answered.',
    'faq_items' => array(
        array( 'question' => 'How long does DMCC company setup take?', 'answer' => 'For a clean profile, typical timeline is 1–2 weeks from name approval to trade licence. Bank account opening adds another 2–4 weeks.' ),
        array( 'question' => 'What is the minimum share capital for DMCC?', 'answer' => 'DMCC has no mandatory paid-up share capital for most activities. We will confirm any activity-specific capital at engagement.' ),
        array( 'question' => 'Can I get residency through a DMCC company?', 'answer' => 'Yes — investor and employee residence visas are issued via DMCC and tied to your office size.' ),
        array( 'question' => 'Does DMCC require an annual audit?', 'answer' => 'Yes — every DMCC company must submit annual audited financial statements via the DMCC eAudit portal. Kingston is an approved DMCC auditor.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
