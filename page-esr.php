<?php
/**
 * Template Name: ESR Compliance
 */
get_header();

$kingston_detail_defaults = array(
    'breadcrumb'   => 'ESR Compliance',
    'page_eyebrow' => 'Compliance',
    'page_heading' => 'Economic Substance — assessed, notified, reported.',
    'page_intro'   => 'End-to-end Economic Substance Regulations (ESR) services for UAE entities — from initial scoping and notification, to annual ESR reports, to defending your position before the regulator.',
    'banner_image' => kingston_asset( 'img/services/esr.svg' ),
    'banner_alt'   => 'ESR Compliance — Kingston',

    'overview_heading' => 'ESR Compliance in the UAE — done right.',
    'overview_body'    => 'The UAE\'s Economic Substance Regulations (ESR) require entities carrying out one or more "Relevant Activities" to demonstrate adequate economic substance in the UAE — the right people, premises and decisions, in the country. The penalties for non-compliance — financial penalties, exchange-of-information with foreign authorities and licence-related consequences — are material.' . "\n\n" . 'Kingston advises UAE entities across the full ESR lifecycle: scoping which activities are caught, filing the annual notification, preparing the ESR report where required, and defending the position if the Regulatory Authority asks questions.',

    'includes_items' => array(
        array( 'title' => 'ESR scoping',                'description' => 'Activity-by-activity assessment of which entities in your group fall within ESR — and which Relevant Activities apply.' ),
        array( 'title' => 'Annual ESR notification',    'description' => 'Preparation and filing of the annual ESR notification on the Ministry of Finance portal — for every in-scope entity.' ),
        array( 'title' => 'ESR report preparation',     'description' => 'Where required, preparation of the annual ESR report — including the directed-and-managed test, CIGA, adequate people and adequate premises evidence.' ),
        array( 'title' => 'Substance design',           'description' => 'Where existing substance falls short, practical recommendations on board composition, meetings, premises and operating-expense alignment.' ),
        array( 'title' => 'Group structuring advisory', 'description' => 'ESR-aware advice on holding-company structures and intra-group activity allocation — before structuring decisions are made.' ),
        array( 'title' => 'Regulator response support', 'description' => 'Full support responding to Regulatory Authority enquiries, including documentary evidence, board minutes and substance walkthroughs.' ),
    ),
    'why_items' => array(
        array( 'title' => 'Joined-up with corporate tax', 'description' => 'ESR analysis sits alongside our UAE corporate tax and Free Zone work — same data, same team, no contradictions.' ),
        array( 'title' => 'Year-round access',            'description' => 'ESR is annual — but the structuring decisions that drive it happen all year. You have access to your engagement partner whenever those decisions arise.' ),
        array( 'title' => 'Audit-grade evidence files',   'description' => 'Every ESR position documented to a standard that survives Regulatory Authority enquiry.' ),
        array( 'title' => 'No surprises',                 'description' => 'We file in good time, with you fully briefed — no late-night-before-deadline scrambles.' ),
    ),
    'related_items' => array(
        array( 'label' => 'Statutory Audit', 'link' => 'statutory-audit' ),
        array( 'label' => 'Internal Audit',  'link' => 'internal-audit' ),
        array( 'label' => 'Forensic Audit',  'link' => 'forensic-audit' ),
        array( 'label' => 'Free Zone Audit', 'link' => 'free-zone' ),
        array( 'label' => 'Due Diligence',   'link' => 'due-diligence' ),
        array( 'label' => 'Corporate Tax',   'link' => 'corporate-tax' ),
        array( 'label' => 'View all services', 'link' => 'services', 'view_all' => true ),
    ),

    'process_heading' => 'How an ESR compliance engagement runs.',
    'process_steps'   => array(
        array( 'title' => 'Scoping',          'description' => 'Group-wide review of activities to identify entities in-scope of ESR and the applicable Relevant Activities.' ),
        array( 'title' => 'Notification',     'description' => 'Annual ESR notification filed on the Ministry of Finance portal for each in-scope entity.' ),
        array( 'title' => 'Reporting',        'description' => 'Where required, full ESR report preparation — substance test, CIGA, people, premises, expenditure.' ),
        array( 'title' => 'Defence & advisory','description' => 'Year-round access for regulator responses, structuring questions and next-year planning.' ),
    ),
    'faq_heading' => 'Common questions about ESR compliance.',
    'faq_items'   => array(
        array( 'question' => 'Who is in-scope of ESR?', 'answer' => 'Any UAE licensee — Mainland or Free Zone — that carries on one or more Relevant Activities (e.g. holding company, distribution, service centre, IP, headquarters, financing, leasing, insurance, banking, fund management, shipping). Kingston scopes this entity-by-entity.' ),
        array( 'question' => 'What is the difference between the notification and the report?', 'answer' => 'The notification is filed annually by every in-scope entity to declare which Relevant Activities it carries on. The report — required only by entities that earned income from a Relevant Activity in the period — demonstrates the substance test was met.' ),
        array( 'question' => "What if we missed a previous year's filing?", 'answer' => 'Late filings are possible but typically attract penalties. Kingston works with you to file outstanding submissions and remediate the position — and where appropriate, requests review of penalties.' ),
        array( 'question' => 'How does ESR interact with UAE corporate tax?', 'answer' => 'ESR substance and Qualifying Free Zone Person tests overlap meaningfully — but they are not identical. We assess and document both consistently and in one engagement.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
