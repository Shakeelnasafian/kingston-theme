<?php
/**
 * Template Name: AML/CFT Compliance
 */
get_header();

$kingston_detail_defaults = array(
    'breadcrumb'   => 'AML/CFT Compliance',
    'page_eyebrow' => 'Compliance',
    'page_heading' => 'AML/CFT — registered, documented, defensible.',
    'page_intro'   => 'UAE Anti-Money Laundering and Counter-Terrorism Financing compliance for DNFBPs and regulated financial businesses — from goAML registration to independent AML audits.',
    'banner_image' => kingston_asset( 'img/services/aml-compliance.svg' ),
    'banner_alt'   => 'AML/CFT Compliance — Kingston',

    'overview_heading' => 'AML/CFT Compliance in the UAE — done right.',
    'overview_body'    => "UAE AML/CFT enforcement has tightened dramatically. DNFBPs (real estate brokers, dealers in precious metals, auditors, lawyers, corporate service providers) and financial businesses are now expected to maintain a fully documented AML programme — risk assessment, policies, customer due diligence, suspicious-transaction reporting via goAML, training, and an annual independent review.\n\nKingston designs, implements and audits AML/CFT programmes for UAE businesses. We turn a regulatory headache into a documented, defensible compliance position — and an annual report for your senior management.",

    'includes_items' => array(
        array( 'title' => 'Enterprise-wide risk assessment', 'description' => 'A documented risk assessment of your business, customers, products, channels and geographies — the foundation of every AML programme.' ),
        array( 'title' => 'Policies, procedures & controls', 'description' => 'Tailored AML/CFT manual, customer onboarding, screening, EDD and ongoing monitoring procedures.' ),
        array( 'title' => 'goAML registration & reporting',  'description' => "Registration on the UAE FIU's goAML portal and ongoing support for STR/SAR filing." ),
        array( 'title' => 'Training programmes',             'description' => 'Annual board, senior-management and front-line training — recorded, signed-off and audit-ready.' ),
        array( 'title' => 'Sanctions & PEP screening',       'description' => 'Vendor selection and configuration of screening tools — UN, OFAC, UK, EU, UAE local terrorist lists, PEPs.' ),
        array( 'title' => 'Independent AML audit',           'description' => 'Annual independent audit of your AML programme — design and operating effectiveness, with management report.' ),
    ),
    'why_items' => array(
        array( 'title' => 'UAE-specific, not generic', 'description' => 'We work to the UAE Federal AML/CFT framework — Cabinet Decision 10/2019, Federal Decree-Law 20/2018, and the latest EOCN guidance.' ),
        array( 'title' => 'Audit-grade documentation', 'description' => 'Every step documented to a standard that survives a Ministry of Economy or Central Bank inspection.' ),
        array( 'title' => 'Practical, not academic',   'description' => 'Programmes calibrated to the real risk in your business — not 200-page templates that no one will follow.' ),
        array( 'title' => 'Independence',              'description' => 'We audit programmes we have not designed — and design programmes we will not later audit. No conflicts.' ),
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

    'process_heading' => 'How an AML/CFT compliance engagement runs.',
    'process_steps'   => array(
        array( 'title' => 'Diagnostic',         'description' => 'Where are you today? Risk assessment, gaps, immediate exposures, regulatory deadlines.' ),
        array( 'title' => 'Programme build',    'description' => 'Risk assessment, policies, procedures, screening setup, goAML registration.' ),
        array( 'title' => 'Operate & train',    'description' => 'Compliance officer support, board and staff training, STR support.' ),
        array( 'title' => 'Independent review', 'description' => 'Annual independent AML audit with senior-management report — keeping you ahead of inspections.' ),
    ),
    'faq_heading' => 'Common questions about AML/CFT compliance.',
    'faq_items'   => array(
        array( 'question' => 'Does my business need an AML/CFT programme?', 'answer' => 'If you are a DNFBP (real estate broker, dealer in precious metals/stones, auditor, lawyer, corporate service provider) or a financial business in the UAE, yes. Kingston confirms your obligation in the diagnostic call.' ),
        array( 'question' => 'What is goAML?', 'answer' => "goAML is the UAE Financial Intelligence Unit's secure portal for filing Suspicious Transaction Reports (STRs) and Suspicious Activity Reports (SARs). DNFBPs and financial businesses are required to register." ),
        array( 'question' => 'Is the annual independent AML audit mandatory?', 'answer' => 'Most UAE supervisory authorities expect or require an annual independent review of the AML/CFT programme. Even where not strictly required, it is a strong defence in any inspection.' ),
        array( 'question' => 'Can you act as our outsourced compliance officer?', 'answer' => 'We provide compliance officer support and review services. The named MLRO must be an employee of your business — but we make sure they have the templates, training and senior cover to do the role properly.' ),
    ),
);

get_template_part( 'template-parts/detail-page' );
get_footer();
