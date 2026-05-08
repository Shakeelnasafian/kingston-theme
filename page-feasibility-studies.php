<?php
/**
 * Template Name: Feasibility Studies
 */
get_header();

$kingston_detail_defaults = array(
    'breadcrumb'   => 'Feasibility Studies',
    'page_eyebrow' => 'Advisory',
    'page_heading' => 'Decide with numbers, not hope.',
    'page_intro'   => 'Independent feasibility studies, financial models and viability analysis — for new ventures, capex decisions, expansion plans and bank financing applications. Built before you commit capital, not after.',
    'banner_image' => kingston_asset( 'img/services/feasibility.svg' ),
    'banner_alt'   => 'Feasibility Studies — Kingston',

    'overview_heading' => 'Feasibility Studies in the UAE — done right.',
    'overview_body'    => "Most failed businesses had a feasibility study. Many of them just had the wrong one — built backwards from a target answer, with optimism baked into every assumption. A real feasibility study is the opposite: it stress-tests the idea, prices in the unknowns, and tells the founder or board what they need to hear, not what they want to hear.\n\nKingston builds feasibility studies and financial models for UAE founders, family offices and corporates — for new ventures, capex decisions, market entry, and bank financing applications. Independent. Numbers-led. Bankable.",

    'includes_items' => array(
        array( 'title' => 'Market sizing & demand analysis', 'description' => 'Top-down and bottom-up market sizing, competitor mapping and demand-driver analysis — for the UAE and the relevant catchment.' ),
        array( 'title' => 'Financial modelling',             'description' => '5-year three-statement financial models — P&L, balance sheet, cash flow — with scenario and sensitivity analysis.' ),
        array( 'title' => 'Capex & opex breakdown',          'description' => 'Bottom-up capex and opex build, with quoted vendor data where possible — not generic per-unit assumptions.' ),
        array( 'title' => 'Funding & capital structure',     'description' => 'Equity / debt mix analysis, debt-service coverage, and bank-friendly funding plans for financing applications.' ),
        array( 'title' => 'Sensitivity & scenario analysis', 'description' => 'Base, downside and upside scenarios — with the assumptions that move the answer surfaced explicitly.' ),
        array( 'title' => 'Investor- and bank-ready report', 'description' => 'A written feasibility report designed to stand up to investor due diligence and bank credit committees.' ),
    ),
    'why_items' => array(
        array( 'title' => 'Independent — no agenda',     'description' => 'We are not selling the deal. Our reports are written for decision-makers, not promoters.' ),
        array( 'title' => 'Bank-credible',               'description' => 'UAE banks recognise Kingston feasibility studies as credible evidence in financing applications.' ),
        array( 'title' => 'UAE market-aware',            'description' => 'Free Zones, customs, VAT, corporate tax, employment — we model UAE specifics correctly, not as a US/Europe template.' ),
        array( 'title' => 'Joined-up with audit and tax','description' => 'Models are tax-aware and accounting-aware — your day-one books pick up exactly where the model left off.' ),
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

    'process_heading' => 'How a feasibility studies engagement runs.',
    'process_steps'   => array(
        array( 'title' => 'Brief & scope',            'description' => 'Workshop with you to define the question — "is this idea viable?", "at what scale?", "with what funding?".' ),
        array( 'title' => 'Data & research',          'description' => 'Market data, competitor benchmarks, vendor quotes — built into a transparent assumption book.' ),
        array( 'title' => 'Modelling & analysis',     'description' => 'Three-statement model, scenarios, sensitivities, and break-even analysis.' ),
        array( 'title' => 'Report & decision support','description' => 'Written feasibility report, model handover, and decision-support meeting with you and your investors / bankers.' ),
    ),
    'faq_heading' => 'Common questions about feasibility studies.',
    'faq_items'   => array(
        array( 'question' => 'Will banks accept your feasibility study for financing?', 'answer' => 'Yes — UAE banks recognise Kingston-prepared feasibility studies in their credit-committee process. We design every report to be bankable.' ),
        array( 'question' => 'How long does a feasibility study take?', 'answer' => 'Typical timeline is 4–8 weeks depending on the depth of market research and access to vendor data. Lean "red-flag" feasibility reviews can be turned in 2 weeks.' ),
        array( 'question' => 'Will you tell me if the idea does not work?', 'answer' => 'Yes. Our reports are written to be honest with the founder. A polite no costs less than a bad yes.' ),
        array( 'question' => 'Do you also advise on raising the capital?', 'answer' => 'Kingston is not a capital-raising firm — we are an audit and advisory firm. But our reports are designed to be used in fundraising, and we collaborate with your chosen advisors.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
