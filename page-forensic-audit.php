<?php
/**
 * Template Name: Forensic Audit
 */
get_header();

$kingston_detail_defaults = array(
    'breadcrumb'   => 'Forensic Audit',
    'page_eyebrow' => 'Audit & Assurance',
    'page_heading' => 'When the numbers do not add up — quietly, we find out why.',
    'page_intro'   => 'A forensic audit is a detailed examination of financial records to detect fraud, investigate financial crime or gather evidence for legal proceedings — handled with the discretion such matters demand.',
    'banner_image' => kingston_asset( 'img/services/forensic-audit.svg' ),
    'banner_alt'   => 'Forensic Audit — Kingston',

    'overview_heading' => 'Forensic Audit in the UAE — done right.',
    'overview_body'    => "The first sign is rarely dramatic. A reconciliation that never balances. A vendor nobody can locate. A senior employee who is unusually defensive about their books. By the time something is obviously wrong, real money has typically already left the building.\n\nKingston's forensic team — led by Certified Fraud Examiners — investigates suspected fraud, asset misappropriation and financial crime. We work in tight coordination with your legal counsel, produce evidence that holds up in court, and protect your reputation throughout.",

    'includes_items' => array(
        array( 'title' => 'Fraud investigation',                  'description' => 'Vendor fraud, payroll fraud, expense abuse, procurement schemes, ghost employees, diversion — we have seen it all.' ),
        array( 'title' => 'Asset tracing',                        'description' => 'Following the money across entities, jurisdictions and instruments to identify what was taken and where it went.' ),
        array( 'title' => 'Forensic accounting',                  'description' => 'Detailed reconstruction of transactions, journal entries and supporting documents — admissible as evidence.' ),
        array( 'title' => 'Litigation support & expert witness',  'description' => 'Reports drafted to evidentiary standards, expert testimony in UAE and DIFC proceedings where required.' ),
        array( 'title' => 'Whistleblower investigations',         'description' => 'Independent, confidential intake and investigation of internal reports — with appropriate firewalls.' ),
        array( 'title' => 'Anti-fraud controls remediation',      'description' => 'Once the bleeding stops, we help you redesign controls so it cannot happen again.' ),
    ),
    'why_items' => array(
        array( 'title' => 'Certified Fraud Examiners on every job', 'description' => 'Trained specifically in interview technique, evidence handling and fraud schemes.' ),
        array( 'title' => 'Strict confidentiality',  'description' => 'Encrypted comms, NDAs, "need to know" teaming. Internal investigations stay internal.' ),
        array( 'title' => 'Court-ready evidence',    'description' => 'Workpapers, chain-of-custody and reports built to standards of UAE courts and DIFC arbitration.' ),
        array( 'title' => 'Speed when it matters',   'description' => 'Fraud investigations are time-sensitive. Engagements typically launch within 48 hours of authorisation.' ),
    ),
    'related_items' => array(
        array( 'label' => 'Statutory Audit', 'link' => 'statutory-audit' ),
        array( 'label' => 'Internal Audit',  'link' => 'internal-audit' ),
        array( 'label' => 'Free Zone Audit', 'link' => 'free-zone' ),
        array( 'label' => 'Due Diligence',   'link' => 'due-diligence' ),
        array( 'label' => 'Corporate Tax',   'link' => 'corporate-tax' ),
        array( 'label' => 'VAT Services',    'link' => 'vat' ),
        array( 'label' => 'View all services', 'link' => 'services', 'view_all' => true ),
    ),

    'process_heading' => 'How a forensic audit engagement runs.',
    'process_steps'   => array(
        array( 'title' => 'Confidential briefing',     'description' => 'Privileged scoping with you and your legal counsel — what is suspected, what is at stake, who can know.' ),
        array( 'title' => 'Evidence preservation',     'description' => 'Securing accounting systems, emails, devices and physical records before they can be tampered with.' ),
        array( 'title' => 'Investigation & analysis',  'description' => 'Document review, data analytics, interviews, asset tracing — coordinated with legal strategy.' ),
        array( 'title' => 'Reporting & support',       'description' => 'A formal forensic report, optional expert testimony, and recommendations for control remediation.' ),
    ),
    'faq_heading' => 'Common questions about forensic audit.',
    'faq_items'   => array(
        array( 'question' => 'How is a forensic audit different from a normal audit?', 'answer' => 'A normal audit gives reasonable assurance that the accounts are not materially misstated. A forensic audit assumes something specific is wrong and sets out to prove or disprove it — to the standard required by courts.' ),
        array( 'question' => 'Can findings be used in court?', 'answer' => 'Yes — that is the point. Our methodology, workpapers and reports are designed to meet the evidentiary standards of UAE courts, DIFC and arbitral tribunals.' ),
        array( 'question' => 'Is the engagement confidential?', 'answer' => 'Strictly. Forensic engagements operate under NDA, with restricted teaming and secure data handling. We routinely work directly with your legal counsel under privilege.' ),
        array( 'question' => 'How quickly can you mobilise?', 'answer' => 'For credible fraud concerns, Kingston typically begins evidence preservation within 48 hours of engagement letter signature.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
