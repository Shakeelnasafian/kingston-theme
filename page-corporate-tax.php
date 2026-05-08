<?php
/**
 * Template Name: Corporate Tax
 */
get_header();

$kingston_detail_defaults = array(
    'breadcrumb'   => 'Corporate Tax',
    'page_eyebrow' => 'Tax & Compliance',
    'page_heading' => 'UAE corporate tax — handled, end to end.',
    'page_intro'   => 'Plan, file and defend. Corporate tax services that help businesses manage their tax obligations through planning, compliance, filing and advisory — ensuring adherence to UAE corporate tax laws and optimising tax efficiency.',
    'banner_image' => kingston_asset( 'img/services/corporate-tax.svg' ),
    'banner_alt'   => 'Corporate Tax — Kingston',

    'overview_heading' => 'Corporate Tax in the UAE — done right.',
    'overview_body'    => "The introduction of UAE corporate tax has been the largest change in the country's regulatory landscape in a generation. The headline 9% rate is the easy part — the hard part is the structuring, the Qualifying Free Zone Person rules, transfer pricing, group relief and the exemption tests that determine what you actually pay.\n\nKingston's tax partners advise UAE businesses across the full corporate tax lifecycle — from initial registration to defending positions before the FTA — with a single goal: a fully compliant tax position, optimised within the four corners of the law.",

    'includes_items' => array(
        array( 'title' => 'Corporate tax registration',     'description' => 'Federal Tax Authority registration, group registration and structuring of free zone, mainland and offshore entities.' ),
        array( 'title' => 'Tax impact assessment',          'description' => 'A full diagnostic of how UAE corporate tax applies to your group — by entity, activity and revenue stream.' ),
        array( 'title' => 'Structuring & QFZP analysis',    'description' => 'Qualifying Free Zone Person eligibility, qualifying income testing, and group restructuring where appropriate.' ),
        array( 'title' => 'Return preparation & filing',    'description' => 'End-to-end preparation, review and filing of your annual corporate tax return with full supporting workpapers.' ),
        array( 'title' => 'Transfer pricing',               'description' => 'Documentation, benchmarking and policy design — including local file, master file and disclosure form.' ),
        array( 'title' => 'FTA representation',             'description' => "Responses to FTA enquiries, audits and clarifications — handled by partners who speak the FTA's language." ),
    ),
    'why_items' => array(
        array( 'title' => 'Tax-technical depth',         'description' => 'A team of UAE corporate tax and transfer pricing specialists, with regular FTA workshop participation.' ),
        array( 'title' => 'Optimisation, ethically',     'description' => 'Every legal lever — exemptions, group relief, qualifying income — pulled. No grey-area positions.' ),
        array( 'title' => 'Audit defensibility built in','description' => 'Every position we advise is documented to a standard that survives FTA scrutiny.' ),
        array( 'title' => 'Joined-up with your audit',   'description' => 'Tax and audit live under one roof — accounting policy and tax position aligned by design.' ),
    ),
    'related_items' => array(
        array( 'label' => 'Statutory Audit', 'link' => 'statutory-audit' ),
        array( 'label' => 'Internal Audit',  'link' => 'internal-audit' ),
        array( 'label' => 'Forensic Audit',  'link' => 'forensic-audit' ),
        array( 'label' => 'Free Zone Audit', 'link' => 'free-zone' ),
        array( 'label' => 'Due Diligence',   'link' => 'due-diligence' ),
        array( 'label' => 'VAT Services',    'link' => 'vat' ),
        array( 'label' => 'View all services', 'link' => 'services', 'view_all' => true ),
    ),

    'process_heading' => 'How a corporate tax engagement runs.',
    'process_steps'   => array(
        array( 'title' => 'Diagnostic',          'description' => 'Map your group, revenue streams and tax exposure. Identify quick wins and structural decisions.' ),
        array( 'title' => 'Plan & structure',    'description' => 'Implement registrations, restructure where beneficial, and document the planned tax position.' ),
        array( 'title' => 'Compliance & filing', 'description' => 'Annual return preparation, transfer pricing documentation and disclosure-form filing.' ),
        array( 'title' => 'Defence & advisory',  'description' => 'Year-round access for technical questions; full FTA representation if your return is selected for audit.' ),
    ),
    'faq_heading' => 'Common questions about corporate tax.',
    'faq_items'   => array(
        array( 'question' => 'Who is subject to UAE corporate tax?', 'answer' => 'All UAE businesses with taxable profits exceeding AED 375,000 are within scope, with specific regimes for Free Zone Persons, Qualifying Free Zone Persons and natural persons. Kingston confirms your exact obligation in the diagnostic.' ),
        array( 'question' => 'Do Free Zone companies still pay 0%?', 'answer' => 'Only if they meet the Qualifying Free Zone Person conditions on every test — substance, qualifying income, transfer pricing and audited financials. We assess and document this annually.' ),
        array( 'question' => 'Do you handle transfer pricing?', 'answer' => 'Yes — we prepare master file, local file and disclosure forms, and advise on intra-group pricing policies before they become an audit issue.' ),
        array( 'question' => 'Can you handle FTA audits?', 'answer' => 'Yes — Kingston represents clients through the full FTA enquiry and audit process, including formal objections and reconsideration requests.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
