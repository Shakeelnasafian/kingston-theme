<?php
/**
 * Template Name: Internal Audit
 */
get_header();

$kingston_detail_defaults = array(
    'breadcrumb'   => 'Internal Audit',
    'page_eyebrow' => 'Audit & Assurance',
    'page_heading' => 'Strengthen controls. Manage risk. Find the savings.',
    'page_intro'   => 'Internal audit reviews and improves your controls, risk management and compliance — supporting effective operations and giving boards an independent line of sight.',
    'banner_image' => kingston_asset( 'img/services/internal-audit.svg' ),
    'banner_alt'   => 'Internal Audit — Kingston',

    'overview_eyebrow' => 'Overview',
    'overview_heading' => 'Internal Audit in the UAE — done right.',
    'overview_body'    => "Internal audit is your second line of defence — the team that quietly checks whether the controls you designed on paper are actually working in practice. Done well, it is one of the highest-return investments a CFO or audit committee can make.\n\nKingston delivers internal audit as a co-source partner to your in-house team, or as a fully outsourced function for businesses that do not yet have one. Either way, you get senior, independent eyes on the things that keep boards up at night.",

    'includes_items' => array(
        array( 'title' => 'Risk & controls assessment',     'description' => 'A practical map of your top operational, financial, regulatory and IT risks — and the controls expected to address them.' ),
        array( 'title' => 'Annual internal audit plan',     'description' => 'A risk-prioritised programme of reviews aligned with your strategy and audit committee priorities.' ),
        array( 'title' => 'Process & controls reviews',     'description' => 'Procure-to-pay, order-to-cash, payroll, treasury, IT general controls — wherever cash, data or risk lives.' ),
        array( 'title' => 'SOX-style testing',              'description' => 'Where required, walkthroughs and operating-effectiveness testing aligned with global control frameworks.' ),
        array( 'title' => 'Operational efficiency findings','description' => 'Not just risk — we surface duplicated effort, leaky controls and manual work begging for automation.' ),
        array( 'title' => 'Audit committee reporting',      'description' => 'Clear, concise board-ready reporting — issues, root causes, recommendations and management responses.' ),
    ),
    'why_items' => array(
        array( 'title' => 'Co-source flexibility',         'description' => 'Scale from a single review up to a full outsourced function — and back down — without rebuilding the team.' ),
        array( 'title' => 'Industry-aware',                'description' => 'Trading, real estate, retail, professional services, technology and family offices — we know the typical pressure points.' ),
        array( 'title' => 'Outcome-focused, not box-ticking','description' => 'Findings written for action: who, what, by when — not abstract compliance language.' ),
        array( 'title' => 'Independent and discreet',      'description' => 'Free of the politics that constrain in-house teams. Findings reach the audit committee unfiltered.' ),
    ),
    'related_items' => array(
        array( 'label' => 'Statutory Audit', 'link' => 'statutory-audit' ),
        array( 'label' => 'Forensic Audit',  'link' => 'forensic-audit' ),
        array( 'label' => 'Free Zone Audit', 'link' => 'free-zone' ),
        array( 'label' => 'Due Diligence',   'link' => 'due-diligence' ),
        array( 'label' => 'Corporate Tax',   'link' => 'corporate-tax' ),
        array( 'label' => 'VAT Services',    'link' => 'vat' ),
        array( 'label' => 'View all services', 'link' => 'services', 'view_all' => true ),
    ),

    'process_eyebrow' => 'Our process',
    'process_heading' => 'How an internal audit engagement runs.',
    'process_steps'   => array(
        array( 'title' => 'Risk assessment',      'description' => 'Workshop with leadership and finance to map and prioritise risk across the business.' ),
        array( 'title' => 'Audit plan',           'description' => 'A written, board-approved plan: scope, timeline, fees and reporting cadence.' ),
        array( 'title' => 'Reviews & testing',    'description' => 'Fieldwork on each scoped area — process walkthroughs, sample testing, root-cause analysis.' ),
        array( 'title' => 'Reporting & follow-up','description' => 'Issued reports per review, plus a quarterly tracker of management actions to closure.' ),
    ),
    'faq_heading' => 'Common questions about internal audit.',
    'faq_items'   => array(
        array( 'question' => 'Do we need internal audit if we already have an external audit?', 'answer' => "Yes — they answer different questions. External audit gives an independent opinion on the past year's accounts. Internal audit improves the controls and processes that produce those numbers in the first place." ),
        array( 'question' => 'Can Kingston co-source with our in-house team?', 'answer' => 'Absolutely. Many of our engagements are co-source — your team handles core reviews, ours handles specialist or peak-load work like IT GC, treasury or international entity reviews.' ),
        array( 'question' => 'How often should reviews happen?', 'answer' => 'Most clients run a rolling annual plan, with quarterly audit committee reporting. Higher-risk areas (cash, payroll, regulated activities) typically see more frequent visits.' ),
        array( 'question' => 'Do you report directly to the audit committee?', 'answer' => 'Yes — when scope includes audit committee reporting, we present findings directly to the committee, with management briefed in advance.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
