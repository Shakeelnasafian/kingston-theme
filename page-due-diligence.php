<?php
/**
 * Template Name: Due Diligence
 */
get_header();

$kingston_detail_defaults = array(
    'breadcrumb'   => 'Due Diligence',
    'page_eyebrow' => 'Transaction Advisory',
    'page_heading' => 'Buy facts, not surprises.',
    'page_intro'   => 'A thorough investigation of a business or counterparty before a transaction — to assess financial health, risks and compliance — so you walk into the deal with eyes open.',
    'banner_image' => kingston_asset( 'img/services/due-diligence.svg' ),
    'banner_alt'   => 'Due Diligence — Kingston',

    'overview_heading' => 'Due Diligence in the UAE — done right.',
    'overview_body'    => "Most deals that go wrong, go wrong on something that was knowable before signing. The job of due diligence is to find that something — fast, discreetly, and in time for it to actually change the deal.\n\nKingston conducts financial, tax and operational due diligence for UAE buyers, sellers and lenders — from family-business succession deals to mid-market private equity acquisitions. We work to your timeline and your deal logic, not a generic checklist.",

    'includes_items' => array(
        array( 'title' => 'Financial due diligence',     'description' => 'Quality-of-earnings, normalised EBITDA, working capital analysis, debt-like items, cash quality and trend analytics.' ),
        array( 'title' => 'Tax due diligence',           'description' => 'UAE corporate tax, VAT, excise, withholding and historic tax exposure review — including Free Zone status integrity.' ),
        array( 'title' => 'Operational due diligence',   'description' => 'Customer concentration, supplier dependence, key-person risk, contract review and management calibre.' ),
        array( 'title' => 'Vendor due diligence',        'description' => 'Sell-side reports for owners taking the business to market — designed to accelerate the deal and protect value.' ),
        array( 'title' => 'Red-flag reviews',            'description' => 'Lean, pre-LOI scoping reviews to spot deal-breakers before significant deal costs are incurred.' ),
        array( 'title' => 'Synergy & integration support','description' => 'Post-signing — a clear plan for integrating finance, controls and reporting into the acquirer.' ),
    ),
    'why_items' => array(
        array( 'title' => 'Deal-experienced senior team',   'description' => 'Diligence led by partners who have run buy-side and sell-side processes across the GCC.' ),
        array( 'title' => 'Built around your deal logic',   'description' => 'We start from your investment thesis and work backwards — not a generic 200-page checklist.' ),
        array( 'title' => 'Issues, surfaced early',         'description' => 'We push concerns into your inbox in real time — not as a surprise on page 47 of a final report.' ),
        array( 'title' => 'Tight, decision-grade reports',  'description' => 'Reports designed for IC and bank credit memos — not as billable padding.' ),
    ),
    'related_items' => array(
        array( 'label' => 'Statutory Audit', 'link' => 'statutory-audit' ),
        array( 'label' => 'Internal Audit',  'link' => 'internal-audit' ),
        array( 'label' => 'Forensic Audit',  'link' => 'forensic-audit' ),
        array( 'label' => 'Free Zone Audit', 'link' => 'free-zone' ),
        array( 'label' => 'Corporate Tax',   'link' => 'corporate-tax' ),
        array( 'label' => 'VAT Services',    'link' => 'vat' ),
        array( 'label' => 'View all services', 'link' => 'services', 'view_all' => true ),
    ),

    'process_heading' => 'How a due diligence engagement runs.',
    'process_steps'   => array(
        array( 'title' => 'Deal scoping',                              'description' => 'Kick-off with your deal team to align on thesis, timeline, key risks and reporting format.' ),
        array( 'title' => 'Information request & data room review',    'description' => 'Targeted IR list, virtual data room review and management interviews.' ),
        array( 'title' => 'Analysis',                                  'description' => 'Quality of earnings, working capital, debt-like items, tax exposure, operational red flags.' ),
        array( 'title' => 'Final report & SPA support',                'description' => 'Decision-grade report, plus support translating findings into SPA negotiation points.' ),
    ),
    'faq_heading' => 'Common questions about due diligence.',
    'faq_items'   => array(
        array( 'question' => 'How long does a due diligence engagement take?', 'answer' => 'Red-flag reviews run 1–2 weeks. Full financial & tax DD typically runs 3–6 weeks, depending on data room quality and target complexity.' ),
        array( 'question' => 'Can you work alongside our legal counsel?', 'answer' => 'Yes — and we recommend it. Joint kick-offs and weekly checkpoints with legal counsel produce sharper diligence and a tighter SPA.' ),
        array( 'question' => 'Do you do sell-side (vendor) due diligence?', 'answer' => 'Yes. A well-run vendor DD process accelerates buyer diligence, reduces price chips and protects value for sellers.' ),
        array( 'question' => 'Is the report admissible if the deal goes to dispute later?', 'answer' => 'Our reports are produced under standard professional liability terms and are routinely relied on in post-closing arbitration and adjustment disputes.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
