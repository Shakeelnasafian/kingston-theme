<?php
/**
 * Template Name: Statutory Audit
 *
 * Editable from WP admin via the "Service Detail — Kingston" ACF field group.
 * The defaults array below preserves the original static content as fallback,
 * so the page renders identically until an admin overrides individual fields.
 */
get_header();

$kingston_detail_defaults = array(
    'breadcrumb'   => 'Statutory Audit',
    'page_eyebrow' => 'Audit & Assurance',
    'page_heading' => 'Statutory audit, signed off with confidence.',
    'page_intro'   => 'Independent, IFRS-aligned external audits that satisfy UAE corporate law, Free Zone authority requirements and the expectations of banks, investors and your board.',
    'banner_image' => kingston_asset( 'img/services/statutory-audit.svg' ),
    'banner_alt'   => 'Statutory Audit — Kingston',

    'overview_eyebrow' => 'Overview',
    'overview_heading' => 'Statutory Audit in the UAE — done right.',
    'overview_body'    => "A statutory audit is more than a compliance tick. It is the moment when your stakeholders — banks, shareholders, regulators, investors — get to see whether your numbers can be trusted.\n\nAs a leading chartered audit firm in the UAE, Kingston provides comprehensive statutory audit services that ensure your business complies with local laws and international standards — and gives every external reader of your accounts complete confidence in what they see.",

    'includes_heading' => 'What is included',
    'includes_items'   => array(
        array( 'title' => 'Independent IFRS audit opinion', 'description' => 'Issued by senior chartered accountants licensed to sign UAE statutory audit reports.' ),
        array( 'title' => 'UAE corporate law compliance', 'description' => 'Full alignment with UAE Commercial Companies Law, Free Zone authority requirements and ESR.' ),
        array( 'title' => 'Risk-based audit methodology', 'description' => 'We focus effort where it matters — material balances, judgement areas, and high-risk transactions.' ),
        array( 'title' => 'Internal control review', 'description' => 'Findings on control weaknesses, with practical recommendations to strengthen your finance function.' ),
        array( 'title' => 'Management letter & debrief', 'description' => 'A clear written report and a partner-led debrief for your CFO, board or audit committee.' ),
        array( 'title' => 'Audit-ready advisory', 'description' => 'Year-round access to your engagement partner for technical questions on accounting and reporting.' ),
    ),
    'why_heading' => 'Why clients choose Kingston',
    'why_items'   => array(
        array( 'title' => 'Partner-led, no juniors flying solo', 'description' => 'A senior chartered accountant signs every workpaper and runs every closing meeting.' ),
        array( 'title' => 'On-time delivery, every time', 'description' => '98% of our statutory audits are issued on or ahead of the agreed deadline.' ),
        array( 'title' => 'Plain-English reporting', 'description' => 'Findings boards understand and management can act on — no jargon, no padding.' ),
        array( 'title' => 'Free Zone & Mainland fluency', 'description' => "DMCC, JAFZA, DAFZA, ADGM, DIFC, Mainland — we know each authority's quirks." ),
    ),
    'related_items' => array(
        array( 'label' => 'Internal Audit',  'link' => 'internal-audit' ),
        array( 'label' => 'Forensic Audit',  'link' => 'forensic-audit' ),
        array( 'label' => 'Free Zone Audit', 'link' => 'free-zone' ),
        array( 'label' => 'Due Diligence',   'link' => 'due-diligence' ),
        array( 'label' => 'Corporate Tax',   'link' => 'corporate-tax' ),
        array( 'label' => 'VAT Services',    'link' => 'vat' ),
        array( 'label' => 'View all services', 'link' => 'services', 'view_all' => true ),
    ),

    'process_eyebrow' => 'Our process',
    'process_heading' => 'How a statutory audit engagement runs.',
    'process_steps'   => array(
        array( 'title' => 'Planning & risk assessment', 'description' => 'We map your operations, financial structure and compliance requirements, identify risks and design a tailored audit strategy.' ),
        array( 'title' => 'Fieldwork & testing',        'description' => 'Senior-led examination of financial documents, accounting records, internal controls and supporting evidence.' ),
        array( 'title' => 'Reporting',                  'description' => 'A detailed audit report covering financial health, compliance status and recommendations for improvement.' ),
        array( 'title' => 'Post-audit support',         'description' => 'Expert guidance on corrective measures and strategies to strengthen financial controls for next year.' ),
    ),
    'faq_eyebrow' => 'FAQ',
    'faq_heading' => 'Common questions about statutory audit.',
    'faq_items'   => array(
        array( 'question' => 'Is a statutory audit mandatory in the UAE?', 'answer' => 'Yes — most UAE companies (Mainland and most Free Zones) are legally required to file annual audited financial statements. Kingston confirms your specific obligation in the discovery call.' ),
        array( 'question' => 'Which standards do you audit against?', 'answer' => 'We audit in line with International Standards on Auditing (ISA) and report under International Financial Reporting Standards (IFRS), as required by UAE corporate law.' ),
        array( 'question' => 'How long does a statutory audit take?', 'answer' => 'For a typical SME, fieldwork runs 2–4 weeks, with the final signed report issued 1–2 weeks after closing meetings. Larger or group audits scale from there.' ),
        array( 'question' => 'Are your audit reports accepted by Free Zones and banks?', 'answer' => 'Yes — Kingston is a UAE-licensed chartered audit firm whose reports are accepted by all major Free Zones, banks and the Federal Tax Authority.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
