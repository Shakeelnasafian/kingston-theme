<?php
/**
 * Template Name: Free Zone Audit
 */
get_header();

$kingston_detail_defaults = array(
    'breadcrumb'   => 'Free Zone Audit',
    'page_eyebrow' => 'Audit & Assurance',
    'page_heading' => 'Approved free zone auditors. Across every major UAE zone.',
    'page_intro'   => 'Kingston is registered with all major UAE Free Zones and government authorities — so your annual audit is signed by a firm your zone authority will actually accept, first time.',
    'banner_image' => kingston_asset( 'img/services/free-zone.svg' ),
    'banner_alt'   => 'Free Zone Audit — Kingston',

    'overview_heading' => 'Free Zone Audit in the UAE — done right.',
    'overview_body'    => "Operating in a UAE Free Zone gives you tax efficiency, foreign ownership and a streamlined regulatory regime — but it also means an annual audit, on the zone authority's timetable, by an auditor on the zone authority's approved list. Submit a report from an unapproved firm and the file gets rejected. Miss the licence-renewal cut-off and your trade licence is at risk.\n\nKingston is a UAE-licensed chartered audit firm registered across all major UAE Free Zones. We audit Free Zone companies under IFRS, in the format each zone authority expects, with the licence-renewal deadline tracked from day one.",

    'includes_items' => array(
        array( 'title' => 'Zone-approved auditors',                'description' => 'Registered across DMCC, JAFZA, DAFZA, ADGM, DIFC, DWC, RAKEZ, SHAMS, IFZA, Meydan, JLT, KIZAD & more.' ),
        array( 'title' => 'Licence-renewal aligned',               'description' => 'We work backwards from your licence-renewal date — no last-minute panic, no licence at risk.' ),
        array( 'title' => 'Zone-specific reporting',               'description' => 'Each Free Zone has its own format, cover-page and submission portal. We handle every one of them.' ),
        array( 'title' => 'IFRS-compliant audit',                  'description' => 'Every Free Zone audit is delivered under International Financial Reporting Standards — and our reports are accepted by banks, investors and the FTA.' ),
        array( 'title' => 'Qualifying Free Zone Person testing',   'description' => 'For UAE corporate tax, we assess and document QFZP status alongside the audit — joined-up, not bolted on.' ),
        array( 'title' => 'Direct portal submission',              'description' => 'Where the zone authority allows it, we file the signed report directly on your behalf.' ),
    ),
    'why_items' => array(
        array( 'title' => 'All major zones, one firm',                 'description' => 'Group with entities in three different Free Zones? One Kingston engagement letter, one team, one timeline.' ),
        array( 'title' => 'Real zone fluency',                         'description' => "We know each zone's quirks — DMCC's eAudit portal, DIFC's regulator expectations, ADGM's filing windows." ),
        array( 'title' => 'On-time, every time',                       'description' => '98% of Free Zone audits issued on or ahead of the agreed deadline — protecting your licence renewal.' ),
        array( 'title' => 'Free Zone & corporate-tax under one roof',  'description' => 'Audit, QFZP analysis and corporate-tax filings handled together — no gaps, no duplication.' ),
    ),
    'related_items' => array(
        array( 'label' => 'Statutory Audit', 'link' => 'statutory-audit' ),
        array( 'label' => 'Internal Audit',  'link' => 'internal-audit' ),
        array( 'label' => 'Forensic Audit',  'link' => 'forensic-audit' ),
        array( 'label' => 'Due Diligence',   'link' => 'due-diligence' ),
        array( 'label' => 'Corporate Tax',   'link' => 'corporate-tax' ),
        array( 'label' => 'VAT Services',    'link' => 'vat' ),
        array( 'label' => 'View all services', 'link' => 'services', 'view_all' => true ),
    ),

    'process_heading' => 'How a free zone audit engagement runs.',
    'process_steps'   => array(
        array( 'title' => 'Zone & deadline mapping',     'description' => "We confirm your Free Zone authority, licence-renewal date and required reporting format up-front." ),
        array( 'title' => 'Planning & risk assessment',  'description' => "Risk-based audit plan tailored to your zone's expectations and your business activities." ),
        array( 'title' => 'Fieldwork & testing',         'description' => 'Senior-led examination of financial records, internal controls and supporting evidence under IFRS.' ),
        array( 'title' => 'Report & submission',         'description' => 'Signed report in the zone-approved format — submitted to the zone portal where authorised.' ),
    ),
    'faq_heading' => 'Common questions about free zone audit.',
    'faq_items'   => array(
        array( 'question' => 'Which Free Zones is Kingston registered with?', 'answer' => "All major UAE Free Zones — DMCC, JAFZA, DAFZA, ADGM, DIFC, DWC, RAKEZ, SHAMS, IFZA, Meydan, JLT, KIZAD and others. We confirm your specific zone's approval at engagement." ),
        array( 'question' => 'Is a Free Zone audit mandatory?', 'answer' => 'Most Free Zones require annual audited financial statements as a condition of licence renewal. Even where it is not technically mandatory, banks, investors and Qualifying Free Zone Person testing typically require one.' ),
        array( 'question' => 'How long does a Free Zone audit take?', 'answer' => 'For a typical SME, fieldwork runs 2–3 weeks. We always work backwards from your licence-renewal date so the signed report is ready in time.' ),
        array( 'question' => 'Do you handle the QFZP analysis at the same time?', 'answer' => 'Yes — for UAE corporate tax, we assess and document Qualifying Free Zone Person status alongside the audit. Same data, same team, same engagement.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
